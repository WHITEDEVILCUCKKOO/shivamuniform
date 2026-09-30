<?php
include "admin_access/db_config.php";

include "./admin_access/functions/global_info.php";

$global_info = get_global_info($mydb);

include "admin_access/functions/category_info.php";
$category_info = get_category_info($mydb);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Shivam Uniform</title>
<link rel="icon" type="image/x-icon" href="assets/logos/<?php echo htmlspecialchars($global_info['facion_icon'] ?? ''); ?>">
    <link
        rel="preconnect"
        href="https://fonts.googleapis.com">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --blue: #001641;
            --green: #1E712C;
            --white: #FFFFFF;
            --light-green: rgba(30, 113, 44, 0.055);
            --border: rgba(0, 22, 65, 0.09);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Manrope', sans-serif;
        }

        /* =========================================================
           HEADER
        ========================================================= */

        #shivam-header {
            width: 100%;
            position: sticky;
            top: 0;
            left: 0;
            z-index: 9999;
            background: #ffffff;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.06);
        }

        #shivam-header .sh-shell {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 68px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 30px;

            position: relative;

            /*
             * IMPORTANT:
             * Dropdown ko clip hone se bachane ke liye
             * overflow visible hona chahiye.
             */
            overflow: visible;
        }

        /* =========================================================
           LOGO
        ========================================================= */

        #shivam-header .sh-logo-wrap {
            display: flex;
            align-items: center;
            flex-shrink: 0;
            text-decoration: none;
        }

        #shivam-header .sh-logo {
            display: block;
            width: auto;
            max-width: 190px;
            max-height: 52px;
            object-fit: contain;
        }

        /* =========================================================
           DESKTOP NAV
        ========================================================= */

        #shivam-header .sh-nav {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 5px;
            height: 68px;
        }

        #shivam-header .sh-nav-link {
            height: 68px;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 0 15px;

            position: relative;

            color: var(--blue);
            -webkit-text-fill-color: var(--blue);

            text-decoration: none;

            font-family: 'Manrope', sans-serif;
            font-size: 13px;
            font-weight: 700;

            white-space: nowrap;

            transition:
                color .2s ease,
                background .2s ease;
        }

        #shivam-header .sh-nav-link:hover,
        #shivam-header .sh-nav-link.active {
            color: var(--green);
            -webkit-text-fill-color: var(--green);
        }

        #shivam-header .sh-nav-link::after {
            content: "";

            position: absolute;

            left: 15px;
            right: 15px;
            bottom: 12px;

            height: 2px;

            background: var(--green);

            transform: scaleX(0);
            transform-origin: center;

            transition: transform .2s ease;
        }

        #shivam-header .sh-nav-link:hover::after,
        #shivam-header .sh-nav-link.active::after {
            transform: scaleX(1);
        }

        /* =========================================================
           DESKTOP PRODUCTS WRAPPER
        ========================================================= */

        #shivam-header .sh-product-item {
            height: 68px;

            position: relative;

            display: flex;
            align-items: center;
        }

        #shivam-header .sh-product-link {
            padding-right: 25px;
        }

        #shivam-header .sh-product-arrow {
            position: absolute;

            right: 8px;

            top: 50%;

            transform: translateY(-50%);

            font-size: 16px;
            line-height: 1;

            color: var(--green);
            -webkit-text-fill-color: var(--green);

            transition: transform .25s ease;
        }

        #shivam-header .sh-product-item:hover .sh-product-arrow,
        #shivam-header .sh-product-item:focus-within .sh-product-arrow {
            transform: translateY(-50%) rotate(90deg);
        }

        /* =========================================================
           DESKTOP PRODUCT DROPDOWN
        ========================================================= */

        #shivam-header .sh-product-dropdown {
            position: absolute;

            top: calc(100% - 1px);
            left: 50%;

            transform: translateX(-50%) translateY(10px);

            width: 245px;

            padding: 8px 0;

            margin: 0;

            background: var(--white);

            border: 1px solid var(--border);

            border-radius: 0 0 10px 10px;

            box-shadow:
                0 12px 35px rgba(0, 22, 65, 0.12);

            opacity: 0;
            visibility: hidden;
            pointer-events: none;

            transition:
                opacity .22s ease,
                visibility .22s ease,
                transform .22s ease;

            z-index: 99999;
        }

        #shivam-header .sh-product-item:hover .sh-product-dropdown,
        #shivam-header .sh-product-item:focus-within .sh-product-dropdown {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;

            transform: translateX(-50%) translateY(0);
        }

        #shivam-header .sh-product-dropdown ul {
            list-style: none;

            padding: 0;
            margin: 0;
        }

        #shivam-header .sh-product-dropdown li {
            width: 100%;
            padding: 0;
            margin: 0;
        }

        #shivam-header .sh-product-dropdown a {
            width: 100%;
            min-height: 43px;

            display: flex;
            align-items: center;

            padding: 0 18px;

            color: var(--blue);
            -webkit-text-fill-color: var(--blue);

            background: transparent;

            text-decoration: none;

            font-family: 'Manrope', sans-serif;
            font-size: 12.5px;
            font-weight: 600;

            transition:
                color .2s ease,
                background .2s ease,
                padding-left .2s ease;
        }

        #shivam-header .sh-product-dropdown a:hover {
            color: var(--green);
            -webkit-text-fill-color: var(--green);

            background: var(--light-green);

            padding-left: 23px;
        }

        /* =========================================================
           MOBILE BUTTON
        ========================================================= */

        #shivam-header .sh-mobile-toggle {
            display: none;

            width: 42px;
            height: 42px;

            align-items: center;
            justify-content: center;

            padding: 0;
            margin: 0;

            border: 0;
            outline: 0;

            background: transparent;

            cursor: pointer;
        }

        #shivam-header .sh-mobile-toggle span {
            position: absolute;

            width: 23px;
            height: 2px;

            background: var(--blue);

            transition:
                transform .25s ease,
                opacity .25s ease;
        }

        #shivam-header .sh-mobile-toggle span:nth-child(1) {
            transform: translateY(-7px);
        }

        #shivam-header .sh-mobile-toggle span:nth-child(2) {
            transform: translateY(0);
        }

        #shivam-header .sh-mobile-toggle span:nth-child(3) {
            transform: translateY(7px);
        }

        #shivam-header .sh-mobile-toggle.open span:nth-child(1) {
            transform: rotate(45deg);
        }

        #shivam-header .sh-mobile-toggle.open span:nth-child(2) {
            opacity: 0;
        }

        #shivam-header .sh-mobile-toggle.open span:nth-child(3) {
            transform: rotate(-45deg);
        }

        /* =========================================================
           MOBILE MENU
        ========================================================= */

        #shivam-header .sh-mobile-menu {
            display: none;

            position: absolute;

            top: 68px;
            left: 0;
            right: 0;

            width: 100%;

            max-height: calc(100vh - 68px);

            overflow-y: auto;
            overflow-x: hidden;

            background: #ffffff;

            border-top: 1px solid var(--border);

            box-shadow:
                0 15px 30px rgba(0, 22, 65, 0.10);

            opacity: 0;
            visibility: hidden;

            transform: translateY(-8px);

            transition:
                opacity .25s ease,
                visibility .25s ease,
                transform .25s ease;
        }

        #shivam-header .sh-mobile-menu.open {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        #shivam-header .sh-mobile-inner {
            width: 100%;
            padding: 8px 18px 18px;
        }

        #shivam-header .sh-mobile-link {
            width: 100%;
            min-height: 47px;

            display: flex;
            align-items: center;

            padding: 0 5px;

            border-bottom: 1px solid var(--border);

            color: var(--blue);
            -webkit-text-fill-color: var(--blue);

            text-decoration: none;

            font-family: 'Manrope', sans-serif;
            font-size: 13.5px;
            font-weight: 700;

            transition:
                color .2s ease,
                background .2s ease;
        }

        #shivam-header .sh-mobile-link:hover,
        #shivam-header .sh-mobile-link.active {
            color: var(--green);
            -webkit-text-fill-color: var(--green);
        }

        /* =========================================================
           MOBILE PRODUCTS
        ========================================================= */

        #shivam-header .sh-mobile-product-item {
            width: 100%;

            border-bottom: 1px solid var(--border);
        }

        #shivam-header .sh-mobile-product-btn {
            width: 100%;
            min-height: 47px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 5px;

            margin: 0;

            border: 0;
            border-radius: 0;
            outline: none;

            background: transparent;

            color: var(--blue);
            -webkit-text-fill-color: var(--blue);

            font-family: 'Manrope', sans-serif;
            font-size: 13.5px;
            font-weight: 700;

            cursor: pointer;

            text-align: left;

            transition:
                color .2s ease,
                background .2s ease;
        }

        #shivam-header .sh-mobile-product-btn:hover,
        #shivam-header .sh-mobile-product-btn.open,
        #shivam-header .sh-mobile-product-btn.active {
            color: var(--green);
            -webkit-text-fill-color: var(--green);
        }

        #shivam-header .sh-mobile-product-arrow {
            width: 24px;
            height: 24px;

            display: flex;
            align-items: center;
            justify-content: center;

            color: var(--green);
            -webkit-text-fill-color: var(--green);

            font-size: 22px;
            line-height: 1;

            transition: transform .25s ease;
        }

        #shivam-header .sh-mobile-product-btn.open .sh-mobile-product-arrow {
            transform: rotate(90deg);
        }

        /* =========================================================
           MOBILE PRODUCT DROPDOWN
        ========================================================= */

        #shivam-header .sh-mobile-product-dropdown {
            width: 100%;

            max-height: 0;

            overflow: hidden;

            opacity: 0;
            visibility: hidden;

            background: rgba(30, 113, 44, 0.035);

            transition:
                max-height .3s ease,
                opacity .25s ease,
                visibility .25s ease;
        }

        #shivam-header .sh-mobile-product-dropdown.open {
            max-height: 600px;

            opacity: 1;
            visibility: visible;
        }

        #shivam-header .sh-mobile-product-dropdown a {
            width: 100%;
            min-height: 42px;

            display: flex;
            align-items: center;

            padding: 0 5px 0 22px;

            color: var(--blue);
            -webkit-text-fill-color: var(--blue);

            background: transparent;

            border: 0;

            text-decoration: none;

            font-family: 'Manrope', sans-serif;
            font-size: 12.5px;
            font-weight: 600;

            transition:
                color .2s ease,
                background .2s ease,
                padding-left .2s ease;
        }

        #shivam-header .sh-mobile-product-dropdown a:hover,
        #shivam-header .sh-mobile-product-dropdown a.active {
            color: var(--green);
            -webkit-text-fill-color: var(--green);

            background: rgba(30, 113, 44, 0.06);

            padding-left: 27px;
        }

        /* =========================================================
           SCROLL PROGRESS
        ========================================================= */

        #shivam-header .sh-scroll-progress {
            position: absolute;

            left: 0;
            bottom: 0;

            width: 0%;
            height: 2px;

            background: var(--green);

            z-index: 100000;
        }

        /* =========================================================
           DESKTOP / MOBILE RESPONSIVE
        ========================================================= */

        @media (max-width: 1100px) {

            #shivam-header .sh-shell {
                padding: 0 20px;
            }

            #shivam-header .sh-nav-link {
                padding-left: 10px;
                padding-right: 10px;
            }

            #shivam-header .sh-nav-link::after {
                left: 10px;
                right: 10px;
            }

        }

        @media (max-width: 991px) {

            #shivam-header .sh-shell {
                min-height: 62px;
                padding: 0 18px;
            }

            #shivam-header .sh-logo {
                max-width: 165px;
                max-height: 48px;
            }

            #shivam-header .sh-nav {
                display: none;
            }

            #shivam-header .sh-mobile-toggle {
                display: flex;
                position: relative;
            }

            #shivam-header .sh-mobile-menu {
                display: block;
                top: 62px;
            }

        }

        @media (max-width: 600px) {

            #shivam-header .sh-shell {
                min-height: 58px;
                padding: 0 14px;
            }

            #shivam-header .sh-logo {
                max-width: 145px;
                max-height: 44px;
            }

            #shivam-header .sh-mobile-menu {
                top: 58px;
                max-height: calc(100vh - 58px);
            }

            #shivam-header .sh-mobile-inner {
                padding-left: 14px;
                padding-right: 14px;
            }

        }
    </style>

</head>

<body>


    <header id="shivam-header">

        <div class="sh-shell">

            <!-- =====================================================
             LOGO
        ====================================================== -->

            <a
                href="index.php"
                class="sh-logo-wrap"
                aria-label="Shivam Uniform Home">

                <img
                    class="sh-logo"
                    src="assets/logos/<?php
                                        echo htmlspecialchars(
                                            $global_info['facion_icon'] ?? '',
                                            ENT_QUOTES,
                                            'UTF-8'
                                        );
                                        ?>"
                    alt="Shivam Uniform">

            </a>


            <!-- =====================================================
             DESKTOP NAVIGATION
        ====================================================== -->

            <nav
                class="sh-nav"
                aria-label="Main Navigation">

                <!-- HOME -->

                <a
                    href="index.php"
                    class="sh-nav-link"
                    data-page="index.php">
                    Home
                </a>


                <!-- =================================================
                 PRODUCTS DESKTOP DROPDOWN
            ================================================== -->

                <div class="sh-product-item">

                    <a
                        href="products.php"
                        class="sh-nav-link sh-product-link"
                        data-page="products.php">

                        Products

                        <span class="sh-product-arrow">
                            ›
                        </span>

                    </a>


                    <div class="sh-product-dropdown">

                        <ul>

                            <?php if (!empty($category_info)): ?>

                                <?php foreach ($category_info as $category): ?>

                                    <?php
                                    $category_name =
                                        $category['root_name']
                                        ?? $category['category_name']
                                        ?? $category['name']
                                        ?? '';

                                    $category_slug =
                                        trim($category['root_slug'] ?? '');

                                    $category_name =
                                        trim($category_name);
                                    ?>

                                    <?php if (
                                        $category_name !== '' &&
                                        $category_slug !== ''
                                    ): ?>

                                        <li>
                                            <a
                                                href="product-category.php?category=<?php echo urlencode($category_slug); ?>"
                                                data-category-link="true">
                                                <?php
                                                echo htmlspecialchars(
                                                    $category_name,
                                                    ENT_QUOTES,
                                                    'UTF-8'
                                                );
                                                ?>
                                            </a>
                                        </li>

                                    <?php endif; ?>

                                <?php endforeach; ?>

                            <?php endif; ?>

                        </ul>

                    </div>

                </div>


                <!-- ABOUT -->

                <a
                    href="about.php"
                    class="sh-nav-link"
                    data-page="about.php">
                    About
                </a>


                <!-- GALLERY -->

                <a
                    href="gallery.php"
                    class="sh-nav-link"
                    data-page="gallery.php">
                    Gallery
                </a>


                <!-- LOGIN -->

                <a
                    href="login.php"
                    class="sh-nav-link"
                    data-page="login.php">
                    Login
                </a>


                <!-- CONTACT -->

                <a
                    href="contact.php"
                    class="sh-nav-link"
                    data-page="contact.php">
                    Contact Us
                </a>

            </nav>


            <!-- =====================================================
             MOBILE HAMBURGER
        ====================================================== -->

            <button
                type="button"
                class="sh-mobile-toggle"
                id="shMobileMenuButton"
                aria-label="Open Menu"
                aria-expanded="false"
                aria-controls="shMobileMenu">

                <span></span>
                <span></span>
                <span></span>

            </button>


            <!-- =====================================================
             MOBILE MENU
        ====================================================== -->

            <div
                class="sh-mobile-menu"
                id="shMobileMenu">

                <div class="sh-mobile-inner">


                    <!-- HOME -->

                    <a
                        href="index.php"
                        class="sh-mobile-link"
                        data-page="index.php">
                        Home
                    </a>


                    <!-- =================================================
                     MOBILE PRODUCTS
                ================================================== -->

                    <div class="sh-mobile-product-item">

                        <button
                            type="button"
                            class="sh-mobile-product-btn"
                            id="shMobileProductButton"
                            aria-expanded="false"
                            aria-controls="shMobileProductDropdown">

                            <span>
                                Products
                            </span>

                            <span class="sh-mobile-product-arrow">
                                ›
                            </span>

                        </button>


                        <div
                            class="sh-mobile-product-dropdown"
                            id="shMobileProductDropdown">

                            <?php if (!empty($category_info)): ?>

                                <?php foreach ($category_info as $category): ?>

                                    <?php
                                    $category_name =
                                        $category['root_name']
                                        ?? $category['category_name']
                                        ?? $category['name']
                                        ?? '';

                                    $category_slug =
                                        trim($category['root_slug'] ?? '');

                                    $category_name =
                                        trim($category_name);
                                    ?>

                                    <?php if (
                                        $category_name !== '' &&
                                        $category_slug !== ''
                                    ): ?>

                                        <a
                                            href="?category=<?php echo urlencode($category_slug); ?>"
                                            data-category-link="true">

                                            <?php
                                            echo htmlspecialchars(
                                                $category_name,
                                                ENT_QUOTES,
                                                'UTF-8'
                                            );
                                            ?>

                                        </a>

                                    <?php endif; ?>

                                <?php endforeach; ?>

                            <?php endif; ?>

                        </div>

                    </div>


                    <!-- ABOUT -->

                    <a
                        href="about.php"
                        class="sh-mobile-link"
                        data-page="about.php">
                        About
                    </a>


                    <!-- GALLERY -->

                    <a
                        href="gallery.php"
                        class="sh-mobile-link"
                        data-page="gallery.php">
                        Gallery
                    </a>


                    <!-- CONTACT -->

                    <a
                        href="contact.php"
                        class="sh-mobile-link"
                        data-page="contact.php">
                        Contact Us
                    </a>

                </div>

            </div>


            <!-- SCROLL PROGRESS -->

            <div
                class="sh-scroll-progress"
                id="shScrollProgress"></div>

        </div>

    </header>


    <script>
        document.addEventListener("DOMContentLoaded", function() {

            /* =========================================================
               ELEMENTS
            ========================================================= */

            const header =
                document.getElementById("shivam-header");

            const menuButton =
                document.getElementById("shMobileMenuButton");

            const mobileMenu =
                document.getElementById("shMobileMenu");

            const mobileProductButton =
                document.getElementById("shMobileProductButton");

            const mobileProductDropdown =
                document.getElementById("shMobileProductDropdown");

            const scrollProgress =
                document.getElementById("shScrollProgress");


            /* =========================================================
               MOBILE MAIN MENU
            ========================================================= */

            if (menuButton && mobileMenu) {

                menuButton.addEventListener("click", function(e) {

                    e.preventDefault();
                    e.stopPropagation();

                    const isOpen =
                        mobileMenu.classList.toggle("open");

                    menuButton.classList.toggle(
                        "open",
                        isOpen
                    );

                    menuButton.setAttribute(
                        "aria-expanded",
                        isOpen ? "true" : "false"
                    );

                });

            }


            /* =========================================================
               MOBILE PRODUCTS DROPDOWN
            ========================================================= */

            if (
                mobileProductButton &&
                mobileProductDropdown
            ) {

                mobileProductButton.addEventListener(
                    "click",
                    function(e) {

                        e.preventDefault();
                        e.stopPropagation();

                        const isOpen =
                            mobileProductDropdown
                            .classList
                            .toggle("open");

                        mobileProductButton.classList.toggle(
                            "open",
                            isOpen
                        );

                        mobileProductButton.classList.toggle(
                            "active",
                            isOpen
                        );

                        mobileProductButton.setAttribute(
                            "aria-expanded",
                            isOpen ? "true" : "false"
                        );

                    }
                );


                /* ---------------------------------------------
                   CATEGORY CLICK
                --------------------------------------------- */

                mobileProductDropdown
                    .querySelectorAll("a")
                    .forEach(function(link) {

                        link.addEventListener(
                            "click",
                            function() {

                                mobileProductDropdown
                                    .classList
                                    .remove("open");

                                mobileProductButton
                                    .classList
                                    .remove("open");

                                mobileProductButton
                                    .classList
                                    .remove("active");

                                mobileProductButton.setAttribute(
                                    "aria-expanded",
                                    "false"
                                );

                                if (mobileMenu) {

                                    mobileMenu
                                        .classList
                                        .remove("open");

                                }

                                if (menuButton) {

                                    menuButton
                                        .classList
                                        .remove("open");

                                    menuButton.setAttribute(
                                        "aria-expanded",
                                        "false"
                                    );

                                }

                            }
                        );

                    });

            }


            /* =========================================================
               MOBILE NORMAL LINKS
            ========================================================= */

            if (mobileMenu) {

                mobileMenu
                    .querySelectorAll(
                        ".sh-mobile-link"
                    )
                    .forEach(function(link) {

                        link.addEventListener(
                            "click",
                            function() {

                                if (mobileMenu) {

                                    mobileMenu
                                        .classList
                                        .remove("open");

                                }

                                if (menuButton) {

                                    menuButton
                                        .classList
                                        .remove("open");

                                    menuButton.setAttribute(
                                        "aria-expanded",
                                        "false"
                                    );

                                }

                            }
                        );

                    });

            }


            /* =========================================================
               ACTIVE PAGE
            ========================================================= */

            const currentPath =
                window.location.pathname
                .split("/")
                .pop()
                .toLowerCase();


            /* ---------------------------------------------
               Desktop links
            --------------------------------------------- */

            document
                .querySelectorAll(
                    "#shivam-header .sh-nav-link"
                )
                .forEach(function(link) {

                    const page =
                        (
                            link.getAttribute(
                                "data-page"
                            ) || ""
                        ).toLowerCase();

                    if (
                        page &&
                        page === currentPath
                    ) {

                        link.classList.add("active");

                    }

                });


            /* ---------------------------------------------
               Mobile normal links
            --------------------------------------------- */

            document
                .querySelectorAll(
                    "#shivam-header .sh-mobile-link"
                )
                .forEach(function(link) {

                    const page =
                        (
                            link.getAttribute(
                                "data-page"
                            ) || ""
                        ).toLowerCase();

                    if (
                        page &&
                        page === currentPath
                    ) {

                        link.classList.add("active");

                    }

                });


            /* =========================================================
               PRODUCTS ACTIVE STATE
               If URL contains category_id, Products will be active.
            ========================================================= */

            const urlParams =
                new URLSearchParams(
                    window.location.search
                );

            const categoryId =
                urlParams.get("category_id");


            if (
                currentPath === "products.php" ||
                categoryId
            ) {

                const desktopProductLink =
                    document.querySelector(
                        "#shivam-header .sh-product-link"
                    );

                if (desktopProductLink) {

                    desktopProductLink
                        .classList
                        .add("active");

                }

                if (mobileProductButton) {

                    mobileProductButton
                        .classList
                        .add("active");

                }

            }


            /* =========================================================
               CLOSE MOBILE MENU ON OUTSIDE CLICK
            ========================================================= */

            document.addEventListener(
                "click",
                function(e) {

                    if (!header) {
                        return;
                    }

                    if (
                        !header.contains(e.target)
                    ) {

                        if (mobileMenu) {

                            mobileMenu
                                .classList
                                .remove("open");

                        }

                        if (menuButton) {

                            menuButton
                                .classList
                                .remove("open");

                            menuButton.setAttribute(
                                "aria-expanded",
                                "false"
                            );

                        }

                        if (mobileProductDropdown) {

                            mobileProductDropdown
                                .classList
                                .remove("open");

                        }

                        if (mobileProductButton) {

                            mobileProductButton
                                .classList
                                .remove("open");

                            mobileProductButton
                                .classList
                                .remove("active");

                            mobileProductButton.setAttribute(
                                "aria-expanded",
                                "false"
                            );

                        }

                    }

                }
            );


            /* =========================================================
               ESC KEY
            ========================================================= */

            document.addEventListener(
                "keydown",
                function(e) {

                    if (e.key !== "Escape") {
                        return;
                    }

                    if (mobileMenu) {

                        mobileMenu
                            .classList
                            .remove("open");

                    }

                    if (menuButton) {

                        menuButton
                            .classList
                            .remove("open");

                        menuButton.setAttribute(
                            "aria-expanded",
                            "false"
                        );

                    }

                    if (mobileProductDropdown) {

                        mobileProductDropdown
                            .classList
                            .remove("open");

                    }

                    if (mobileProductButton) {

                        mobileProductButton
                            .classList
                            .remove("open");

                        mobileProductButton
                            .classList
                            .remove("active");

                        mobileProductButton.setAttribute(
                            "aria-expanded",
                            "false"
                        );

                    }

                }
            );


            /* =========================================================
               SCROLL PROGRESS
            ========================================================= */

            function updateScrollProgress() {

                if (!scrollProgress) {
                    return;
                }

                const scrollTop =
                    window.pageYOffset ||
                    document.documentElement.scrollTop;

                const documentHeight =
                    document.documentElement.scrollHeight -
                    document.documentElement.clientHeight;

                if (documentHeight <= 0) {

                    scrollProgress.style.width = "0%";

                    return;
                }

                const percentage =
                    (scrollTop / documentHeight) * 100;

                scrollProgress.style.width =
                    Math.min(
                        Math.max(percentage, 0),
                        100
                    ) + "%";

            }


            window.addEventListener(
                "scroll",
                updateScrollProgress, {
                    passive: true
                }
            );

            updateScrollProgress();


            /* =========================================================
               RESIZE
            ========================================================= */

            window.addEventListener(
                "resize",
                function() {

                    if (
                        window.innerWidth > 991
                    ) {

                        if (mobileMenu) {

                            mobileMenu
                                .classList
                                .remove("open");

                        }

                        if (menuButton) {

                            menuButton
                                .classList
                                .remove("open");

                            menuButton.setAttribute(
                                "aria-expanded",
                                "false"
                            );

                        }

                        if (mobileProductDropdown) {

                            mobileProductDropdown
                                .classList
                                .remove("open");

                        }

                        if (mobileProductButton) {

                            mobileProductButton
                                .classList
                                .remove("open");

                            mobileProductButton.setAttribute(
                                "aria-expanded",
                                "false"
                            );

                        }

                    }

                }
            );

        });
    </script>

</body>

</html>