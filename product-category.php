<?php

require_once __DIR__ . '/includes/header.php';

include_once __DIR__ . '/admin_access/db_config.php';

// =========================================================
// 1) URL SE CATEGORY SLUG + BRAND SLUG
// =========================================================
$category_slug = trim($_GET['category'] ?? '');
$brand_slug    = trim($_GET['brand'] ?? '');

$category = null;
$brands   = [];
$products = [];
$active_brand = null;

// ---------------------------------------------------------
// 2) CATEGORY FETCH (slug se)
// ---------------------------------------------------------
if ($category_slug !== '') {
    $stmt = mysqli_prepare($mydb, "SELECT * FROM root_categories WHERE root_slug = ? AND root_status = 'Active' LIMIT 1");
    mysqli_stmt_bind_param($stmt, "s", $category_slug);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    $category = $res ? mysqli_fetch_assoc($res) : null;
    mysqli_stmt_close($stmt);
}

if ($category) {

    $root_id = (int) $category['root_id'];

    // -----------------------------------------------------
    // 3) IS CATEGORY KE ACTIVE BRANDS
    // -----------------------------------------------------
    $stmt = mysqli_prepare($mydb, "SELECT brand_id, brand_name, brand_slug FROM brands WHERE root_id = ? AND brand_status = 'Active' ORDER BY brand_name ASC");
    mysqli_stmt_bind_param($stmt, "i", $root_id);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    while ($res && $row = mysqli_fetch_assoc($res)) {
        $brands[] = $row;
        if ($brand_slug !== '' && $row['brand_slug'] === $brand_slug) {
            $active_brand = $row;
        }
    }
    mysqli_stmt_close($stmt);

    // -----------------------------------------------------
    // 4) PRODUCTS (brand select ho to sirf us brand ke)
    // -----------------------------------------------------
    $sql = "SELECT p.product_id, p.product_name, p.product_slug, p.product_image, b.brand_name
            FROM products p
            LEFT JOIN brands b ON p.brand_id = b.brand_id
            WHERE p.root_id = ? AND p.product_status = 'Active'";

    if ($active_brand) {
        $sql .= " AND p.brand_id = ?";
    }

    $sql .= " ORDER BY p.product_id DESC";

    $stmt = mysqli_prepare($mydb, $sql);

    if ($active_brand) {
        $bid = (int) $active_brand['brand_id'];
        mysqli_stmt_bind_param($stmt, "ii", $root_id, $bid);
    } else {
        mysqli_stmt_bind_param($stmt, "i", $root_id);
    }

    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    while ($res && $row = mysqli_fetch_assoc($res)) {
        $products[] = $row;
    }
    mysqli_stmt_close($stmt);
}

$base_url = 'product-category.php?category=' . urlencode($category_slug);

?>

<style>
.su-cat {
    --navy: #011641; --green: #06712E; --muted: #6f7781; --border: #e4ebe6;
    width: 100%; padding: 60px 24px 80px; background: #f5f6f4; font-family: inherit;
}
.su-cat-container { width: min(1240px, 100%); margin: 0 auto; }

.su-cat-heading { text-align: center; margin-bottom: 26px; }
.su-cat-heading h1 { margin: 0; color: var(--navy); font-size: clamp(28px, 4vw, 40px); font-weight: 800; letter-spacing: -1px; }
.su-cat-heading h1 span { color: var(--green); }
.su-cat-heading p { max-width: 640px; margin: 10px auto 0; color: var(--muted); font-size: 13.5px; line-height: 1.65; }

/* ---------- BRAND BUTTONS ---------- */
.su-brand-tabs { display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; margin-bottom: 34px; }
.su-brand-tab {
    padding: 11px 20px; border-radius: 6px; background: var(--green); color: #fff !important;
    font-size: 12px; font-weight: 800; letter-spacing: .4px; text-transform: uppercase;
    text-decoration: none !important; border: 1px solid var(--green);
    transition: background .2s ease, color .2s ease;
}
.su-brand-tab:hover { background: #08863a; }
.su-brand-tab.is-active { background: var(--navy); border-color: var(--navy); }

/* ---------- PRODUCT GRID + CARD ---------- */
.su-product-grid { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 20px; align-items: stretch; }
.su-product-card {
    display: flex; flex-direction: column; min-width: 0; height: 100%; padding: 8px; overflow: hidden;
    background: #fff; border: 1px solid var(--border); border-radius: 16px;
    box-shadow: 0 5px 18px rgba(1,22,65,.055); transition: transform .28s ease, box-shadow .28s ease, border-color .28s ease;
}
.su-product-card:hover { transform: translateY(-5px); border-color: rgba(6,113,46,.25); box-shadow: 0 15px 34px rgba(1,22,65,.10); }
.su-product-image {
    position: relative; display: block; width: 100%; height: 245px; flex-shrink: 0; overflow: hidden;
    border-radius: 12px; background: linear-gradient(145deg, #f8faf9, #f1f5f2); text-decoration: none !important;
}
.su-product-image img {
    display: block; width: 100% !important; height: 100% !important; margin: 0 !important; padding: 11px !important;
    object-fit: contain !important; transition: transform .35s ease;
}
.su-product-card:hover .su-product-image img { transform: scale(1.035); }
.su-product-category {
    position: absolute; z-index: 5; top: 10px; left: 10px; max-width: calc(100% - 20px); padding: 6px 9px;
    border-radius: 5px; background: rgba(1,22,65,.93); color: #fff; font-size: 8px; line-height: 1;
    font-weight: 750; letter-spacing: .65px; text-transform: uppercase;
}
.su-product-content { display: flex; flex-direction: column; flex: 1; padding: 14px 8px 8px; }
.su-product-brand { margin: 0 0 6px; color: var(--green); font-size: 8.5px; line-height: 1; font-weight: 800; letter-spacing: 1.15px; text-transform: uppercase; }
.su-product-title { margin: 0; color: var(--navy); font-size: 15px; line-height: 1.38; font-weight: 750; }
.su-product-title a { color: inherit !important; text-decoration: none !important; transition: color .22s ease; }
.su-product-card:hover .su-product-title a { color: var(--green) !important; }
.su-product-bottom { margin-top: auto; padding-top: 12px; }
.su-product-divider { height: 1px; margin-bottom: 11px; background: #edf1ee; }
.su-product-button {
    min-height: 41px; display: flex; align-items: center; justify-content: space-between; gap: 8px;
    padding: 0 7px 0 13px; border: 1px solid rgba(6,113,46,.15); border-radius: 8px; background: #f2f8f4;
    color: var(--green) !important; font-size: 11px; font-weight: 800; text-decoration: none !important;
    transition: background .25s ease, color .25s ease;
}
.su-product-button:hover { background: var(--green); color: #fff !important; }
.su-product-arrow {
    width: 25px; height: 25px; flex: 0 0 25px; display: flex; align-items: center; justify-content: center;
    border-radius: 50%; background: #fff; color: var(--green); font-size: 13px;
}
.su-products-empty {
    grid-column: 1/-1; padding: 40px 20px; text-align: center; color: var(--muted);
    background: #fff; border: 1px solid var(--border); border-radius: 14px;
}

@media(max-width:1050px) { .su-product-grid { grid-template-columns: repeat(3, minmax(0,1fr)); } }
@media(max-width:767px) {
    .su-cat { padding: 45px 15px 60px; }
    .su-brand-tabs { gap: 8px; }
    .su-brand-tab { padding: 9px 13px; font-size: 10.5px; }
    .su-product-grid { grid-template-columns: repeat(2, minmax(0,1fr)); gap: 12px; }
    .su-product-card { padding: 6px; border-radius: 13px; }
    .su-product-image { height: 185px; }
    .su-product-content { padding: 11px 5px 5px; }
    .su-product-title { font-size: 12px; }
    .su-product-button { min-height: 37px; font-size: 9px; padding: 0 6px 0 9px; }
}
@media(max-width:480px) {
    .su-product-grid { grid-template-columns: 1fr; gap: 16px; }
    .su-product-image { height: 285px; }
    .su-product-title { font-size: 14px; }
}
</style>

<section class="su-cat">
    <div class="su-cat-container">

<?php if (!$category): ?>

        <div class="su-products-empty">Category not found.</div>

<?php else: ?>

        <div class="su-cat-heading">
            <h1><?php echo htmlspecialchars($category['root_name']); ?><?php if ($active_brand): ?> <span>&ndash; <?php echo htmlspecialchars($active_brand['brand_name']); ?></span><?php endif; ?></h1>
            <?php if (!empty($category['root_description'])): ?>
                <p><?php echo htmlspecialchars(strip_tags($category['root_description'])); ?></p>
            <?php endif; ?>
        </div>

        <!-- BRAND BUTTONS -->
        <?php if (!empty($brands)): ?>
        <div class="su-brand-tabs">
            <a class="su-brand-tab <?php echo !$active_brand ? 'is-active' : ''; ?>" href="<?php echo $base_url; ?>">All</a>
            <?php foreach ($brands as $b): ?>
                <a class="su-brand-tab <?php echo ($active_brand && $active_brand['brand_id'] == $b['brand_id']) ? 'is-active' : ''; ?>"
                   href="<?php echo $base_url . '&brand=' . urlencode($b['brand_slug']); ?>">
                    <?php echo htmlspecialchars($b['brand_name']); ?>
                </a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <!-- PRODUCTS -->
        <div class="su-product-grid">
        <?php if (empty($products)): ?>
            <div class="su-products-empty">No products are currently available.</div>
        <?php else: ?>
            <?php foreach ($products as $p):
                $url = 'product_details.php?slug=' . urlencode($p['product_slug']);
                $img = !empty($p['product_image'])
                    ? 'assets/products/product_' . (int) $p['product_id'] . '/' . basename($p['product_image'])
                    : 'assets/products_images/placeholder.png';
                $name = htmlspecialchars($p['product_name']);
            ?>
            <article class="su-product-card">
                <a class="su-product-image" href="<?php echo $url; ?>" aria-label="<?php echo $name; ?>">
                    <span class="su-product-category"><?php echo htmlspecialchars($category['root_name']); ?></span>
                    <img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo $name; ?>" loading="lazy"
                         onerror="this.onerror=null;this.src='assets/products_images/placeholder.png';">
                </a>
                <div class="su-product-content">
                    <div class="su-product-brand"><?php echo htmlspecialchars($p['brand_name'] ?: 'Shivam Uniform'); ?></div>
                    <h3 class="su-product-title"><a href="<?php echo $url; ?>"><?php echo $name; ?></a></h3>
                    <div class="su-product-bottom">
                        <div class="su-product-divider"></div>
                        <a class="su-product-button" href="<?php echo $url; ?>">
                            <span>View Product</span>
                            <span class="su-product-arrow">&rarr;</span>
                        </a>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        <?php endif; ?>
        </div>

<?php endif; ?>

    </div>
</section>

<?php

require_once __DIR__ . '/includes/footer.php';

?>