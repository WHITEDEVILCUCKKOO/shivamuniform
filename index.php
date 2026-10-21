<?php

/* ===== SEO: Home Page ===== */
$seo_title       = "Shivam Uniform - School, Corporate & Industrial Uniform Manufacturer";
$seo_description = "Buy premium school, corporate, hospital and industrial uniforms directly from the manufacturer. Bulk orders, custom sizes and best prices. Contact Shivam Uniform today.";
$seo_keywords    = "uniform manufacturer, school uniform, corporate uniform, industrial uniform, hospital uniform, bulk uniform order";

$seo_schema = [
    "@context"    => "https://schema.org",
    "@type"       => "WebSite",
    "name"        => "Shivam Uniform",
    "url"         => $base_url ?? "",
    "description" => $seo_description
];

require_once __DIR__ . '/includes/header.php';

?>


<main style="overflow: hidden;">
    
    <!-- section 1 -->
    <?php require_once __DIR__ . '/includes/home-sections/section_1.php'; ?>

    <!-- section 2 -->
    <?php require_once __DIR__ . '/includes/home-sections/section_2.php'; ?>

    <!-- section 3 -->
    <?php require_once __DIR__ . '/includes/home-sections/section_3.php'; ?>

    <!-- section 4 -->
    <?php require_once __DIR__ . '/includes/home-sections/section_4.php'; ?>

    <!-- section 5 -->
    <?php require_once __DIR__ . '/includes/home-sections/section_5.php'; ?>

    <!-- section 6 -->
    <?php require_once __DIR__ . '/includes/home-sections/section_6.php'; ?>

    <!-- section 7 -->
    <?php require_once __DIR__ . '/includes/home-sections/section_7.php'; ?>

    <!-- section 8 -->
    <?php require_once __DIR__ . '/includes/home-sections/section_8.php'; ?>

    <!-- section 9 -->
    <?php require_once __DIR__ . '/includes/home-sections/section_9.php'; ?>

</main>

<?php

require_once __DIR__ . '/includes/footer.php';

?>