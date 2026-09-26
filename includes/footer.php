<!-- =========================================================
 SHIVAM UNIFORM - FINAL PREMIUM RESPONSIVE FOOTER
 WHITE LOGO VERSION

 BRAND COLORS:
 Blue  : #001641
 Green : #1E712C
 White : #FFFFFF
========================================================= -->

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

<style>
    #shivam-uniform-footer-final,
    #shivam-uniform-footer-final * {
        box-sizing: border-box !important;
    }

    #shivam-uniform-footer-final {
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;

        font-family: "Inter", "Segoe UI", Arial, sans-serif !important;

        background: #001641 !important;
        color: #FFFFFF !important;

        position: relative !important;
        overflow: hidden !important;

        isolation: isolate;
    }

    #shivam-uniform-footer-final a {
        text-decoration: none !important;
    }


    /* =========================================================
   TOP GREEN LINE
========================================================= */

    #shivam-uniform-footer-final .suf-footer-top-line {
        width: 100% !important;
        height: 4px !important;

        margin: 0 !important;
        padding: 0 !important;

        background: #1E712C !important;
    }


    /* =========================================================
   MAIN FOOTER
========================================================= */

    #shivam-uniform-footer-final .suf-footer-main {
        width: 100% !important;

        background:
            linear-gradient(135deg,
                #001641 0%,
                #001B4A 62%,
                #0B2F34 100%) !important;
    }


    #shivam-uniform-footer-final .suf-footer-container {
        width: 100% !important;
        max-width: 1400px !important;

        margin: 0 auto !important;

        padding:
            58px 40px 44px !important;

        display: grid !important;

        grid-template-columns:
            1.35fr .8fr 1fr 1.15fr !important;

        gap: 48px !important;
    }


    /* =========================================================
   BRAND
========================================================= */

    #shivam-uniform-footer-final .suf-footer-brand {
        min-width: 0 !important;
    }


    #shivam-uniform-footer-final .suf-footer-logo-link {
        display: inline-flex !important;

        align-items: center !important;

        margin: 0 0 20px !important;
        padding: 0 !important;

        background: transparent !important;
    }


    /* =========================================================
   WHITE LOGO
========================================================= */

    #shivam-uniform-footer-final .suf-footer-logo {
        display: block !important;

        width: auto !important;
        max-width: 195px !important;
        height: 76px !important;

        margin: 0 !important;
        padding: 0 !important;

        object-fit: contain !important;

        opacity: 1 !important;

        /*
       Turns full transparent PNG logo into white
    */
        filter:
            brightness(0) invert(1) !important;

        -webkit-filter:
            brightness(0) invert(1) !important;

        transition:
            opacity .25s ease,
            transform .25s ease !important;
    }


    #shivam-uniform-footer-final .suf-footer-logo-link:hover .suf-footer-logo {

        opacity: .88 !important;

        transform:
            translateY(-2px) !important;
    }


    /* ABOUT */

    #shivam-uniform-footer-final .suf-footer-about {
        margin: 0 !important;
        padding: 0 !important;

        max-width: 410px !important;

        color: rgba(255, 255, 255, .82) !important;

        font-size: 16px !important;
        font-weight: 400 !important;

        line-height: 1.8 !important;
    }


    #shivam-uniform-footer-final .suf-brand-divider {
        width: 55px !important;
        height: 3px !important;

        margin: 22px 0 0 !important;

        background: #1E712C !important;

        border-radius: 20px !important;
    }


    /* =========================================================
   HEADINGS
========================================================= */

    #shivam-uniform-footer-final .suf-footer-heading {
        position: relative !important;

        margin: 0 0 24px !important;

        padding:
            0 0 13px !important;

        color: #FFFFFF !important;

        font-size: 19px !important;
        font-weight: 800 !important;

        line-height: 1.2 !important;
    }


    #shivam-uniform-footer-final .suf-footer-heading::after {
        content: "" !important;

        position: absolute !important;

        left: 0 !important;
        bottom: 0 !important;

        width: 40px !important;
        height: 3px !important;

        background: #1E712C !important;

        border-radius: 30px !important;
    }


    /* =========================================================
   FOOTER LINKS
========================================================= */

    #shivam-uniform-footer-final .suf-footer-list {
        list-style: none !important;

        margin: 0 !important;
        padding: 0 !important;

        display: flex !important;
        flex-direction: column !important;

        gap: 14px !important;
    }


    #shivam-uniform-footer-final .suf-footer-list li {
        margin: 0 !important;
        padding: 0 !important;
    }


    #shivam-uniform-footer-final .suf-footer-list a {
        display: inline-flex !important;

        align-items: center !important;

        gap: 10px !important;

        margin: 0 !important;
        padding: 0 !important;

        color: rgba(255, 255, 255, .82) !important;

        background: transparent !important;

        font-size: 15.5px !important;
        font-weight: 500 !important;

        line-height: 1.5 !important;

        transition:
            color .25s ease,
            transform .25s ease !important;
    }


    #shivam-uniform-footer-final .suf-footer-list a::before {
        content: "" !important;

        width: 7px !important;
        height: 7px !important;

        flex: 0 0 7px !important;

        background: #1E712C !important;

        border-radius: 50% !important;
    }


    #shivam-uniform-footer-final .suf-footer-list a:hover {
        color: #7FD08B !important;

        transform:
            translateX(4px) !important;
    }


    /* =========================================================
   CONTACT
========================================================= */

    #shivam-uniform-footer-final .suf-contact-list {
        display: flex !important;
        flex-direction: column !important;

        gap: 22px !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    #shivam-uniform-footer-final .suf-contact-item {
        display: flex !important;

        align-items: flex-start !important;

        gap: 15px !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    #shivam-uniform-footer-final .suf-contact-icon {
        width: 50px !important;
        height: 50px !important;

        flex: 0 0 50px !important;

        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        background: #1E712C !important;

        color: #FFFFFF !important;

        border-radius: 12px !important;

        transition:
            transform .25s ease,
            background .25s ease !important;
    }


    #shivam-uniform-footer-final .suf-contact-icon i {
        color: #FFFFFF !important;

        font-size: 22px !important;

        line-height: 1 !important;
    }


    #shivam-uniform-footer-final .suf-contact-item:hover .suf-contact-icon {

        transform:
            translateY(-2px) !important;

        background: #27823A !important;
    }


    #shivam-uniform-footer-final .suf-contact-content {
        min-width: 0 !important;
    }


    #shivam-uniform-footer-final .suf-contact-label {
        display: block !important;

        margin: 0 0 4px !important;
        padding: 0 !important;

        color: #7FD08B !important;

        font-size: 13px !important;
        font-weight: 700 !important;

        text-transform: uppercase !important;

        letter-spacing: .6px !important;

        line-height: 1.3 !important;
    }


    #shivam-uniform-footer-final .suf-contact-text,
    #shivam-uniform-footer-final .suf-contact-text a {
        margin: 0 !important;
        padding: 0 !important;

        color: rgba(255, 255, 255, .84) !important;

        background: transparent !important;

        font-size: 15.5px !important;
        font-weight: 500 !important;

        line-height: 1.7 !important;
    }


    #shivam-uniform-footer-final .suf-contact-text a {
        word-break: break-word !important;
    }


    #shivam-uniform-footer-final .suf-contact-text a:hover {
        color: #7FD08B !important;
    }


    /* =========================================================
   BOTTOM BAR
========================================================= */

    #shivam-uniform-footer-final .suf-footer-bottom {
        width: 100% !important;

        background: #001641 !important;

        border-top:
            1px solid rgba(255, 255, 255, .14) !important;
    }


    #shivam-uniform-footer-final .suf-footer-bottom-inner {
        width: 100% !important;
        max-width: 1400px !important;

        margin: 0 auto !important;

        padding:
            20px 40px !important;

        display: flex !important;

        align-items: center !important;
        justify-content: space-between !important;

        gap: 24px !important;
    }


    #shivam-uniform-footer-final .suf-copyright {
        margin: 0 !important;
        padding: 0 !important;

        color: rgba(255, 255, 255, .76) !important;

        font-size: 14px !important;
        font-weight: 500 !important;

        line-height: 1.5 !important;
    }


    #shivam-uniform-footer-final .suf-bottom-links {
        display: flex !important;

        align-items: center !important;
        flex-wrap: wrap !important;

        gap:
            10px 18px !important;
    }


    #shivam-uniform-footer-final .suf-bottom-links a {
        color: rgba(255, 255, 255, .76) !important;

        background: transparent !important;

        font-size: 14px !important;
        font-weight: 500 !important;

        transition:
            color .25s ease !important;
    }


    #shivam-uniform-footer-final .suf-bottom-links a:hover {
        color: #7FD08B !important;
    }


    #shivam-uniform-footer-final .suf-legal-separator {
        width: 5px !important;
        height: 5px !important;

        flex: 0 0 5px !important;

        background: #1E712C !important;

        border-radius: 50% !important;
    }


    /* =========================================================
   TABLET
========================================================= */

    @media(max-width:991px) {

        #shivam-uniform-footer-final .suf-footer-container {

            padding:
                48px 24px 38px !important;

            grid-template-columns:
                1fr 1fr !important;

            gap:
                40px 36px !important;
        }


        #shivam-uniform-footer-final .suf-footer-bottom-inner {

            padding:
                19px 24px !important;
        }

    }


    /* =========================================================
   MOBILE
========================================================= */

    @media(max-width:600px) {

        #shivam-uniform-footer-final .suf-footer-container {

            padding:
                40px 16px 32px !important;

            grid-template-columns:
                1fr !important;

            gap: 34px !important;
        }


        #shivam-uniform-footer-final .suf-footer-logo {

            height: 64px !important;

            max-width: 170px !important;
        }


        #shivam-uniform-footer-final .suf-footer-about {

            max-width: 100% !important;

            font-size: 15px !important;

            line-height: 1.75 !important;
        }


        #shivam-uniform-footer-final .suf-footer-heading {

            font-size: 18px !important;

            margin-bottom: 20px !important;
        }


        #shivam-uniform-footer-final .suf-footer-list a {

            font-size: 15px !important;
        }


        #shivam-uniform-footer-final .suf-contact-icon {

            width: 46px !important;
            height: 46px !important;

            flex: 0 0 46px !important;
        }


        #shivam-uniform-footer-final .suf-contact-icon i {

            font-size: 20px !important;
        }


        #shivam-uniform-footer-final .suf-contact-text,
        #shivam-uniform-footer-final .suf-contact-text a {

            font-size: 15px !important;
        }


        #shivam-uniform-footer-final .suf-footer-bottom-inner {

            padding:
                18px 16px !important;

            flex-direction: column !important;

            align-items: flex-start !important;

            gap: 13px !important;
        }


        #shivam-uniform-footer-final .suf-bottom-links {

            gap:
                10px 12px !important;
        }

    }


    /* =========================================================
   SMALL MOBILE
========================================================= */

    @media(max-width:360px) {

        #shivam-uniform-footer-final .suf-footer-container {

            padding-left: 12px !important;
            padding-right: 12px !important;
        }


        #shivam-uniform-footer-final .suf-footer-bottom-inner {

            padding-left: 12px !important;
            padding-right: 12px !important;
        }

    }
</style>


<footer id="shivam-uniform-footer-final">


    <!-- GREEN TOP LINE -->

    <div class="suf-footer-top-line"></div>



    <div class="suf-footer-main">


        <div class="suf-footer-container">


            <!-- =================================================
                 BRAND
            ================================================== -->

            <div class="suf-footer-brand">


                <a
                    href="index.php"
                    class="suf-footer-logo-link"
                    aria-label="Shivam Uniform Home">

                    <img
                        src="https://shivamuniform.hiralgems.com/wp-content/uploads/2026/09/shivam_uniform_logo-removebg-preview.png"
                        alt="Shivam Uniform"
                        class="suf-footer-logo">

                </a>


                <p class="suf-footer-about">

                    Shivam Uniform provides quality uniforms for
                    schools, industries, corporates, security staff,
                    housekeeping, hotels, events and more. We focus
                    on comfort, durability and a professional finish
                    for every uniform requirement.

                </p>


                <div class="suf-brand-divider"></div>


            </div>



            <!-- =================================================
                 QUICK LINKS
            ================================================== -->

            <div>


                <h3 class="suf-footer-heading">
                    Quick Links
                </h3>


                <ul class="suf-footer-list">


                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>


                    <li>
                        <a href="about.php">
                            About
                        </a>
                    </li>


                    <li>
                        <a href="gallary.php">
                            Gallery
                        </a>
                    </li>


                    <li>
                        <a href="contact.php">
                            Contact Us
                        </a>
                    </li>


                    <li>
                        <a href="/privacy-policy/">
                            Privacy Policy
                        </a>
                    </li>


                    <li>
                        <a href="/terms-and-conditions/">
                            Terms & Conditions
                        </a>
                    </li>


                </ul>


            </div>



            <!-- =================================================
                 CATEGORIES
            ================================================== -->

            <div>


                <h3 class="suf-footer-heading">
                    Uniform Categories
                </h3>


                <ul class="suf-footer-list">


                    <li>
                        <a href="#">
                            School Uniform
                        </a>
                    </li>


                    <li>
                        <a href="#">
                            Industrial Uniform
                        </a>
                    </li>


                    <li>
                        <a href="#">
                            Corporate Uniform
                        </a>
                    </li>


                    <li>
                        <a href="#">
                            Security Uniform
                        </a>
                    </li>


                    <li>
                        <a href="#">
                            Housekeeping Uniform
                        </a>
                    </li>


                    <li>
                        <a href="#">
                            Hotel Uniform
                        </a>
                    </li>


                    <li>
                        <a href="#">
                            Event Uniform
                        </a>
                    </li>


                </ul>


            </div>



            <!-- =================================================
                 CONTACT
            ================================================== -->

            <div>


                <h3 class="suf-footer-heading">
                    Contact Us
                </h3>


                <div class="suf-contact-list">


                    <!-- ADDRESS -->

                    <div class="suf-contact-item">


                        <div class="suf-contact-icon">

                            <i class="fa-solid fa-location-dot"></i>

                        </div>


                        <div class="suf-contact-content">


                            <span class="suf-contact-label">
                                Address
                            </span>


                            <div class="suf-contact-text">
<?php echo htmlspecialchars($global_info['footer_address'] ?? ''); ?>

                            </div>


                        </div>


                    </div>



                    <!-- EMAIL -->

                    <div class="suf-contact-item">


                        <div class="suf-contact-icon">

                            <i class="fa-solid fa-envelope"></i>

                        </div>


                        <div class="suf-contact-content">


                            <span class="suf-contact-label">
                                Email
                            </span>


                            <div class="suf-contact-text">

                                <a href="mailto:shivamuniform605@gmail.com">

                                    <?php echo htmlspecialchars($global_info['footer_email_1'] ?? ''); ?>

                                </a>

                            </div>


                        </div>


                    </div>



                    <!-- PHONE -->

                    <div class="suf-contact-item">


                        <div class="suf-contact-icon">

                            <i class="fa-solid fa-phone"></i>

                        </div>


                        <div class="suf-contact-content">


                            <span class="suf-contact-label">
                                Phone
                            </span>


                            <div class="suf-contact-text">

                                <a href="tel:+919582929878">

                                    <?php echo htmlspecialchars($global_info['globle_call_phone'] ?? ''); ?>

                                </a>

                            </div>


                        </div>


                    </div>


                </div>


            </div>


        </div>


    </div>



    <!-- =================================================
         BOTTOM BAR
    ================================================== -->

    <div class="suf-footer-bottom">


        <div class="suf-footer-bottom-inner">


            <p class="suf-copyright">

                © <span id="sufCurrentYear"></span>
                Shivam Uniform. All Rights Reserved.

            </p>



            <div class="suf-bottom-links">


                <a href="/privacy-policy/">
                    Privacy Policy
                </a>


                <span class="suf-legal-separator"></span>


                <a href="/terms-and-conditions/">
                    Terms & Conditions
                </a>


                <span class="suf-legal-separator"></span>


                <a href="contact.php">
                    Contact Us
                </a>


            </div>


        </div>


    </div>


</footer>


<script>
    (function() {

        "use strict";

        const yearElement =
            document.getElementById(
                "sufCurrentYear"
            );


        if (yearElement) {

            yearElement.textContent =
                new Date().getFullYear();

        }

    })();
</script>