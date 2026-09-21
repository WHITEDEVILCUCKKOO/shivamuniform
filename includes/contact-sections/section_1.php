<!-- =========================================================
     SHIVAM UNIFORM
     CONTACT US PAGE - SECTION 01
     CLEAN PREMIUM HERO
     ELEMENTOR SAFE / RESPONSIVE

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

#shivam-contact-hero,
#shivam-contact-hero *{
    box-sizing:border-box !important;
}

#shivam-contact-hero{
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
            circle at 14% 28%,
            rgba(30,113,44,.20) 0%,
            rgba(30,113,44,.07) 22%,
            transparent 42%
        ),
        radial-gradient(
            circle at 88% 70%,
            rgba(255,255,255,.055) 0%,
            transparent 28%
        ),
        linear-gradient(
            120deg,
            #001641 0%,
            #001B48 55%,
            #0B3037 100%
        ) !important;
}


/* =========================================================
   DECORATIVE BACKGROUND
========================================================= */

#shivam-contact-hero::before{
    content:"" !important;

    position:absolute !important;

    width:350px !important;
    height:350px !important;

    right:-180px !important;
    top:-190px !important;

    border-radius:50% !important;

    border:
        1px solid
        rgba(30,113,44,.18) !important;

    pointer-events:none !important;
}


#shivam-contact-hero::after{
    content:"" !important;

    position:absolute !important;

    width:230px !important;
    height:230px !important;

    left:-130px !important;
    bottom:-150px !important;

    border-radius:50% !important;

    background:
        rgba(30,113,44,.07) !important;

    pointer-events:none !important;
}


/* =========================================================
   CONTAINER
========================================================= */

#shivam-contact-hero .sch-container{
    width:100% !important;
    max-width:1160px !important;

    min-height:385px !important;

    margin:0 auto !important;

    padding:
        48px
        28px
        50px !important;

    display:flex !important;

    flex-direction:column !important;

    align-items:center !important;
    justify-content:center !important;

    text-align:center !important;

    position:relative !important;
    z-index:2 !important;
}


/* =========================================================
   BREADCRUMB
========================================================= */

#shivam-contact-hero .sch-breadcrumb{
    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    gap:8px !important;

    margin:0 0 14px !important;

    font-size:11px !important;
    font-weight:700 !important;
}


#shivam-contact-hero .sch-breadcrumb a{
    color:
        rgba(255,255,255,.58) !important;

    text-decoration:none !important;

    transition:
        color .25s ease !important;
}


#shivam-contact-hero .sch-breadcrumb a:hover{
    color:#7BC486 !important;
}


#shivam-contact-hero .sch-breadcrumb span{
    color:#FFFFFF !important;
}


#shivam-contact-hero .sch-breadcrumb-arrow{
    color:#1E712C !important;

    font-size:13px !important;
}


/* =========================================================
   SMALL LABEL
========================================================= */

#shivam-contact-hero .sch-label{
    display:inline-flex !important;

    align-items:center !important;
    justify-content:center !important;

    gap:9px !important;

    margin:0 0 11px !important;

    color:#83CF8D !important;

    font-size:10px !important;
    font-weight:800 !important;

    letter-spacing:1.7px !important;

    text-transform:uppercase !important;
}


#shivam-contact-hero .sch-label::before,
#shivam-contact-hero .sch-label::after{
    content:"" !important;

    width:24px !important;
    height:2px !important;

    border-radius:20px !important;

    background:#1E712C !important;
}


/* =========================================================
   HEADING
========================================================= */

#shivam-contact-hero .sch-heading{
    width:100% !important;
    max-width:790px !important;

    margin:0 !important;

    color:#FFFFFF !important;

    font-size:46px !important;
    font-weight:800 !important;

    line-height:1.12 !important;

    letter-spacing:-1.3px !important;
}


#shivam-contact-hero .sch-heading span{
    color:#7AC585 !important;
}


/* =========================================================
   DESCRIPTION
========================================================= */

#shivam-contact-hero .sch-description{
    width:100% !important;
    max-width:700px !important;

    margin:
        15px
        auto
        0 !important;

    color:
        rgba(255,255,255,.72) !important;

    font-size:16px !important;
    font-weight:400 !important;

    line-height:1.72 !important;
}


/* =========================================================
   BOTTOM ACCENT
========================================================= */

#shivam-contact-hero .sch-accent{
    width:54px !important;
    height:3px !important;

    margin-top:23px !important;

    border-radius:30px !important;

    background:#1E712C !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:900px){

    #shivam-contact-hero .sch-container{
        min-height:360px !important;

        padding:
            44px
            22px
            46px !important;
    }


    #shivam-contact-hero .sch-heading{
        max-width:720px !important;

        font-size:40px !important;
    }


    #shivam-contact-hero .sch-description{
        font-size:15px !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:600px){

    #shivam-contact-hero .sch-container{
        min-height:330px !important;

        padding:
            36px
            15px
            38px !important;
    }


    #shivam-contact-hero .sch-breadcrumb{
        margin-bottom:12px !important;

        font-size:10px !important;
    }


    #shivam-contact-hero .sch-label{
        margin-bottom:9px !important;

        font-size:9px !important;

        letter-spacing:1.4px !important;
    }


    #shivam-contact-hero .sch-label::before,
    #shivam-contact-hero .sch-label::after{
        width:18px !important;
    }


    #shivam-contact-hero .sch-heading{
        max-width:100% !important;

        font-size:31px !important;

        line-height:1.16 !important;

        letter-spacing:-.7px !important;
    }


    #shivam-contact-hero .sch-description{
        max-width:100% !important;

        margin-top:13px !important;

        font-size:14px !important;

        line-height:1.65 !important;
    }


    #shivam-contact-hero .sch-accent{
        width:44px !important;

        margin-top:19px !important;
    }

}

</style>


<section id="shivam-contact-hero">

    <div class="sch-container">


        <!-- BREADCRUMB -->

        <div class="sch-breadcrumb">

            <a href="index.php">
                Home
            </a>

            <span class="sch-breadcrumb-arrow">
                ›
            </span>

            <span>
                Contact Us
            </span>

        </div>



        <!-- LABEL -->

        <div class="sch-label">
            Contact Shivam Uniform
        </div>



        <!-- HEADING -->

        <h1 class="sch-heading">

            Let’s Discuss Your

            <span>
                Uniform Requirement
            </span>

        </h1>



        <!-- DESCRIPTION -->

        <p class="sch-description">

            Looking for uniforms for your school, workplace,
            hospitality team, security staff or organisation?
            Share your requirement with us and our team will
            help you explore the right uniform options.

        </p>



        <!-- SMALL ACCENT -->

        <div class="sch-accent"></div>


    </div>

</section>