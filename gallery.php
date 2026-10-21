<?php

/* ===== SEO: Gallery Page ===== */
$seo_title       = "Gallery - Shivam Uniform | Our Uniform Collection & Work";
$seo_description = "Browse the Shivam Uniform gallery. See our school, corporate, hospital and industrial uniforms, manufacturing work and delivered orders.";
$seo_keywords    = "uniform gallery, school uniform photos, corporate uniform designs, Shivam Uniform work";

$seo_schema = [
    "@context"    => "https://schema.org",
    "@type"       => "ImageGallery",
    "name"        => "Shivam Uniform Gallery",
    "description" => $seo_description
];

require_once __DIR__ . '/includes/header.php';

?>

<main style="overflow: hidden;">
    
    <!-- section 1 -->
    <?php require_once __DIR__ . '/includes/gallery-sections/section_1.php'; ?>

    <!-- section 2 -->
    <?php require_once __DIR__ . '/includes/gallery-sections/section_2.php'; ?>

    <!-- section 3 -->
    <?php require_once __DIR__ . '/includes/gallery-sections/section_3.php'; ?>

    <!-- section 4 -->


    <!-- section 5 -->
    <?php require_once __DIR__ . '/includes/gallery-sections/section_5.php'; ?>

  

</main>

<?php

require_once __DIR__ . '/includes/footer.php';

?>