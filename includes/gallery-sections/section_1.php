<!-- =========================================================
     SHIVAM UNIFORM
     GALLERY PAGE - HERO SECTION
     CLEAN PREMIUM VERSION
     ELEMENTOR SAFE / FULLY RESPONSIVE

     BRAND COLORS:
     BLUE  : #001641
     GREEN : #1E712C
     WHITE : #FFFFFF
========================================================= -->

<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
/>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>

/* =========================================================
   RESET
========================================================= */

#shivam-gallery-hero,
#shivam-gallery-hero *{
    box-sizing:border-box !important;
}

#shivam-gallery-hero{
    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;

    width:100% !important;
    margin:0 !important;
    padding:0 !important;

    position:relative !important;
    overflow:hidden !important;

    background:
        radial-gradient(
            circle at 10% 18%,
            rgba(30,113,44,.18) 0%,
            transparent 30%
        ),
        radial-gradient(
            circle at 92% 82%,
            rgba(255,255,255,.055) 0%,
            transparent 28%
        ),
        linear-gradient(
            125deg,
            #001641 0%,
            #001A47 48%,
            #0A2D3B 76%,
            #12392E 100%
        ) !important;

    font-family:'Manrope',sans-serif !important;
}


/* =========================================================
   BACKGROUND SHAPES
========================================================= */

#shivam-gallery-hero::before{
    content:"" !important;

    position:absolute !important;

    width:310px !important;
    height:310px !important;

    right:-160px !important;
    top:-170px !important;

    border-radius:50% !important;

    border:
        1px solid
        rgba(30,113,44,.18) !important;

    pointer-events:none !important;
}

#shivam-gallery-hero::after{
    content:"" !important;

    position:absolute !important;

    width:200px !important;
    height:200px !important;

    left:-115px !important;
    bottom:-120px !important;

    border-radius:50% !important;

    background:
        rgba(30,113,44,.06) !important;

    pointer-events:none !important;
}


/* =========================================================
   CONTAINER
========================================================= */

#shivam-gallery-hero .sgh-container{
    width:100% !important;
    max-width:1160px !important;

    min-height:430px !important;

    margin:0 auto !important;

    padding:
        48px
        28px
        50px !important;

    display:grid !important;

    grid-template-columns:
        minmax(0,.98fr)
        minmax(360px,1.02fr) !important;

    gap:46px !important;

    align-items:center !important;

    position:relative !important;
    z-index:2 !important;
}


/* =========================================================
   LEFT CONTENT
========================================================= */

#shivam-gallery-hero .sgh-content{
    max-width:590px !important;
}


/* BREADCRUMB */

#shivam-gallery-hero .sgh-breadcrumb{
    display:flex !important;

    align-items:center !important;
    flex-wrap:wrap !important;

    gap:7px !important;

    margin:
        0
        0
        16px !important;

    font-size:10.5px !important;
    font-weight:700 !important;
}


#shivam-gallery-hero .sgh-breadcrumb a{
    color:
        rgba(255,255,255,.58) !important;

    text-decoration:none !important;

    transition:
        color .25s ease !important;
}


#shivam-gallery-hero .sgh-breadcrumb a:hover{
    color:#83CF8D !important;
}


#shivam-gallery-hero .sgh-breadcrumb i{
    color:var(--green) !important;

    font-size:7px !important;
}


#shivam-gallery-hero .sgh-breadcrumb span{
    color:#FFFFFF !important;
}


/* LABEL */

#shivam-gallery-hero .sgh-label{
    display:inline-flex !important;

    align-items:center !important;

    gap:9px !important;

    margin:
        0
        0
        10px !important;

    color:#83CF8D !important;

    font-size:10px !important;
    font-weight:800 !important;

    letter-spacing:1.5px !important;

    text-transform:uppercase !important;
}


#shivam-gallery-hero .sgh-label::before{
    content:"" !important;

    width:27px !important;
    height:2px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}


/* =========================================================
   HEADING
========================================================= */

#shivam-gallery-hero .sgh-content h1{
    margin:0 !important;

    color:#FFFFFF !important;

    font-size:44px !important;
    font-weight:800 !important;

    line-height:1.11 !important;

    letter-spacing:-1.1px !important;
}


#shivam-gallery-hero .sgh-content h1 span{
    color:#7FCB89 !important;
}


/* =========================================================
   DESCRIPTION
========================================================= */

#shivam-gallery-hero .sgh-description{
    max-width:560px !important;

    margin:
        14px
        0
        0 !important;

    color:
        rgba(255,255,255,.72) !important;

    font-size:15px !important;
    font-weight:400 !important;

    line-height:1.68 !important;
}


/* =========================================================
   CATEGORY ROW
========================================================= */

#shivam-gallery-hero .sgh-categories{
    display:flex !important;

    flex-wrap:wrap !important;

    gap:
        8px
        16px !important;

    margin-top:20px !important;

    padding-top:15px !important;

    border-top:
        1px solid
        rgba(255,255,255,.11) !important;
}


#shivam-gallery-hero .sgh-category{
    display:inline-flex !important;

    align-items:center !important;

    gap:7px !important;

    color:
        rgba(255,255,255,.72) !important;

    font-size:10.5px !important;
    font-weight:700 !important;
}


#shivam-gallery-hero .sgh-category::before{
    content:"" !important;

    width:5px !important;
    height:5px !important;

    border-radius:50% !important;

    background:var(--green) !important;
}


/* =========================================================
   RIGHT VISUAL
========================================================= */

#shivam-gallery-hero .sgh-visual{
    width:100% !important;

    min-height:350px !important;

    position:relative !important;
}


/* =========================================================
   MAIN IMAGE
========================================================= */

#shivam-gallery-hero .sgh-image-main{
    width:73% !important;
    height:315px !important;

    position:absolute !important;

    right:0 !important;
    top:0 !important;

    overflow:hidden !important;

    border-radius:
        11px
        11px
        36px
        11px !important;

    background:var(--blue) !important;

    border:
        1px solid
        rgba(255,255,255,.10) !important;

    box-shadow:
        0 18px 38px
        rgba(0,0,0,.18) !important;
}


/* SMALL IMAGE */

#shivam-gallery-hero .sgh-image-small{
    width:47% !important;
    height:195px !important;

    position:absolute !important;

    left:0 !important;
    bottom:0 !important;

    overflow:hidden !important;

    border:
        6px solid
        #001641 !important;

    border-radius:
        10px
        30px
        10px
        10px !important;

    background:#FFFFFF !important;

    z-index:3 !important;

    box-shadow:
        0 14px 30px
        rgba(0,0,0,.18) !important;
}


/* IMAGE COMMON */

#shivam-gallery-hero .sgh-image-main img,
#shivam-gallery-hero .sgh-image-small img{
    width:100% !important;
    height:100% !important;

    display:block !important;

    object-fit:cover !important;
    object-position:center !important;

    transition:
        transform .65s ease !important;
}


#shivam-gallery-hero .sgh-image-main:hover img,
#shivam-gallery-hero .sgh-image-small:hover img{
    transform:
        scale(1.04) !important;
}


/* IMAGE OVERLAYS */

#shivam-gallery-hero .sgh-image-main::after,
#shivam-gallery-hero .sgh-image-small::after{
    content:"" !important;

    position:absolute !important;
    inset:0 !important;

    background:
        linear-gradient(
            180deg,
            rgba(0,22,65,.01) 42%,
            rgba(0,22,65,.52) 100%
        ) !important;

    pointer-events:none !important;
}


/* =========================================================
   GREEN INFO PANEL
========================================================= */

#shivam-gallery-hero .sgh-info-panel{
    position:absolute !important;

    left:6% !important;
    top:18px !important;

    width:142px !important;

    padding:
        15px
        14px !important;

    background:
        linear-gradient(
            145deg,
            #1E712C 0%,
            #2E8541 100%
        ) !important;

    color:#FFFFFF !important;

    z-index:4 !important;

    border-radius:9px !important;

    box-shadow:
        0 10px 24px
        rgba(30,113,44,.22) !important;
}


#shivam-gallery-hero .sgh-info-panel i{
    margin-bottom:8px !important;

    font-size:16px !important;
}


#shivam-gallery-hero .sgh-info-panel strong{
    display:block !important;

    font-size:13px !important;
    font-weight:800 !important;

    line-height:1.35 !important;
}


#shivam-gallery-hero .sgh-info-panel span{
    display:block !important;

    margin-top:4px !important;

    color:
        rgba(255,255,255,.78) !important;

    font-size:9.5px !important;

    line-height:1.45 !important;
}


/* =========================================================
   IMAGE CAPTION
========================================================= */

#shivam-gallery-hero .sgh-image-caption{
    position:absolute !important;

    right:16px !important;
    bottom:15px !important;

    z-index:4 !important;

    max-width:215px !important;

    color:#FFFFFF !important;

    text-align:right !important;
}


#shivam-gallery-hero .sgh-image-caption strong{
    display:block !important;

    font-size:13px !important;
    font-weight:800 !important;

    line-height:1.4 !important;
}


#shivam-gallery-hero .sgh-image-caption span{
    display:block !important;

    margin-top:3px !important;

    color:
        rgba(255,255,255,.70) !important;

    font-size:9.5px !important;

    line-height:1.45 !important;
}


/* =========================================================
   BOTTOM GREEN LINE
========================================================= */

#shivam-gallery-hero .sgh-line{
    position:absolute !important;

    right:0 !important;
    bottom:0 !important;

    width:38% !important;
    height:3px !important;

    border-radius:
        20px
        0
        0
        20px !important;

    background:var(--green) !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:950px){

    #shivam-gallery-hero .sgh-container{
        min-height:400px !important;

        padding:
            44px
            20px
            46px !important;

        grid-template-columns:
            minmax(0,.95fr)
            minmax(320px,1.05fr) !important;

        gap:32px !important;
    }


    #shivam-gallery-hero .sgh-content h1{
        font-size:38px !important;
    }


    #shivam-gallery-hero .sgh-description{
        font-size:14px !important;
    }


    #shivam-gallery-hero .sgh-visual{
        min-height:325px !important;
    }


    #shivam-gallery-hero .sgh-image-main{
        height:290px !important;
    }


    #shivam-gallery-hero .sgh-image-small{
        height:175px !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:700px){

    #shivam-gallery-hero .sgh-container{
        min-height:auto !important;

        padding:
            34px
            14px
            38px !important;

        grid-template-columns:1fr !important;

        gap:25px !important;
    }


    #shivam-gallery-hero .sgh-content{
        max-width:100% !important;

        text-align:center !important;
    }


    #shivam-gallery-hero .sgh-breadcrumb{
        justify-content:center !important;

        margin-bottom:13px !important;

        font-size:9.5px !important;
    }


    #shivam-gallery-hero .sgh-label{
        justify-content:center !important;

        font-size:9px !important;
    }


    #shivam-gallery-hero .sgh-label::before{
        width:20px !important;
    }


    #shivam-gallery-hero .sgh-content h1{
        max-width:520px !important;

        margin:0 auto !important;

        font-size:31px !important;

        line-height:1.16 !important;

        letter-spacing:-.7px !important;
    }


    #shivam-gallery-hero .sgh-description{
        max-width:500px !important;

        margin:
            12px
            auto
            0 !important;

        font-size:13.5px !important;

        line-height:1.65 !important;
    }


    #shivam-gallery-hero .sgh-categories{
        justify-content:center !important;

        margin-top:17px !important;

        padding-top:14px !important;

        gap:
            7px
            13px !important;
    }


    #shivam-gallery-hero .sgh-category{
        font-size:9.5px !important;
    }


    #shivam-gallery-hero .sgh-visual{
        min-height:310px !important;

        max-width:430px !important;

        margin:0 auto !important;
    }


    #shivam-gallery-hero .sgh-image-main{
        width:78% !important;
        height:260px !important;

        border-radius:
            8px
            8px
            28px
            8px !important;
    }


    #shivam-gallery-hero .sgh-image-small{
        width:48% !important;
        height:160px !important;

        border-width:5px !important;

        border-radius:
            8px
            24px
            8px
            8px !important;
    }


    #shivam-gallery-hero .sgh-info-panel{
        left:4% !important;
        top:12px !important;

        width:112px !important;

        padding:
            11px
            10px !important;
    }


    #shivam-gallery-hero .sgh-info-panel i{
        margin-bottom:6px !important;

        font-size:14px !important;
    }


    #shivam-gallery-hero .sgh-info-panel strong{
        font-size:11px !important;
    }


    #shivam-gallery-hero .sgh-info-panel span{
        font-size:8.5px !important;
    }


    #shivam-gallery-hero .sgh-image-caption{
        right:11px !important;
        bottom:11px !important;

        max-width:165px !important;
    }


    #shivam-gallery-hero .sgh-image-caption strong{
        font-size:11px !important;
    }


    #shivam-gallery-hero .sgh-image-caption span{
        font-size:8.5px !important;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #shivam-gallery-hero img{
        transition:none !important;
    }

}

</style>


<section id="shivam-gallery-hero">

    <div class="sgh-container">


        <!-- LEFT CONTENT -->

        <div class="sgh-content">


            <div class="sgh-breadcrumb">

                <a href="index.php">
                    Home
                </a>

                <i class="fa-solid fa-chevron-right"></i>

                <span>
                    Gallery
                </span>

            </div>


            <div class="sgh-label">
                Shivam Uniform Gallery
            </div>


            <h1>

                Explore Uniforms for

                <span>
                    Different Teams & Workplaces
                </span>

            </h1>


            <p class="sgh-description">

                Browse uniform styles for schools, corporate teams,
                industries, hospitality, security and service environments,
                with a focus on comfort, practicality and a clean
                professional appearance.

            </p>


            <div class="sgh-categories">

                <div class="sgh-category">
                    School
                </div>

                <div class="sgh-category">
                    Corporate
                </div>

                <div class="sgh-category">
                    Industrial
                </div>

                <div class="sgh-category">
                    Hospitality
                </div>

                <div class="sgh-category">
                    Security
                </div>

            </div>


        </div>



        <!-- RIGHT VISUAL -->

        <div class="sgh-visual">


            <!-- MAIN IMAGE -->

            <div class="sgh-image-main">

                <img
                    src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1200&q=88"
                    alt="Professional uniform team"
                    loading="eager"
                >


                <div class="sgh-image-caption">

                    <strong>
                        Professional Uniform Solutions
                    </strong>

                    <span>
                        Practical, comfortable and presentable.
                    </span>

                </div>

            </div>



            <!-- SMALL IMAGE -->

            <div class="sgh-image-small">

                <img
                    src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=88"
                    alt="School uniform"
                    loading="eager"
                >

            </div>



            <!-- GREEN PANEL -->

            <div class="sgh-info-panel">

                <i class="fa-solid fa-shirt"></i>

                <strong>
                    Uniforms for Different Needs
                </strong>

                <span>
                    Shivam Uniform
                </span>

            </div>



            <div class="sgh-line"></div>


        </div>


    </div>

</section>