/**
 * ============================================================
 * SHIVAM UNIFORM - COMPLETE PREMIUM WOOCOMMERCE CATALOGUE
 * Lightweight / No Price / No Cart / Enquiry Based
 * Brand Colors:
 * Navy  : #011641
 * Green : #06712E
 * ============================================================
 */


/* ============================================================
   1. CATALOGUE MODE - HIDE PRICE
============================================================ */

add_filter( 'woocommerce_get_price_html', function( $price, $product ) {
    return '';
}, 9999, 2 );


/* ============================================================
   2. REMOVE ADD TO CART FROM PRODUCT LISTINGS
============================================================ */

add_action( 'wp', function() {

    remove_action(
        'woocommerce_after_shop_loop_item',
        'woocommerce_template_loop_add_to_cart',
        10
    );

});


/* ============================================================
   3. REMOVE REVIEWS TAB
============================================================ */

add_filter( 'woocommerce_product_tabs', function( $tabs ) {

    if ( isset( $tabs['reviews'] ) ) {
        unset( $tabs['reviews'] );
    }

    return $tabs;

}, 98 );


/* ============================================================
   4. SAME COLOR IMAGE FOR ALL SIZES

   Example:
   Black / 34 has Black image
   Black / 36,38,40,42,44 will use same Black image.

   So you do NOT need to upload same image 6 times.
============================================================ */

add_filter(
    'woocommerce_available_variation',
    function( $data, $product, $variation ) {

        if ( ! $product || ! $variation ) {
            return $data;
        }

        $current_color = '';

        foreach ( $variation->get_attributes() as $key => $value ) {

            if (
                stripos( $key, 'color' ) !== false ||
                stripos( $key, 'colour' ) !== false
            ) {
                $current_color = $value;
                break;
            }
        }

        if ( empty( $current_color ) ) {
            return $data;
        }


        foreach ( $product->get_children() as $variation_id ) {

            $sibling = wc_get_product( $variation_id );

            if (
                ! $sibling ||
                ! $sibling->is_type( 'variation' )
            ) {
                continue;
            }

            $sibling_color = '';

            foreach ( $sibling->get_attributes() as $key => $value ) {

                if (
                    stripos( $key, 'color' ) !== false ||
                    stripos( $key, 'colour' ) !== false
                ) {
                    $sibling_color = $value;
                    break;
                }
            }


            if (
                strtolower( trim( $sibling_color ) ) ===
                strtolower( trim( $current_color ) )
                &&
                $sibling->get_image_id()
            ) {

                $image_id = $sibling->get_image_id();

                $full = wp_get_attachment_image_src(
                    $image_id,
                    'full'
                );

                $thumb = wp_get_attachment_image_src(
                    $image_id,
                    'woocommerce_gallery_thumbnail'
                );


                if ( $full ) {

                    $data['image']['src']      = $full[0];
                    $data['image']['url']      = $full[0];
                    $data['image']['full_src'] = $full[0];

                    $data['image']['full_src_w'] = $full[1];
                    $data['image']['full_src_h'] = $full[2];


                    if ( $thumb ) {

                        $data['image']['gallery_thumbnail_src']
                            = $thumb[0];

                    }


                    $data['image']['alt'] =
                        get_post_meta(
                            $image_id,
                            '_wp_attachment_image_alt',
                            true
                        );

                }

                break;
            }
        }

        return $data;

    },
    999,
    3
);


/* ============================================================
   5. ENQUIRY BUTTONS
============================================================ */

add_action( 'woocommerce_single_variation', function() {

    if ( ! is_product() ) {
        return;
    }

    global $product;

    $product_name = $product
        ? $product->get_name()
        : 'Product';


    /* CHANGE NUMBER HERE IF REQUIRED */

    $phone = '919582929878';


    $message = rawurlencode(
        'Hello Shivam Uniform, I am interested in ' .
        $product_name .
        '. Please share details for bulk order.'
    );


    $whatsapp =
        'https://wa.me/' .
        $phone .
        '?text=' .
        $message;

    ?>

    <div class="su-enquiry-box">

        <div class="su-enquiry-head">

            <span class="su-enquiry-check">✓</span>

            <div class="su-enquiry-copy">

                <strong>
                    Bulk Order & Customization
                </strong>

                <small>
                    Connect with our team for quantity,
                    customization and order details.
                </small>

            </div>

        </div>


        <div class="su-enquiry-buttons">

            <a
                class="su-enquiry-btn su-whatsapp-btn"
                href="<?php echo esc_url( $whatsapp ); ?>"
                target="_blank"
                rel="noopener"
            >
                WhatsApp for Bulk Order
            </a>


            <a
                class="su-enquiry-btn su-call-btn"
                href="tel:+919582929878"
            >
                Call for Enquiry
            </a>

        </div>

    </div>

    <?php

}, 35 );


/* ============================================================
   6. COMPLETE PREMIUM CSS
============================================================ */

add_action( 'wp_head', function() {

    if ( ! is_product() ) {
        return;
    }

?>

<style>

/* ============================================================
   BRAND VARIABLES
============================================================ */

body.single-product{

    --su-navy:#011641;
    --su-navy-light:#06366b;

    --su-green:#06712E;
    --su-green-light:#0a9140;

    --su-white:#ffffff;

    --su-bg:#f4f8f5;
    --su-soft:#f6faf7;

    --su-border:#dce7e0;

    --su-text:#46545f;
    --su-muted:#75818b;

}


/* ============================================================
   FULL PAGE BACKGROUND
============================================================ */

body.single-product{

    position:relative;

    background:

        radial-gradient(
            circle at 7% 14%,
            rgba(6,113,46,.11) 0,
            rgba(6,113,46,.045) 16%,
            transparent 34%
        ),

        radial-gradient(
            circle at 93% 27%,
            rgba(1,22,65,.10) 0,
            rgba(1,22,65,.035) 17%,
            transparent 36%
        ),

        radial-gradient(
            circle at 10% 82%,
            rgba(1,22,65,.045),
            transparent 25%
        ),

        linear-gradient(
            135deg,
            #f8fbf9 0%,
            #eef6f1 48%,
            #f6f8fb 100%
        ) !important;

}


/* ============================================================
   LIGHTWEIGHT DOT PATTERN
============================================================ */

body.single-product::before{

    content:"";

    position:fixed;

    inset:0;

    pointer-events:none;

    z-index:0;

    opacity:.27;

    background-image:

        radial-gradient(
            rgba(1,22,65,.20) 1px,
            transparent 1px
        );

    background-size:30px 30px;

    mask-image:
        linear-gradient(
            to bottom,
            #000 0%,
            rgba(0,0,0,.7) 35%,
            transparent 85%
        );

    -webkit-mask-image:
        linear-gradient(
            to bottom,
            #000 0%,
            rgba(0,0,0,.7) 35%,
            transparent 85%
        );

}


/* ============================================================
   DECORATIVE SIDE RINGS
============================================================ */

body.single-product::after{

    content:"";

    position:fixed;

    width:420px;
    height:420px;

    right:-230px;
    top:240px;

    border-radius:50%;

    border:
        1px solid rgba(6,113,46,.10);

    box-shadow:

        0 0 0 45px
        rgba(6,113,46,.022),

        0 0 0 90px
        rgba(1,22,65,.018);

    pointer-events:none;

    z-index:0;

}


/* CONTENT ABOVE BACKGROUND */

body.single-product #page,
body.single-product .site,
body.single-product main,
body.single-product .site-main{

    position:relative;

    z-index:1;

}


/* ============================================================
   MAIN PRODUCT CARD
============================================================ */

.single-product div.product{

    position:relative;

    max-width:1240px;

    margin:
        52px auto 78px !important;

    padding:
        34px !important;

    background:

        linear-gradient(
            145deg,
            rgba(255,255,255,.985),
            rgba(250,253,251,.97)
        ) !important;

    border:
        1px solid
        rgba(6,113,46,.13) !important;

    border-radius:
        26px;

    box-shadow:

        0 28px 75px
        rgba(1,22,65,.09);

}


.single-product div.product::after{

    content:"";

    display:block;

    clear:both;

}


/* TOP ACCENT */

.single-product div.product::before{

    content:"";

    position:absolute;

    top:-1px;
    left:45px;

    width:135px;
    height:4px;

    background:

        linear-gradient(
            90deg,
            var(--su-navy),
            var(--su-green)
        );

    border-radius:
        0 0 10px 10px;

}


/* ============================================================
   LEFT PRODUCT GALLERY
============================================================ */

.single-product
.woocommerce-product-gallery{

    width:46% !important;

    position:relative;

    padding:
        13px !important;

    background:

        radial-gradient(
            circle at 15% 12%,
            rgba(6,113,46,.08),
            transparent 28%
        ),

        linear-gradient(
            145deg,
            #f8fbf9,
            #edf4f0
        ) !important;

    border:
        1px solid
        rgba(6,113,46,.14) !important;

    border-radius:
        21px;

    overflow:hidden;

}


/* GALLERY DECORATION */

.single-product
.woocommerce-product-gallery::before{

    content:"";

    position:absolute;

    width:145px;
    height:145px;

    left:-75px;
    bottom:-75px;

    border-radius:50%;

    border:
        1px solid
        rgba(6,113,46,.11);

    box-shadow:
        0 0 0 28px
        rgba(6,113,46,.025);

    pointer-events:none;

}


/* MAIN PRODUCT IMAGE */

.single-product
.woocommerce-product-gallery__wrapper{

    margin:0 !important;

}


.single-product
.woocommerce-product-gallery__image{

    overflow:hidden;

    background:#fff;

    border-radius:
        15px;

}


.single-product
.woocommerce-product-gallery__image img{

    display:block;

    width:100% !important;

    height:auto !important;

    max-height:520px;

    object-fit:contain;

    margin:auto;

    border-radius:
        15px;

}


/* ZOOM BUTTON */

.single-product
.woocommerce-product-gallery__trigger{

    width:40px !important;
    height:40px !important;

    top:14px !important;
    right:14px !important;

    background:
        #fff !important;

    border-radius:
        50% !important;

    box-shadow:

        0 7px 20px
        rgba(1,22,65,.12);

}


/* ============================================================
   SMALL GALLERY THUMBNAILS
============================================================ */

.single-product
.flex-control-thumbs{

    display:flex !important;

    flex-wrap:wrap;

    gap:7px;

    margin:
        11px 0 0 !important;

    padding:0 !important;

}


.single-product
.flex-control-thumbs li{

    float:none !important;

    width:54px !important;
    height:65px !important;

    flex:
        0 0 54px;

    margin:
        0 !important;

}


.single-product
.flex-control-thumbs img{

    display:block;

    width:54px !important;
    height:65px !important;

    object-fit:cover !important;

    padding:3px;

    background:#fff;

    border:
        1px solid
        #d8e4dd !important;

    border-radius:
        8px !important;

    opacity:.72;

    cursor:pointer;

    transition:
        .18s ease;

}


.single-product
.flex-control-thumbs img:hover{

    opacity:1;

    transform:
        translateY(-2px);

    border-color:
        var(--su-green) !important;

}


.single-product
.flex-control-thumbs img.flex-active{

    opacity:1;

    border:
        2px solid
        var(--su-green) !important;

}


/* ============================================================
   RIGHT PRODUCT INFORMATION
============================================================ */

.single-product
div.product .summary{

    width:50% !important;

    position:relative;

    padding:
        6px 0 0 42px !important;

}


/* BREADCRUMB */

.single-product
.woocommerce-breadcrumb{

    margin:
        0 0 11px !important;

    color:
        #8a949e;

    font-size:
        12px;

}


.single-product
.woocommerce-breadcrumb a{

    color:
        var(--su-green) !important;

    text-decoration:none;

}


/* PRODUCT TITLE */

.single-product
.product_title{

    margin:
        5px 0 15px !important;

    color:
        var(--su-navy) !important;

    font-size:
        36px !important;

    line-height:
        1.15 !important;

    font-weight:
        800 !important;

    letter-spacing:
        -.7px;

}


/* TITLE GRADIENT LINE */

.single-product
.product_title::after{

    content:"";

    display:block;

    width:62px;
    height:4px;

    margin-top:
        13px;

    border-radius:
        20px;

    background:

        linear-gradient(
            90deg,
            var(--su-navy),
            var(--su-green)
        );

}


/* ============================================================
   REMOVE PRICE / CART / QUANTITY
============================================================ */

.single-product .price,
.single-product .woocommerce-variation-price,
.single-product .woocommerce-variation-availability,
.single-product .single_add_to_cart_button,
.single-product form.cart .quantity,
.single-product .woocommerce-variation-add-to-cart{

    display:
        none !important;

}


/* ============================================================
   SHORT DESCRIPTION
============================================================ */

.single-product
.woocommerce-product-details__short-description{

    color:
        var(--su-text);

    font-size:
        14px;

    line-height:
        1.72;

}


.single-product
.woocommerce-product-details__short-description > p:first-child{

    margin:
        0 0 15px;

    color:
        #53616c;

    font-size:
        15px;

}


/* PRODUCT SPECIFICATIONS BOX */

.single-product
.woocommerce-product-details__short-description ul{

    position:relative;

    margin:
        14px 0 20px;

    padding:
        17px 20px 17px 37px;

    background:

        linear-gradient(
            135deg,
            rgba(1,22,65,.035),
            rgba(6,113,46,.065)
        );

    border:
        1px solid
        #dce8e1;

    border-radius:
        14px;

    overflow:hidden;

}


.single-product
.woocommerce-product-details__short-description ul::before{

    content:"";

    position:absolute;

    left:0;
    top:0;
    bottom:0;

    width:4px;

    background:

        linear-gradient(
            180deg,
            var(--su-navy),
            var(--su-green)
        );

}


.single-product
.woocommerce-product-details__short-description li{

    margin:
        4px 0;

    color:
        #52606b;

}


.single-product
.woocommerce-product-details__short-description strong{

    color:
        var(--su-navy);

}


/* ============================================================
   VARIATION PANEL
============================================================ */

.single-product
form.variations_form{

    position:relative;

    margin-top:
        18px !important;

    padding:
        19px;

    background:

        linear-gradient(
            135deg,
            rgba(1,22,65,.025),
            rgba(6,113,46,.055)
        );

    border:
        1px solid
        rgba(6,113,46,.13);

    border-radius:
        16px;

}


.single-product table.variations,
.single-product table.variations tbody,
.single-product table.variations tr,
.single-product table.variations th,
.single-product table.variations td{

    border:
        0 !important;

    background:
        transparent !important;

}


.single-product table.variations{

    margin:
        0 !important;

}


.single-product table.variations tr{

    display:block;

    margin:
        0 0 16px;

}


.single-product table.variations th,
.single-product table.variations td{

    display:block;

    width:
        100% !important;

    padding:
        0 !important;

    text-align:
        left !important;

}


.single-product table.variations th{

    padding-bottom:
        8px !important;

}


.single-product table.variations label{

    color:
        var(--su-navy) !important;

    font-size:
        14px;

    font-weight:
        800;

}


/* ORIGINAL SELECT REMAINS FUNCTIONAL BUT HIDDEN */

.shivam-hidden-select{

    position:absolute !important;

    width:1px !important;
    height:1px !important;

    opacity:0 !important;

    overflow:hidden !important;

    pointer-events:none !important;

}


/* ============================================================
   SWATCH CONTAINERS
============================================================ */

.shivam-options{

    display:flex;

    align-items:center;

    flex-wrap:wrap;

    gap:11px;

    margin:
        2px 0 8px;

}


/* ============================================================
   PERFECT ROUND COLOR SWATCHES
============================================================ */

.shivam-color-option{

    appearance:
        none !important;

    -webkit-appearance:
        none !important;

    display:block !important;

    flex:
        0 0 46px !important;

    width:
        46px !important;

    min-width:
        46px !important;

    max-width:
        46px !important;

    height:
        46px !important;

    min-height:
        46px !important;

    max-height:
        46px !important;

    aspect-ratio:
        1 / 1 !important;

    padding:
        0 !important;

    margin:
        0 !important;

    border:
        4px solid
        #fff !important;

    border-radius:
        50% !important;

    outline:
        1px solid
        #cbd8d0 !important;

    outline-offset:
        0;

    position:
        relative;

    overflow:
        visible;

    cursor:
        pointer;

    box-shadow:

        0 3px 9px
        rgba(1,22,65,.08) !important;

    transition:
        transform .18s ease,
        outline-color .18s ease,
        box-shadow .18s ease;

}


/* COLOR HOVER */

.shivam-color-option:hover{

    transform:
        translateY(-2px)
        scale(1.04);

    outline:
        2px solid
        var(--su-green) !important;

    box-shadow:

        0 7px 15px
        rgba(6,113,46,.15) !important;

}


/* COLOR ACTIVE */

.shivam-color-option.active{

    transform:
        scale(1.04);

    outline:
        3px solid
        var(--su-green) !important;

    box-shadow:

        0 0 0 2px
        rgba(6,113,46,.09),

        0 7px 17px
        rgba(1,22,65,.14) !important;

}


/* ACTIVE TICK */

.shivam-color-option.active::after{

    content:"✓";

    position:absolute;

    top:-8px;
    right:-8px;

    width:20px;
    height:20px;

    display:flex;

    align-items:center;
    justify-content:center;

    background:

        linear-gradient(
            135deg,
            var(--su-navy),
            var(--su-green)
        );

    border:
        2px solid
        #fff;

    border-radius:
        50%;

    color:
        #fff;

    font-size:
        10px;

    font-weight:
        900;

    box-shadow:

        0 3px 8px
        rgba(1,22,65,.18);

}


/* SELECTED COLOR LABEL */

.shivam-color-name{

    margin:
        2px 0 1px;

    color:
        #697680;

    font-size:
        12px;

    font-weight:
        500;

}


/* ============================================================
   SIZE BUTTONS
============================================================ */

.shivam-size-option{

    appearance:
        none !important;

    -webkit-appearance:
        none !important;

    min-width:
        53px !important;

    height:
        45px !important;

    padding:
        0 14px !important;

    display:flex !important;

    align-items:center;

    justify-content:center;

    background:
        #fff !important;

    border:
        1px solid
        #d7e3dc !important;

    border-radius:
        9px !important;

    color:
        var(--su-navy) !important;

    font-size:
        13px !important;

    line-height:
        1 !important;

    font-weight:
        800 !important;

    cursor:
        pointer;

    box-shadow:

        0 3px 8px
        rgba(1,22,65,.035);

    transition:
        transform .18s ease,
        box-shadow .18s ease;

}


/* SIZE HOVER */

.shivam-size-option:hover{

    background:

        linear-gradient(
            135deg,
            var(--su-navy) 0%,
            var(--su-green) 100%
        ) !important;

    border-color:
        transparent !important;

    color:
        #fff !important;

    transform:
        translateY(-2px);

    box-shadow:

        0 8px 17px
        rgba(1,22,65,.16);

}


/* SIZE ACTIVE */

.shivam-size-option.active,
.shivam-size-option.active:hover,
.shivam-size-option:focus{

    background:

        linear-gradient(
            135deg,
            var(--su-navy) 0%,
            var(--su-green) 100%
        ) !important;

    border-color:
        transparent !important;

    color:
        #fff !important;

    outline:
        none !important;

    transform:
        translateY(-1px);

    box-shadow:

        0 8px 18px
        rgba(1,22,65,.18);

}


/* RESET VARIATIONS */

.single-product
.reset_variations{

    display:inline-flex !important;

    align-items:center;

    margin:
        4px 0 0 !important;

    color:
        var(--su-green) !important;

    font-size:
        11px !important;

    font-weight:
        800 !important;

    text-decoration:
        none !important;

    text-transform:
        uppercase;

    letter-spacing:
        .5px;

}


/* ============================================================
   PREMIUM ENQUIRY BOX
============================================================ */

.su-enquiry-box{

    margin-top:
        18px;

    padding:
        17px;

    background:

        linear-gradient(
            135deg,
            rgba(255,255,255,.8),
            rgba(6,113,46,.055)
        );

    border:
        1px solid
        #d9e6de;

    border-radius:
        14px;

}


.su-enquiry-head{

    display:flex;

    align-items:center;

    gap:
        11px;

    margin-bottom:
        13px;

}


.su-enquiry-check{

    flex:
        0 0 35px;

    width:
        35px;

    height:
        35px;

    display:flex;

    align-items:center;

    justify-content:center;

    background:

        linear-gradient(
            135deg,
            var(--su-navy),
            var(--su-green)
        );

    border-radius:
        50%;

    color:
        #fff;

    font-weight:
        900;

}


.su-enquiry-copy strong{

    display:block;

    color:
        var(--su-navy);

    font-size:
        14px;

    line-height:
        1.3;

}


.su-enquiry-copy small{

    display:block;

    margin-top:
        3px;

    color:
        #71808a;

    font-size:
        11px;

    line-height:
        1.4;

}


.su-enquiry-buttons{

    display:grid;

    grid-template-columns:
        1fr 1fr;

    gap:
        9px;

}


.su-enquiry-btn{

    min-height:
        47px;

    padding:
        10px 14px;

    display:flex;

    align-items:center;

    justify-content:center;

    border-radius:
        9px;

    color:
        #fff !important;

    font-size:
        13px;

    font-weight:
        800;

    text-align:
        center;

    text-decoration:
        none !important;

    transition:
        transform .18s ease,
        box-shadow .18s ease;

}


.su-whatsapp-btn{

    background:

        linear-gradient(
            135deg,
            var(--su-green),
            var(--su-green-light)
        );

}


.su-call-btn{

    background:

        linear-gradient(
            135deg,
            var(--su-navy),
            var(--su-navy-light)
        );

}


.su-enquiry-btn:hover{

    color:
        #fff !important;

    transform:
        translateY(-2px);

    box-shadow:

        0 8px 18px
        rgba(1,22,65,.15);

}


/* ============================================================
   PRODUCT META
============================================================ */

.single-product
.product_meta{

    margin-top:
        17px;

    padding-top:
        15px;

    border-top:
        1px solid
        #e1e9e4;

    color:
        #7a8590;

    font-size:
        12px;

}


.single-product
.product_meta a{

    color:
        var(--su-green) !important;

    font-weight:
        700;

}


/* ============================================================
   PRODUCT DETAILS / TABS CARD
============================================================ */

.single-product
.woocommerce-tabs{

    clear:both;

    position:relative;

    margin-top:
        55px !important;

    padding:
        30px !important;

    background:

        radial-gradient(
            circle at 95% 0%,
            rgba(6,113,46,.075),
            transparent 25%
        ),

        linear-gradient(
            145deg,
            #ffffff,
            #f5faf7
        ) !important;

    border:
        1px solid
        rgba(6,113,46,.13) !important;

    border-radius:
        21px;

    box-shadow:

        0 18px 50px
        rgba(1,22,65,.065);

    overflow:hidden;

}


/* DECORATIVE CIRCLE */

.single-product
.woocommerce-tabs::after{

    content:"";

    position:absolute;

    width:200px;
    height:200px;

    right:-115px;
    bottom:-115px;

    border-radius:50%;

    background:

        radial-gradient(
            circle,
            rgba(6,113,46,.075),
            transparent 68%
        );

    pointer-events:none;

}


/* TAB NAV */

.single-product
.woocommerce-tabs ul.tabs{

    display:flex;

    gap:
        28px;

    margin:
        0 0 28px !important;

    padding:
        0 !important;

    border-bottom:
        1px solid
        #dde7e1 !important;

}


.single-product
.woocommerce-tabs ul.tabs::before{

    display:
        none !important;

}


.single-product
.woocommerce-tabs ul.tabs li{

    margin:
        0 !important;

    padding:
        0 !important;

    border:
        0 !important;

    background:
        transparent !important;

    border-radius:
        0 !important;

}


.single-product
.woocommerce-tabs ul.tabs li::before,
.single-product
.woocommerce-tabs ul.tabs li::after{

    display:
        none !important;

}


.single-product
.woocommerce-tabs ul.tabs li a{

    position:relative;

    padding:
        0 0 14px !important;

    color:
        #6a7680 !important;

    font-size:
        13px;

    font-weight:
        800 !important;

    text-decoration:
        none !important;

}


.single-product
.woocommerce-tabs ul.tabs li.active a{

    color:
        var(--su-navy) !important;

}


.single-product
.woocommerce-tabs ul.tabs li.active a::after{

    content:"";

    position:absolute;

    left:0;
    right:0;
    bottom:-1px;

    height:
        3px;

    background:

        linear-gradient(
            90deg,
            var(--su-navy),
            var(--su-green)
        );

    border-radius:
        10px 10px 0 0;

}


/* ============================================================
   PRODUCT DETAILS CONTENT
============================================================ */

.single-product
.woocommerce-Tabs-panel h2{

    margin:
        0 0 12px !important;

    color:
        var(--su-navy) !important;

    font-size:
        27px !important;

    line-height:
        1.25;

    font-weight:
        800 !important;

}


.single-product
.woocommerce-Tabs-panel p{

    color:
        #596773;

    font-size:
        14px;

    line-height:
        1.8;

}


/* ============================================================
   SIZE CHART
============================================================ */

.single-product
.woocommerce-Tabs-panel table{

    width:
        100%;

    margin-top:
        21px;

    border-collapse:
        separate !important;

    border-spacing:
        0 !important;

    border:
        1px solid
        #dce7e0 !important;

    border-radius:
        13px;

    overflow:
        hidden;

    box-shadow:

        0 8px 25px
        rgba(1,22,65,.05);

}


.single-product
.woocommerce-Tabs-panel table th{

    padding:
        14px !important;

    background:

        linear-gradient(
            135deg,
            var(--su-navy),
            #073b67
        ) !important;

    border-color:
        rgba(255,255,255,.11) !important;

    color:
        #fff !important;

    text-align:
        center;

    font-size:
        13px;

    font-weight:
        800;

}


.single-product
.woocommerce-Tabs-panel table td{

    padding:
        13px !important;

    border-color:
        #e1e9e4 !important;

    background:
        #fff;

    color:
        #53616d;

    text-align:
        center;

    font-size:
        13px;

}


.single-product
.woocommerce-Tabs-panel table tr:nth-child(even) td{

    background:
        #f4f9f6;

}


/* ============================================================
   TABLET
============================================================ */

@media(max-width:921px){

    .single-product div.product{

        margin:
            30px 18px 55px !important;

        padding:
            22px !important;

    }


    .single-product
    .woocommerce-product-gallery,

    .single-product
    div.product .summary{

        width:
            100% !important;

        float:
            none !important;

    }


    .single-product
    div.product .summary{

        padding:
            30px 0 0 !important;

    }

}


/* ============================================================
   MOBILE
============================================================ */

@media(max-width:600px){

    body.single-product{

        background:

            radial-gradient(
                circle at 0% 10%,
                rgba(6,113,46,.09),
                transparent 25%
            ),

            linear-gradient(
                145deg,
                #f8fbf9,
                #eef5f1
            ) !important;

    }


    body.single-product::before{

        opacity:
            .18;

        background-size:
            24px 24px;

    }


    body.single-product::after{

        width:
            230px;

        height:
            230px;

        right:
            -165px;

        top:
            260px;

    }


    .single-product div.product{

        margin:
            14px 10px 38px !important;

        padding:
            11px !important;

        border-radius:
            17px;

    }


    .single-product div.product::before{

        left:
            22px;

        width:
            90px;

    }


    .single-product
    .woocommerce-product-gallery{

        padding:
            8px !important;

        border-radius:
            14px;

    }


    .single-product
    .woocommerce-product-gallery__image img{

        max-height:
            none;

    }


    .single-product
    .flex-control-thumbs{

        gap:
            6px;

    }


    .single-product
    .flex-control-thumbs li{

        width:
            47px !important;

        height:
            57px !important;

        flex-basis:
            47px;

    }


    .single-product
    .flex-control-thumbs img{

        width:
            47px !important;

        height:
            57px !important;

    }


    .single-product
    div.product .summary{

        padding:
            24px 3px 0 !important;

    }


    .single-product
    .product_title{

        font-size:
            27px !important;

    }


    .single-product
    form.variations_form{

        padding:
            14px;

    }


    .shivam-color-option{

        flex-basis:
            42px !important;

        width:
            42px !important;

        min-width:
            42px !important;

        max-width:
            42px !important;

        height:
            42px !important;

        min-height:
            42px !important;

        max-height:
            42px !important;

    }


    .shivam-size-option{

        min-width:
            47px !important;

        height:
            42px !important;

        padding:
            0 10px !important;

    }


    .su-enquiry-buttons{

        grid-template-columns:
            1fr;

    }


    .single-product
    .woocommerce-tabs{

        margin-top:
            38px !important;

        padding:
            19px 14px !important;

        border-radius:
            16px;

    }


    .single-product
    .woocommerce-tabs ul.tabs{

        gap:
            18px;

        overflow-x:
            auto;

    }


    .single-product
    .woocommerce-Tabs-panel{

        overflow-x:
            auto;

    }


    .single-product
    .woocommerce-Tabs-panel table{

        min-width:
            560px;

    }

}

</style>

<?php

}, 999 );


/* ============================================================
   7. COLOR SWATCH + SIZE BUTTON JAVASCRIPT
============================================================ */

add_action( 'wp_footer', function() {

    if ( ! is_product() ) {
        return;
    }

?>

<script>

document.addEventListener(
    'DOMContentLoaded',
    function(){

        const form =
            document.querySelector(
                '.single-product form.variations_form'
            );


        if( ! form ){
            return;
        }


        /* ====================================================
           COLOR SELECT
        ==================================================== */

        const colorSelect =
            form.querySelector(
                'select[name*="color"],' +
                'select[id*="color"],' +
                'select[name*="colour"],' +
                'select[id*="colour"]'
            );


        let colorName = null;


        if( colorSelect ){

            colorSelect.classList.add(
                'shivam-hidden-select'
            );


            const colorBox =
                document.createElement('div');


            colorBox.className =
                'shivam-options shivam-colors';


            colorName =
                document.createElement('div');


            colorName.className =
                'shivam-color-name';


            const colorMap = {

                'black':
                    '#111111',

                'fawn':
                    '#b9a084',

                'brown':
                    '#b9a084',

                'grey':
                    '#777c86',

                'gray':
                    '#777c86',

                'maroon':
                    '#751528',

                'navy blue':
                    '#18264f',

                'navy-blue':
                    '#18264f',

                'navy':
                    '#18264f'

            };


            Array
            .from( colorSelect.options )
            .forEach(
                function( option ){

                    if( ! option.value ){
                        return;
                    }


                    const button =
                        document.createElement(
                            'button'
                        );


                    button.type =
                        'button';


                    button.className =
                        'shivam-color-option';


                    button.dataset.value =
                        option.value;


                    button.dataset.name =
                        option.text.trim();


                    const key =
                        option.text
                        .trim()
                        .toLowerCase();


                    button.style.backgroundColor =
                        colorMap[key] ||
                        '#cccccc';


                    button.title =
                        option.text;


                    button.setAttribute(
                        'aria-label',
                        option.text
                    );


                    button.addEventListener(
                        'click',
                        function(){

                            colorSelect.value =
                                this.dataset.value;


                            colorSelect.dispatchEvent(
                                new Event(
                                    'change',
                                    {
                                        bubbles:true
                                    }
                                )
                            );


                            colorBox
                            .querySelectorAll(
                                '.shivam-color-option'
                            )
                            .forEach(
                                function( item ){

                                    item.classList.remove(
                                        'active'
                                    );

                                }
                            );


                            this.classList.add(
                                'active'
                            );


                            colorName.textContent =
                                'Selected: ' +
                                this.dataset.name;

                        }
                    );


                    colorBox.appendChild(
                        button
                    );

                }
            );


            colorSelect
            .parentNode
            .insertBefore(
                colorBox,
                colorSelect
            );


            colorBox
            .insertAdjacentElement(
                'afterend',
                colorName
            );

        }


        /* ====================================================
           SIZE SELECT
        ==================================================== */

        const sizeSelect =
            form.querySelector(
                'select[name*="size"],' +
                'select[id*="size"]'
            );


        if( sizeSelect ){

            sizeSelect.classList.add(
                'shivam-hidden-select'
            );


            const sizeBox =
                document.createElement('div');


            sizeBox.className =
                'shivam-options shivam-sizes';


            Array
            .from( sizeSelect.options )
            .forEach(
                function( option ){

                    if( ! option.value ){
                        return;
                    }


                    const button =
                        document.createElement(
                            'button'
                        );


                    button.type =
                        'button';


                    button.className =
                        'shivam-size-option';


                    button.dataset.value =
                        option.value;


                    button.textContent =
                        option.text;


                    button.addEventListener(
                        'click',
                        function(){

                            sizeSelect.value =
                                this.dataset.value;


                            sizeSelect.dispatchEvent(
                                new Event(
                                    'change',
                                    {
                                        bubbles:true
                                    }
                                )
                            );


                            sizeBox
                            .querySelectorAll(
                                '.shivam-size-option'
                            )
                            .forEach(
                                function( item ){

                                    item.classList.remove(
                                        'active'
                                    );

                                }
                            );


                            this.classList.add(
                                'active'
                            );

                        }
                    );


                    sizeBox.appendChild(
                        button
                    );

                }
            );


            sizeSelect
            .parentNode
            .insertBefore(
                sizeBox,
                sizeSelect
            );

        }


        /* ====================================================
           RESET
        ==================================================== */

        const reset =
            form.querySelector(
                '.reset_variations'
            );


        if( reset ){

            reset.addEventListener(
                'click',
                function(){

                    form
                    .querySelectorAll(
                        '.shivam-color-option,' +
                        '.shivam-size-option'
                    )
                    .forEach(
                        function( button ){

                            button.classList.remove(
                                'active'
                            );

                        }
                    );


                    if( colorName ){

                        colorName.textContent =
                            '';

                    }

                }
            );

        }

    }
);

</script>

<?php

}, 999 );