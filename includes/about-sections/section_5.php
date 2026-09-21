<!-- =========================================================
     SHIVAM UNIFORM
     ABOUT US PAGE - SECTION 05
     OUR APPROACH
     CLEAN PREMIUM PROCESS SECTION
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

#shivam-about-approach,
#shivam-about-approach *{
    box-sizing:border-box !important;
}

#shivam-about-approach{
    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;
    --text:#D7DFE6;

    width:100% !important;
    margin:0 !important;

    padding:
        46px
        20px
        50px !important;

    position:relative !important;
    overflow:hidden !important;

    background:
        radial-gradient(
            circle at 90% 10%,
            rgba(30,113,44,.18) 0%,
            transparent 28%
        ),
        radial-gradient(
            circle at 8% 92%,
            rgba(255,255,255,.05) 0%,
            transparent 24%
        ),
        linear-gradient(
            135deg,
            #001641 0%,
            #001A47 50%,
            #0A2F3C 78%,
            #12392E 100%
        ) !important;

    font-family:'Manrope',sans-serif !important;
}


/* =========================================================
   BACKGROUND DECORATION
========================================================= */

#shivam-about-approach::before{
    content:"" !important;

    position:absolute !important;

    width:280px !important;
    height:280px !important;

    right:-145px !important;
    top:-150px !important;

    border-radius:50% !important;

    border:
        1px solid
        rgba(30,113,44,.20) !important;

    pointer-events:none !important;
}


#shivam-about-approach::after{
    content:"" !important;

    position:absolute !important;

    width:170px !important;
    height:170px !important;

    left:-100px !important;
    bottom:-100px !important;

    border-radius:50% !important;

    background:
        rgba(30,113,44,.06) !important;

    pointer-events:none !important;
}


/* =========================================================
   CONTAINER
========================================================= */

#shivam-about-approach .saa-container{
    width:100% !important;
    max-width:1160px !important;

    margin:0 auto !important;

    display:grid !important;

    grid-template-columns:
        minmax(280px,.76fr)
        minmax(0,1.24fr) !important;

    gap:48px !important;

    align-items:center !important;

    position:relative !important;
    z-index:2 !important;
}


/* =========================================================
   LEFT CONTENT
========================================================= */

#shivam-about-approach .saa-left{
    width:100% !important;

    text-align:left !important;
}


/* LABEL */

#shivam-about-approach .saa-label{
    display:inline-flex !important;

    align-items:center !important;

    gap:9px !important;

    margin:
        0
        0
        10px !important;

    color:#82CF8D !important;

    font-size:10px !important;
    font-weight:800 !important;

    letter-spacing:1.6px !important;

    text-transform:uppercase !important;
}


#shivam-about-approach .saa-label::before{
    content:"" !important;

    width:27px !important;
    height:2px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}


/* HEADING */

#shivam-about-approach .saa-heading{
    margin:0 !important;

    color:#FFFFFF !important;

    font-size:36px !important;
    font-weight:800 !important;

    line-height:1.16 !important;

    letter-spacing:-.9px !important;
}


#shivam-about-approach .saa-heading span{
    color:#7EC989 !important;
}


/* DESCRIPTION */

#shivam-about-approach .saa-description{
    max-width:460px !important;

    margin:
        13px
        0
        0 !important;

    color:
        rgba(255,255,255,.72) !important;

    font-size:15px !important;

    line-height:1.7 !important;
}


/* =========================================================
   QUOTE
========================================================= */

#shivam-about-approach .saa-quote{
    max-width:455px !important;

    margin-top:20px !important;

    padding:
        14px
        0
        0
        16px !important;

    border-left:
        3px solid
        var(--green) !important;
}


#shivam-about-approach .saa-quote p{
    margin:0 !important;

    color:
        rgba(255,255,255,.88) !important;

    font-size:13px !important;
    font-weight:700 !important;

    line-height:1.62 !important;
}


/* =========================================================
   RIGHT PROCESS
========================================================= */

#shivam-about-approach .saa-process{
    width:100% !important;

    display:flex !important;

    flex-direction:column !important;

    gap:12px !important;
}


/* =========================================================
   STEP
========================================================= */

#shivam-about-approach .saa-step{
    width:100% !important;

    display:grid !important;

    grid-template-columns:
        56px
        minmax(0,1fr)
        auto !important;

    gap:16px !important;

    align-items:center !important;

    min-height:112px !important;

    padding:
        18px
        20px !important;

    position:relative !important;
    overflow:hidden !important;

    border-radius:11px !important;

    transition:
        transform .28s ease,
        box-shadow .28s ease,
        border-color .28s ease !important;
}


/* =========================================================
   LIGHT STEP
========================================================= */

#shivam-about-approach .saa-step-light{
    background:#FFFFFF !important;

    border:
        1px solid
        rgba(255,255,255,.10) !important;

    box-shadow:
        0 9px 24px
        rgba(0,0,0,.08) !important;
}


/* =========================================================
   SOFT GREEN STEP
========================================================= */

#shivam-about-approach .saa-step-green{
    background:
        linear-gradient(
            135deg,
            #F5FAF6 0%,
            #EDF6EF 100%
        ) !important;

    border:
        1px solid
        rgba(30,113,44,.18) !important;

    box-shadow:
        0 9px 24px
        rgba(0,0,0,.07) !important;
}


/* =========================================================
   HOVER
========================================================= */

#shivam-about-approach .saa-step:hover{
    transform:
        translateX(4px) !important;

    box-shadow:
        0 13px 28px
        rgba(0,0,0,.11) !important;
}


/* =========================================================
   TOP ACCENT
========================================================= */

#shivam-about-approach .saa-step::before{
    content:"" !important;

    position:absolute !important;

    left:20px !important;
    top:0 !important;

    width:44px !important;
    height:3px !important;

    background:var(--green) !important;

    border-radius:
        0
        0
        20px
        20px !important;
}


/* =========================================================
   ICON
========================================================= */

#shivam-about-approach .saa-icon{
    width:48px !important;
    height:48px !important;

    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    border-radius:10px !important;

    background:var(--blue) !important;

    color:#FFFFFF !important;

    font-size:17px !important;

    box-shadow:
        0 6px 16px
        rgba(0,22,65,.12) !important;
}


#shivam-about-approach
.saa-step-green
.saa-icon{
    background:var(--green) !important;
}


/* =========================================================
   STEP CONTENT
========================================================= */

#shivam-about-approach .saa-step h3{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:18px !important;
    font-weight:800 !important;

    line-height:1.35 !important;
}


#shivam-about-approach .saa-step p{
    margin:
        5px
        0
        0 !important;

    color:#66717C !important;

    font-size:13px !important;

    line-height:1.6 !important;
}


/* =========================================================
   STEP NUMBER
========================================================= */

#shivam-about-approach .saa-step-mark{
    min-width:48px !important;

    text-align:right !important;

    color:var(--green) !important;

    font-size:28px !important;
    font-weight:800 !important;

    line-height:1 !important;

    opacity:.14 !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:950px){

    #shivam-about-approach{
        padding:
            42px
            18px
            46px !important;
    }


    #shivam-about-approach .saa-container{
        grid-template-columns:
            minmax(250px,.74fr)
            minmax(0,1.26fr) !important;

        gap:34px !important;
    }


    #shivam-about-approach .saa-heading{
        font-size:32px !important;
    }


    #shivam-about-approach .saa-description{
        font-size:14px !important;
    }


    #shivam-about-approach .saa-step{
        grid-template-columns:
            52px
            minmax(0,1fr) !important;
    }


    #shivam-about-approach .saa-step-mark{
        display:none !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:700px){

    #shivam-about-approach{
        padding:
            36px
            14px
            40px !important;
    }


    #shivam-about-approach .saa-container{
        grid-template-columns:1fr !important;

        gap:24px !important;
    }


    #shivam-about-approach .saa-left{
        text-align:center !important;
    }


    #shivam-about-approach .saa-label{
        justify-content:center !important;

        font-size:9px !important;
    }


    #shivam-about-approach .saa-label::before{
        width:20px !important;
    }


    #shivam-about-approach .saa-heading{
        max-width:520px !important;

        margin:0 auto !important;

        font-size:29px !important;

        line-height:1.18 !important;
    }


    #shivam-about-approach .saa-description{
        max-width:500px !important;

        margin:
            11px
            auto
            0 !important;

        font-size:13.5px !important;

        line-height:1.65 !important;
    }


    #shivam-about-approach .saa-quote{
        max-width:500px !important;

        margin:
            18px
            auto
            0 !important;

        padding:
            13px
            14px
            0 !important;

        border-left:0 !important;

        border-top:
            3px solid
            var(--green) !important;
    }


    #shivam-about-approach .saa-quote p{
        font-size:12.5px !important;
    }


    #shivam-about-approach .saa-process{
        gap:10px !important;
    }


    #shivam-about-approach .saa-step{
        grid-template-columns:
            46px
            minmax(0,1fr) !important;

        gap:12px !important;

        min-height:auto !important;

        padding:
            16px
            15px !important;

        text-align:left !important;
    }


    #shivam-about-approach .saa-step:hover{
        transform:
            translateX(2px) !important;
    }


    #shivam-about-approach .saa-icon{
        width:42px !important;
        height:42px !important;

        font-size:15px !important;
    }


    #shivam-about-approach .saa-step h3{
        font-size:16px !important;
    }


    #shivam-about-approach .saa-step p{
        font-size:12.5px !important;

        line-height:1.58 !important;
    }

}

</style>


<section id="shivam-about-approach">

    <div class="saa-container">


        <!-- =================================================
             LEFT CONTENT
        ================================================== -->

        <div class="saa-left">


            <div class="saa-label">
                Our Approach
            </div>


            <h2 class="saa-heading">

                From Understanding the Need to

                <span>
                    Creating the Right Uniform
                </span>

            </h2>


            <p class="saa-description">

                We first understand where the uniform will be used,
                who will wear it and the professional appearance
                the organisation wants to maintain.

            </p>


            <div class="saa-quote">

                <p>

                    The best results come from considering
                    comfort, material, fitting and finishing together.

                </p>

            </div>


        </div>



        <!-- =================================================
             RIGHT PROCESS
        ================================================== -->

        <div class="saa-process">


            <!-- STEP 01 -->

            <div class="saa-step saa-step-light">


                <div class="saa-icon">

                    <i class="fa-solid fa-comments"></i>

                </div>


                <div>

                    <h3>
                        Understand the Requirement
                    </h3>

                    <p>
                        We begin with the work environment,
                        everyday use and overall uniform requirement.
                    </p>

                </div>


                <div class="saa-step-mark">
                    01
                </div>


            </div>



            <!-- STEP 02 -->

            <div class="saa-step saa-step-green">


                <div class="saa-icon">

                    <i class="fa-solid fa-swatchbook"></i>

                </div>


                <div>

                    <h3>
                        Consider Fabric & Styling
                    </h3>

                    <p>
                        Material and styling are selected around
                        comfort, practicality and professional appearance.
                    </p>

                </div>


                <div class="saa-step-mark">
                    02
                </div>


            </div>



            <!-- STEP 03 -->

            <div class="saa-step saa-step-light">


                <div class="saa-icon">

                    <i class="fa-solid fa-scissors"></i>

                </div>


                <div>

                    <h3>
                        Focus on Fit & Finishing
                    </h3>

                    <p>
                        Fitting, stitching and finishing are brought
                        together for a clean and comfortable result.
                    </p>

                </div>


                <div class="saa-step-mark">
                    03
                </div>


            </div>


        </div>


    </div>

</section>