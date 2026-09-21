<!-- =========================================================
     SHIVAM UNIFORM
     HOME HERO SECTION
     FINAL BLUE + GREEN BRAND VERSION
     Elementor / WordPress Safe
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>

/* =========================================================
   RESET + BRAND COLORS
========================================================= */

#shivam-uniform-final-hero,
#shivam-uniform-final-hero *{
    box-sizing:border-box !important;
}

#shivam-uniform-final-hero{
    --su-blue:#001641;
    --su-green:#1E712C;
    --su-white:#FFFFFF;
    --su-light:#F7F9FB;

    width:100% !important;
    min-height:600px !important;

    margin:0 !important;
    padding:0 !important;

    position:relative !important;

    display:flex !important;
    align-items:center !important;
    justify-content:center !important;

    overflow:hidden !important;

    background:var(--su-blue) !important;

    font-family:'Manrope',sans-serif !important;

    isolation:isolate !important;
}


/* =========================================================
   BACKGROUND IMAGE
========================================================= */

#shivam-uniform-final-hero .sufh-bg{
    position:absolute !important;

    inset:0 !important;

    width:100% !important;
    height:100% !important;

    object-fit:cover !important;
    object-position:center 45% !important;

    z-index:0 !important;

    transform:scale(1.02);

    animation:sufhZoom 15s ease-in-out infinite alternate !important;
}


@keyframes sufhZoom{

    0%{
        transform:scale(1.02);
    }

    100%{
        transform:scale(1.07);
    }

}


/* =========================================================
   PREMIUM BLUE OVERLAY
========================================================= */

#shivam-uniform-final-hero .sufh-overlay{
    position:absolute !important;

    inset:0 !important;

    z-index:1 !important;

    background:
    linear-gradient(
        90deg,
        rgba(0,22,65,.94) 0%,
        rgba(0,22,65,.82) 48%,
        rgba(0,22,65,.92) 100%
    ) !important;
}


/* =========================================================
   SUBTLE GREEN CENTER GLOW
========================================================= */

#shivam-uniform-final-hero .sufh-glow{
    position:absolute !important;

    width:720px !important;
    height:460px !important;

    left:50% !important;
    top:50% !important;

    transform:translate(-50%,-50%) !important;

    border-radius:50% !important;

    background:
    radial-gradient(
        circle,
        rgba(30,113,44,.16) 0%,
        rgba(30,113,44,.05) 42%,
        transparent 72%
    ) !important;

    z-index:2 !important;

    pointer-events:none !important;
}


/* =========================================================
   CONTENT WRAPPER
========================================================= */

#shivam-uniform-final-hero .sufh-container{
    width:100% !important;
    max-width:1180px !important;

    margin:0 auto !important;

    padding:76px 28px 74px !important;

    position:relative !important;

    z-index:5 !important;

    text-align:center !important;
}


/* =========================================================
   SMALL BRAND LABEL
========================================================= */

#shivam-uniform-final-hero .sufh-label{
    display:inline-flex !important;

    align-items:center !important;
    justify-content:center !important;

    gap:10px !important;

    margin:0 0 20px !important;

    padding:0 !important;

    color:rgba(255,255,255,.82) !important;

    font-size:11px !important;
    font-weight:700 !important;

    line-height:1 !important;

    letter-spacing:2px !important;
    text-transform:uppercase !important;

    opacity:0;

    animation:sufhFadeDown .7s ease .05s forwards !important;
}


#shivam-uniform-final-hero .sufh-label::before,
#shivam-uniform-final-hero .sufh-label::after{
    content:"" !important;

    width:34px !important;
    height:2px !important;

    border-radius:30px !important;

    background:var(--su-green) !important;
}


/* =========================================================
   MAIN HEADING
========================================================= */

#shivam-uniform-final-hero .sufh-heading{
    width:100% !important;
    max-width:980px !important;

    margin:0 auto !important;
    padding:0 !important;

    color:var(--su-white) !important;

    font-size:58px !important;
    font-weight:800 !important;

    line-height:1.08 !important;

    letter-spacing:-2px !important;

    text-align:center !important;

    opacity:0;

    animation:sufhFadeUp .8s ease .14s forwards !important;
}


#shivam-uniform-final-hero .sufh-heading-row{
    display:block !important;
}


#shivam-uniform-final-hero .sufh-green{
    color:#56B764 !important;
}


/* =========================================================
   DESCRIPTION
========================================================= */

#shivam-uniform-final-hero .sufh-description{
    width:100% !important;
    max-width:760px !important;

    margin:23px auto 0 !important;

    padding:0 !important;

    color:rgba(255,255,255,.80) !important;

    font-size:16px !important;
    font-weight:400 !important;

    line-height:1.75 !important;

    text-align:center !important;

    opacity:0;

    animation:sufhFadeUp .8s ease .27s forwards !important;
}


/* =========================================================
   TRUST FEATURES
========================================================= */

#shivam-uniform-final-hero .sufh-features{
    width:100% !important;

    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    flex-wrap:wrap !important;

    gap:14px 34px !important;

    margin:27px 0 0 !important;
    padding:0 !important;
}


#shivam-uniform-final-hero .sufh-feature{
    display:inline-flex !important;

    align-items:center !important;
    justify-content:center !important;

    gap:8px !important;

    color:#FFFFFF !important;

    font-size:13px !important;
    font-weight:600 !important;

    line-height:1.4 !important;

    opacity:0;

    animation:sufhFadeUp .65s ease forwards !important;
}


#shivam-uniform-final-hero .sufh-feature:nth-child(1){
    animation-delay:.40s !important;
}

#shivam-uniform-final-hero .sufh-feature:nth-child(2){
    animation-delay:.48s !important;
}

#shivam-uniform-final-hero .sufh-feature:nth-child(3){
    animation-delay:.56s !important;
}


#shivam-uniform-final-hero .sufh-check{
    width:21px !important;
    height:21px !important;

    flex:0 0 21px !important;

    display:inline-flex !important;

    align-items:center !important;
    justify-content:center !important;

    border-radius:50% !important;

    background:rgba(30,113,44,.28) !important;

    border:1px solid rgba(86,183,100,.50) !important;

    color:#75CF80 !important;

    font-size:10px !important;
    font-weight:900 !important;
}


/* =========================================================
   CTA BUTTONS
========================================================= */

#shivam-uniform-final-hero .sufh-actions{
    width:100% !important;

    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    flex-wrap:wrap !important;

    gap:12px !important;

    margin:31px auto 0 !important;
    padding:0 !important;

    opacity:0;

    animation:sufhFadeUp .75s ease .65s forwards !important;
}


#shivam-uniform-final-hero .sufh-btn{
    min-height:52px !important;

    padding:0 27px !important;

    display:inline-flex !important;

    align-items:center !important;
    justify-content:center !important;

    gap:9px !important;

    border-radius:6px !important;

    text-decoration:none !important;

    font-size:13.5px !important;
    font-weight:700 !important;

    line-height:1 !important;

    transition:
        transform .25s ease,
        background .25s ease,
        color .25s ease,
        border-color .25s ease,
        box-shadow .25s ease !important;
}


/* GREEN PRIMARY BUTTON */

#shivam-uniform-final-hero .sufh-btn-primary{
    background:var(--su-green) !important;

    color:#FFFFFF !important;

    border:1px solid var(--su-green) !important;

    box-shadow:
    0 12px 28px rgba(30,113,44,.26) !important;
}


#shivam-uniform-final-hero .sufh-btn-primary:hover{
    transform:translateY(-3px) !important;

    background:#258438 !important;

    border-color:#258438 !important;

    color:#FFFFFF !important;

    box-shadow:
    0 15px 34px rgba(30,113,44,.34) !important;
}


/* WHITE SECONDARY BUTTON */

#shivam-uniform-final-hero .sufh-btn-secondary{
    background:rgba(255,255,255,.04) !important;

    color:#FFFFFF !important;

    border:1px solid rgba(255,255,255,.72) !important;
}


#shivam-uniform-final-hero .sufh-btn-secondary:hover{
    transform:translateY(-3px) !important;

    background:#FFFFFF !important;

    color:var(--su-blue) !important;

    border-color:#FFFFFF !important;
}


/* ARROW */

#shivam-uniform-final-hero .sufh-arrow{
    display:inline-block !important;

    font-size:18px !important;

    transition:transform .25s ease !important;
}


#shivam-uniform-final-hero
.sufh-btn-primary:hover
.sufh-arrow{
    transform:translateX(4px) !important;
}


/* =========================================================
   BOTTOM BRAND LINE
========================================================= */

#shivam-uniform-final-hero .sufh-bottom-line{
    position:absolute !important;

    left:0 !important;
    bottom:0 !important;

    width:100% !important;
    height:4px !important;

    z-index:10 !important;

    background:
    linear-gradient(
        90deg,
        transparent 0%,
        #1E712C 20%,
        #2E8A40 50%,
        #1E712C 80%,
        transparent 100%
    ) !important;
}


/* =========================================================
   ANIMATION
========================================================= */

@keyframes sufhFadeUp{

    from{
        opacity:0;
        transform:translateY(20px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }

}


@keyframes sufhFadeDown{

    from{
        opacity:0;
        transform:translateY(-13px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:900px){

    #shivam-uniform-final-hero{
        min-height:560px !important;
    }


    #shivam-uniform-final-hero .sufh-container{
        padding:
        65px
        24px
        63px !important;
    }


    #shivam-uniform-final-hero .sufh-heading{
        max-width:850px !important;

        font-size:47px !important;

        letter-spacing:-1.5px !important;
    }


    #shivam-uniform-final-hero .sufh-description{
        max-width:700px !important;

        font-size:15.5px !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:600px){

    #shivam-uniform-final-hero{
        min-height:auto !important;
    }


    #shivam-uniform-final-hero .sufh-bg{
        object-position:center center !important;
    }


    #shivam-uniform-final-hero .sufh-overlay{
        background:
        rgba(0,22,65,.89) !important;
    }


    #shivam-uniform-final-hero .sufh-container{
        padding:
        52px
        16px
        52px !important;
    }


    #shivam-uniform-final-hero .sufh-label{
        margin-bottom:16px !important;

        font-size:9.5px !important;

        letter-spacing:1.3px !important;
    }


    #shivam-uniform-final-hero .sufh-label::before,
    #shivam-uniform-final-hero .sufh-label::after{
        width:22px !important;
    }


    #shivam-uniform-final-hero .sufh-heading{
        max-width:100% !important;

        font-size:37px !important;

        line-height:1.10 !important;

        letter-spacing:-1px !important;
    }


    #shivam-uniform-final-hero .sufh-description{
        max-width:100% !important;

        margin-top:18px !important;

        font-size:14px !important;

        line-height:1.7 !important;
    }


    #shivam-uniform-final-hero .sufh-features{
        gap:11px 17px !important;

        margin-top:22px !important;
    }


    #shivam-uniform-final-hero .sufh-feature{
        font-size:11.5px !important;
    }


    #shivam-uniform-final-hero .sufh-check{
        width:18px !important;
        height:18px !important;

        flex:0 0 18px !important;

        font-size:8px !important;
    }


    #shivam-uniform-final-hero .sufh-actions{
        width:100% !important;

        display:grid !important;

        grid-template-columns:1fr 1fr !important;

        gap:9px !important;

        margin-top:26px !important;
    }


    #shivam-uniform-final-hero .sufh-btn{
        width:100% !important;

        min-height:48px !important;

        padding:0 10px !important;

        font-size:12px !important;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:390px){

    #shivam-uniform-final-hero .sufh-container{
        padding:
        47px
        13px
        47px !important;
    }


    #shivam-uniform-final-hero .sufh-heading{
        font-size:33px !important;
    }


    #shivam-uniform-final-hero .sufh-description{
        font-size:13.5px !important;
    }


    #shivam-uniform-final-hero .sufh-feature{
        font-size:10.5px !important;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #shivam-uniform-final-hero *,
    #shivam-uniform-final-hero *::before,
    #shivam-uniform-final-hero *::after{
        animation:none !important;
        transition:none !important;
    }


    #shivam-uniform-final-hero .sufh-label,
    #shivam-uniform-final-hero .sufh-heading,
    #shivam-uniform-final-hero .sufh-description,
    #shivam-uniform-final-hero .sufh-feature,
    #shivam-uniform-final-hero .sufh-actions{
        opacity:1 !important;
        transform:none !important;
    }

}

</style>


<section id="shivam-uniform-final-hero">


    <!-- =====================================
         BACKGROUND IMAGE
         Change only image URL if needed
    ====================================== -->

    <img
        class="sufh-bg"
        src="https://images.unsplash.com/photo-1588072432836-e10032774350?auto=format&fit=crop&w=1800&q=88"
        alt="Uniform solutions by Shivam Uniform"
        loading="eager"
        fetchpriority="high"
    >


    <!-- BLUE OVERLAY -->

    <div class="sufh-overlay"></div>


    <!-- GREEN GLOW -->

    <div class="sufh-glow"></div>



    <!-- =====================================
         HERO CONTENT
    ====================================== -->

    <div class="sufh-container">


        <!-- SMALL LABEL -->

        <div class="sufh-label">
            Shivam Uniform
        </div>



        <!-- MAIN HEADING -->

        <h1 class="sufh-heading">

            <span class="sufh-heading-row">
                Uniforms Made for Every Need
            </span>

            <span class="sufh-heading-row sufh-green">
                Built for Comfort &amp; Confidence
            </span>

        </h1>



        <!-- DESCRIPTION -->

        <p class="sufh-description">

            Reliable uniform solutions for schools, corporates, industries,
            security teams, hospitality and organisations — with a focus on
            quality fabrics, comfortable fitting and a professional finish.

        </p>



        <!-- TRUST POINTS -->

        <div class="sufh-features">


            <div class="sufh-feature">

                <span class="sufh-check">✓</span>

                Quality Fabrics

            </div>


            <div class="sufh-feature">

                <span class="sufh-check">✓</span>

                Comfortable Fit

            </div>


            <div class="sufh-feature">

                <span class="sufh-check">✓</span>

                Professional Finish

            </div>


        </div>



        <!-- CTA BUTTONS -->

        <div class="sufh-actions">


            <a
                href="gallary.php"
                class="sufh-btn sufh-btn-primary"
            >

                Explore Uniforms

                <span class="sufh-arrow">→</span>

            </a>


            <a
                href="contact.php"
                class="sufh-btn sufh-btn-secondary"
            >

                Contact Us

            </a>


        </div>


    </div>


    <!-- BOTTOM BRAND LINE -->

    <div class="sufh-bottom-line"></div>


</section>