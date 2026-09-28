<?php

require_once __DIR__ . '/includes/header.php';

?>
<?php include"admin_access/db_config.php" ?>


<style>
/* =========================================================
   SHIVAM UNIFORM - PREMIUM COMPACT PRODUCT CATALOGUE
========================================================= */

.su-catalogue {
    --navy: #011641;
    --green: #06712E;
    --green-hover: #08863a;
    --text: #172033;
    --muted: #6f7781;
    --border: #e4ebe6;
    --soft: #f5f8f6;

    position: relative;
    width: 100%;
    padding: 65px 24px 80px;
    overflow: hidden;

    background:
        radial-gradient(circle at 0% 0%,
            rgba(6, 113, 46, .045),
            transparent 22%),
        #ffffff;

    font-family: inherit;
}

.su-catalogue-container {
    position: relative;
    z-index: 2;
    width: min(1240px, 100%);
    margin: 0 auto;
}

.su-catalogue-heading {
    max-width: 700px;
    margin: 0 auto 36px;
    text-align: center;
}

.su-catalogue-label {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    margin-bottom: 11px;
    color: var(--green);
    font-size: 10px;
    line-height: 1;
    font-weight: 800;
    letter-spacing: 1.7px;
    text-transform: uppercase;
}

.su-catalogue-label::before,
.su-catalogue-label::after {
    content: "";
    width: 23px;
    height: 1px;
    background: rgba(6, 113, 46, .40);
}

.su-catalogue-heading h2 {
    margin: 0;
    color: var(--navy);
    font-size: clamp(30px, 4vw, 42px);
    line-height: 1.12;
    font-weight: 800;
    letter-spacing: -1.3px;
}

.su-catalogue-heading h2 span {
    color: var(--green);
}

.su-catalogue-heading p {
    max-width: 610px;
    margin: 12px auto 0;
    color: var(--muted);
    font-size: 13.5px;
    line-height: 1.65;
}

.su-product-grid {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 20px;
    align-items: stretch;
}

.su-product-card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    height: 100%;
    padding: 8px;
    overflow: hidden;
    background: #ffffff;
    border: 1px solid var(--border);
    border-radius: 16px;
    box-shadow: 0 5px 18px rgba(1, 22, 65, .055);
    transition: transform .28s ease, box-shadow .28s ease, border-color .28s ease;
}

.su-product-card:hover {
    transform: translateY(-5px);
    border-color: rgba(6, 113, 46, .25);
    box-shadow: 0 15px 34px rgba(1, 22, 65, .10);
}

.su-product-image {
    position: relative;
    display: block;
    width: 100%;
    height: 245px;
    flex-shrink: 0;
    overflow: hidden;
    border-radius: 12px;
    background: linear-gradient(145deg, #f8faf9 0%, #f1f5f2 100%);
    text-decoration: none !important;
}

.su-product-image img {
    display: block;
    width: 100% !important;
    height: 100% !important;
    margin: 0 !important;
    padding: 11px !important;
    object-fit: contain !important;
    object-position: center !important;
    border-radius: 12px !important;
    transition: transform .35s ease;
}

.su-product-card:hover .su-product-image img {
    transform: scale(1.035);
}

.su-product-category {
    position: absolute;
    z-index: 5;
    top: 10px;
    left: 10px;
    max-width: calc(100% - 20px);
    padding: 6px 9px;
    border-radius: 5px;
    background: rgba(1, 22, 65, .93);
    color: #ffffff;
    font-size: 8px;
    line-height: 1;
    font-weight: 750;
    letter-spacing: .65px;
    text-transform: uppercase;
    box-shadow: 0 4px 12px rgba(1, 22, 65, .10);
}

.su-product-content {
    display: flex;
    flex-direction: column;
    flex: 1;
    padding: 14px 8px 8px;
}

.su-product-brand {
    margin: 0 0 6px;
    color: var(--green);
    font-size: 8.5px;
    line-height: 1;
    font-weight: 800;
    letter-spacing: 1.15px;
    text-transform: uppercase;
}

.su-product-title {
    margin: 0;
    color: var(--navy);
    font-size: 15px;
    line-height: 1.38;
    font-weight: 750;
    letter-spacing: -.15px;
}

.su-product-title a {
    color: inherit !important;
    text-decoration: none !important;
    transition: color .22s ease;
}

.su-product-card:hover .su-product-title a {
    color: var(--green) !important;
}

.su-product-bottom {
    margin-top: auto;
    padding-top: 12px;
}

.su-product-divider {
    width: 100%;
    height: 1px;
    margin-bottom: 11px;
    background: #edf1ee;
}

.su-product-button {
    /* width: 100%; */
    min-height: 41px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 8px;
    padding: 0 7px 0 13px;
    border: 1px solid rgba(6, 113, 46, .15);
    border-radius: 8px;
    background: #f2f8f4;
    color: var(--green) !important;
    font-size: 11px;
    line-height: 1;
    font-weight: 800;
    text-decoration: none !important;
    transition: background .25s ease, border-color .25s ease, color .25s ease;
}

.su-product-button:hover {
    background: var(--green);
    border-color: var(--green);
    color: #ffffff !important;
}

.su-product-arrow {
    width: 25px;
    height: 25px;
    flex: 0 0 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #ffffff;
    color: var(--green);
    font-size: 13px;
    line-height: 1;
    box-shadow: 0 2px 8px rgba(1, 22, 65, .07);
    transition: transform .25s ease;
}

.su-product-button:hover .su-product-arrow {
    transform: translateX(2px);
}

.su-products-empty {
    grid-column: 1/-1;
    padding: 40px 20px;
    text-align: center;
    color: var(--muted);
    background: #f7f9f8;
    border: 1px solid var(--border);
    border-radius: 14px;
}

@media(max-width:1050px) {
    .su-product-grid { grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; }
    .su-product-image { height: 235px; }
}

@media(max-width:767px) {
    .su-catalogue { padding: 50px 15px 60px; }
    .su-catalogue-heading { margin-bottom: 28px; }
    .su-catalogue-heading h2 { font-size: 31px; }
    .su-catalogue-heading p { font-size: 13px; }
    .su-product-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; }
    .su-product-card { padding: 6px; border-radius: 13px; }
    .su-product-image { height: 185px; border-radius: 9px; }
    .su-product-image img { padding: 7px !important; border-radius: 9px !important; }
    .su-product-category { top: 7px; left: 7px; padding: 5px 7px; font-size: 7px; }
    .su-product-content { padding: 11px 5px 5px; }
    .su-product-brand { margin-bottom: 5px; font-size: 7px; }
    .su-product-title { font-size: 12px; line-height: 1.35; }
    .su-product-bottom { padding-top: 9px; }
    .su-product-divider { margin-bottom: 8px; }
    .su-product-button { min-height: 37px; padding: 0 6px 0 9px; font-size: 9px; }
    .su-product-arrow { width: 22px; height: 22px; flex-basis: 22px; font-size: 11px; }
}

@media(max-width:480px) {
    .su-product-grid { grid-template-columns: 1fr; gap: 16px; }
    .su-product-card { max-width: 380px; width: 100%; margin: 0 auto; padding: 7px; border-radius: 15px; }
    .su-product-image { height: 285px; border-radius: 11px; }
    .su-product-image img { padding: 10px !important; border-radius: 11px !important; }
    .su-product-content { padding: 13px 7px 7px; }
    .su-product-brand { font-size: 8px; }
    .su-product-title { font-size: 14px; }
    .su-product-bottom { padding-top: 10px; }
    .su-product-button { min-height: 40px; padding: 0 7px 0 12px; font-size: 10px; }
}
</style>


<!-- =====================================================
     PRODUCT COLLECTION SECTION
====================================================== -->
<section id="shivam-products" class="su-catalogue">
    <div class="su-catalogue-container">

        <div class="su-catalogue-heading">
            <div class="su-catalogue-label">Our Collection</div>
            <h2>Explore Our <span>Uniform Range</span></h2>
            <p>
                Discover professional uniforms for corporate, hospitality, security,
                healthcare and institutional requirements. Select a product to explore
                available designs, colours and sizes.
            </p>
        </div>

        <!-- PRODUCTS RENDERED VIA JS -->
        <div class="su-product-grid" id="su-product-grid">
            <!-- JS yahan cards inject karega -->
        </div>

    </div>
</section>


<!-- =====================================================
     1) PRODUCT DATA - AB DATABASE SE AA RAHA HAI
     Pehle ye hardcoded JS array tha, ab admin panel ke
     products.php functions se real data khींch ke JSON
     me convert kar diya gaya hai. Neeche wali rendering
     JS (createProductCard, renderProducts) bilkul waisi
     hi hai jaisi pehle thi - design me koi change nahi.
====================================================== -->
<?php

include_once __DIR__ . '/admin_access/functions/products.php';
include_once __DIR__ . '/admin_access/functions/category_info.php';

// Saare products fetch karo (functions already root_categories,
// brands aur products_images sab join kar ke deta hai)
$all_db_products = get_product_info($mydb);

$catalogue_products = [];

foreach ($all_db_products as $p) {

    // Sirf Active products hi public catalogue me dikhne chahiye
    if (($p['product_status'] ?? '') !== 'Active') {
        continue;
    }

    // Main image ka sirf filename nikalo (jaise "main.jpg")
    // kyunki neeche wala JS khud "assets/products/product_<id>/" jod dega
    $main_image_filename = !empty($p['product_image']) ? basename($p['product_image']) : '';

    // Gallery images (2 se 8 tak) ke filenames
    $gallery_images = [];
    for ($i = 2; $i <= 8; $i++) {
        $gallery_images[$i] = !empty($p['product_img_' . $i]) ? basename($p['product_img_' . $i]) : '';
    }

    $catalogue_products[] = [
        'id'           => (int) $p['product_id'],
        'name'         => $p['product_name'],
        'slug'         => $p['product_slug'],
        'product_code' => $p['product_sku'] ?? '',
        'category'     => $p['root_name'] ?: 'Uniform Collection',
        'fabric'       => '',
        'design'       => '',
        'colors'       => [],
        'sizes'        => [],
        'image1'       => $main_image_filename,
        'image2'       => $gallery_images[2],
        'image3'       => $gallery_images[3],
        'image4'       => $gallery_images[4],
        'image5'       => $gallery_images[5],
        'image6'       => $gallery_images[6],
        'image7'       => $gallery_images[7],
        'image8'       => $gallery_images[8],
        'description'  => $p['product_description'] ?? '',
        'availability' => 'In Stock',
        'order_type'   => 'Bulk Order Available',
    ];
}

?>
<script>
const products = <?php echo json_encode($catalogue_products, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
</script>


<!-- =====================================================
     2) RENDERING LOGIC
     Catalogue card me HAMESHA image1 use hoga.
     (Iss script me koi change nahi kiya gaya - sirf
     IMAGE_FOLDER_BASE ko real upload folder se match
     kiya hai: assets/products/product_<id>/)
====================================================== -->
<script>
const IMAGE_FOLDER_BASE = "assets/products/"; // product_<id> folder ka base path

function getImagePath(product) {
    // pattern: assets/products/product_<id>/<image1>
    return IMAGE_FOLDER_BASE + "product_" + product.id + "/" + product.image1;
}

function createProductCard(product) {

    const productUrl = `product_details.php?slug=${encodeURIComponent(product.slug)}`;
    // ↑ agar product.php me id se link chahiye to: `product.php?id=${product.id}`

    const imageSrc = getImagePath(product);
    const categoryName = product.category || "Uniform Collection";

    return `
        <article class="su-product-card">

            <a class="su-product-image" href="${productUrl}" aria-label="${product.name}">
                <span class="su-product-category">${categoryName}</span>
                <img src="${imageSrc}" alt="${product.name}" loading="lazy"
                     onerror="this.onerror=null;this.src='assets/products_images/placeholder.png';">
            </a>

            <div class="su-product-content">

                <div class="su-product-brand">Shivam Uniform</div>

                <h3 class="su-product-title">
                    <a href="${productUrl}">${product.name}</a>
                </h3>

                <div class="su-product-bottom">
                    <div class="su-product-divider"></div>

                    <a class="su-product-button" href="${productUrl}">
                        <span>View Product</span>
                        <span class="su-product-arrow">&rarr;</span>
                    </a>
                </div>

            </div>

        </article>
    `;
}

function renderProducts() {
    const grid = document.getElementById("su-product-grid");

    if (!products || products.length === 0) {
        grid.innerHTML = `
            <div class="su-products-empty">
                No products are currently available.
            </div>
        `;
        return;
    }

    grid.innerHTML = products.map(createProductCard).join("");
}

document.addEventListener("DOMContentLoaded", renderProducts);
</script>


<?php

require_once __DIR__ . '/includes/footer.php';

?>