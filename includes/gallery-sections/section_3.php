<!-- =========================================================
     SHIVAM UNIFORM
     GALLERY PAGE - EQUAL IMAGE GRID
     20 IMAGES
     5 ROWS × 4 IMAGES
     CLEAN PREMIUM VERSION
     ELEMENTOR SAFE / RESPONSIVE

     BRAND COLORS:
     BLUE  : #001641
     GREEN : #1E712C
     WHITE : #FFFFFF
========================================================= -->
<?php include"admin_access/db_config.php" ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>

/* =========================================================
   RESET
========================================================= */

#shivam-gallery-grid,
#shivam-gallery-grid *{
    box-sizing:border-box !important;
}

#shivam-gallery-grid{
    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;
    --text:#65707C;

    width:100% !important;
    margin:0 !important;

    padding:
        42px
        20px
        48px !important;

    position:relative !important;
    overflow:hidden !important;

    background:
        linear-gradient(
            135deg,
            #FFFFFF 0%,
            #F8FAFB 62%,
            #F3F8F4 100%
        ) !important;

    font-family:'Manrope',sans-serif !important;
}


/* =========================================================
   BACKGROUND DECORATION
========================================================= */

#shivam-gallery-grid::before{
    content:"" !important;

    position:absolute !important;

    width:250px !important;
    height:250px !important;

    right:-145px !important;
    top:-150px !important;

    border-radius:50% !important;

    background:
        rgba(30,113,44,.045) !important;

    pointer-events:none !important;
}


#shivam-gallery-grid::after{
    content:"" !important;

    position:absolute !important;

    width:180px !important;
    height:180px !important;

    left:-100px !important;
    bottom:-110px !important;

    border-radius:50% !important;

    border:
        1px solid
        rgba(0,22,65,.06) !important;

    pointer-events:none !important;
}


/* =========================================================
   CONTAINER
========================================================= */

#shivam-gallery-grid .sgg-container{
    width:100% !important;
    max-width:1160px !important;

    margin:0 auto !important;

    position:relative !important;
    z-index:2 !important;
}


/* =========================================================
   HEADER
========================================================= */

#shivam-gallery-grid .sgg-header{
    width:100% !important;

    display:flex !important;

    align-items:flex-end !important;
    justify-content:space-between !important;

    gap:38px !important;

    margin-bottom:24px !important;
}


#shivam-gallery-grid .sgg-left{
    max-width:640px !important;
}


/* LABEL */

#shivam-gallery-grid .sgg-label{
    display:inline-flex !important;

    align-items:center !important;

    gap:9px !important;

    margin-bottom:9px !important;

    color:var(--green) !important;

    font-size:10px !important;
    font-weight:800 !important;

    letter-spacing:1.5px !important;

    text-transform:uppercase !important;
}


#shivam-gallery-grid .sgg-label::before{
    content:"" !important;

    width:27px !important;
    height:2px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}


/* HEADING */

#shivam-gallery-grid .sgg-heading{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:36px !important;
    font-weight:800 !important;

    line-height:1.16 !important;

    letter-spacing:-.9px !important;
}


#shivam-gallery-grid .sgg-heading span{
    color:var(--green) !important;
}


/* DESCRIPTION */

#shivam-gallery-grid .sgg-text{
    max-width:440px !important;

    margin:0 !important;

    color:var(--text) !important;

    font-size:15px !important;

    line-height:1.68 !important;
}


/* =========================================================
   GRID
========================================================= */

#shivam-gallery-grid .sgg-grid{
    width:100% !important;

    display:grid !important;

    grid-template-columns:
        repeat(4,minmax(0,1fr)) !important;

    gap:13px !important;
}


/* =========================================================
   ITEM
========================================================= */

#shivam-gallery-grid .sgg-item{
    width:100% !important;

    aspect-ratio:1 / 1 !important;

    position:relative !important;

    overflow:hidden !important;

    border-radius:10px !important;

    background:var(--blue) !important;

    box-shadow:
        0 6px 18px
        rgba(0,22,65,.05) !important;

    cursor:pointer !important;

    transition:
        transform .3s ease,
        box-shadow .3s ease !important;
}


#shivam-gallery-grid .sgg-item:hover{
    transform:
        translateY(-3px) !important;

    box-shadow:
        0 12px 26px
        rgba(0,22,65,.10) !important;
}


/* IMAGE */

#shivam-gallery-grid .sgg-item img{
    width:100% !important;
    height:100% !important;

    display:block !important;

    object-fit:cover !important;
    object-position:center !important;

    transition:
        transform .5s ease,
        filter .5s ease !important;
}


/* OVERLAY */

#shivam-gallery-grid .sgg-item::after{
    content:"" !important;

    position:absolute !important;
    inset:0 !important;

    background:
        linear-gradient(
            180deg,
            rgba(0,22,65,0) 40%,
            rgba(0,22,65,.72) 100%
        ) !important;

    opacity:.82 !important;

    transition:
        opacity .3s ease !important;

    pointer-events:none !important;
}


/* GREEN BOTTOM LINE */

#shivam-gallery-grid .sgg-item::before{
    content:"" !important;

    position:absolute !important;

    left:0 !important;
    bottom:0 !important;

    width:0 !important;
    height:3px !important;

    background:var(--green) !important;

    z-index:4 !important;

    transition:
        width .3s ease !important;
}


/* HOVER */

#shivam-gallery-grid .sgg-item:hover img{
    transform:
        scale(1.055) !important;

    filter:
        brightness(.9) !important;
}


#shivam-gallery-grid .sgg-item:hover::before{
    width:100% !important;
}


#shivam-gallery-grid .sgg-item:hover::after{
    opacity:.96 !important;
}


/* =========================================================
   CAPTION
========================================================= */

#shivam-gallery-grid .sgg-caption{
    position:absolute !important;

    left:14px !important;
    right:14px !important;
    bottom:13px !important;

    z-index:5 !important;

    transform:
        translateY(3px) !important;

    transition:
        transform .3s ease !important;
}


#shivam-gallery-grid .sgg-item:hover .sgg-caption{
    transform:
        translateY(0) !important;
}


#shivam-gallery-grid .sgg-caption span{
    display:block !important;

    margin-bottom:3px !important;

    color:#84D08F !important;

    font-size:8.5px !important;
    font-weight:800 !important;

    letter-spacing:1px !important;

    text-transform:uppercase !important;
}


#shivam-gallery-grid .sgg-caption h3{
    margin:0 !important;

    color:#FFFFFF !important;

    font-size:14px !important;
    font-weight:800 !important;

    line-height:1.3 !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:950px){

    #shivam-gallery-grid{
        padding:
            38px
            18px
            42px !important;
    }


    #shivam-gallery-grid .sgg-heading{
        font-size:32px !important;
    }


    #shivam-gallery-grid .sgg-text{
        font-size:14px !important;
    }


    #shivam-gallery-grid .sgg-grid{
        grid-template-columns:
            repeat(2,minmax(0,1fr)) !important;

        gap:12px !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:600px){

    #shivam-gallery-grid{
        padding:
            34px
            14px
            38px !important;
    }


    #shivam-gallery-grid .sgg-header{
        display:block !important;

        text-align:center !important;

        margin-bottom:20px !important;
    }


    #shivam-gallery-grid .sgg-label{
        justify-content:center !important;

        font-size:9px !important;
    }


    #shivam-gallery-grid .sgg-label::before{
        width:20px !important;
    }


    #shivam-gallery-grid .sgg-heading{
        font-size:29px !important;

        line-height:1.18 !important;
    }


    #shivam-gallery-grid .sgg-text{
        max-width:500px !important;

        margin:
            10px
            auto
            0 !important;

        font-size:13.5px !important;

        line-height:1.65 !important;
    }


    #shivam-gallery-grid .sgg-grid{
        grid-template-columns:1fr !important;

        gap:11px !important;

        max-width:470px !important;

        margin:0 auto !important;
    }


    #shivam-gallery-grid .sgg-item{
        aspect-ratio:4 / 3 !important;

        border-radius:9px !important;
    }


    #shivam-gallery-grid .sgg-caption{
        left:13px !important;
        right:13px !important;
        bottom:12px !important;
    }


    #shivam-gallery-grid .sgg-caption h3{
        font-size:13.5px !important;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #shivam-gallery-grid .sgg-item,
    #shivam-gallery-grid .sgg-item img,
    #shivam-gallery-grid .sgg-item::before,
    #shivam-gallery-grid .sgg-caption{
        transition:none !important;
    }

}

</style>


<section id="shivam-gallery-grid">

    <div class="sgg-container">


        <!-- HEADER -->

        <div class="sgg-header">


            <div class="sgg-left">

                <div class="sgg-label">
                    Uniform Gallery
                </div>

                <h2 class="sgg-heading">
                    Explore Our
                    <span>Uniform Collection</span>
                </h2>

            </div>


            <p class="sgg-text">
                Browse uniform styles for schools, corporates,
                industries, hospitality, security teams and
                professional work environments.
            </p>


        </div>



        <!-- 20 IMAGE GRID -->

        <div class="sgg-grid">



    <?php

            $sql8748524 = "SELECT 
                    products.*, 
                    brands.*, 
                    root_categories.*
                FROM products
                INNER JOIN brands 
                    ON products.brand_id = brands.brand_id
                INNER JOIN root_categories 
                    ON products.root_id = root_categories.root_id
                WHERE products.product_status = 'Active' ORDER BY RAND()
                LIMIT 16";

            $result8748524 = mysqli_query($mydb, $sql8748524);

            if ($result8748524 && mysqli_num_rows($result8748524) > 0) {

                while ($product8748524 = mysqli_fetch_assoc($result8748524)) {

                    $product_image = $product8748524['product_image'];
                    $product_slug  = $product8748524['product_slug'];
                    $product_name  = $product8748524['product_name'];
                    $product_id  = $product8748524['product_id'];
                    $barnd_name  = $product8748524['brand_name'];
                    $product_slug  = $product8748524['product_slug'];

            ?>



            <!-- 01 -->

            <div class="sgg-item" style="cursor: pointer;"  onclick="window.location.href='product_details.php?slug=<?php echo htmlspecialchars($product_slug); ?>'">

                <img
                    src="<?php echo htmlspecialchars($product_image); ?>"
                    alt="<?php echo htmlspecialchars($product_name); ?>"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span><?php echo htmlspecialchars($barnd_name); ?></span>
                    <h3><?php echo htmlspecialchars($product_name); ?></h3>
                </div>

            </div>


            
            <?php

                }
            }

            ?>



        </div>

    </div>

</section>