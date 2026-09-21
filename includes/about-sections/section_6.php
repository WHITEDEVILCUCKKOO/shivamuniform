<!-- =========================================================
     SHIVAM UNIFORM
     ABOUT US PAGE - SECTION 06
     FABRIC & CRAFTSMANSHIP
     CLEAN PREMIUM VERSION
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

#shivam-craftsmanship,
#shivam-craftsmanship *{
    box-sizing:border-box !important;
}

#shivam-craftsmanship{
    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;
    --light:#F7F9FB;
    --text:#65707C;

    width:100% !important;
    margin:0 !important;

    padding:
        44px
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

#shivam-craftsmanship::before{
    content:"" !important;

    position:absolute !important;

    width:250px !important;
    height:250px !important;

    right:-140px !important;
    top:-145px !important;

    border-radius:50% !important;

    background:
        rgba(30,113,44,.045) !important;

    pointer-events:none !important;
}


#shivam-craftsmanship::after{
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

#shivam-craftsmanship .scc-container{
    width:100% !important;
    max-width:1160px !important;

    margin:0 auto !important;

    display:grid !important;

    grid-template-columns:
        minmax(0,.96fr)
        minmax(0,1.04fr) !important;

    gap:50px !important;

    align-items:center !important;

    position:relative !important;
    z-index:2 !important;
}


/* =========================================================
   VISUAL
========================================================= */

#shivam-craftsmanship .scc-visual{
    width:100% !important;

    min-height:390px !important;

    position:relative !important;
}


/* GREEN FRAME */

#shivam-craftsmanship .scc-frame{
    position:absolute !important;

    width:74% !important;
    height:80% !important;

    left:0 !important;
    bottom:0 !important;

    background:
        linear-gradient(
            145deg,
            #1E712C 0%,
            #2D8440 100%
        ) !important;

    border-radius:
        42px
        9px
        9px
        9px !important;
}


/* =========================================================
   IMAGE
========================================================= */

#shivam-craftsmanship .scc-image{
    width:88% !important;
    height:345px !important;

    position:absolute !important;

    top:0 !important;
    right:0 !important;

    overflow:hidden !important;

    border-radius:
        10px
        10px
        40px
        10px !important;

    background:var(--blue) !important;

    box-shadow:
        0 16px 34px
        rgba(0,22,65,.12) !important;
}


#shivam-craftsmanship .scc-image img{
    width:100% !important;
    height:100% !important;

    display:block !important;

    object-fit:cover !important;
    object-position:center !important;

    transition:
        transform .7s ease !important;
}


#shivam-craftsmanship .scc-image:hover img{
    transform:
        scale(1.04) !important;
}


/* IMAGE OVERLAY */

#shivam-craftsmanship .scc-image::after{
    content:"" !important;

    position:absolute !important;
    inset:0 !important;

    background:
        linear-gradient(
            180deg,
            transparent 50%,
            rgba(0,22,65,.10) 66%,
            rgba(0,22,65,.63) 100%
        ) !important;

    pointer-events:none !important;
}


/* =========================================================
   IMAGE CAPTION
========================================================= */

#shivam-craftsmanship .scc-caption{
    position:absolute !important;

    left:23px !important;
    right:23px !important;
    bottom:22px !important;

    z-index:3 !important;
}


#shivam-craftsmanship .scc-caption span{
    display:block !important;

    margin-bottom:4px !important;

    color:#87D190 !important;

    font-size:8.5px !important;
    font-weight:800 !important;

    letter-spacing:1.4px !important;

    text-transform:uppercase !important;
}


#shivam-craftsmanship .scc-caption p{
    max-width:330px !important;

    margin:0 !important;

    color:#FFFFFF !important;

    font-size:14px !important;
    font-weight:700 !important;

    line-height:1.45 !important;
}


/* =========================================================
   FLOAT BOX
========================================================= */

#shivam-craftsmanship .scc-float{
    position:absolute !important;

    left:14px !important;
    bottom:15px !important;

    z-index:4 !important;

    width:195px !important;

    padding:
        14px
        15px !important;

    background:
        linear-gradient(
            145deg,
            #001641 0%,
            #082A3F 100%
        ) !important;

    border-left:
        3px solid
        var(--green) !important;

    border-radius:
        0
        7px
        7px
        0 !important;

    box-shadow:
        0 12px 24px
        rgba(0,22,65,.14) !important;
}


#shivam-craftsmanship .scc-float strong{
    display:block !important;

    color:#FFFFFF !important;

    font-size:13px !important;
    font-weight:800 !important;

    line-height:1.4 !important;
}


#shivam-craftsmanship .scc-float span{
    display:block !important;

    margin-top:4px !important;

    color:
        rgba(255,255,255,.67) !important;

    font-size:10px !important;

    line-height:1.5 !important;
}


/* =========================================================
   CONTENT
========================================================= */

#shivam-craftsmanship .scc-content{
    width:100% !important;
}


/* LABEL */

#shivam-craftsmanship .scc-label{
    display:inline-flex !important;

    align-items:center !important;

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


#shivam-craftsmanship .scc-label::before{
    content:"" !important;

    width:27px !important;
    height:2px !important;

    background:var(--green) !important;

    border-radius:20px !important;
}


/* =========================================================
   HEADING
========================================================= */

#shivam-craftsmanship .scc-heading{
    max-width:520px !important;

    margin:0 !important;

    color:var(--blue) !important;

    font-size:36px !important;
    font-weight:800 !important;

    line-height:1.16 !important;

    letter-spacing:-.9px !important;
}


#shivam-craftsmanship .scc-heading span{
    color:var(--green) !important;
}


/* =========================================================
   PARAGRAPHS
========================================================= */

#shivam-craftsmanship .scc-paragraph{
    max-width:560px !important;

    margin:
        13px
        0
        0 !important;

    color:var(--text) !important;

    font-size:15px !important;
    font-weight:400 !important;

    line-height:1.7 !important;
}


#shivam-craftsmanship .scc-paragraph + .scc-paragraph{
    margin-top:11px !important;
}


/* =========================================================
   SMALL DIVIDER
========================================================= */

#shivam-craftsmanship .scc-divider{
    width:54px !important;
    height:3px !important;

    margin-top:20px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:950px){

    #shivam-craftsmanship{
        padding:
            40px
            18px
            44px !important;
    }


    #shivam-craftsmanship .scc-container{
        gap:36px !important;
    }


    #shivam-craftsmanship .scc-visual{
        min-height:350px !important;
    }


    #shivam-craftsmanship .scc-image{
        height:310px !important;
    }


    #shivam-craftsmanship .scc-heading{
        font-size:32px !important;
    }


    #shivam-craftsmanship .scc-paragraph{
        font-size:14px !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:700px){

    #shivam-craftsmanship{
        padding:
            36px
            14px
            40px !important;
    }


    #shivam-craftsmanship .scc-container{
        grid-template-columns:1fr !important;

        gap:25px !important;
    }


    #shivam-craftsmanship .scc-content{
        order:1 !important;

        text-align:center !important;
    }


    #shivam-craftsmanship .scc-visual{
        order:2 !important;

        min-height:330px !important;

        max-width:430px !important;

        margin:0 auto !important;
    }


    #shivam-craftsmanship .scc-label{
        justify-content:center !important;

        font-size:9px !important;
    }


    #shivam-craftsmanship .scc-label::before{
        width:20px !important;
    }


    #shivam-craftsmanship .scc-heading{
        max-width:500px !important;

        margin:0 auto !important;

        font-size:29px !important;

        line-height:1.18 !important;
    }


    #shivam-craftsmanship .scc-paragraph{
        max-width:480px !important;

        margin:
            11px
            auto
            0 !important;

        font-size:13.5px !important;

        line-height:1.65 !important;
    }


    #shivam-craftsmanship .scc-divider{
        margin:
            18px
            auto
            0 !important;
    }


    #shivam-craftsmanship .scc-frame{
        width:82% !important;
        height:82% !important;

        border-radius:
            32px
            7px
            7px
            7px !important;
    }


    #shivam-craftsmanship .scc-image{
        width:89% !important;
        height:285px !important;

        border-radius:
            7px
            7px
            32px
            7px !important;
    }


    #shivam-craftsmanship .scc-caption{
        left:18px !important;
        right:18px !important;

        bottom:64px !important;
    }


    #shivam-craftsmanship .scc-caption p{
        font-size:12px !important;
    }


    #shivam-craftsmanship .scc-float{
        width:170px !important;

        left:9px !important;
        bottom:10px !important;

        padding:
            12px
            13px !important;
    }


    #shivam-craftsmanship .scc-float strong{
        font-size:12px !important;
    }


    #shivam-craftsmanship .scc-float span{
        font-size:9.3px !important;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:380px){

    #shivam-craftsmanship .scc-heading{
        font-size:27px !important;
    }


    #shivam-craftsmanship .scc-visual{
        min-height:310px !important;
    }


    #shivam-craftsmanship .scc-image{
        height:265px !important;
    }

}

</style>


<section id="shivam-craftsmanship">

    <div class="scc-container">


        <!-- =================================================
             LEFT IMAGE
        ================================================== -->

        <div class="scc-visual">


            <div class="scc-frame"></div>


            <div class="scc-image">

                <img
                    src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&w=1200&q=88"
                    alt="Uniform fabric and craftsmanship"
                    loading="lazy"
                >


                <div class="scc-caption">

                    <span>
                        Fabric & Craftsmanship
                    </span>

                    <p>
                        The quality of a uniform is shaped by
                        the details used every day.
                    </p>

                </div>

            </div>


            <div class="scc-float">

                <strong>
                    Made with Purpose
                </strong>

                <span>
                    Comfort, fit and practical use considered together.
                </span>

            </div>


        </div>



        <!-- =================================================
             RIGHT CONTENT
        ================================================== -->

        <div class="scc-content">


            <div class="scc-label">
                Fabric & Craftsmanship
            </div>


            <h2 class="scc-heading">

                The Details Behind a

                <span>
                    Well-Made Uniform
                </span>

            </h2>


            <p class="scc-paragraph">

                A good uniform begins with understanding how it will
                be used. Fabric, fit and overall construction should
                work together to support comfort and a neat professional
                appearance.

            </p>


            <p class="scc-paragraph">

                At Shivam Uniform, material selection, fitting,
                stitching and finishing are considered as part of one
                complete uniform solution rather than separate details.

            </p>


            <div
                class="scc-divider"
                aria-hidden="true"
            ></div>


        </div>


    </div>

</section>