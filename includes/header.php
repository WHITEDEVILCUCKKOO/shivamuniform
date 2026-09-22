<!-- =========================================================
     SHIVAM UNIFORM
     FINAL COMPACT PREMIUM HEADER
     WITH SUBTLE BACKGROUND DESIGN

     BRAND:
     BLUE  : #001641
     GREEN : #1E712C
     WHITE : #FFFFFF
========================================================= -->

<link rel="icon" type="image/x-icon" href="assets/logos/favicon.jpeg">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    #shivam-header,
    #shivam-header *,
    #shivam-header *::before,
    #shivam-header *::after {
        box-sizing: border-box !important;
    }

    #shivam-header {
        --blue: #001641;
        --green: #1E712C;
        --white: #FFFFFF;

        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;

        position: sticky !important;
        top: 0 !important;

        z-index: 999999 !important;

        background: #FFFFFF !important;

        font-family: 'Manrope', sans-serif !important;

        isolation: isolate !important;
    }


    /* WP ADMIN BAR */

    body.admin-bar #shivam-header {
        top: 32px !important;
    }

    @media(max-width:782px) {

        body.admin-bar #shivam-header {
            top: 46px !important;
        }

    }


    /* =========================================================
   HEADER SHELL
========================================================= */

    #shivam-header .sh-shell {
        width: 100% !important;

        position: relative !important;

        overflow: hidden !important;

        border-bottom:
            1px solid rgba(0, 22, 65, .07) !important;

        box-shadow:
            0 4px 18px rgba(0, 22, 65, .055) !important;

        transition:
            box-shadow .3s ease !important;

        /*
      SUBTLE PREMIUM BACKGROUND DESIGN
    */
        background:
            radial-gradient(circle at 10% 50%,
                rgba(30, 113, 44, .07) 0%,
                rgba(30, 113, 44, .03) 22%,
                transparent 42%),
            radial-gradient(circle at 88% 0%,
                rgba(0, 22, 65, .055) 0%,
                rgba(0, 22, 65, .02) 24%,
                transparent 45%),
            linear-gradient(90deg,
                #FFFFFF 0%,
                #FBFDFC 48%,
                #F7FAF8 100%) !important;
    }


    /* subtle decorative shape */

    #shivam-header .sh-shell::before {
        content: "" !important;

        position: absolute !important;

        width: 180px !important;
        height: 180px !important;

        right: -95px !important;
        top: -115px !important;

        border-radius: 50% !important;

        border:
            1px solid rgba(30, 113, 44, .08) !important;

        background:
            rgba(30, 113, 44, .015) !important;

        pointer-events: none !important;

        z-index: 0 !important;
    }


    /* small diagonal detail */

    #shivam-header .sh-shell::after {
        content: "" !important;

        position: absolute !important;

        width: 120px !important;
        height: 1px !important;

        left: 28% !important;
        top: 15px !important;

        background:
            linear-gradient(90deg,
                transparent,
                rgba(30, 113, 44, .16),
                transparent) !important;

        transform:
            rotate(-12deg) !important;

        pointer-events: none !important;

        z-index: 0 !important;
    }


    #shivam-header.sh-scrolled .sh-shell {
        box-shadow:
            0 8px 24px rgba(0, 22, 65, .10) !important;
    }


    /* =========================================================
   INNER
========================================================= */

    #shivam-header .sh-inner {
        width: 100% !important;
        max-width: 1360px !important;

        min-height: 72px !important;

        margin: 0 auto !important;

        padding:
            0 34px !important;

        display: flex !important;

        align-items: center !important;
        justify-content: space-between !important;

        gap: 32px !important;

        position: relative !important;
        z-index: 2 !important;

        transition:
            min-height .3s ease !important;
    }


    #shivam-header.sh-scrolled .sh-inner {
        min-height: 64px !important;
    }


    /* =========================================================
   LOGO
========================================================= */

    #shivam-header .sh-logo-link {
        display: flex !important;

        align-items: center !important;

        flex: 0 0 auto !important;

        margin: 0 !important;
        padding: 0 !important;

        text-decoration: none !important;

        background: transparent !important;
    }


    #shivam-header .sh-logo {
        display: block !important;

        width: auto !important;
        height: 52px !important;
        max-width: 155px !important;

        object-fit: contain !important;

        margin: 0 !important;
        padding: 0 !important;

        border: 0 !important;

        filter: none !important;

        transition:
            height .3s ease,
            transform .25s ease !important;
    }


    #shivam-header .sh-logo-link:hover .sh-logo {
        transform:
            translateY(-1px) !important;
    }


    #shivam-header.sh-scrolled .sh-logo {
        height: 47px !important;
    }


    /* =========================================================
   DESKTOP NAV
========================================================= */

    #shivam-header .sh-nav {
        display: flex !important;

        align-items: center !important;

        gap: 5px !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    #shivam-header .sh-nav-link,
    #shivam-header .sh-nav-link:link,
    #shivam-header .sh-nav-link:visited {
        min-height: 42px !important;

        position: relative !important;

        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        padding:
            0 14px !important;

        margin: 0 !important;

        color: var(--blue) !important;

        -webkit-text-fill-color:
            var(--blue) !important;

        background: transparent !important;

        border: 0 !important;

        text-decoration: none !important;

        font-family: 'Manrope', sans-serif !important;

        font-size: 13.5px !important;
        font-weight: 700 !important;

        line-height: 1 !important;

        transition:
            color .25s ease,
            transform .25s ease !important;
    }


    /* underline */

    #shivam-header .sh-nav-link::after {
        content: "" !important;

        position: absolute !important;

        left: 50% !important;
        bottom: 3px !important;

        width: 0 !important;
        height: 2px !important;

        transform:
            translateX(-50%) !important;

        border-radius: 20px !important;

        background: var(--green) !important;

        transition:
            width .25s ease !important;
    }


    #shivam-header .sh-nav-link:hover,
    #shivam-header .sh-nav-link:focus {
        color: var(--green) !important;

        -webkit-text-fill-color:
            var(--green) !important;

        background: transparent !important;

        text-decoration: none !important;

        transform:
            translateY(-1px) !important;
    }


    #shivam-header .sh-nav-link:hover::after,
    #shivam-header .sh-nav-link:focus::after {
        width:
            calc(100% - 28px) !important;
    }


    #shivam-header .sh-nav-link.sh-active,
    #shivam-header .sh-nav-link[aria-current="page"] {
        color: var(--green) !important;

        -webkit-text-fill-color:
            var(--green) !important;
    }


    #shivam-header .sh-nav-link.sh-active::after,
    #shivam-header .sh-nav-link[aria-current="page"]::after {
        width:
            calc(100% - 28px) !important;
    }


    /* =========================================================
   CONTACT BUTTON
========================================================= */

    #shivam-header .sh-contact-btn,
    #shivam-header .sh-contact-btn:visited {
        min-height: 40px !important;

        display: inline-flex !important;

        align-items: center !important;
        justify-content: center !important;

        margin-left: 7px !important;

        padding:
            0 17px !important;

        border-radius: 7px !important;

        background:
            linear-gradient(135deg,
                #1E712C 0%,
                #2A8440 100%) !important;

        color: #FFFFFF !important;

        -webkit-text-fill-color: #FFFFFF !important;

        border:
            1px solid #1E712C !important;

        text-decoration: none !important;

        font-size: 13px !important;
        font-weight: 700 !important;

        box-shadow:
            0 5px 14px rgba(30, 113, 44, .16) !important;

        transition:
            transform .25s ease,
            box-shadow .25s ease !important;
    }


    #shivam-header .sh-contact-btn:hover {
        transform:
            translateY(-2px) !important;

        box-shadow:
            0 8px 18px rgba(30, 113, 44, .22) !important;

        color: #FFFFFF !important;

        -webkit-text-fill-color: #FFFFFF !important;
    }


    /* =========================================================
   SCROLL PROGRESS
========================================================= */

    #shivam-header .sh-progress {
        position: absolute !important;

        left: 0 !important;
        bottom: 0 !important;

        width: 100% !important;
        height: 2px !important;

        overflow: hidden !important;

        pointer-events: none !important;

        background:
            rgba(30, 113, 44, .07) !important;

        z-index: 5 !important;
    }


    #shivam-header .sh-progress-line {
        width: 100% !important;
        height: 100% !important;

        background: #1E712C !important;

        transform:
            scaleX(0) !important;

        transform-origin:
            left center !important;

        will-change: transform !important;
    }


    /* =========================================================
   MOBILE BUTTON
========================================================= */

    #shivam-header .sh-menu-btn {
        display: none !important;

        width: 39px !important;
        height: 39px !important;

        min-width: 39px !important;

        padding: 0 !important;

        align-items: center !important;
        justify-content: center !important;

        border:
            1px solid rgba(0, 22, 65, .18) !important;

        border-radius: 8px !important;

        background:
            rgba(255, 255, 255, .92) !important;

        cursor: pointer !important;

        box-shadow: none !important;

        transition:
            border-color .25s ease,
            background .25s ease !important;
    }


    #shivam-header .sh-menu-btn:hover {
        border-color:
            var(--green) !important;

        background:
            rgba(30, 113, 44, .04) !important;
    }


    #shivam-header .sh-menu-icon {
        width: 20px !important;
        height: 15px !important;

        position: relative !important;

        display: block !important;
    }


    #shivam-header .sh-bar {
        position: absolute !important;

        left: 0 !important;

        width: 20px !important;
        height: 2px !important;

        border-radius: 20px !important;

        background:
            var(--blue) !important;

        transition:
            .3s ease !important;
    }


    #shivam-header .sh-bar:nth-child(1) {
        top: 0 !important;
    }

    #shivam-header .sh-bar:nth-child(2) {
        top: 6.5px !important;

        background:
            var(--green) !important;
    }

    #shivam-header .sh-bar:nth-child(3) {
        top: 13px !important;
    }


    /* open */

    #shivam-header .sh-menu-btn.open .sh-bar:nth-child(1) {
        top: 6.5px !important;

        transform:
            rotate(45deg) !important;
    }


    #shivam-header .sh-menu-btn.open .sh-bar:nth-child(2) {
        opacity: 0 !important;
    }


    #shivam-header .sh-menu-btn.open .sh-bar:nth-child(3) {
        top: 6.5px !important;

        transform:
            rotate(-45deg) !important;
    }


    /* =========================================================
   MOBILE MENU
========================================================= */

    #shivam-header .sh-mobile-menu {
        display: none !important;
    }


    @media(max-width:991px) {

        #shivam-header .sh-inner {
            min-height: 68px !important;

            padding:
                0 20px !important;
        }


        #shivam-header.sh-scrolled .sh-inner {
            min-height: 62px !important;
        }


        #shivam-header .sh-logo {
            height: 48px !important;

            max-width: 145px !important;
        }


        #shivam-header.sh-scrolled .sh-logo {
            height: 44px !important;
        }


        #shivam-header .sh-nav {
            display: none !important;
        }


        #shivam-header .sh-menu-btn {
            display: flex !important;
        }


        #shivam-header .sh-mobile-menu {
            display: block !important;

            position: absolute !important;

            top: 68px !important;
            left: 0 !important;

            width: 100% !important;

            background:
                linear-gradient(180deg,
                    #FFFFFF 0%,
                    #F8FBF9 100%) !important;

            border-bottom:
                2px solid var(--green) !important;

            box-shadow:
                0 14px 28px rgba(0, 22, 65, .10) !important;

            opacity: 0 !important;
            visibility: hidden !important;

            transform:
                translateY(-7px) !important;

            pointer-events: none !important;

            transition:
                opacity .25s ease,
                visibility .25s ease,
                transform .25s ease,
                top .3s ease !important;

            z-index: 50 !important;
        }


        #shivam-header.sh-scrolled .sh-mobile-menu {
            top: 62px !important;
        }


        #shivam-header .sh-mobile-menu.open {
            opacity: 1 !important;

            visibility: visible !important;

            transform:
                translateY(0) !important;

            pointer-events: auto !important;
        }


        #shivam-header .sh-mobile-nav {
            display: flex !important;

            flex-direction: column !important;

            width: 100% !important;

            padding:
                8px 20px 12px !important;
        }


        #shivam-header .sh-mobile-link,
        #shivam-header .sh-mobile-link:visited {
            width: 100% !important;

            min-height: 47px !important;

            display: flex !important;

            align-items: center !important;
            justify-content: space-between !important;

            padding:
                0 5px !important;

            color: var(--blue) !important;

            -webkit-text-fill-color:
                var(--blue) !important;

            border-bottom:
                1px solid rgba(0, 22, 65, .08) !important;

            text-decoration: none !important;

            font-size: 13.5px !important;
            font-weight: 700 !important;

            background: transparent !important;
        }


        #shivam-header .sh-mobile-link:last-child {
            border-bottom: 0 !important;
        }


        #shivam-header .sh-mobile-link:hover,
        #shivam-header .sh-mobile-link.sh-active,
        #shivam-header .sh-mobile-link[aria-current="page"] {
            color: var(--green) !important;

            -webkit-text-fill-color:
                var(--green) !important;
        }


        #shivam-header .sh-mobile-arrow {
            color: var(--green) !important;

            -webkit-text-fill-color:
                var(--green) !important;

            font-size: 20px !important;
        }

    }


    /* =========================================================
   MOBILE
========================================================= */

    @media(max-width:600px) {

        #shivam-header .sh-shell::before {
            width: 130px !important;
            height: 130px !important;

            right: -80px !important;
            top: -80px !important;
        }


        #shivam-header .sh-shell::after {
            display: none !important;
        }


        #shivam-header .sh-inner {
            min-height: 62px !important;

            padding:
                0 14px !important;
        }


        #shivam-header.sh-scrolled .sh-inner {
            min-height: 58px !important;
        }


        #shivam-header .sh-logo {
            height: 43px !important;

            max-width: 132px !important;
        }


        #shivam-header.sh-scrolled .sh-logo {
            height: 40px !important;
        }


        #shivam-header .sh-menu-btn {
            width: 37px !important;
            height: 37px !important;

            min-width: 37px !important;
        }


        #shivam-header .sh-mobile-menu {
            top: 62px !important;
        }


        #shivam-header.sh-scrolled .sh-mobile-menu {
            top: 58px !important;
        }


        #shivam-header .sh-mobile-nav {
            padding:
                7px 14px 10px !important;
        }

    }
</style>


<header id="shivam-header">

    <div class="sh-shell">


        <div class="sh-inner">


            <!-- LOGO -->

            <a
                href="index.php"
                class="sh-logo-link"
                aria-label="Shivam Uniform Home">

                <img
                    class="sh-logo"
                    src="https://shivamuniform.hiralgems.com/wp-content/uploads/2026/09/shivam_uniform_logo-removebg-preview.png"
                    alt="Shivam Uniform">

            </a>



            <!-- DESKTOP NAV -->

            <nav
                class="sh-nav"
                aria-label="Primary Navigation">

                <a
                    href="index.php"
                    class="sh-nav-link">
                    Home
                </a>
                <a
                    href="products.php"
                    class="sh-nav-link">
                    Products
                </a>


                <a
                    href="about.php"
                    class="sh-nav-link">
                    About
                </a>


                <a
                    href="gallary.php"
                    class="sh-nav-link">
                    Gallery
                </a>


                <a
                    href="contact.php"
                    class="sh-contact-btn">
                    Contact Us
                </a>

            </nav>



            <!-- MOBILE BUTTON -->

            <button
                type="button"
                class="sh-menu-btn"
                id="shMenuButton"
                aria-label="Open Menu"
                aria-expanded="false">

                <span class="sh-menu-icon">

                    <span class="sh-bar"></span>
                    <span class="sh-bar"></span>
                    <span class="sh-bar"></span>

                </span>

            </button>


        </div>



        <!-- SCROLL LINE -->

        <div
            class="sh-progress"
            aria-hidden="true">

            <div
                class="sh-progress-line"
                id="shProgressLine"></div>

        </div>


    </div>



    <!-- MOBILE MENU -->

    <div
        class="sh-mobile-menu"
        id="shMobileMenu">

        <nav
            class="sh-mobile-nav"
            aria-label="Mobile Navigation">

            <a
                href="index.php"
                class="sh-mobile-link">
                <span>Home</span>
                <span class="sh-mobile-arrow">›</span>
            </a>

            <a
                href="products.php"
                class="sh-mobile-link">
                <span>Products00</span>
                <span class="sh-mobile-arrow">›</span>
            </a>


            <a
                href="about.php"
                class="sh-mobile-link">
                <span>About</span>
                <span class="sh-mobile-arrow">›</span>
            </a>


            <a
                href="gallary.php"
                class="sh-mobile-link">
                <span>Gallery</span>
                <span class="sh-mobile-arrow">›</span>
            </a>


            <a
                href="contact.php"
                class="sh-mobile-link">
                <span>Contact Us</span>
                <span class="sh-mobile-arrow">›</span>
            </a>

        </nav>

    </div>


</header>


<script>
    (function() {

        "use strict";


        const header =
            document.getElementById(
                "shivam-header"
            );


        const progressLine =
            document.getElementById(
                "shProgressLine"
            );


        const menuButton =
            document.getElementById(
                "shMenuButton"
            );


        const mobileMenu =
            document.getElementById(
                "shMobileMenu"
            );


        if (!header) {
            return;
        }



        /* SCROLL */

        let ticking = false;


        function updateHeader() {

            const scrollTop =
                window.pageYOffset ||
                document.documentElement.scrollTop ||
                0;


            const maxScroll =
                Math.max(
                    1,
                    document.documentElement.scrollHeight -
                    window.innerHeight
                );


            const progress =
                Math.min(
                    1,
                    Math.max(
                        0,
                        scrollTop / maxScroll
                    )
                );


            if (progressLine) {

                progressLine.style.transform =
                    "scaleX(" + progress + ")";

            }


            if (scrollTop > 25) {

                header.classList.add(
                    "sh-scrolled"
                );

            } else {

                header.classList.remove(
                    "sh-scrolled"
                );

            }


            ticking = false;

        }


        function requestUpdate() {

            if (!ticking) {

                requestAnimationFrame(
                    updateHeader
                );

                ticking = true;

            }

        }


        window.addEventListener(
            "scroll",
            requestUpdate, {
                passive: true
            }
        );


        window.addEventListener(
            "resize",
            requestUpdate
        );


        updateHeader();



        /* MOBILE MENU */

        if (menuButton && mobileMenu) {

            menuButton.addEventListener(
                "click",
                function() {

                    const opened =
                        mobileMenu.classList.toggle(
                            "open"
                        );


                    menuButton.classList.toggle(
                        "open",
                        opened
                    );


                    menuButton.setAttribute(
                        "aria-expanded",
                        opened ? "true" : "false"
                    );

                }
            );


            mobileMenu
                .querySelectorAll(
                    ".sh-mobile-link"
                )
                .forEach(function(link) {

                    link.addEventListener(
                        "click",
                        function() {

                            mobileMenu.classList.remove(
                                "open"
                            );

                            menuButton.classList.remove(
                                "open"
                            );

                            menuButton.setAttribute(
                                "aria-expanded",
                                "false"
                            );

                        }
                    );

                });


            window.addEventListener(
                "resize",
                function() {

                    if (window.innerWidth > 991) {

                        mobileMenu.classList.remove(
                            "open"
                        );

                        menuButton.classList.remove(
                            "open"
                        );

                        menuButton.setAttribute(
                            "aria-expanded",
                            "false"
                        );

                    }

                }
            );

        }



        /* ACTIVE PAGE */

        const currentPath =
            window.location.pathname
            .replace(/\/+$/, "") || "index.php";


        const links =
            header.querySelectorAll(
                ".sh-nav-link, .sh-mobile-link"
            );


        links.forEach(function(link) {

            try {

                const linkPath =
                    new URL(
                        link.href,
                        window.location.origin
                    )
                    .pathname
                    .replace(/\/+$/, "") || "index.php";


                link.classList.remove(
                    "sh-active"
                );


                link.removeAttribute(
                    "aria-current"
                );


                if (linkPath === currentPath) {

                    link.classList.add(
                        "sh-active"
                    );

                    link.setAttribute(
                        "aria-current",
                        "page"
                    );

                }

            } catch (e) {}

        });


    })();
</script>