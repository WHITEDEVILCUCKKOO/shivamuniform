<?php

/* ===== SEO: Contact Page ===== */
$seo_title       = "Contact Us - Shivam Uniform | Get a Free Quote  ";
$seo_description = "Contact Shivam Uniform for bulk school, corporate and industrial uniform orders. Call, email or visit us to get a quote and custom size details.";
$seo_keywords    = "contact Shivam Uniform, uniform manufacturer contact, bulk uniform order, uniform quote Delhi";

$seo_schema = [
    "@context"    => "https://schema.org",
    "@type"       => "ContactPage",
    "name"        => "Contact Shivam Uniform",
    "description" => $seo_description
];

require_once __DIR__ . '/includes/header.php';

?>


<main style="overflow: hidden;">
    
    <!-- section 1 -->
    <?php require_once __DIR__ . '/includes/contact-sections/section_1.php'; ?>

    <!-- section 2 -->
    <?php require_once __DIR__ . '/includes/contact-sections/section_2.php'; ?>

    <!-- section 3 -->
    <?php require_once __DIR__ . '/includes/contact-sections/section_3.php'; ?>

    <!-- section 4 -->
    <?php require_once __DIR__ . '/includes/contact-sections/section_4.php'; ?>


</main>

<?php

require_once __DIR__ . '/includes/footer.php';

?>
