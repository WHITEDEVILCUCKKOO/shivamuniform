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

    // Fallback: database read failure should not crash the admin page.
    try {
        $result = mysqli_query($mydb, $query);
    } catch (mysqli_sql_exception $e) {
        error_log('get_brand_info DB error: ' . $e->getMessage());
        return [];
    }

    if (!$result) {
        return [];
    }

    $brand_info = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $brand_info[] = $row;
    }

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

    // Any database failure is returned to the caller instead of crashing PHP.
    try {
        $stmt = mysqli_prepare($mydb, $query);
        if (!$stmt) {
            error_log('add_brand_info prepare error: ' . mysqli_error($mydb));
            return 'DATABASE_ERROR';
        }

        $created_at = time();

        mysqli_stmt_bind_param(
            $stmt,
            "issssssssi",
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
    } catch (mysqli_sql_exception $e) {
        error_log('add_brand_info DB error: ' . $e->getMessage());
        if (isset($stmt) && $stmt instanceof mysqli_stmt) {
            mysqli_stmt_close($stmt);
        }
        return $e->getMessage();
    } catch (Throwable $e) {
        error_log('add_brand_info error: ' . $e->getMessage());
        if (isset($stmt) && $stmt instanceof mysqli_stmt) {
            mysqli_stmt_close($stmt);
        }
        return 'DATABASE_ERROR';
    }

    if (!$result) {
        $error = mysqli_stmt_error($stmt);
        mysqli_stmt_close($stmt);
        return $error !== '' ? $error : 'Unknown DB error (execute failed)';
    }

    mysqli_stmt_close($stmt);

    return true;
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

    // Duplicate slug check: existing brand slug ko dobara add na karein.
    try {
        $check_stmt = mysqli_prepare(
            $mydb,
            "SELECT brand_id FROM brands WHERE brand_slug = ? LIMIT 1"
        );
    } catch (Throwable $e) {
        error_log('handle_brand_add slug check prepare error: ' . $e->getMessage());
        $response['error_msg'] = "Brand validate nahi ho paya. Please try again.";
        return $response;
    }

    if (!$check_stmt) {
        $response['error_msg'] = "Brand validate nahi ho paya. Please try again.";
        return $response;
    }

    try {
        mysqli_stmt_bind_param($check_stmt, "s", $brand_slug);
        mysqli_stmt_execute($check_stmt);
        $check_result = mysqli_stmt_get_result($check_stmt);
        $slug_exists = $check_result && mysqli_num_rows($check_result) > 0;
    } catch (Throwable $e) {
        error_log('handle_brand_add slug validation error: ' . $e->getMessage());
        mysqli_stmt_close($check_stmt);
        $response['error_msg'] = "Brand validate nahi ho paya. Please try again.";
        return $response;
    }

    mysqli_stmt_close($check_stmt);

    if ($slug_exists) {
        $response['error_msg'] = 'Brand slug "' . htmlspecialchars($brand_slug, ENT_QUOTES, 'UTF-8') . '" pehle se maujood hai. Existing brand ko update karein ya alag slug use karein.';
        return $response;
    }

    // ---------------------------------------------------------
    // IMAGE UPLOAD - assets/brands/ folder me save hoga
    // ---------------------------------------------------------
    if (isset($_FILES['brand_logo']) && ($_FILES['brand_logo']['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_NO_FILE) {
        if (($_FILES['brand_logo']['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_OK) {
            $response['error_msg'] = "Image upload nahi ho paya. Please dobara try karein.";
            return $response; // upload error => database INSERT/UPDATE nahi chalega
        }

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

    if ($added === true) {
        $response['success_msg'] = "Brand added successfully!";
    } else {

        // Ab $added khud hi asli DB error string hai
        $db_error = (string) $added;

        if (stripos($db_error, 'Duplicate entry') !== false) {
            $response['error_msg'] = "Ye Brand Slug (\"" . htmlspecialchars($brand_slug) . "\") pehle se kisi aur brand me use ho raha hai. Alag slug daalo.";
        } else {
            error_log('Brand add database error: ' . $db_error);
            $response['error_msg'] = "Brand add nahi ho paya. Details server log mein save ki gayi hain. Please dobara try karein.";
        }
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

    // Same slug doosre brand ke paas hai ya nahi check karein.
    // Current brand ko exclude kiya gaya hai, taaki apna slug unchanged reh sake.
    try {
        $check_stmt = mysqli_prepare(
            $mydb,
            "SELECT brand_id FROM brands WHERE brand_slug = ? AND brand_id <> ? LIMIT 1"
        );
    } catch (Throwable $e) {
        error_log('handle_brand_update slug check prepare error: ' . $e->getMessage());
        $response['error_msg'] = "Brand validate nahi ho paya. Please try again.";
        return $response;
    }

    if (!$check_stmt) {
        $response['error_msg'] = "Brand validate nahi ho paya. Please try again.";
        return $response;
    }

    try {
        mysqli_stmt_bind_param($check_stmt, "si", $brand_slug, $brand_id);
        mysqli_stmt_execute($check_stmt);
        $check_result = mysqli_stmt_get_result($check_stmt);
        $slug_exists = $check_result && mysqli_num_rows($check_result) > 0;
    } catch (Throwable $e) {
        error_log('handle_brand_update slug validation error: ' . $e->getMessage());
        mysqli_stmt_close($check_stmt);
        $response['error_msg'] = "Brand validate nahi ho paya. Please try again.";
        return $response;
    }

    mysqli_stmt_close($check_stmt);

    if ($slug_exists) {
        $response['error_msg'] = 'Brand slug "' . htmlspecialchars($brand_slug, ENT_QUOTES, 'UTF-8') . '" kisi doosre brand ke paas hai. Alag slug use karein.';
        return $response;
    }

    // ---------------------------------------------------------
    // Agar nayi image select ki hai to usse upload karo
    // ---------------------------------------------------------
    if (isset($_FILES['brand_logo']) && ($_FILES['brand_logo']['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_NO_FILE) {
        if (($_FILES['brand_logo']['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_OK) {
            $response['error_msg'] = "Image upload nahi ho paya. Please dobara try karein.";
            return $response; // upload error => database INSERT/UPDATE nahi chalega
        }

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

    try {
        $stmt = mysqli_prepare($mydb, $query);
    } catch (Throwable $e) {
        error_log('handle_brand_update prepare error: ' . $e->getMessage());
        $response['error_msg'] = "Brand update nahi ho paya. Please try again.";
        return $response;
    }

    if (!$stmt) {
        $response['error_msg'] = "Brand update nahi ho paya. Please try again.";
        return $response;
    }

    $updated_at = time();

    try {
        mysqli_stmt_bind_param(
            $stmt,
            "issssssssii",
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

        $updated = mysqli_stmt_execute($stmt);
        if ($updated) {
            $response['success_msg'] = "Brand updated successfully!";
        } else {
            $db_error = mysqli_stmt_error($stmt);
            if (stripos($db_error, 'Duplicate entry') !== false) {
                $response['error_msg'] = 'Brand slug "' . htmlspecialchars($brand_slug, ENT_QUOTES, 'UTF-8') . '" pehle se kisi aur brand ke paas hai. Alag slug use karein.';
            } else {
                error_log('Brand update database error: ' . $db_error);
                $response['error_msg'] = "Brand update nahi ho paya. Please dobara try karein.";
            }
        }
    } catch (Throwable $e) {
        $db_error = $e->getMessage();
        if (stripos($db_error, 'Duplicate entry') !== false) {
            $response['error_msg'] = 'Brand slug "' . htmlspecialchars($brand_slug, ENT_QUOTES, 'UTF-8') . '" pehle se kisi aur brand ke paas hai. Alag slug use karein.';
        } else {
            error_log('Brand update database error: ' . $db_error);
            $response['error_msg'] = "Brand update nahi ho paya. Please dobara try karein.";
        }
    }

    mysqli_stmt_close($stmt);

    return $response;
}


// =========================================================
// DELETE BRAND (row + uski logo file bhi hatata hai)
// =========================================================
function delete_brand_info($mydb, $brand_id)
{
    // Validate before running any SQL.
    $brand_id = (int) $brand_id;
    if ($brand_id <= 0) {
        return false;
    }

    $logo_path = '';
    $check_stmt = null;
    $stmt = null;

    try {
        // First get the logo path. A DB error stops deletion safely.
        $check_stmt = mysqli_prepare(
            $mydb,
            "SELECT brand_logo FROM brands WHERE brand_id = ? LIMIT 1"
        );
        if (!$check_stmt) {
            error_log('delete_brand_info select prepare error: ' . mysqli_error($mydb));
            return false;
        }

        mysqli_stmt_bind_param($check_stmt, "i", $brand_id);
        mysqli_stmt_execute($check_stmt);
        $result = mysqli_stmt_get_result($check_stmt);
        $row = $result ? mysqli_fetch_assoc($result) : null;
        $logo_path = $row['brand_logo'] ?? '';
        mysqli_stmt_close($check_stmt);
        $check_stmt = null;

        // Only delete after the lookup succeeds.
        $stmt = mysqli_prepare($mydb, "DELETE FROM brands WHERE brand_id = ?");
        if (!$stmt) {
            error_log('delete_brand_info delete prepare error: ' . mysqli_error($mydb));
            return false;
        }

        mysqli_stmt_bind_param($stmt, "i", $brand_id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        $stmt = null;

        if (!$result) {
            return false;
        }

        // Remove logo only after successful DB deletion.
        if ($logo_path !== '' && is_file($logo_path)) {
            @unlink($logo_path);
        }

        return true;
    } catch (Throwable $e) {
        error_log('delete_brand_info error: ' . $e->getMessage());
        if ($check_stmt instanceof mysqli_stmt) {
            mysqli_stmt_close($check_stmt);
        }
        if ($stmt instanceof mysqli_stmt) {
            mysqli_stmt_close($stmt);
        }
        return false;
    }
}

// =========================================================
// HANDLE DELETE BRAND (reads $_POST khud)
// =========================================================
function handle_brand_delete($mydb)
{
    $response = [
        'success_msg' => '',
        'error_msg'   => '',
    ];

    if (!isset($_POST['delete_single_brand'])) {
        return $response;
    }

    $brand_id = (int) ($_POST['delete_brand_id'] ?? 0);

    if ($brand_id <= 0) {
        $response['error_msg'] = "Invalid brand.";
        return $response;
    }

    if (delete_brand_info($mydb, $brand_id)) {
        $response['success_msg'] = "Brand deleted successfully!";
    } else {
        $response['error_msg'] = "Brand delete fail ho gaya, dubara try karo.";
    }

    return $response;
}

?>