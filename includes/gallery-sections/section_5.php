<!-- =========================================================
     SHIVAM UNIFORM
     GALLERY PAGE - FINAL CLOSING SECTION
     CLEAN PREMIUM VERSION
     ELEMENTOR SAFE / RESPONSIVE

     BRAND COLORS:
     BLUE  : #001641
     GREEN : #1E712C
     WHITE : #FFFFFF
========================================================= -->

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    #shivam-gallery-closing,
    #shivam-gallery-closing * {
        box-sizing: border-box !important;
    }

    #shivam-gallery-closing {
        --blue: #001641;
        --green: #1E712C;
        --white: #FFFFFF;
        --text: #65707C;

        width: 100% !important;
        margin: 0 !important;

        padding:
            42px 20px 46px !important;

        position: relative !important;
        overflow: hidden !important;

        background:
            linear-gradient(135deg,
                #FFFFFF 0%,
                #F8FAFB 62%,
                #F3F8F4 100%) !important;

        font-family: 'Manrope', sans-serif !important;
    }


    /* BACKGROUND DECORATION */

    #shivam-gallery-closing::before {
        content: "" !important;

        position: absolute !important;

        width: 240px !important;
        height: 240px !important;

        right: -135px !important;
        top: -145px !important;

        border-radius: 50% !important;

        background:
            rgba(30, 113, 44, .045) !important;

        pointer-events: none !important;
    }

    #shivam-gallery-closing::after {
        content: "" !important;

        position: absolute !important;

        width: 180px !important;
        height: 180px !important;

        left: -100px !important;
        bottom: -110px !important;

        border-radius: 50% !important;

        border:
            1px solid rgba(0, 22, 65, .06) !important;

        pointer-events: none !important;
    }


    /* CONTAINER */

    #shivam-gallery-closing .sgc-container {
        width: 100% !important;
        max-width: 1160px !important;

        margin: 0 auto !important;

        position: relative !important;
        z-index: 2 !important;
    }


    /* HEADER */

    #shivam-gallery-closing .sgc-header {
        width: 100% !important;

        display: grid !important;

        grid-template-columns:
            minmax(0, 1fr) minmax(0, .92fr) !important;

        gap: 46px !important;

        align-items: end !important;

        margin-bottom: 22px !important;
    }


    #shivam-gallery-closing .sgc-label {
        display: inline-flex !important;

        align-items: center !important;

        gap: 9px !important;

        margin-bottom: 9px !important;

        color: var(--green) !important;

        font-size: 10px !important;
        font-weight: 800 !important;

        letter-spacing: 1.5px !important;

        text-transform: uppercase !important;
    }


    #shivam-gallery-closing .sgc-label::before {
        content: "" !important;

        width: 27px !important;
        height: 2px !important;

        border-radius: 20px !important;

        background: var(--green) !important;
    }


    #shivam-gallery-closing .sgc-title {
        margin: 0 !important;

        color: var(--blue) !important;

        font-size: 36px !important;
        font-weight: 800 !important;

        line-height: 1.16 !important;

        letter-spacing: -.9px !important;
    }


    #shivam-gallery-closing .sgc-title span {
        color: var(--green) !important;
    }


    #shivam-gallery-closing .sgc-intro {
        max-width: 540px !important;

        margin: 0 !important;

        color: var(--text) !important;

        font-size: 15px !important;

        line-height: 1.68 !important;
    }


    /* VISUAL */

    #shivam-gallery-closing .sgc-visual {
        width: 100% !important;

        display: grid !important;

        grid-template-columns:
            1.15fr .85fr !important;

        min-height: 350px !important;

        overflow: hidden !important;

        border-radius: 14px !important;

        box-shadow:
            0 14px 34px rgba(0, 22, 65, .08) !important;
    }


    /* MAIN IMAGE */

    #shivam-gallery-closing .sgc-main-image {
        position: relative !important;

        min-height: 350px !important;

        overflow: hidden !important;

        background: var(--blue) !important;
    }


    #shivam-gallery-closing .sgc-main-image img {
        width: 100% !important;
        height: 100% !important;

        position: absolute !important;
        inset: 0 !important;

        object-fit: cover !important;
        object-position: center !important;

        transition:
            transform .65s ease !important;
    }


    #shivam-gallery-closing .sgc-main-image:hover img {
        transform:
            scale(1.035) !important;
    }


    #shivam-gallery-closing .sgc-main-image::after {
        content: "" !important;

        position: absolute !important;
        inset: 0 !important;

        background:
            linear-gradient(180deg,
                rgba(0, 22, 65, .02) 25%,
                rgba(0, 22, 65, .72) 100%) !important;

        pointer-events: none !important;
    }


    /* IMAGE TEXT */

    #shivam-gallery-closing .sgc-image-copy {
        position: absolute !important;

        left: 24px !important;
        right: 24px !important;
        bottom: 22px !important;

        z-index: 3 !important;
    }


    #shivam-gallery-closing .sgc-image-copy span {
        display: block !important;

        margin-bottom: 5px !important;

        color: #86D08F !important;

        font-size: 9px !important;
        font-weight: 800 !important;

        letter-spacing: 1.25px !important;

        text-transform: uppercase !important;
    }


    #shivam-gallery-closing .sgc-image-copy h3 {
        max-width: 520px !important;

        margin: 0 !important;

        color: #FFFFFF !important;

        font-size: 24px !important;
        font-weight: 800 !important;

        line-height: 1.28 !important;
    }


    /* RIGHT PANEL */

    #shivam-gallery-closing .sgc-panel {
        min-height: 350px !important;

        padding:
            28px 26px !important;

        display: flex !important;

        flex-direction: column !important;

        justify-content: space-between !important;

        position: relative !important;
        overflow: hidden !important;

        background:
            radial-gradient(circle at 100% 0%,
                rgba(30, 113, 44, .18) 0%,
                transparent 34%),
            linear-gradient(145deg,
                #001641 0%,
                #082A3F 68%,
                #12392E 100%) !important;
    }


    #shivam-gallery-closing .sgc-panel::before {
        content: "" !important;

        position: absolute !important;

        width: 150px !important;
        height: 150px !important;

        right: -75px !important;
        top: -70px !important;

        border:
            1px solid rgba(255, 255, 255, .09) !important;

        border-radius: 50% !important;

        pointer-events: none !important;
    }


    #shivam-gallery-closing .sgc-panel-top,
    #shivam-gallery-closing .sgc-panel-bottom {
        position: relative !important;
        z-index: 2 !important;
    }


    #shivam-gallery-closing .sgc-panel-small {
        display: block !important;

        margin-bottom: 9px !important;

        color: #83CF8D !important;

        font-size: 9px !important;
        font-weight: 800 !important;

        letter-spacing: 1.3px !important;

        text-transform: uppercase !important;
    }


    #shivam-gallery-closing .sgc-panel h3 {
        margin: 0 !important;

        color: #FFFFFF !important;

        font-size: 23px !important;
        font-weight: 800 !important;

        line-height: 1.3 !important;
    }


    #shivam-gallery-closing .sgc-panel p {
        margin:
            11px 0 0 !important;

        color:
            rgba(255, 255, 255, .70) !important;

        font-size: 13.5px !important;

        line-height: 1.65 !important;
    }


    /* CONTACT */

    #shivam-gallery-closing .sgc-panel-bottom {
        padding-top: 18px !important;

        border-top:
            1px solid rgba(255, 255, 255, .11) !important;
    }


    #shivam-gallery-closing .sgc-contact {
        display: flex !important;

        align-items: center !important;

        gap: 10px !important;

        margin-bottom: 11px !important;
    }


    #shivam-gallery-closing .sgc-contact:last-child {
        margin-bottom: 0 !important;
    }


    #shivam-gallery-closing .sgc-icon {
        width: 30px !important;
        height: 30px !important;

        flex: 0 0 30px !important;

        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        border-radius: 8px !important;

        color: #FFFFFF !important;

        background: var(--green) !important;

        font-size: 12px !important;
    }


    #shivam-gallery-closing .sgc-contact span,
    #shivam-gallery-closing .sgc-contact a {
        color:
            rgba(255, 255, 255, .77) !important;

        font-size: 12.5px !important;

        line-height: 1.5 !important;

        text-decoration: none !important;
    }


    #shivam-gallery-closing .sgc-contact a:hover {
        color: #89D594 !important;
    }


    /* CTA BUTTON */

    #shivam-gallery-closing .sgc-btn {
        display: inline-flex !important;

        align-items: center !important;
        justify-content: center !important;

        gap: 8px !important;

        margin-top: 16px !important;

        min-height: 43px !important;

        padding:
            0 16px !important;

        border-radius: 7px !important;

        background: var(--green) !important;

        color: #FFFFFF !important;

        text-decoration: none !important;

        font-size: 12px !important;
        font-weight: 800 !important;

        transition:
            transform .25s ease,
            background .25s ease !important;
    }


    #shivam-gallery-closing .sgc-btn:hover {
        transform:
            translateY(-2px) !important;

        background: #165C23 !important;

        color: #FFFFFF !important;
    }


    /* BOTTOM LINE */

    #shivam-gallery-closing .sgc-line {
        width: 110px !important;
        height: 3px !important;

        margin:
            18px auto 0 !important;

        border-radius: 20px !important;

        background: var(--green) !important;
    }


    /* TABLET */

    @media(max-width:950px) {

        #shivam-gallery-closing {
            padding:
                38px 18px 42px !important;
        }


        #shivam-gallery-closing .sgc-header {
            gap: 32px !important;
        }


        #shivam-gallery-closing .sgc-title {
            font-size: 32px !important;
        }


        #shivam-gallery-closing .sgc-intro {
            font-size: 14px !important;
        }


        #shivam-gallery-closing .sgc-visual {
            grid-template-columns:
                1.05fr .95fr !important;
        }


        #shivam-gallery-closing .sgc-image-copy h3,
        #shivam-gallery-closing .sgc-panel h3 {
            font-size: 21px !important;
        }

    }


    /* MOBILE */

    @media(max-width:700px) {

        #shivam-gallery-closing {
            padding:
                34px 14px 38px !important;
        }


        #shivam-gallery-closing .sgc-header {
            grid-template-columns: 1fr !important;

            gap: 10px !important;

            margin-bottom: 19px !important;

            text-align: center !important;
        }


        #shivam-gallery-closing .sgc-label {
            justify-content: center !important;

            font-size: 9px !important;
        }


        #shivam-gallery-closing .sgc-label::before {
            width: 20px !important;
        }


        #shivam-gallery-closing .sgc-title {
            font-size: 29px !important;

            line-height: 1.18 !important;
        }


        #shivam-gallery-closing .sgc-intro {
            max-width: 500px !important;

            margin: 0 auto !important;

            font-size: 13.5px !important;

            line-height: 1.65 !important;
        }


        #shivam-gallery-closing .sgc-visual {
            grid-template-columns: 1fr !important;

            min-height: auto !important;

            border-radius: 11px !important;
        }


        #shivam-gallery-closing .sgc-main-image {
            min-height: 280px !important;
        }


        #shivam-gallery-closing .sgc-image-copy {
            left: 17px !important;
            right: 17px !important;
            bottom: 17px !important;
        }


        #shivam-gallery-closing .sgc-image-copy h3 {
            font-size: 19px !important;
        }


        #shivam-gallery-closing .sgc-panel {
            min-height: auto !important;

            padding:
                23px 19px !important;
        }


        #shivam-gallery-closing .sgc-panel h3 {
            font-size: 20px !important;
        }


        #shivam-gallery-closing .sgc-panel p {
            font-size: 13px !important;

            line-height: 1.62 !important;
        }

    }
</style>


<section id="shivam-gallery-closing">

    <div class="sgc-container">


        <!-- HEADER -->

        <div class="sgc-header">

            <div>

                <div class="sgc-label">
                    Shivam Uniform
                </div>

                <h2 class="sgc-title">

                    More Than a Gallery —

                    <span>
                        See How Uniforms Build Identity
                    </span>

                </h2>

            </div>


            <p class="sgc-intro">

                Our gallery reflects uniform styles for schools,
                workplaces, hospitality, industrial and service teams,
                with a focus on comfort, practicality and professional presentation.

            </p>

        </div>



        <!-- VISUAL -->

        <div class="sgc-visual">


            <!-- IMAGE -->

            <div class="sgc-main-image">

                <img
                    src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1400&q=90"
                    alt="Professional uniform team"
                    loading="lazy">


                <div class="sgc-image-copy">

                    <span>
                        Uniforms That Represent Your Team
                    </span>

                    <h3>
                        Professional in Appearance,
                        Practical for Everyday Use.
                    </h3>

                </div>

            </div>



            <!-- RIGHT PANEL -->

            <div class="sgc-panel">


                <div class="sgc-panel-top">

                    <span class="sgc-panel-small">
                        Need a Uniform Solution?
                    </span>

                    <h3>
                        Let’s Discuss Your Team’s Uniform Requirement.
                    </h3>

                    <p>
                        Share your organisation type, uniform category
                        and basic requirement. Our team can help you
                        explore a suitable uniform direction.
                    </p>


                    <a
                        href="contact.php"
                        class="sgc-btn">
                        Contact Us
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>



                <div class="sgc-panel-bottom">


                    <div class="sgc-contact">

                        <div class="sgc-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <span>
                            Ballabgarh, Faridabad
                        </span>

                    </div>


                    <div class="sgc-contact">

                        <div class="sgc-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <a href="mailto:shivamuniform605@gmail.com">
                            shivamuniform605@gmail.com
                        </a>

                    </div>


                </div>


            </div>


        </div>


        <div class="sgc-line"></div>


    </div>

</section>