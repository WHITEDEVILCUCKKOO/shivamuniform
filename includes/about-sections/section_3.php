<!-- =========================================================
     SHIVAM UNIFORM
     ABOUT US PAGE - SECTION 03
     WHAT WE STAND FOR
     CLEAN PREMIUM CARD VERSION
     ELEMENTOR SAFE / RESPONSIVE

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

#shivam-about-values,
#shivam-about-values *{
    box-sizing:border-box !important;
}

#shivam-about-values{
    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;
    --light:#F7F9FB;
    --text:#65707C;
    --border:#E2E7EC;

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
            #F8FAFB 60%,
            #F3F8F4 100%
        ) !important;

    font-family:'Manrope',sans-serif !important;
}


/* =========================================================
   BACKGROUND DECORATION
========================================================= */

#shivam-about-values::before{
    content:"" !important;

    position:absolute !important;

    width:250px !important;
    height:250px !important;

    right:-140px !important;
    top:-150px !important;

    border-radius:50% !important;

    background:
        rgba(30,113,44,.045) !important;

    pointer-events:none !important;
}


#shivam-about-values::after{
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

#shivam-about-values .sav-container{
    width:100% !important;
    max-width:1160px !important;

    margin:0 auto !important;

    position:relative !important;
    z-index:2 !important;
}


/* =========================================================
   HEADER
========================================================= */

#shivam-about-values .sav-header{
    width:100% !important;
    max-width:760px !important;

    margin:
        0
        auto
        26px !important;

    text-align:center !important;
}


/* LABEL */

#shivam-about-values .sav-label{
    display:inline-flex !important;

    align-items:center !important;
    justify-content:center !important;

    gap:9px !important;

    margin:
        0
        0
        9px !important;

    color:var(--green) !important;

    font-size:10px !important;
    font-weight:800 !important;

    letter-spacing:1.6px !important;

    text-transform:uppercase !important;
}


#shivam-about-values .sav-label::before,
#shivam-about-values .sav-label::after{
    content:"" !important;

    width:24px !important;
    height:2px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}


/* HEADING */

#shivam-about-values .sav-heading{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:36px !important;
    font-weight:800 !important;

    line-height:1.16 !important;

    letter-spacing:-.9px !important;
}


#shivam-about-values .sav-heading span{
    color:var(--green) !important;
}


/* DESCRIPTION */

#shivam-about-values .sav-description{
    width:100% !important;
    max-width:680px !important;

    margin:
        11px
        auto
        0 !important;

    color:var(--text) !important;

    font-size:15px !important;
    font-weight:400 !important;

    line-height:1.68 !important;
}


/* =========================================================
   GRID
========================================================= */

#shivam-about-values .sav-grid{
    width:100% !important;

    display:grid !important;

    grid-template-columns:
        repeat(4,minmax(0,1fr)) !important;

    gap:15px !important;

    align-items:stretch !important;
}


/* =========================================================
   CARD
========================================================= */

#shivam-about-values .sav-card{
    width:100% !important;

    min-height:255px !important;

    padding:
        22px
        21px
        22px !important;

    position:relative !important;
    overflow:hidden !important;

    display:flex !important;
    flex-direction:column !important;

    border-radius:11px !important;

    transition:
        transform .28s ease,
        box-shadow .28s ease,
        border-color .28s ease !important;
}


#shivam-about-values .sav-card:hover{
    transform:
        translateY(-4px) !important;
}


/* =========================================================
   LIGHT CARD
========================================================= */

#shivam-about-values .sav-light{
    background:#FFFFFF !important;

    border:
        1px solid
        rgba(0,22,65,.09) !important;

    box-shadow:
        0 8px 22px
        rgba(0,22,65,.05) !important;
}


#shivam-about-values .sav-light:hover{
    border-color:
        rgba(30,113,44,.30) !important;

    box-shadow:
        0 14px 30px
        rgba(0,22,65,.08) !important;
}


/* =========================================================
   DARK CARD
========================================================= */

#shivam-about-values .sav-dark{
    background:
        linear-gradient(
            145deg,
            #001641 0%,
            #082A3F 68%,
            #12392E 100%
        ) !important;

    border:
        1px solid
        #001641 !important;

    box-shadow:
        0 12px 28px
        rgba(0,22,65,.13) !important;
}


#shivam-about-values .sav-dark:hover{
    box-shadow:
        0 17px 34px
        rgba(0,22,65,.18) !important;
}


/* =========================================================
   TOP GREEN ACCENT
========================================================= */

#shivam-about-values .sav-card::before{
    content:"" !important;

    position:absolute !important;

    top:0 !important;
    left:21px !important;

    width:42px !important;
    height:3px !important;

    background:var(--green) !important;

    border-radius:
        0
        0
        20px
        20px !important;
}


/* =========================================================
   DARK DECORATION
========================================================= */

#shivam-about-values .sav-dark::after{
    content:"" !important;

    position:absolute !important;

    width:115px !important;
    height:115px !important;

    right:-55px !important;
    bottom:-60px !important;

    border-radius:50% !important;

    background:
        rgba(30,113,44,.15) !important;

    pointer-events:none !important;
}


/* =========================================================
   ICON
========================================================= */

#shivam-about-values .sav-icon{
    width:44px !important;
    height:44px !important;

    flex:0 0 44px !important;

    margin:
        2px
        0
        17px !important;

    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    border-radius:10px !important;

    font-size:17px !important;

    position:relative !important;
    z-index:2 !important;
}


/* LIGHT ICON */

#shivam-about-values .sav-light .sav-icon{
    color:var(--green) !important;

    background:
        rgba(30,113,44,.07) !important;

    border:
        1px solid
        rgba(30,113,44,.16) !important;
}


/* DARK ICON */

#shivam-about-values .sav-dark .sav-icon{
    color:#FFFFFF !important;

    background:var(--green) !important;

    border:
        1px solid
        rgba(255,255,255,.08) !important;
}


/* =========================================================
   CARD HEADING
========================================================= */

#shivam-about-values .sav-card h3{
    margin:0 !important;

    font-size:18px !important;
    font-weight:800 !important;

    line-height:1.35 !important;

    position:relative !important;
    z-index:2 !important;
}


#shivam-about-values .sav-light h3{
    color:var(--blue) !important;
}


#shivam-about-values .sav-dark h3{
    color:#FFFFFF !important;
}


/* =========================================================
   PARAGRAPH
========================================================= */

#shivam-about-values .sav-card p{
    margin:
        9px
        0
        0 !important;

    font-size:13.5px !important;
    font-weight:400 !important;

    line-height:1.65 !important;

    position:relative !important;
    z-index:2 !important;
}


#shivam-about-values .sav-light p{
    color:var(--text) !important;
}


#shivam-about-values .sav-dark p{
    color:
        rgba(255,255,255,.70) !important;
}


/* =========================================================
   BOTTOM DETAIL
========================================================= */

#shivam-about-values .sav-detail{
    width:100% !important;

    margin-top:auto !important;

    padding-top:18px !important;

    display:flex !important;

    align-items:center !important;

    gap:8px !important;

    position:relative !important;
    z-index:2 !important;
}


#shivam-about-values .sav-detail-line{
    width:27px !important;
    height:2px !important;

    flex:0 0 27px !important;

    background:var(--green) !important;
}


#shivam-about-values .sav-detail span{
    font-size:8.5px !important;
    font-weight:800 !important;

    letter-spacing:1px !important;

    text-transform:uppercase !important;
}


#shivam-about-values .sav-light .sav-detail span{
    color:
        rgba(0,22,65,.52) !important;
}


#shivam-about-values .sav-dark .sav-detail span{
    color:
        rgba(255,255,255,.58) !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:950px){

    #shivam-about-values{
        padding:
            38px
            18px
            44px !important;
    }


    #shivam-about-values .sav-heading{
        font-size:33px !important;
    }


    #shivam-about-values .sav-description{
        font-size:14px !important;
    }


    #shivam-about-values .sav-grid{
        grid-template-columns:
            repeat(2,minmax(0,1fr)) !important;

        gap:14px !important;
    }


    #shivam-about-values .sav-card{
        min-height:225px !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:600px){

    #shivam-about-values{
        padding:
            34px
            14px
            40px !important;
    }


    #shivam-about-values .sav-header{
        margin-bottom:21px !important;
    }


    #shivam-about-values .sav-label{
        font-size:9px !important;
    }


    #shivam-about-values .sav-label::before,
    #shivam-about-values .sav-label::after{
        width:18px !important;
    }


    #shivam-about-values .sav-heading{
        font-size:29px !important;

        line-height:1.18 !important;
    }


    #shivam-about-values .sav-description{
        max-width:430px !important;

        font-size:13.5px !important;

        line-height:1.65 !important;
    }


    #shivam-about-values .sav-grid{
        grid-template-columns:1fr !important;

        gap:12px !important;

        max-width:480px !important;

        margin:0 auto !important;
    }


    #shivam-about-values .sav-card{
        min-height:auto !important;

        padding:
            20px
            18px !important;
    }


    #shivam-about-values .sav-card::before{
        left:18px !important;
    }


    #shivam-about-values .sav-icon{
        width:41px !important;
        height:41px !important;

        flex-basis:41px !important;

        margin-bottom:14px !important;

        font-size:16px !important;
    }


    #shivam-about-values .sav-card h3{
        font-size:17px !important;
    }


    #shivam-about-values .sav-card p{
        font-size:13px !important;

        line-height:1.62 !important;
    }


    #shivam-about-values .sav-detail{
        margin-top:16px !important;

        padding-top:0 !important;
    }

}

</style>


<section id="shivam-about-values">

    <div class="sav-container">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="sav-header">


            <div class="sav-label">
                What We Stand For
            </div>


            <h2 class="sav-heading">

                The Principles Behind

                <span>
                    Every Uniform We Make
                </span>

            </h2>


            <p class="sav-description">

                Our focus stays on the things that matter in everyday
                uniform use — comfort, practical fabric, clean finishing
                and a professional appearance for the people wearing it.

            </p>


        </div>



        <!-- =================================================
             CARDS
        ================================================== -->

        <div class="sav-grid">


            <!-- CARD 01 -->

            <article class="sav-card sav-light">


                <div class="sav-icon">

                    <i class="fa-solid fa-shirt"></i>

                </div>


                <h3>
                    Comfort First
                </h3>


                <p>

                    Uniforms should feel comfortable and practical
                    throughout the day while maintaining a neat,
                    professional appearance.

                </p>


                <div class="sav-detail">

                    <span class="sav-detail-line"></span>

                    <span>
                        Everyday Comfort
                    </span>

                </div>


            </article>



            <!-- CARD 02 -->

            <article class="sav-card sav-dark">


                <div class="sav-icon">

                    <i class="fa-solid fa-layer-group"></i>

                </div>


                <h3>
                    Suitable Fabric
                </h3>


                <p>

                    Fabric choices are considered according to the
                    working environment, practical use and the
                    appearance required from the uniform.

                </p>


                <div class="sav-detail">

                    <span class="sav-detail-line"></span>

                    <span>
                        Practical Selection
                    </span>

                </div>


            </article>



            <!-- CARD 03 -->

            <article class="sav-card sav-light">


                <div class="sav-icon">

                    <i class="fa-solid fa-scissors"></i>

                </div>


                <h3>
                    Clean Finishing
                </h3>


                <p>

                    Attention to fit, stitching and finishing helps
                    create uniforms that look organised, polished
                    and suitable for professional use.

                </p>


                <div class="sav-detail">

                    <span class="sav-detail-line"></span>

                    <span>
                        Neat Finish
                    </span>

                </div>


            </article>



            <!-- CARD 04 -->

            <article class="sav-card sav-dark">


                <div class="sav-icon">

                    <i class="fa-solid fa-people-group"></i>

                </div>


                <h3>
                    Made for Teams
                </h3>


                <p>

                    Every requirement is considered around the people
                    wearing the uniform, their environment and the
                    work it needs to support.

                </p>


                <div class="sav-detail">

                    <span class="sav-detail-line"></span>

                    <span>
                        Team Identity
                    </span>

                </div>


            </article>


        </div>


    </div>

</section>