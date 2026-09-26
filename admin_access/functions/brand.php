<?php

// =========================================================
// GET ALL BRAND DATA (with Root Category name joined)
// =========================================================
function get_brand_info($mydb)
{
    $query = "SELECT b.*, c.root_name
              FROM brands b
              LEFT JOIN root_categories c ON b.root_id = c.root_id
              ORDER BY b.brand_id DESC";

    $result = mysqli_query($mydb, $query);

    if (!$result) {
        // TEMPORARY DEBUG - iske baad hata dena
        echo "<pre style='background:#300;color:#fff;padding:10px;'>SQL ERROR: " . mysqli_error($mydb) . "</pre>";
        return [];
    }

    $brand_info = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $brand_info[] = $row;
    }

    // TEMPORARY DEBUG - kitni rows aayi ye dekhne ke liye
    echo "<pre style='background:#030;color:#fff;padding:10px;'>Rows found: " . count($brand_info) . "</pre>";

    return $brand_info;
}


// =========================================================
// ADD NEW BRAND
// =========================================================
function add_brand_info(
    $mydb,
    $root_id,
    $brand_name,
    $brand_slug,
    $brand_logo,
    $brand_description,
    $meta_title,
    $meta_description,
    $meta_keywords,
    $brand_status
) {

    $query = "INSERT INTO brands (
        root_id,
        brand_name,
        brand_slug,
        brand_logo,
        brand_description,
        meta_title,
        meta_description,
        meta_keywords,
        brand_status,
        created_at
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($mydb, $query);

    if (!$stmt) {
        return false;
    }

    $created_at = time();

    mysqli_stmt_bind_param(
        $stmt,
        "isssssssss",
        $root_id,
        $brand_name,
        $brand_slug,
        $brand_logo,
        $brand_description,
        $meta_title,
        $meta_description,
        $meta_keywords,
        $brand_status,
        $created_at
    );

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}


// =========================================================
// HANDLE ADD BRAND (reads $_POST khud, direct SQL)
// Main page isko sirf ek line me call karega
// =========================================================
function handle_brand_add($mydb)
{
    $response = [
        'success_msg' => '',
        'error_msg'   => '',
    ];

    if (!isset($_POST['add_brand'])) {
        return $response;
    }

    $root_id           = (int) ($_POST['root_id'] ?? 0);
    $brand_name        = trim($_POST['brand_name'] ?? '');
    $brand_slug        = trim($_POST['brand_slug'] ?? '');
    $brand_description = trim($_POST['brand_description'] ?? '');
    $meta_title        = trim($_POST['meta_title'] ?? '');
    $meta_description  = trim($_POST['meta_description'] ?? '');
    $meta_keywords     = trim($_POST['meta_keywords'] ?? '');
    $brand_status      = trim($_POST['brand_status'] ?? 'Active');
    $brand_logo        = '';

    if ($root_id <= 0 || $brand_name === '' || $brand_slug === '') {
        $response['error_msg'] = "Root Category, Brand Name aur Slug zaroori hain.";
        return $response;
    }

    // ---------------------------------------------------------
    // IMAGE UPLOAD - assets/brands/ folder me save hoga
    // ---------------------------------------------------------
    if (isset($_FILES['brand_logo']) && $_FILES['brand_logo']['error'] === UPLOAD_ERR_OK) {

        $upload_dir = 'assets/brands/';

        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }

        $allowed_ext = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
        $file_ext    = strtolower(pathinfo($_FILES['brand_logo']['name'], PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowed_ext)) {
            $response['error_msg'] = "Sirf jpg, jpeg, png, webp, gif images allowed hain.";
            return $response;
        }

        // Unique filename taaki purani file overwrite na ho
        $safe_name = $brand_slug . '-' . time() . '.' . $file_ext;
        $target    = $upload_dir . $safe_name;

        if (move_uploaded_file($_FILES['brand_logo']['tmp_name'], $target)) {
            $brand_logo = $target;
        } else {
            $response['error_msg'] = "Image upload fail ho gaya.";
            return $response;
        }
    }

    $added = add_brand_info(
        $mydb,
        $root_id,
        $brand_name,
        $brand_slug,
        $brand_logo,
        $brand_description,
        $meta_title,
        $meta_description,
        $meta_keywords,
        $brand_status
    );

    if ($added) {
        $response['success_msg'] = "Brand added successfully!";
    } else {
        $response['error_msg'] = "Brand add fail ho gaya, dubara try karo.";
    }

    return $response;
}


// =========================================================
// HANDLE UPDATE BRAND (reads $_POST khud, direct SQL)
// Agar nayi image select ki hai to purani replace hogi,
// warna purani wahi rahegi (hidden field se aati hai)
// =========================================================
function handle_brand_update($mydb)
{
    $response = [
        'success_msg' => '',
        'error_msg'   => '',
    ];

    if (!isset($_POST['update_brand'])) {
        return $response;
    }

    $brand_id           = (int) ($_POST['brand_id'] ?? 0);
    $root_id            = (int) ($_POST['root_id'] ?? 0);
    $brand_name         = trim($_POST['brand_name'] ?? '');
    $brand_slug         = trim($_POST['brand_slug'] ?? '');
    $brand_description  = trim($_POST['brand_description'] ?? '');
    $meta_title         = trim($_POST['meta_title'] ?? '');
    $meta_description   = trim($_POST['meta_description'] ?? '');
    $meta_keywords      = trim($_POST['meta_keywords'] ?? '');
    $brand_status       = trim($_POST['brand_status'] ?? 'Active');
    $brand_logo         = trim($_POST['existing_logo'] ?? ''); // purani image by default

    if ($brand_id <= 0 || $root_id <= 0 || $brand_name === '' || $brand_slug === '') {
        $response['error_msg'] = "Root Category, Brand Name aur Slug zaroori hain.";
        return $response;
    }

    // ---------------------------------------------------------
    // Agar nayi image select ki hai to usse upload karo
    // ---------------------------------------------------------
    if (isset($_FILES['brand_logo']) && $_FILES['brand_logo']['error'] === UPLOAD_ERR_OK) {

        $upload_dir = 'assets/brands/';

        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }

        $allowed_ext = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
        $file_ext    = strtolower(pathinfo($_FILES['brand_logo']['name'], PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowed_ext)) {
            $response['error_msg'] = "Sirf jpg, jpeg, png, webp, gif images allowed hain.";
            return $response;
        }

        $safe_name = $brand_slug . '-' . time() . '.' . $file_ext;
        $target    = $upload_dir . $safe_name;

        if (move_uploaded_file($_FILES['brand_logo']['tmp_name'], $target)) {
            $brand_logo = $target; // purani image ki jagah nayi
        } else {
            $response['error_msg'] = "Image upload fail ho gaya.";
            return $response;
        }
    }

    $query = "UPDATE brands SET
                root_id           = ?,
                brand_name        = ?,
                brand_slug        = ?,
                brand_logo        = ?,
                brand_description = ?,
                meta_title        = ?,
                meta_description  = ?,
                meta_keywords     = ?,
                brand_status      = ?,
                updated_at        = ?
              WHERE brand_id = ?";

    $stmt = mysqli_prepare($mydb, $query);

    if (!$stmt) {
        $response['error_msg'] = "Query prepare fail ho gayi.";
        return $response;
    }

    $updated_at = time();

    mysqli_stmt_bind_param(
        $stmt,
        "isssssssssi",
        $root_id,
        $brand_name,
        $brand_slug,
        $brand_logo,
        $brand_description,
        $meta_title,
        $meta_description,
        $meta_keywords,
        $brand_status,
        $updated_at,
        $brand_id
    );

    if (mysqli_stmt_execute($stmt)) {
        $response['success_msg'] = "Brand updated successfully!";
    } else {
        $response['error_msg'] = "Update fail ho gaya, dubara try karo.";
    }

    mysqli_stmt_close($stmt);

    return $response;
}

?>