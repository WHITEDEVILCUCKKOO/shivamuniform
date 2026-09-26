<?php

// =========================================================
// GET ALL PRODUCT DATA
// (Root Category + Brand name + pehli image join karke)
// =========================================================
function get_product_info($mydb)
{
    $query = "SELECT
                p.*,
                c.root_name,
                b.brand_name,
                pi.product_img_1,
                pi.product_img_1_alt
              FROM products p
              LEFT JOIN root_categories c ON p.root_id = c.root_id
              LEFT JOIN brands b ON p.brand_id = b.brand_id
              LEFT JOIN products_images pi ON p.product_id = pi.product_id
              ORDER BY p.product_id DESC";

    $result = mysqli_query($mydb, $query);

    if (!$result) {
        return [];
    }

    $product_info = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $product_info[] = $row;
    }

    return $product_info;
}

?>