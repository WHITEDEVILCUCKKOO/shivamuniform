<!-- =========================================================
     SHIVAM UNIFORM
     ABOUT US PAGE - HERO SECTION
     CLEAN PREMIUM GRADIENT VERSION
     ELEMENTOR SAFE / FULLY RESPONSIVE

     BRAND COLORS:
     BLUE  : #001641
     GREEN : #1E712C
     WHITE : #FFFFFF
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>

/* =========================================================
   RESET
========================================================= */

#shivam-about-hero,
#shivam-about-hero *{
    box-sizing:border-box !important;
}


#shivam-about-hero{
    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;

    width:100% !important;
    margin:0 !important;
    padding:0 !important;

    position:relative !important;
    overflow:hidden !important;

    font-family:'Manrope',sans-serif !important;

    background:
        radial-gradient(
            circle at 82% 18%,
            rgba(30,113,44,.22) 0%,
            rgba(30,113,44,.08) 22%,
            transparent 44%
        ),
        radial-gradient(
            circle at 10% 85%,
            rgba(255,255,255,.06) 0%,
            transparent 30%
        ),
        linear-gradient(
            125deg,
            #001641 0%,
            #001A47 48%,
            #0A2D3B 76%,
            #12392E 100%
        ) !important;
}


/* =========================================================
   SOFT BACKGROUND CIRCLES
========================================================= */

#shivam-about-hero::before{
    content:"" !important;

    position:absolute !important;

    width:340px !important;
    height:340px !important;

    right:-170px !important;
    top:-185px !important;

    border-radius:50% !important;

    border:
        1px solid
        rgba(30,113,44,.20) !important;

    pointer-events:none !important;
}


#shivam-about-hero::after{
    content:"" !important;

    position:absolute !important;

    width:220px !important;
    height:220px !important;

    left:-125px !important;
    bottom:-135px !important;

    border-radius:50% !important;

    background:
        rgba(30,113,44,.06) !important;

    pointer-events:none !important;
}


/* =========================================================
   DECORATIVE LINES
========================================================= */

#shivam-about-hero .sah-line-one{
    position:absolute !important;

    width:145px !important;
    height:1px !important;

    top:48px !important;
    left:7% !important;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(255,255,255,.16),
            transparent
        ) !important;

    transform:
        rotate(-12deg) !important;

    pointer-events:none !important;
}


#shivam-about-hero .sah-line-two{
    position:absolute !important;

    width:125px !important;
    height:1px !important;

    right:7% !important;
    bottom:48px !important;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(30,113,44,.38),
            transparent
        ) !important;

    transform:
        rotate(12deg) !important;

    pointer-events:none !important;
}


/* =========================================================
   CONTAINER
========================================================= */

#shivam-about-hero .sah-container{
    width:100% !important;
    max-width:1160px !important;

    min-height:390px !important;

    margin:0 auto !important;

    padding:
        50px
        28px
        52px !important;

    position:relative !important;
    z-index:2 !important;

    display:flex !important;

    flex-direction:column !important;

    align-items:center !important;
    justify-content:center !important;

    text-align:center !important;
}


/* =========================================================
   BREADCRUMB
========================================================= */

#shivam-about-hero .sah-breadcrumb{
    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    gap:8px !important;

    margin:
        0
        0
        14px !important;

    font-size:10px !important;
    font-weight:700 !important;

    letter-spacing:.4px !important;
}


#shivam-about-hero .sah-breadcrumb a{
    color:
        rgba(255,255,255,.58) !important;

    text-decoration:none !important;

    transition:
        color .25s ease !important;
}


#shivam-about-hero .sah-breadcrumb a:hover{
    color:#83CE8D !important;
}


#shivam-about-hero .sah-breadcrumb-current{
    color:#FFFFFF !important;
}


#shivam-about-hero .sah-breadcrumb-dot{
    width:4px !important;
    height:4px !important;

    border-radius:50% !important;

    background:#1E712C !important;
}


/* =========================================================
   SMALL LABEL
========================================================= */

#shivam-about-hero .sah-label{
    display:inline-flex !important;

    align-items:center !important;
    justify-content:center !important;

    gap:9px !important;

    margin:
        0
        0
        11px !important;

    color:#82CF8C !important;

    font-size:10px !important;
    font-weight:800 !important;

    letter-spacing:1.7px !important;

    text-transform:uppercase !important;
}


#shivam-about-hero .sah-label::before,
#shivam-about-hero .sah-label::after{
    content:"" !important;

    width:24px !important;
    height:2px !important;

    border-radius:20px !important;

    background:#1E712C !important;
}


/* =========================================================
   HEADING
========================================================= */

#shivam-about-hero .sah-title{
    width:100% !important;

    max-width:850px !important;

    margin:0 !important;

    color:#FFFFFF !important;

    font-size:47px !important;
    font-weight:800 !important;

    line-height:1.11 !important;

    letter-spacing:-1.4px !important;
}


#shivam-about-hero .sah-title span{
    color:#7CC987 !important;
}


/* =========================================================
   DESCRIPTION
========================================================= */

#shivam-about-hero .sah-description{
    width:100% !important;

    max-width:720px !important;

    margin:
        15px
        auto
        0 !important;

    color:
        rgba(255,255,255,.72) !important;

    font-size:15.5px !important;
    font-weight:400 !important;

    line-height:1.72 !important;
}


/* =========================================================
   SMALL GREEN ACCENT
========================================================= */

#shivam-about-hero .sah-accent{
    width:54px !important;
    height:3px !important;

    margin-top:22px !important;

    border-radius:20px !important;

    background:#1E712C !important;
}


/* =========================================================
   SIMPLE INFO ROW
========================================================= */

#shivam-about-hero .sah-info{
    margin-top:23px !important;

    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    flex-wrap:wrap !important;

    gap:
        10px
        22px !important;
}


#shivam-about-hero .sah-info-item{
    display:flex !important;

    align-items:center !important;

    gap:7px !important;

    color:
        rgba(255,255,255,.72) !important;

    font-size:10.5px !important;
    font-weight:600 !important;
}


#shivam-about-hero .sah-info-item::before{
    content:"" !important;

    width:5px !important;
    height:5px !important;

    flex:0 0 5px !important;

    border-radius:50% !important;

    background:#1E712C !important;
}


/* =========================================================
   BOTTOM ACCENT
========================================================= */

#shivam-about-hero .sah-bottom-line{
    position:absolute !important;

    left:50% !important;
    bottom:0 !important;

    width:120px !important;
    height:3px !important;

    transform:
        translateX(-50%) !important;

    background:#1E712C !important;

    border-radius:
        10px
        10px
        0
        0 !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:900px){

    #shivam-about-hero .sah-container{
        min-height:365px !important;

        padding:
            46px
            22px
            48px !important;
    }


    #shivam-about-hero .sah-title{
        max-width:760px !important;

        font-size:40px !important;
    }


    #shivam-about-hero .sah-description{
        max-width:650px !important;

        font-size:14.5px !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:600px){

    #shivam-about-hero .sah-container{
        min-height:335px !important;

        padding:
            37px
            15px
            40px !important;
    }


    #shivam-about-hero .sah-line-one,
    #shivam-about-hero .sah-line-two{
        display:none !important;
    }


    #shivam-about-hero::before{
        width:250px !important;
        height:250px !important;

        right:-155px !important;
        top:-145px !important;
    }


    #shivam-about-hero::after{
        width:170px !important;
        height:170px !important;

        left:-110px !important;
        bottom:-105px !important;
    }


    #shivam-about-hero .sah-breadcrumb{
        margin-bottom:12px !important;

        font-size:9px !important;
    }


    #shivam-about-hero .sah-label{
        margin-bottom:9px !important;

        font-size:9px !important;

        letter-spacing:1.4px !important;
    }


    #shivam-about-hero .sah-label::before,
    #shivam-about-hero .sah-label::after{
        width:18px !important;
    }


    #shivam-about-hero .sah-title{
        max-width:100% !important;

        font-size:31px !important;

        line-height:1.16 !important;

        letter-spacing:-.7px !important;
    }


    #shivam-about-hero .sah-description{
        max-width:100% !important;

        margin-top:13px !important;

        font-size:13.5px !important;

        line-height:1.65 !important;
    }


    #shivam-about-hero .sah-accent{
        width:44px !important;

        margin-top:18px !important;
    }


    #shivam-about-hero .sah-info{
        margin-top:17px !important;

        gap:
            8px
            14px !important;
    }


    #shivam-about-hero .sah-info-item{
        font-size:9.3px !important;
    }

}

</style>


<section id="shivam-about-hero">


    <!-- SUBTLE DECORATION -->

    <span
        class="sah-line-one"
        aria-hidden="true"
    ></span>

    <span
        class="sah-line-two"
        aria-hidden="true"
    ></span>



    <div class="sah-container">


        <!-- BREADCRUMB -->

        <div class="sah-breadcrumb">

            <a href="index.php">
                Home
            </a>

            <span class="sah-breadcrumb-dot"></span>

            <span class="sah-breadcrumb-current">
                About Us
            </span>

        </div>



        <!-- LABEL -->

        <div class="sah-label">
            About Shivam Uniform
        </div>



        <!-- HEADING -->

        <h1 class="sah-title">

            Uniforms Made for

            <span>
                Everyday Professional Use
            </span>

        </h1>



        <!-- DESCRIPTION -->

        <p class="sah-description">

            Shivam Uniform provides practical uniform solutions
            for schools, businesses, industries, hospitality,
            security and service teams, with a focus on comfort,
            durability and a neat professional appearance.

        </p>



        <!-- ACCENT -->

        <div
            class="sah-accent"
            aria-hidden="true"
        ></div>



        <!-- SIMPLE CATEGORY ROW -->

        <div class="sah-info">

            <span class="sah-info-item">
                School Uniforms
            </span>

            <span class="sah-info-item">
                Corporate Uniforms
            </span>

            <span class="sah-info-item">
                Industrial Uniforms
            </span>

            <span class="sah-info-item">
                Hospitality & Service
            </span>

        </div>


    </div>



    <!-- BOTTOM LINE -->

    <div
        class="sah-bottom-line"
        aria-hidden="true"
    ></div>


</section>