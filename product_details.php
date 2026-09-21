<style>
    /* ============================================================
   SHIVAM UNIFORM - PRODUCT DETAIL PAGE
   Brand Colors: Navy #011641 | Green #06712E
============================================================ */

    .su-product-detail {
        --su-navy: #011641;
        --su-navy-light: #06366b;
        --su-green: #06712E;
        --su-green-light: #0a9140;
        --su-text: #46545f;
        --su-muted: #75818b;
        --su-border: #dce7e0;

        position: relative;
        padding: 52px 20px 78px;
        overflow: hidden;
        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif;

        background:
            radial-gradient(circle at 7% 14%, rgba(6, 113, 46, .11) 0, rgba(6, 113, 46, .045) 16%, transparent 34%),
            radial-gradient(circle at 93% 27%, rgba(1, 22, 65, .10) 0, rgba(1, 22, 65, .035) 17%, transparent 36%),
            linear-gradient(135deg, #f8fbf9 0%, #eef6f1 48%, #f6f8fb 100%);
    }

    .su-product-detail-container {
        position: relative;
        z-index: 1;

        max-width: 1240px;
        margin: 0 auto;

        display: flex !important;
        flex-wrap: wrap;
        gap: 0;

        padding: 34px;

        background: linear-gradient(145deg, rgba(255, 255, 255, .985), rgba(250, 253, 251, .97));
        border: 1px solid rgba(6, 113, 46, .13);
        border-radius: 26px;
        box-shadow: 0 28px 75px rgba(1, 22, 65, .09);
    }

    .su-product-detail-container::before {
        content: "";
        position: absolute;
        top: -1px;
        left: 45px;
        width: 135px;
        height: 4px;
        background: linear-gradient(90deg, var(--su-navy), var(--su-green));
        border-radius: 0 0 10px 10px;
    }

    /* GALLERY */
    .su-gallery {
        width: 46%;
        flex: 0 0 46%;
        box-sizing: border-box;
        padding: 13px;

        background:
            radial-gradient(circle at 15% 12%, rgba(6, 113, 46, .08), transparent 28%),
            linear-gradient(145deg, #f8fbf9, #edf4f0);

        border: 1px solid rgba(6, 113, 46, .14);
        border-radius: 21px;
    }

    .su-main-image {
        width: 100%;
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
    }

    .su-main-image img {
        display: block;
        width: 100%;
        height: auto;
        max-height: 520px;
        object-fit: contain;
        margin: auto;
        padding: 16px;
    }

    /* HOVER ZOOM - image zooms exactly where the mouse is */
    .su-main-image {
        position: relative;
        cursor: zoom-in;
    }

    .su-main-image img {
        transform: scale(1);
        transform-origin: center center;
        transition: transform .12s ease-out;
        will-change: transform;
    }

    .su-main-image.is-zoomed img {
        transform: scale(2);
    }

    /* Zoom is for desktop/mouse only. Mobile stays normal for touch devices. */
    @media (max-width:921px) {
        .su-main-image {
            cursor: default;
        }

        .su-main-image.is-zoomed img {
            transform: scale(1);
        }
    }

    .su-thumbs {
        display: flex;
        flex-wrap: wrap;
        gap: 7px;
        margin-top: 11px;
    }

    .su-thumb {
        appearance: none;
        width: 54px;
        height: 65px;
        flex: 0 0 54px;
        padding: 3px;
        background: #fff;
        border: 1px solid #d8e4dd;
        border-radius: 8px;
        cursor: pointer;
        opacity: .72;
        transition: .18s ease;
    }

    .su-thumb img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 5px;
    }

    .su-thumb:hover {
        opacity: 1;
        transform: translateY(-2px);
        border-color: var(--su-green);
    }

    .su-thumb.active {
        opacity: 1;
        border: 2px solid var(--su-green);
    }

    /* SUMMARY */
    .su-summary {
        width: 54%;
        flex: 0 0 54%;
        box-sizing: border-box;
        padding: 6px 0 0 42px;
    }

    .su-breadcrumb {
        margin: 0 0 11px;
        color: #8a949e;
        font-size: 12px;
    }

    .su-breadcrumb a {
        color: var(--su-green);
        text-decoration: none;
    }

    .su-product-title {
        margin: 5px 0 15px;
        color: var(--su-navy);
        font-size: 34px;
        line-height: 1.15;
        font-weight: 800;
        letter-spacing: -.7px;
    }

    .su-product-title::after {
        content: "";
        display: block;
        width: 62px;
        height: 4px;
        margin-top: 13px;
        border-radius: 20px;
        background: linear-gradient(90deg, var(--su-navy), var(--su-green));
    }

    .su-short-desc {
        margin: 15px 0;
        color: var(--su-text);
        font-size: 14px;
        line-height: 1.72;
    }

    .su-specs {
        position: relative;
        margin: 14px 0 20px;
        padding: 17px 20px 17px 37px;
        list-style: none;

        background: linear-gradient(135deg, rgba(1, 22, 65, .035), rgba(6, 113, 46, .065));
        border: 1px solid #dce8e1;
        border-radius: 14px;
        overflow: hidden;
    }

    .su-specs::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 4px;
        background: linear-gradient(180deg, var(--su-navy), var(--su-green));
    }

    .su-specs li {
        margin: 4px 0;
        color: #52606b;
        font-size: 13.5px;
    }

    .su-specs strong {
        color: var(--su-navy);
    }

    /* VARIATIONS */
    .su-variations {
        margin-top: 18px;
        padding: 19px;

        background: linear-gradient(135deg, rgba(1, 22, 65, .025), rgba(6, 113, 46, .055));
        border: 1px solid rgba(6, 113, 46, .13);
        border-radius: 16px;
    }

    .su-variations>div {
        margin-bottom: 16px;
    }

    .su-variations>div:last-child {
        margin-bottom: 0;
    }

    .su-variations label {
        display: block;
        margin-bottom: 8px;
        color: var(--su-navy);
        font-size: 14px;
        font-weight: 800;
    }

    .shivam-options {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 11px;
        margin: 2px 0 8px;
    }

    .shivam-color-option {
        appearance: none;
        display: block;
        flex: 0 0 46px;
        width: 46px;
        height: 46px;
        padding: 0;
        margin: 0;
        border: 4px solid #fff;
        border-radius: 50%;
        outline: 1px solid #cbd8d0;
        position: relative;
        cursor: pointer;
        box-shadow: 0 3px 9px rgba(1, 22, 65, .08);
        transition: transform .18s ease, outline-color .18s ease, box-shadow .18s ease;
    }

    .shivam-color-option:hover {
        transform: translateY(-2px) scale(1.04);
        outline: 2px solid var(--su-green);
        box-shadow: 0 7px 15px rgba(6, 113, 46, .15);
    }

    .shivam-color-option.active {
        transform: scale(1.04);
        outline: 3px solid var(--su-green);
        box-shadow: 0 0 0 2px rgba(6, 113, 46, .09), 0 7px 17px rgba(1, 22, 65, .14);
    }

    .shivam-color-option.active::after {
        content: "✓";
        position: absolute;
        top: -8px;
        right: -8px;
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, var(--su-navy), var(--su-green));
        border: 2px solid #fff;
        border-radius: 50%;
        color: #fff;
        font-size: 10px;
        font-weight: 900;
        box-shadow: 0 3px 8px rgba(1, 22, 65, .18);
    }

    .shivam-color-name {
        margin: 2px 0 1px;
        color: #697680;
        font-size: 12px;
        font-weight: 500;
    }

    .shivam-size-option {
        appearance: none;
        min-width: 53px;
        height: 45px;
        padding: 0 14px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #fff;
        border: 1px solid #d7e3dc;
        border-radius: 9px;
        color: var(--su-navy);
        font-size: 13px;
        font-weight: 800;
        cursor: pointer;
        box-shadow: 0 3px 8px rgba(1, 22, 65, .035);
        transition: transform .18s ease, box-shadow .18s ease;
    }

    .shivam-size-option:hover,
    .shivam-size-option.active {
        background: linear-gradient(135deg, var(--su-navy) 0%, var(--su-green) 100%);
        border-color: transparent;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 8px 17px rgba(1, 22, 65, .16);
    }

    /* ENQUIRY */
    .su-enquiry-box {
        margin-top: 18px;
        padding: 17px;

        background: linear-gradient(135deg, rgba(255, 255, 255, .8), rgba(6, 113, 46, .055));
        border: 1px solid #d9e6de;
        border-radius: 14px;
    }

    .su-enquiry-head {
        display: flex;
        align-items: center;
        gap: 11px;
        margin-bottom: 13px;
    }

    .su-enquiry-check {
        flex: 0 0 35px;
        width: 35px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, var(--su-navy), var(--su-green));
        border-radius: 50%;
        color: #fff;
        font-weight: 900;
    }

    .su-enquiry-copy strong {
        display: block;
        color: var(--su-navy);
        font-size: 14px;
    }

    .su-enquiry-copy small {
        display: block;
        margin-top: 3px;
        color: #71808a;
        font-size: 11px;
        line-height: 1.4;
    }

    .su-enquiry-buttons {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 9px;
    }

    .su-enquiry-btn {
        min-height: 47px;
        padding: 10px 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 9px;
        color: #fff !important;
        font-size: 13px;
        font-weight: 800;
        text-decoration: none !important;
        transition: transform .18s ease, box-shadow .18s ease;
    }

    .su-whatsapp-btn {
        background: linear-gradient(135deg, var(--su-green), var(--su-green-light));
    }

    .su-call-btn {
        background: linear-gradient(135deg, var(--su-navy), var(--su-navy-light));
    }

    .su-enquiry-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 18px rgba(1, 22, 65, .15);
    }

    .su-meta {
        margin-top: 17px;
        padding-top: 15px;
        border-top: 1px solid #e1e9e4;
        color: #7a8590;
        font-size: 12px;
    }

    /* PRODUCT TABS */
    .su-product-tabs {
        width: 100%;
        max-width: 1240px;
        margin: 26px auto 0;
        padding: 0 20px;
    }

    .su-tabs-card {
        background: linear-gradient(135deg, rgba(255, 255, 255, .94), rgba(6, 113, 46, .045));
        border: 1px solid rgba(6, 113, 46, .14);
        border-radius: 20px;
        padding: 0 30px 30px;
        overflow: hidden;
    }

    .su-tabs-nav {
        display: flex;
        align-items: center;
        gap: 28px;
        border-bottom: 1px solid #dbe5df;
    }

    .su-tab-btn {
        appearance: none;
        border: 0;
        background: transparent;
        padding: 17px 0 14px;
        color: #697680;
        font-size: 13px;
        font-weight: 800;
        cursor: pointer;
        position: relative;
    }

    .su-tab-btn::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: -1px;
        height: 2px;
        background: linear-gradient(90deg, var(--su-navy), var(--su-green));
        transform: scaleX(0);
        transform-origin: left;
        transition: transform .2s ease;
    }

    .su-tab-btn.active {
        color: var(--su-navy);
    }

    .su-tab-btn.active::after {
        transform: scaleX(1);
    }

    .su-tab-panel {
        display: none;
        padding-top: 27px;
        color: #52606b;
        font-size: 14px;
        line-height: 1.75;
    }

    .su-tab-panel.active {
        display: block;
    }

    .su-description-title {
        margin: 0 0 12px;
        color: var(--su-navy);
        font-size: 27px;
        font-weight: 900;
    }

    .su-description-text {
        margin: 0 0 28px;
        color: #65727d;
    }

    .su-additional-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 22px;
    }

    .su-additional-item {
        padding: 18px;
        border: 1px solid #dbe5df;
        border-radius: 13px;
        background: rgba(255, 255, 255, .72);
    }

    .su-additional-label {
        display: block;
        margin-bottom: 10px;
        color: var(--su-navy);
        font-size: 14px;
        font-weight: 900;
    }

    .su-additional-values {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .su-additional-value {
        display: inline-flex;
        align-items: center;
        min-height: 34px;
        padding: 5px 11px;
        border: 1px solid #d8e3dd;
        border-radius: 8px;
        background: #fff;
        color: #4f5d68;
        font-size: 12px;
        font-weight: 700;
    }

    @media screen and (max-width:600px) {
        .su-product-tabs {
            padding: 0 8px;
            margin-top: 20px;
        }

        .su-tabs-card {
            padding: 0 14px 22px;
            border-radius: 16px;
        }

        .su-tabs-nav {
            gap: 20px;
            overflow-x: auto;
        }

        .su-tab-btn {
            white-space: nowrap;
            font-size: 12px;
        }

        .su-tab-panel {
            padding-top: 21px;
        }

        .su-description-title {
            font-size: 22px;
        }

        .su-additional-grid {
            grid-template-columns: 1fr;
            gap: 12px;
        }
    }

    .su-not-found {
        max-width: 1240px;
        margin: 60px auto;
        padding: 40px 20px;
        text-align: center;
        color: #75818b;
        background: #f7f9f8;
        border: 1px solid #dce7e0;
        border-radius: 14px;
    }

    /* ============================================================
   RESPONSIVE FIX
   Colors / fonts / original design are unchanged.
============================================================ */

    /* Prevent padding/borders from making elements wider than their parent */
    .su-product-detail,
    .su-product-detail *,
    .su-product-detail *::before,
    .su-product-detail *::after {
        box-sizing: border-box;
    }

    .su-product-detail {
        width: 100%;
        max-width: 100%;
    }

    .su-product-detail-container {
        width: 100%;
        min-width: 0;
    }

    .su-gallery,
    .su-summary {
        min-width: 0;
        max-width: 100%;
    }

    .su-main-image,
    .su-main-image img {
        max-width: 100%;
    }

    /* TABLET */
    @media screen and (max-width:921px) {

        .su-product-detail {
            width: 100%;
            padding: 35px 16px 55px;
        }

        .su-product-detail-container {
            display: flex !important;
            flex-direction: column;
            width: 100%;
            max-width: 100%;
            margin: 0;
            padding: 22px;
            gap: 0;
            overflow: hidden;
        }

        .su-gallery {
            width: 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .su-summary {
            width: 100%;
            flex: 0 0 100%;
            max-width: 100%;
            padding: 30px 0 0;
        }
    }

    /* MOBILE */
    @media screen and (max-width:600px) {

        .su-product-detail {
            width: 100%;
            padding: 25px 8px 50px;
        }

        .su-product-detail-container {
            display: flex !important;
            flex-direction: column;
            width: 100%;
            max-width: 100%;
            margin: 0;
            padding: 9px;
            border-radius: 17px;
            overflow: hidden;
        }

        .su-gallery {
            width: 100%;
            flex: 0 0 100%;
            max-width: 100%;
            padding: 8px;
            border-radius: 15px;
        }

        .su-main-image {
            width: 100%;
            max-width: 100%;
            overflow: hidden;
        }

        .su-main-image img {
            display: block;
            width: 100%;
            max-width: 100%;
            height: auto;
            max-height: 430px;
            object-fit: contain;
            padding: 5px;
        }

        .su-thumbs {
            width: 100%;
            max-width: 100%;
            flex-wrap: nowrap;
            overflow-x: auto;
            overflow-y: hidden;
            padding-bottom: 4px;
            -webkit-overflow-scrolling: touch;
        }

        .su-thumb {
            flex: 0 0 54px;
            width: 54px;
            height: 65px;
        }

        .su-summary {
            width: 100%;
            flex: 0 0 100%;
            max-width: 100%;
            padding: 22px 2px 0;
        }

        .su-product-title {
            width: 100%;
            max-width: 100%;
            font-size: 27px;
            line-height: 1.2;
            overflow-wrap: anywhere;
            word-break: normal;
        }

        .su-short-desc {
            width: 100%;
            max-width: 100%;
            overflow-wrap: anywhere;
        }

        .su-specs {
            width: 100%;
            max-width: 100%;
            padding: 15px 12px 15px 30px;
            overflow-wrap: anywhere;
        }

        .su-variations {
            width: 100%;
            max-width: 100%;
            padding: 14px;
        }

        .shivam-options {
            width: 100%;
            max-width: 100%;
        }

        .su-enquiry-box {
            width: 100%;
            max-width: 100%;
            padding: 14px;
        }

        .su-enquiry-buttons {
            grid-template-columns: 1fr;
        }

        .su-enquiry-btn {
            width: 100%;
            min-width: 0;
        }
    }

    /* VERY SMALL PHONES */
    @media screen and (max-width:380px) {

        .su-product-detail {
            padding-left: 5px;
            padding-right: 5px;
        }

        .su-product-detail-container {
            padding: 7px;
        }

        .su-gallery {
            padding: 6px;
        }

        .su-summary {
            padding-left: 2px;
            padding-right: 2px;
        }

        .su-product-title {
            font-size: 23px;
        }

        .su-short-desc {
            font-size: 13px;
        }

        .su-enquiry-box {
            padding: 11px;
        }

        .su-enquiry-btn {
            font-size: 12px;
            padding: 10px;
        }
    }



    .lisre_awb b {
        color: #646464;
    }

    .jojsa{
            color: #65727d;
            font-size: 14px;
    }
</style>


<!-- =====================================================
     PRODUCT DETAIL SECTION
====================================================== -->
<section class="su-product-detail" id="su-product-detail">
    <div class="su-product-detail-container" id="su-product-container" style="display:none;">

        <!-- GALLERY -->
        <div class="su-gallery">
            <div class="su-main-image">
                <img id="su-main-img" src="" alt="">
            </div>
            <div class="su-thumbs" id="su-thumbs"><!-- JS fills non-empty images only --></div>
        </div>

        <!-- SUMMARY -->
        <div class="su-summary">

            <div class="su-breadcrumb">
                <a href="index.php">Home</a> / <span id="su-breadcrumb-cat"></span>
            </div>

            <h1 class="su-product-title" id="su-title"></h1>

            <p class="su-short-desc" id="su-desc"></p>

            <ul class="su-specs" id="su-specs"><!-- JS fills fabric/category/design --></ul>

            <div class="su-variations">

                <div id="su-color-section" style="display:none;">
                    <label>Color</label>
                    <div class="shivam-options shivam-colors" id="su-colors"></div>
                    <div class="shivam-color-name" id="su-color-name"></div>
                </div>

                <div id="su-size-section" style="display:none;">
                    <label>Size</label>
                    <div class="shivam-options shivam-sizes" id="su-sizes"></div>
                </div>

            </div>

            <div class="su-enquiry-box">
                <div class="su-enquiry-head">
                    <span class="su-enquiry-check">✓</span>
                    <div class="su-enquiry-copy">
                        <strong>Bulk Order &amp; Customization</strong>
                        <small>Connect with our team for quantity, customization and order details.</small>
                    </div>
                </div>
                <div class="su-enquiry-buttons">
                    <a class="su-enquiry-btn su-whatsapp-btn" id="su-whatsapp-btn" href="#" target="_blank" rel="noopener">WhatsApp for Bulk Order</a>
                    <a class="su-enquiry-btn su-call-btn" href="tel:+919582929878">Call for Enquiry</a>
                </div>
            </div>

            <div class="su-meta" id="su-meta"></div>

        </div>

    </div>

    <!-- DESCRIPTION / ADDITIONAL INFORMATION TABS -->
    <section class="su-product-tabs" id="su-product-tabs" style="display:none;">
        <div class="su-tabs-card">
            <div class="su-tabs-nav" role="tablist">
                <button type="button" class="su-tab-btn active" id="su-description-tab" data-tab="description" role="tab">Description</button>
                <button type="button" class="su-tab-btn" id="su-additional-tab" data-tab="additional" role="tab" style="display:none;">Additional information</button>
            </div>
            <div class="su-tab-panel active" id="su-description-panel" role="tabpanel">
                <h2 class="su-description-title" id="su-tab-description-title"></h2>
                <p class="su-description-text" id="su-tab-description-text"></p>
            </div>
            <div class="su-tab-panel" id="su-additional-panel" role="tabpanel" style="display:none;">
                <div class="su-additional-grid" id="su-additional-content"></div>
            </div>

            <div id="su-product-details-box" style="display:none;">
                <h3>Product Details</h3>

                <ul class="lisre_awb">
                    <li id="li_product_sec_name"><b>Product: </b><span class="jojsa"  id="product_sec_name"></span></li>
                    <li id="li_product_sec_design"><b>Design: </b><span class="jojsa" id="product_sec_design"></span></li>
                    <li id="li_product_sec_model"><b>Model: </b><span class="jojsa" id="product_sec_model"></span></li>
                    <li id="li_product_sec_size"><b>Available Sizes: </b><span class="jojsa" id="product_sec_size"></span></li>
                    <li id="li_product_sec_color"><b>Available Colours: </b><span class="jojsa" id="product_sec_color"></span></li>
                </ul>
            </div>
        </div>
    </section>

    <div class="su-not-found" id="su-not-found" style="display:none;">
        Product not found. <a href="index.php" style="color:var(--su-green,#06712E);">Go back to Home</a>
    </div>

</section>


<!-- =====================================================
     1) PRODUCT DATA
     (same array used on the catalogue page — keep both in sync,
     or better: move this into one shared assets/js/products.js
     file and include it on both pages)
====================================================== -->
<script>
    const products = [

        {
            id: 1,
            name: "Men's Modi / Nehru Jacket – MP 750",
            slug: "mens-modi-nehru-jacket-mp-750",
            product_code: "MP-750",
            category: "Modi / Nehru Jackets",
            fabric: "Cotton",
            design: "",
            colors: ["Grey", "Maroon", "Black", "Navy Blue"],
            sizes: ["34", "36", "38", "40", "42", "44", "46"],
            image1: "Maroon.png",
            image2: "Black.png",
            image3: "Grey.png",
            image4: "Navy Blue.png",
            image5: "",
            image6: "",
            image7: "",
            image8: "",
            description: "Premium Men's Modi / Nehru jacket crafted in cotton for a smart and professional appearance. Available in multiple colours and sizes, making it suitable for corporate, hospitality and professional uniform requirements.",
            availability: "In Stock",
            order_type: "Bulk Order Available"
        },

        {
            id: 2,
            name: "Waiter's Coat Check-Matching – MP 480",
            slug: "waiters-coat-check-matching-mp-480",
            product_code: "MP-480",
            category: "Waiter Uniforms",
            fabric: "Premium Fabric",
            design: "Check-Matching",
            colors: ["Orange", "Red", "Gray", "Black", "Royal Blue"],
            sizes: ["34", "36", "38", "40", "42"],
            image1: "Orange.png",
            image2: "Black.png",
            image3: "Grey.png",
            image4: "Red.png",
            image5: "Royal Blue.png",
            image6: "",
            image7: "",
            image8: "",
            description: "Professional check-matching waiter's coat designed for restaurant, hotel, banquet and hospitality service staff.",
            availability: "In Stock",
            order_type: "Bulk Order Available"
        },

        {
            id: 3,
            name: "Kid's Lab Coat – Poly Tusser",
            slug: "kids-lab-coat-poly-tusser",
            product_code: "",
            category: "Lab Coats",
            fabric: "Poly Tusser",
            design: "",
            colors: [],
            sizes: ["16-18", "20-22", "24-26", "28-30"],
            image1: "img_1.png",
            image2: "",
            image3: "",
            image4: "",
            image5: "",
            image6: "",
            image7: "",
            image8: "",
            description: "Kid's Lab Coat made from Poly Tusser fabric, designed for a clean, smart and professional appearance.",
            availability: "In Stock",
            order_type: "Bulk Order Available"
        },

        {
            id: 4,
            name: "Personal Security Officer Uniforms",
            slug: "personal-security-officer-uniforms",
            product_code: "",
            category: "Security Uniforms",
            fabric: "",
            design: "",
            colors: ["Dark Grey", "Fawn", "Navy", "Black"],
            sizes: [],
            image1: "Dark Grey.png",
            image2: "Fawn.png",
            image3: "Navy.png",
            image4: "Black.png",
            image5: "",
            image6: "",
            image7: "",
            image8: "",
            description: "Professional Personal Security Officer Uniforms designed for security personnel, officers and professional security teams.",
            availability: "In Stock",
            order_type: "Bulk Order Available"
        },

        {
            id: 5,
            name: "Plain Adjustable Apron – M-195",
            slug: "plain-adjustable-apron-m-195",
            product_code: "M-195",
            category: "Aprons",
            fabric: "Micro/Tusser",
            design: "Plain Adjustable Apron",
            colors: ["Maroon", "Navy", "Yellow", "Red", "Grey", "Black", "Green", "White"],
            sizes: [],
            image1: "White.png",
            image2: "Green.png",
            image3: "Black.png",
            image4: "Grey.png",
            image5: "Red.png",
            image6: "Yellow.png",
            image7: "Navy.png",
            image8: "Maroon.png",
            description: "Professional plain adjustable apron designed for kitchen, restaurant, café, hotel and hospitality staff.",
            availability: "In Stock",
            order_type: "Bulk Order Available"
        },

        {
            id: 6,
            name: "Service Plain Apron – M-240",
            slug: "service-plain-apron-m-240",
            product_code: "M-240",
            category: "Aprons",
            fabric: "Non Denim",
            design: "Service Plain Apron",
            colors: ["Khaki", "Navy", "Black", "Red"],
            sizes: [],
            image1: "Black.png",
            image2: "Navy.png",
            image3: "Khaki.png",
            image4: "Red.png",
            image5: "",
            image6: "",
            image7: "",
            image8: "",
            description: "Professional service apron designed for restaurant, café, hotel and hospitality staff.",
            availability: "In Stock",
            order_type: "Bulk Order Available"
        },

        {
            id: 7,
            name: "Men's 4 Button Waistcoat",
            slug: "mens-4-button-waistcoat",
            product_code: "",
            category: "Corporate Waistcoats",
            fabric: "Cotton",
            design: "4 Button, 2 Pockets",
            colors: ["Black", "Grey", "Maroon", "Navy Blue", "Fawn"],
            sizes: ["36", "38", "40", "42", "44", "46"],
            image1: "Grey.png",
            image2: "Black.png",
            image3: "Maroon.png",
            image4: "Navy Blue.png",
            image5: "Fawn.png",
            image6: "",
            image7: "",
            image8: "",
            description: "Professional Men's waistcoat designed for corporate and hospitality uniform requirements.",
            availability: "In Stock",
            order_type: "Bulk Order Available"
        },

        {
            id: 8,
            name: "Black & White Check Apron – M-240",
            slug: "black-white-check-apron-m-240",
            product_code: "M-240",
            category: "Aprons",
            fabric: "Polyester",
            design: "Check Apron",
            colors: [],
            sizes: [],
            image1: "img_1.png",
            image2: "",
            image3: "",
            image4: "",
            image5: "",
            image6: "",
            image7: "",
            image8: "",
            description: "Professional check apron designed for kitchen, restaurant, café, bakery and hospitality staff.",
            availability: "In Stock",
            order_type: "Bulk Order Available"
        }, {
            id: 9,
            name: "Lining Adjustable Apron – M-240",
            slug: "lining-adjustable-apron–m-240",
            product_code: "M-240",
            category: "Aprons",
            fabric: "Polyester",
            design: "Lining Adjustable Apron",
            colors: ["Yellow on Black", "White on Black", "Grey on Black"],
            image1: "White on Black.png",
            image2: "Grey on Black.png",
            image3: "Yellow on Black.png",
            image4: "",
            image5: "",
            image6: "",
            image7: "",
            image8: "",
            image: "img_1.png",
            description: "Professional adjustable apron designed for hospitality, kitchen, restaurant and service staff. Made with durable polyester fabric for a smart, comfortable and professional appearance.",
            availability: "In Stock",
            order_type: "Bulk Order Available"
        }

    ];
</script>


<!-- =====================================================
     2) COLOR NAME → SWATCH BACKGROUND
     (sirf visual gol button ka color, actual image se ye
     link nahi hai — image link filename-matching se hota hai)
====================================================== -->
<script>
    const colorMap = {
        black: "#111111",
        maroon: "#751528",
        grey: "#777c86",
        gray: "#777c86",
        darkgrey: "#4d4d4d",
        darkgray: "#4d4d4d",
        navy: "#18264f",
        navyblue: "#18264f",
        orange: "#d9720b",
        red: "#c0392b",
        royalblue: "#1f3bb3",
        white: "#ffffff",
        green: "#06712E",
        yellow: "#f1c40f",
        khaki: "#c3b091",
        fawn: "#b9a084",
        brown: "#b9a084"
    };

    function normalizeColor(str) {
        return String(str)
            .toLowerCase()
            .replace(/[^a-z]/g, "") // remove spaces, hyphens, dots etc
            .replace(/gray/g, "grey"); // treat "gray" and "grey" as same
    }
</script>


<!-- =====================================================
     3) RENDERING LOGIC
====================================================== -->
<script>
const IMAGE_FOLDER_BASE = "assets/products_images/"; // product_<id> folder ka base path

function getSlugFromUrl(){
    const params = new URLSearchParams(window.location.search);
    return params.get("slug");
}

function getProductImages(product){
    const images = [];

    for (let i = 1; i <= 8; i++){
        const filename = product["image" + i];

        if (filename && filename.trim() !== ""){
            images.push({
                filename: filename,
                path: IMAGE_FOLDER_BASE + "product_" + product.id + "/" + filename
            });
        }
    }

    return images;
}

function findImageForColor(images, colorName){
    const target = normalizeColor(colorName);

    return images.find(function(img){
        const base = img.filename.replace(/\.[a-zA-Z0-9]+$/, "");
        return normalizeColor(base) === target;
    });
}

function renderProduct(){

    const slug = getSlugFromUrl();
    const product = products.find(function(p){ return p.slug === slug; });

    if (!product){
        document.getElementById("su-not-found").style.display = "block";
        return;
    }

    document.getElementById("su-product-container").style.display = "flex";

    const images = getProductImages(product);
    const mainImg = document.getElementById("su-main-img");

    /* HOVER ZOOM */
    const mainImageBox = document.querySelector(".su-main-image");

    if (mainImageBox && mainImg){
        mainImageBox.addEventListener("mouseenter", function(){
            if (window.innerWidth <= 921) return;
            mainImageBox.classList.add("is-zoomed");
        });

        mainImageBox.addEventListener("mousemove", function(e){
            if (window.innerWidth <= 921) return;

            const rect = mainImg.getBoundingClientRect();

            let x = ((e.clientX - rect.left) / rect.width) * 100;
            let y = ((e.clientY - rect.top) / rect.height) * 100;

            x = Math.max(0, Math.min(100, x));
            y = Math.max(0, Math.min(100, y));

            mainImg.style.transformOrigin = x + "% " + y + "%";
        });

        mainImageBox.addEventListener("mouseleave", function(){
            mainImageBox.classList.remove("is-zoomed");
            mainImg.style.transformOrigin = "center center";
        });
    }

    if (images.length > 0){
        mainImg.src = images[0].path;
        mainImg.alt = product.name;
    }

    /* THUMBNAILS */
    const thumbsBox = document.getElementById("su-thumbs");
    thumbsBox.innerHTML = "";

    images.forEach(function(img, index){
        const btn = document.createElement("button");
        btn.type = "button";
        btn.className = "su-thumb" + (index === 0 ? " active" : "");
        btn.innerHTML = `<img src="${img.path}" alt="${product.name}">`;

        btn.addEventListener("click", function(){
            mainImg.src = img.path;

            thumbsBox.querySelectorAll(".su-thumb").forEach(function(t){ t.classList.remove("active"); });
            btn.classList.add("active");

            syncColorSwatchWithImage(img);
        });

        thumbsBox.appendChild(btn);
    });

    /* TITLE, DESCRIPTION, BREADCRUMB */
    document.getElementById("su-title").textContent = product.name;
    const descEl = document.getElementById("su-desc");
    descEl.textContent = product.description || "";
    descEl.style.display = product.description && product.description.trim() ? "block" : "none";
    document.getElementById("su-breadcrumb-cat").textContent = product.category || "Uniform Collection";
    document.title = product.name + " | Shivam Uniform";

    /* DESCRIPTION / ADDITIONAL INFORMATION TABS */
    const tabsBox = document.getElementById("su-product-tabs");
    const additionalTab = document.getElementById("su-additional-tab");
    const descriptionPanel = document.getElementById("su-description-panel");
    const additionalPanel = document.getElementById("su-additional-panel");
    const descriptionTitle = document.getElementById("su-tab-description-title");
    const descriptionText = document.getElementById("su-tab-description-text");
    const additionalContent = document.getElementById("su-additional-content");

    descriptionTitle.textContent = product.name || "Product Description";
    descriptionText.textContent = product.description || "";

    const tabValidColors = (product.colors || [])
        .filter(function(c){ return c && String(c).trim() !== ""; })
        .map(function(color){ return { name: color, image: findImageForColor(images, color) }; })
        .filter(function(item){ return !!item.image; });

    const tabValidSizes = (product.sizes || [])
        .filter(function(size){ return size && String(size).trim() !== ""; });

    additionalContent.innerHTML = "";

    if (tabValidColors.length > 0){
        const colorItem = document.createElement("div");
        colorItem.className = "su-additional-item";
        colorItem.innerHTML = '<span class="su-additional-label">Available Colours</span><div class="su-additional-values"></div>';
        const values = colorItem.querySelector(".su-additional-values");
        tabValidColors.forEach(function(item){
            const value = document.createElement("span");
            value.className = "su-additional-value";
            value.textContent = item.name;
            values.appendChild(value);
        });
        additionalContent.appendChild(colorItem);
    }

    if (tabValidSizes.length > 0){
        const sizeItem = document.createElement("div");
        sizeItem.className = "su-additional-item";
        sizeItem.innerHTML = '<span class="su-additional-label">Available Sizes</span><div class="su-additional-values"></div>';
        const values = sizeItem.querySelector(".su-additional-values");
        tabValidSizes.forEach(function(size){
            const value = document.createElement("span");
            value.className = "su-additional-value";
            value.textContent = size;
            values.appendChild(value);
        });
        additionalContent.appendChild(sizeItem);
    }

    const hasAdditionalInfo = tabValidColors.length > 0 || tabValidSizes.length > 0;
    tabsBox.style.display = "block";
    additionalTab.style.display = hasAdditionalInfo ? "block" : "none";

    document.querySelectorAll("#su-product-tabs .su-tab-btn").forEach(function(tabBtn){
        tabBtn.addEventListener("click", function(){
            document.querySelectorAll("#su-product-tabs .su-tab-btn").forEach(function(btn){
                btn.classList.toggle("active", btn === tabBtn);
            });
            if (tabBtn.dataset.tab === "additional" && hasAdditionalInfo){
                descriptionPanel.style.display = "none";
                additionalPanel.style.display = "block";
            } else {
                descriptionPanel.style.display = "block";
                additionalPanel.style.display = "none";
            }
        });
    });

    /* SPECIFICATIONS LIST */
    const specs = document.getElementById("su-specs");
    specs.innerHTML = "";

    const specRows = [
        ["Category", product.category],
        ["Fabric", product.fabric],
        ["Design", product.design],
        ["Product Code", product.product_code]
    ];

    specRows.forEach(function(row){
        if (row[1] && row[1].trim() !== ""){
            const li = document.createElement("li");
            li.innerHTML = `<strong>${row[0]}:</strong> ${row[1]}`;
            specs.appendChild(li);
        }
    });

    specs.style.display = specs.children.length ? "block" : "none";

    /* COLOR SWATCHES */
    const variationsBox = document.querySelector(".su-variations");
    const colorSection = document.getElementById("su-color-section");
    const colorsBox = document.getElementById("su-colors");
    const colorNameLabel = document.getElementById("su-color-name");
    colorsBox.innerHTML = "";
    variationsBox.style.display = "none";

    const validColors = (product.colors || [])
        .filter(function(c){ return c && c.trim() !== ""; })
        .map(function(color){
            return { name: color, image: findImageForColor(images, color) };
        })
        .filter(function(item){ return !!item.image; });

    if (validColors.length > 0){

        colorSection.style.display = "block";
        variationsBox.style.display = "block";

        validColors.forEach(function(item, index){

            const color = item.name;
            const matchedImage = item.image;

            const btn = document.createElement("button");
            btn.type = "button";
            btn.className = "shivam-color-option" + (index === 0 ? " active" : "");
            btn.title = color;
            btn.setAttribute("aria-label", color);
            btn.dataset.colorName = color;

            const key = normalizeColor(color);
            if (key === "whiteonblack" || key === "blackandwhite" || key === "whiteblack") {
                btn.style.background = "linear-gradient(135deg, #ffffff 0 50%, #111111 50% 100%)";
            } else {
                btn.style.backgroundColor = colorMap[key] || "#cccccc";
            }

            btn.addEventListener("click", function(){

                colorsBox.querySelectorAll(".shivam-color-option").forEach(function(s){
                    s.classList.remove("active");
                });
                btn.classList.add("active");

                colorNameLabel.textContent = "Selected: " + color;

                if (matchedImage){
                    mainImg.src = matchedImage.path;

                    thumbsBox.querySelectorAll(".su-thumb").forEach(function(t, i){
                        t.classList.toggle("active", images[i].path === matchedImage.path);
                    });
                }
            });

            colorsBox.appendChild(btn);
        });

        // Default active color = currently shown image ka color
        let initialColor = null;
        if (images.length > 0){
            const initialItem = validColors.find(function(item){
                return item.image && item.image.path === images[0].path;
            });
            if (initialItem){
                initialColor = initialItem.name;
            }
        }

        if (!initialColor){
            initialColor = validColors[0].name;
        }

        colorsBox.querySelectorAll(".shivam-color-option").forEach(function(s){
            s.classList.toggle("active", s.dataset.colorName === initialColor);
        });

        colorNameLabel.textContent = "Selected: " + initialColor;

    } else {
        colorSection.style.display = "none";
    }

    /* SIZE BUTTONS */
    const sizeSection = document.getElementById("su-size-section");
    const sizesBox = document.getElementById("su-sizes");
    sizesBox.innerHTML = "";

    const validSizes = (product.sizes || []).filter(function(s){ return s && s.trim() !== ""; });

    if (validSizes.length > 0){

        sizeSection.style.display = "block";
        variationsBox.style.display = "block";

        validSizes.forEach(function(size){
            const btn = document.createElement("button");
            btn.type = "button";
            btn.className = "shivam-size-option";
            btn.textContent = size;

            btn.addEventListener("click", function(){
                sizesBox.querySelectorAll(".shivam-size-option").forEach(function(s){ s.classList.remove("active"); });
                btn.classList.add("active");
            });

            sizesBox.appendChild(btn);
        });

    } else {
        sizeSection.style.display = "none";
    }

    /* PRODUCT DETAILS LIST (data na ho to li / poora box hide) */
    const detailsBox = document.getElementById("su-product-details-box");

    const detailRows = [
        { id: "product_sec_name",   value: product.name },
        { id: "product_sec_design", value: product.design },
        { id: "product_sec_model",  value: product.product_code },
        { id: "product_sec_size",   value: validSizes.join(", ") },
        { id: "product_sec_color",  value: validColors.map(function(c){ return c.name; }).join(", ") }
    ];

    let hasDetails = false;

    detailRows.forEach(function(row){
        const span = document.getElementById(row.id);
        const li = document.getElementById("li_" + row.id);
        const value = row.value ? String(row.value).trim() : "";

        if (value !== ""){
            span.textContent = value;
            li.style.display = "list-item";
            hasDetails = true;
        } else {
            li.style.display = "none";
        }
    });

    detailsBox.style.display = hasDetails ? "block" : "none";

    /* META */
    document.getElementById("su-meta").innerHTML =
        `Availability: <strong>${product.availability || "In Stock"}</strong> &nbsp;|&nbsp; ${product.order_type || ""}`;

    /* WHATSAPP ENQUIRY LINK */
    const phone = "919582929878";
    const message = encodeURIComponent(
        "Hello Shivam Uniform, I am interested in " + product.name + ". Please share details for bulk order."
    );
    document.getElementById("su-whatsapp-btn").href = "https://wa.me/" + phone + "?text=" + message;

    function syncColorSwatchWithImage(img){
        const matchItem = validColors.find(function(item){
            return item.image && item.image.path === img.path;
        });

        if (matchItem){
            colorsBox.querySelectorAll(".shivam-color-option").forEach(function(s){
                s.classList.toggle("active", s.dataset.colorName === matchItem.name);
            });
            colorNameLabel.textContent = "Selected: " + matchItem.name;
        }
    }
}

document.addEventListener("DOMContentLoaded", renderProduct);
</script>