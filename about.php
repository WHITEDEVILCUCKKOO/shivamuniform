<?php

/* ===== SEO: About Page ===== */
$seo_title       = "About Us - Shivam Uniform | Trusted Uniform Manufacturer";
$seo_description = "Know about Shivam Uniform, a trusted uniform manufacturer. Explore our journey, quality fabrics, manufacturing process and commitment to customers.";
$seo_keywords    = "about Shivam Uniform, uniform manufacturer, school uniform maker, corporate uniform supplier";

$seo_schema = [
    "@context"    => "https://schema.org",
    "@type"       => "AboutPage",
    "name"        => "About Shivam Uniform",
    "description" => $seo_description
];

require_once __DIR__ . '/includes/header.php';

?>

<main style="overflow: hidden;">

    <!-- section 1 -->
    <?php require_once __DIR__ . '/includes/about-sections/section_1.php'; ?>

    <!-- section 2 -->
    <?php require_once __DIR__ . '/includes/about-sections/section_2.php'; ?>

    <!-- section 3 -->
    <?php require_once __DIR__ . '/includes/about-sections/section_3.php'; ?>

    <!-- section 4 -->
    <?php require_once __DIR__ . '/includes/about-sections/section_4.php'; ?>

    <!-- section 5 -->
    <?php require_once __DIR__ . '/includes/about-sections/section_5.php'; ?>

    <!-- section 6 -->
    <?php require_once __DIR__ . '/includes/about-sections/section_6.php'; ?>

    <!-- section 7 -->
    <?php require_once __DIR__ . '/includes/about-sections/section_7.php'; ?>

    <!-- section 8 -->
    <?php require_once __DIR__ . '/includes/about-sections/section_8.php'; ?>

</main>

<?php

require_once __DIR__ . '/includes/footer.php';

?>