<!-- =========================================================
     SHIVAM UNIFORM
     ABOUT US PAGE - SECTION 02
     CLEAN IMAGE + CONTENT STORY SECTION
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

#shivam-about-story,
#shivam-about-story *{
    box-sizing:border-box !important;
}

#shivam-about-story{
    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;
    --light:#F7F9FB;
    --text:#66717C;

    width:100% !important;
    margin:0 !important;

    padding:
        50px
        20px
        54px !important;

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
   SUBTLE BACKGROUND DECORATION
========================================================= */

#shivam-about-story::before{
    content:"" !important;

    position:absolute !important;

    width:240px !important;
    height:240px !important;

    right:-135px !important;
    top:-135px !important;

    border-radius:50% !important;

    background:
        rgba(30,113,44,.04) !important;

    pointer-events:none !important;
}


#shivam-about-story::after{
    content:"" !important;

    position:absolute !important;

    width:170px !important;
    height:170px !important;

    left:-95px !important;
    bottom:-100px !important;

    border-radius:50% !important;

    border:
        1px solid
        rgba(0,22,65,.06) !important;

    pointer-events:none !important;
}


/* =========================================================
   CONTAINER
========================================================= */

#shivam-about-story .sas-container{
    width:100% !important;
    max-width:1160px !important;

    margin:0 auto !important;

    display:grid !important;

    grid-template-columns:
        minmax(0,.92fr)
        minmax(0,1.08fr) !important;

    align-items:center !important;

    gap:52px !important;

    position:relative !important;
    z-index:2 !important;
}


/* =========================================================
   IMAGE SIDE
========================================================= */

#shivam-about-story .sas-visual{
    width:100% !important;

    min-height:405px !important;

    position:relative !important;
}


/* GREEN BACK FRAME */

#shivam-about-story .sas-frame{
    position:absolute !important;

    left:14px !important;
    top:14px !important;

    width:88% !important;
    height:86% !important;

    background:
        linear-gradient(
            145deg,
            #1E712C 0%,
            #2D8440 100%
        ) !important;

    border-radius:
        10px
        42px
        10px
        10px !important;

    opacity:.96 !important;
}


/* IMAGE */

#shivam-about-story .sas-image{
    width:89% !important;
    height:355px !important;

    position:absolute !important;

    right:0 !important;
    bottom:0 !important;

    overflow:hidden !important;

    border-radius:
        10px
        10px
        40px
        10px !important;

    background:#001641 !important;

    box-shadow:
        0 16px 34px
        rgba(0,22,65,.12) !important;
}


#shivam-about-story .sas-image img{
    width:100% !important;
    height:100% !important;

    display:block !important;

    object-fit:cover !important;
    object-position:center !important;

    transition:
        transform .7s ease !important;
}


#shivam-about-story .sas-image:hover img{
    transform:
        scale(1.04) !important;
}


/* IMAGE OVERLAY */

#shivam-about-story .sas-image::after{
    content:"" !important;

    position:absolute !important;
    inset:0 !important;

    background:
        linear-gradient(
            180deg,
            transparent 52%,
            rgba(0,22,65,.12) 70%,
            rgba(0,22,65,.62) 100%
        ) !important;

    pointer-events:none !important;
}


/* =========================================================
   IMAGE CAPTION
========================================================= */

#shivam-about-story .sas-caption{
    position:absolute !important;

    left:23px !important;
    bottom:22px !important;

    z-index:3 !important;

    max-width:270px !important;

    padding-left:12px !important;

    border-left:
        3px solid
        var(--green) !important;
}


#shivam-about-story .sas-caption span{
    display:block !important;

    margin-bottom:4px !important;

    color:#88D292 !important;

    font-size:8.5px !important;
    font-weight:800 !important;

    letter-spacing:1.3px !important;

    text-transform:uppercase !important;
}


#shivam-about-story .sas-caption p{
    margin:0 !important;

    color:#FFFFFF !important;

    font-size:13.5px !important;
    font-weight:700 !important;

    line-height:1.45 !important;
}


/* =========================================================
   FLOATING INFO BOX
========================================================= */

#shivam-about-story .sas-info{
    position:absolute !important;

    left:0 !important;
    bottom:28px !important;

    z-index:5 !important;

    width:205px !important;

    padding:
        15px
        17px !important;

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
        0 12px 25px
        rgba(0,22,65,.14) !important;
}


#shivam-about-story .sas-info strong{
    display:block !important;

    color:#FFFFFF !important;

    font-size:13.5px !important;
    font-weight:800 !important;

    line-height:1.35 !important;
}


#shivam-about-story .sas-info span{
    display:block !important;

    margin-top:5px !important;

    color:
        rgba(255,255,255,.67) !important;

    font-size:10.5px !important;

    line-height:1.5 !important;
}


/* =========================================================
   CONTENT SIDE
========================================================= */

#shivam-about-story .sas-content{
    width:100% !important;

    max-width:610px !important;
}


/* LABEL */

#shivam-about-story .sas-label{
    display:flex !important;

    align-items:center !important;

    gap:9px !important;

    margin:
        0
        0
        10px !important;

    color:var(--green) !important;

    font-size:10px !important;
    font-weight:800 !important;

    letter-spacing:1.6px !important;

    text-transform:uppercase !important;
}


#shivam-about-story .sas-label::before{
    content:"" !important;

    width:27px !important;
    height:2px !important;

    flex:0 0 27px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}


/* =========================================================
   HEADING
========================================================= */

#shivam-about-story .sas-heading{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:37px !important;
    font-weight:800 !important;

    line-height:1.16 !important;

    letter-spacing:-.9px !important;
}


#shivam-about-story .sas-heading span{
    color:var(--green) !important;
}


/* =========================================================
   PARAGRAPH
========================================================= */

#shivam-about-story .sas-content > p{
    margin:
        14px
        0
        0 !important;

    color:var(--text) !important;

    font-size:15px !important;
    font-weight:400 !important;

    line-height:1.72 !important;
}


#shivam-about-story .sas-content > p + p{
    margin-top:11px !important;
}


/* =========================================================
   HIGHLIGHT
========================================================= */

#shivam-about-story .sas-highlight{
    width:100% !important;

    margin:
        20px
        0
        0 !important;

    padding:
        15px
        17px !important;

    border-left:
        3px solid
        var(--green) !important;

    border-radius:
        0
        7px
        7px
        0 !important;

    background:
        rgba(30,113,44,.06) !important;
}


#shivam-about-story .sas-highlight p{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:13px !important;
    font-weight:700 !important;

    line-height:1.62 !important;
}


/* =========================================================
   VALUES
========================================================= */

#shivam-about-story .sas-values{
    width:100% !important;

    margin:
        20px
        0
        0 !important;

    padding:
        16px
        0
        0 !important;

    border-top:
        1px solid
        rgba(0,22,65,.09) !important;

    display:flex !important;

    flex-wrap:wrap !important;

    gap:
        9px
        20px !important;
}


#shivam-about-story .sas-value{
    display:inline-flex !important;

    align-items:center !important;

    gap:7px !important;

    color:var(--blue) !important;

    font-size:11px !important;
    font-weight:800 !important;
}


#shivam-about-story .sas-value::before{
    content:"" !important;

    width:6px !important;
    height:6px !important;

    flex:0 0 6px !important;

    border-radius:50% !important;

    background:var(--green) !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:950px){

    #shivam-about-story{
        padding:
            44px
            18px
            48px !important;
    }


    #shivam-about-story .sas-container{
        gap:38px !important;
    }


    #shivam-about-story .sas-visual{
        min-height:365px !important;
    }


    #shivam-about-story .sas-image{
        height:325px !important;
    }


    #shivam-about-story .sas-heading{
        font-size:33px !important;
    }


    #shivam-about-story .sas-content > p{
        font-size:14px !important;
    }


    #shivam-about-story .sas-info{
        width:185px !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:700px){

    #shivam-about-story{
        padding:
            38px
            14px
            42px !important;
    }


    #shivam-about-story .sas-container{
        grid-template-columns:1fr !important;

        gap:27px !important;
    }


    #shivam-about-story .sas-content{
        max-width:100% !important;

        text-align:center !important;

        order:1 !important;
    }


    #shivam-about-story .sas-visual{
        width:100% !important;

        max-width:430px !important;

        min-height:345px !important;

        margin:0 auto !important;

        order:2 !important;
    }


    #shivam-about-story .sas-label{
        justify-content:center !important;

        font-size:9px !important;
    }


    #shivam-about-story .sas-heading{
        font-size:29px !important;

        line-height:1.18 !important;
    }


    #shivam-about-story .sas-content > p{
        max-width:450px !important;

        margin:
            12px
            auto
            0 !important;

        font-size:13.5px !important;

        line-height:1.66 !important;
    }


    #shivam-about-story .sas-highlight{
        max-width:420px !important;

        margin:
            18px
            auto
            0 !important;

        border-left:0 !important;

        border-top:
            3px solid
            var(--green) !important;

        border-radius:
            0
            0
            7px
            7px !important;
    }


    #shivam-about-story .sas-highlight p{
        font-size:12.5px !important;
    }


    #shivam-about-story .sas-values{
        justify-content:center !important;

        margin-top:18px !important;
    }


    #shivam-about-story .sas-frame{
        left:10px !important;
        top:12px !important;

        width:86% !important;
        height:83% !important;

        border-radius:
            7px
            32px
            7px
            7px !important;
    }


    #shivam-about-story .sas-image{
        width:89% !important;
        height:300px !important;

        border-radius:
            7px
            7px
            32px
            7px !important;
    }


    #shivam-about-story .sas-info{
        width:170px !important;

        bottom:17px !important;

        padding:
            12px
            13px !important;
    }


    #shivam-about-story .sas-info strong{
        font-size:12px !important;
    }


    #shivam-about-story .sas-info span{
        font-size:9.5px !important;
    }


    #shivam-about-story .sas-caption{
        left:16px !important;
        bottom:66px !important;

        max-width:210px !important;
    }


    #shivam-about-story .sas-caption p{
        font-size:11.5px !important;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:380px){

    #shivam-about-story .sas-heading{
        font-size:27px !important;
    }


    #shivam-about-story .sas-visual{
        min-height:320px !important;
    }


    #shivam-about-story .sas-image{
        height:278px !important;
    }

}

</style>


<section id="shivam-about-story">

    <div class="sas-container">


        <!-- =================================================
             IMAGE SIDE
        ================================================== -->

        <div class="sas-visual">


            <div class="sas-frame"></div>


            <div class="sas-image">

                <img
                    src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1200&q=88"
                    alt="Shivam Uniform professional team"
                    loading="lazy"
                >


                <div class="sas-caption">

                    <span>
                        About Shivam Uniform
                    </span>

                    <p>
                        Practical uniform solutions for everyday professional use.
                    </p>

                </div>

            </div>


            <div class="sas-info">

                <strong>
                    Made for Daily Use
                </strong>

                <span>
                    Comfortable, practical and professional.
                </span>

            </div>


        </div>



        <!-- =================================================
             CONTENT SIDE
        ================================================== -->

        <div class="sas-content">


            <div class="sas-label">
                Who We Are
            </div>


            <h2 class="sas-heading">

                Uniform Solutions for

                <span>
                    Real Work Environments
                </span>

            </h2>


            <p>

                Shivam Uniform provides dependable uniform solutions
                for schools, corporates, industries, hospitality,
                security and service teams.

            </p>


            <p>

                We focus on practical comfort, neat fitting,
                durable use and a professional appearance so each
                uniform is suitable for the environment in which
                it is worn.

            </p>


            <div class="sas-highlight">

                <p>

                    A good uniform should feel comfortable,
                    look presentable and work well for everyday use.

                </p>

            </div>


            <div class="sas-values">

                <span class="sas-value">
                    Comfortable Fit
                </span>

                <span class="sas-value">
                    Practical Design
                </span>

                <span class="sas-value">
                    Clean Finishing
                </span>

            </div>


        </div>


    </div>

</section>