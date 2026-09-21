<!-- =========================================================
     SHIVAM UNIFORM
     ABOUT US PAGE - SECTION 07
     WHY SHIVAM UNIFORM
     CLEAN BALANCED PREMIUM VERSION
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

#shivam-why-section,
#shivam-why-section *{
    box-sizing:border-box !important;
}

#shivam-why-section{
    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;
    --light:#F7F9FB;
    --text:#65707C;
    --border:#E3E8EC;

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

#shivam-why-section::before{
    content:"" !important;

    position:absolute !important;

    width:250px !important;
    height:250px !important;

    left:-140px !important;
    top:-150px !important;

    border-radius:50% !important;

    background:
        rgba(30,113,44,.045) !important;

    pointer-events:none !important;
}


#shivam-why-section::after{
    content:"" !important;

    position:absolute !important;

    width:180px !important;
    height:180px !important;

    right:-100px !important;
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

#shivam-why-section .swy-container{
    width:100% !important;
    max-width:1160px !important;

    margin:0 auto !important;

    position:relative !important;
    z-index:2 !important;
}


/* =========================================================
   HEADER
========================================================= */

#shivam-why-section .swy-header{
    width:100% !important;
    max-width:750px !important;

    margin:
        0
        auto
        25px !important;

    text-align:center !important;
}


/* LABEL */

#shivam-why-section .swy-label{
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


#shivam-why-section .swy-label::before,
#shivam-why-section .swy-label::after{
    content:"" !important;

    width:24px !important;
    height:2px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}


/* HEADING */

#shivam-why-section .swy-heading{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:36px !important;
    font-weight:800 !important;

    line-height:1.16 !important;

    letter-spacing:-.9px !important;
}


#shivam-why-section .swy-heading span{
    color:var(--green) !important;
}


/* DESCRIPTION */

#shivam-why-section .swy-description{
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
   MAIN LAYOUT
========================================================= */

#shivam-why-section .swy-layout{
    width:100% !important;

    display:grid !important;

    grid-template-columns:
        minmax(0,1fr)
        minmax(280px,.78fr)
        minmax(0,1fr) !important;

    gap:15px !important;

    align-items:stretch !important;
}


/* =========================================================
   SIDE COLUMNS
========================================================= */

#shivam-why-section .swy-side{
    width:100% !important;

    display:grid !important;

    grid-template-rows:
        repeat(2,minmax(0,1fr)) !important;

    gap:15px !important;
}


/* =========================================================
   SIDE CARDS
========================================================= */

#shivam-why-section .swy-card{
    width:100% !important;
    height:100% !important;

    min-height:176px !important;

    padding:
        20px
        20px
        21px !important;

    position:relative !important;

    display:flex !important;
    flex-direction:column !important;
    align-items:flex-start !important;

    background:#FFFFFF !important;

    border:
        1px solid
        rgba(0,22,65,.09) !important;

    border-radius:10px !important;

    box-shadow:
        0 7px 20px
        rgba(0,22,65,.04) !important;

    transition:
        transform .28s ease,
        border-color .28s ease,
        box-shadow .28s ease !important;
}


#shivam-why-section .swy-card:hover{
    transform:
        translateY(-3px) !important;

    border-color:
        rgba(30,113,44,.28) !important;

    box-shadow:
        0 13px 28px
        rgba(0,22,65,.07) !important;
}


/* TOP GREEN LINE */

#shivam-why-section .swy-card::before{
    content:"" !important;

    position:absolute !important;

    top:0 !important;
    left:20px !important;

    width:38px !important;
    height:3px !important;

    background:var(--green) !important;

    border-radius:
        0
        0
        20px
        20px !important;
}


/* ICON */

#shivam-why-section .swy-icon{
    width:40px !important;
    height:40px !important;

    margin:
        1px
        0
        13px !important;

    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    color:var(--green) !important;

    font-size:16px !important;

    background:
        rgba(30,113,44,.07) !important;

    border:
        1px solid
        rgba(30,113,44,.16) !important;

    border-radius:9px !important;

    flex:0 0 40px !important;
}


/* CARD HEADING */

#shivam-why-section .swy-card h3{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:17px !important;
    font-weight:800 !important;

    line-height:1.33 !important;
}


/* CARD PARAGRAPH */

#shivam-why-section .swy-card p{
    margin:
        7px
        0
        0 !important;

    color:var(--text) !important;

    font-size:12.8px !important;
    font-weight:400 !important;

    line-height:1.6 !important;
}


/* =========================================================
   CENTER CARD
========================================================= */

#shivam-why-section .swy-center{
    width:100% !important;
    height:100% !important;

    min-height:368px !important;

    padding:
        27px
        24px !important;

    display:flex !important;

    flex-direction:column !important;

    justify-content:center !important;
    align-items:flex-start !important;

    position:relative !important;
    overflow:hidden !important;

    background:
        radial-gradient(
            circle at 100% 0%,
            rgba(30,113,44,.20) 0%,
            transparent 34%
        ),
        linear-gradient(
            145deg,
            #001641 0%,
            #082A3F 66%,
            #12392E 100%
        ) !important;

    border-radius:11px !important;

    box-shadow:
        0 16px 34px
        rgba(0,22,65,.13) !important;
}


/* DECORATIVE CIRCLE */

#shivam-why-section .swy-center::before{
    content:"" !important;

    position:absolute !important;

    width:125px !important;
    height:125px !important;

    top:-65px !important;
    right:-55px !important;

    border-radius:50% !important;

    border:
        1px solid
        rgba(255,255,255,.10) !important;
}


#shivam-why-section .swy-center::after{
    content:"" !important;

    position:absolute !important;

    width:90px !important;
    height:90px !important;

    left:-50px !important;
    bottom:-45px !important;

    border-radius:50% !important;

    background:
        rgba(30,113,44,.10) !important;
}


/* CENTER LABEL */

#shivam-why-section .swy-center-label{
    position:relative !important;
    z-index:2 !important;

    margin:
        0
        0
        9px !important;

    color:#83CF8D !important;

    font-size:9px !important;
    font-weight:800 !important;

    letter-spacing:1.4px !important;

    text-transform:uppercase !important;
}


/* CENTER HEADING */

#shivam-why-section .swy-center h3{
    position:relative !important;
    z-index:2 !important;

    margin:0 !important;

    color:#FFFFFF !important;

    font-size:22px !important;
    font-weight:800 !important;

    line-height:1.32 !important;

    letter-spacing:-.3px !important;
}


/* CENTER PARA */

#shivam-why-section .swy-center p{
    position:relative !important;
    z-index:2 !important;

    margin:
        12px
        0
        0 !important;

    color:
        rgba(255,255,255,.72) !important;

    font-size:13px !important;

    line-height:1.65 !important;
}


/* CENTER LINE */

#shivam-why-section .swy-center-line{
    position:relative !important;
    z-index:2 !important;

    width:50px !important;
    height:3px !important;

    margin-top:18px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:950px){

    #shivam-why-section{
        padding:
            38px
            18px
            44px !important;
    }


    #shivam-why-section .swy-heading{
        font-size:32px !important;
    }


    #shivam-why-section .swy-description{
        font-size:14px !important;
    }


    #shivam-why-section .swy-layout{
        grid-template-columns:
            repeat(2,minmax(0,1fr)) !important;

        gap:14px !important;
    }


    #shivam-why-section .swy-center{
        grid-column:
            1 / -1 !important;

        grid-row:1 !important;

        min-height:auto !important;

        padding:
            25px
            25px !important;
    }


    #shivam-why-section .swy-side{
        gap:14px !important;
    }


    #shivam-why-section .swy-card{
        min-height:175px !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:700px){

    #shivam-why-section{
        padding:
            34px
            14px
            40px !important;
    }


    #shivam-why-section .swy-header{
        margin-bottom:21px !important;
    }


    #shivam-why-section .swy-label{
        font-size:9px !important;
    }


    #shivam-why-section .swy-label::before,
    #shivam-why-section .swy-label::after{
        width:18px !important;
    }


    #shivam-why-section .swy-heading{
        font-size:29px !important;

        line-height:1.18 !important;
    }


    #shivam-why-section .swy-description{
        max-width:430px !important;

        font-size:13.5px !important;

        line-height:1.65 !important;
    }


    #shivam-why-section .swy-layout{
        display:flex !important;

        flex-direction:column !important;

        gap:12px !important;
    }


    #shivam-why-section .swy-center{
        order:1 !important;

        min-height:auto !important;

        padding:
            22px
            19px !important;
    }


    #shivam-why-section .swy-center h3{
        font-size:19px !important;
    }


    #shivam-why-section .swy-center p{
        font-size:12.5px !important;

        line-height:1.62 !important;
    }


    #shivam-why-section .swy-side{
        display:grid !important;

        grid-template-columns:1fr !important;
        grid-template-rows:none !important;

        gap:12px !important;
    }


    #shivam-why-section .swy-side:first-child{
        order:2 !important;
    }


    #shivam-why-section .swy-side:last-child{
        order:3 !important;
    }


    #shivam-why-section .swy-card{
        height:auto !important;

        min-height:auto !important;

        padding:
            18px
            17px
            19px !important;
    }


    #shivam-why-section .swy-card::before{
        left:17px !important;
    }


    #shivam-why-section .swy-icon{
        width:38px !important;
        height:38px !important;

        flex-basis:38px !important;

        margin-bottom:11px !important;

        font-size:15px !important;
    }


    #shivam-why-section .swy-card h3{
        font-size:16px !important;
    }


    #shivam-why-section .swy-card p{
        font-size:12.5px !important;

        line-height:1.58 !important;
    }

}

</style>


<section id="shivam-why-section">

    <div class="swy-container">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="swy-header">


            <div class="swy-label">
                Why Shivam Uniform
            </div>


            <h2 class="swy-heading">

                A Practical Approach to

                <span>
                    Professional Uniform Solutions
                </span>

            </h2>


            <p class="swy-description">

                We focus on comfort, suitable materials, neat finishing
                and a professional appearance that works naturally for
                the people and organisations wearing the uniform.

            </p>


        </div>



        <!-- =================================================
             MAIN
        ================================================== -->

        <div class="swy-layout">


            <!-- LEFT CARDS -->

            <div class="swy-side">


                <article class="swy-card">

                    <div class="swy-icon">

                        <i class="fa-solid fa-shirt"></i>

                    </div>

                    <h3>
                        Comfort for Everyday Use
                    </h3>

                    <p>
                        Uniforms are considered around regular movement,
                        comfort and day-to-day practical use.
                    </p>

                </article>



                <article class="swy-card">

                    <div class="swy-icon">

                        <i class="fa-solid fa-swatchbook"></i>

                    </div>

                    <h3>
                        Suitable Material Selection
                    </h3>

                    <p>
                        Fabric and styling are considered according to
                        environment, purpose and professional presentation.
                    </p>

                </article>


            </div>



            <!-- CENTER -->

            <div class="swy-center">


                <div class="swy-center-label">
                    Shivam Uniform
                </div>


                <h3>

                    Uniforms That Work for the People,
                    Purpose & Identity Behind Them

                </h3>


                <p>

                    Every school, workplace, hotel, security team or
                    service environment has different needs. We approach
                    each requirement with attention to comfort,
                    practicality and a consistent professional appearance.

                </p>


                <div class="swy-center-line"></div>


            </div>



            <!-- RIGHT CARDS -->

            <div class="swy-side">


                <article class="swy-card">

                    <div class="swy-icon">

                        <i class="fa-solid fa-scissors"></i>

                    </div>

                    <h3>
                        Attention to Finishing
                    </h3>

                    <p>
                        Fit, stitching and finishing are considered together
                        for a clean and polished final appearance.
                    </p>

                </article>



                <article class="swy-card">

                    <div class="swy-icon">

                        <i class="fa-solid fa-people-group"></i>

                    </div>

                    <h3>
                        Made for Different Teams
                    </h3>

                    <p>
                        Uniform needs are approached according to the people,
                        environment and practical role they need to support.
                    </p>

                </article>


            </div>


        </div>


    </div>

</section>