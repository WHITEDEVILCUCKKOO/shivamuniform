<!-- =========================================================
     SHIVAM UNIFORM
     ABOUT US PAGE - SECTION 08
     FINAL CLOSING CTA SECTION
     CLEAN PREMIUM VERSION
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

#shivam-about-closing,
#shivam-about-closing *{
    box-sizing:border-box !important;
}

#shivam-about-closing{
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

#shivam-about-closing::before{
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


#shivam-about-closing::after{
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

#shivam-about-closing .sac-container{
    width:100% !important;
    max-width:1160px !important;

    margin:0 auto !important;

    position:relative !important;
    z-index:2 !important;
}


/* =========================================================
   LAYOUT
========================================================= */

#shivam-about-closing .sac-layout{
    width:100% !important;

    display:grid !important;

    grid-template-columns:
        minmax(0,1.08fr)
        minmax(300px,.92fr) !important;

    gap:46px !important;

    align-items:center !important;
}


/* =========================================================
   LEFT CONTENT
========================================================= */

#shivam-about-closing .sac-content{
    width:100% !important;

    text-align:left !important;
}


/* LABEL */

#shivam-about-closing .sac-label{
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


#shivam-about-closing .sac-label::before{
    content:"" !important;

    width:27px !important;
    height:2px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}


/* =========================================================
   HEADING
========================================================= */

#shivam-about-closing .sac-heading{
    max-width:650px !important;

    margin:0 !important;

    color:var(--blue) !important;

    font-size:37px !important;
    font-weight:800 !important;

    line-height:1.16 !important;

    letter-spacing:-.9px !important;
}


#shivam-about-closing .sac-heading span{
    color:var(--green) !important;
}


/* =========================================================
   DESCRIPTION
========================================================= */

#shivam-about-closing .sac-description{
    max-width:620px !important;

    margin:
        13px
        0
        0 !important;

    color:var(--text) !important;

    font-size:15px !important;
    font-weight:400 !important;

    line-height:1.68 !important;
}


/* =========================================================
   CONTACT META
========================================================= */

#shivam-about-closing .sac-meta{
    width:100% !important;
    max-width:620px !important;

    display:grid !important;

    grid-template-columns:
        minmax(0,1.4fr)
        minmax(0,1fr) !important;

    margin-top:21px !important;

    border-top:
        1px solid
        rgba(0,22,65,.09) !important;

    border-bottom:
        1px solid
        rgba(0,22,65,.09) !important;
}


/* META ITEM */

#shivam-about-closing .sac-meta-item{
    display:grid !important;

    grid-template-columns:
        34px
        minmax(0,1fr) !important;

    gap:10px !important;

    align-items:start !important;

    padding:
        15px
        18px
        15px
        0 !important;
}


#shivam-about-closing
.sac-meta-item + .sac-meta-item{
    padding-left:18px !important;

    border-left:
        1px solid
        rgba(0,22,65,.09) !important;
}


/* META ICON */

#shivam-about-closing .sac-meta-icon{
    width:32px !important;
    height:32px !important;

    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    color:var(--green) !important;

    background:
        rgba(30,113,44,.07) !important;

    border:
        1px solid
        rgba(30,113,44,.15) !important;

    border-radius:8px !important;

    font-size:13px !important;
}


/* META TITLE */

#shivam-about-closing .sac-meta-title{
    display:block !important;

    margin-bottom:3px !important;

    color:
        rgba(0,22,65,.52) !important;

    font-size:8.5px !important;
    font-weight:800 !important;

    letter-spacing:1px !important;

    text-transform:uppercase !important;
}


/* META TEXT */

#shivam-about-closing .sac-meta-item p,
#shivam-about-closing .sac-meta-item a{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:12.5px !important;
    font-weight:600 !important;

    line-height:1.55 !important;

    text-decoration:none !important;
}


#shivam-about-closing .sac-meta-item a:hover{
    color:var(--green) !important;
}


/* =========================================================
   CTA BUTTON
========================================================= */

#shivam-about-closing .sac-btn{
    display:inline-flex !important;

    align-items:center !important;
    justify-content:center !important;

    gap:9px !important;

    margin-top:20px !important;

    min-height:46px !important;

    padding:
        0
        19px !important;

    background:var(--green) !important;

    color:#FFFFFF !important;

    border:
        1px solid
        var(--green) !important;

    border-radius:7px !important;

    text-decoration:none !important;

    font-size:12.5px !important;
    font-weight:800 !important;

    box-shadow:
        0 7px 18px
        rgba(30,113,44,.14) !important;

    transition:
        transform .25s ease,
        background .25s ease,
        box-shadow .25s ease !important;
}


#shivam-about-closing .sac-btn:hover{
    transform:
        translateY(-2px) !important;

    background:#165C23 !important;

    color:#FFFFFF !important;

    box-shadow:
        0 10px 22px
        rgba(30,113,44,.19) !important;
}


#shivam-about-closing .sac-btn i{
    font-size:10px !important;

    transition:
        transform .25s ease !important;
}


#shivam-about-closing .sac-btn:hover i{
    transform:
        translateX(3px) !important;
}


/* =========================================================
   RIGHT VISUAL
========================================================= */

#shivam-about-closing .sac-visual{
    width:100% !important;

    min-height:360px !important;

    position:relative !important;

    display:flex !important;

    align-items:center !important;
    justify-content:center !important;
}


/* GREEN BACK SHAPE */

#shivam-about-closing .sac-green-shape{
    position:absolute !important;

    width:78% !important;
    height:74% !important;

    right:0 !important;
    top:0 !important;

    background:
        linear-gradient(
            145deg,
            #1E712C 0%,
            #2B8240 100%
        ) !important;

    border-radius:
        10px
        42px
        10px
        10px !important;
}


/* =========================================================
   DARK PANEL
========================================================= */

#shivam-about-closing .sac-panel{
    width:86% !important;
    min-height:305px !important;

    position:relative !important;
    z-index:2 !important;

    margin-left:-28px !important;
    margin-top:28px !important;

    padding:
        30px
        28px !important;

    background:
        radial-gradient(
            circle at 100% 0%,
            rgba(30,113,44,.18) 0%,
            transparent 35%
        ),
        linear-gradient(
            145deg,
            #001641 0%,
            #082A3F 68%,
            #12392E 100%
        ) !important;

    border-radius:
        10px
        10px
        36px
        10px !important;

    box-shadow:
        0 16px 34px
        rgba(0,22,65,.14) !important;

    display:flex !important;

    flex-direction:column !important;

    justify-content:center !important;
    align-items:flex-start !important;
}


/* PANEL LABEL */

#shivam-about-closing .sac-panel-mark{
    display:inline-flex !important;

    align-items:center !important;

    gap:8px !important;

    margin-bottom:10px !important;

    color:#83CF8D !important;

    font-size:8.5px !important;
    font-weight:800 !important;

    letter-spacing:1.4px !important;

    text-transform:uppercase !important;
}


#shivam-about-closing .sac-panel-mark::before{
    content:"" !important;

    width:7px !important;
    height:7px !important;

    border-radius:50% !important;

    background:var(--green) !important;
}


/* PANEL HEADING */

#shivam-about-closing .sac-panel h3{
    max-width:370px !important;

    margin:0 !important;

    color:#FFFFFF !important;

    font-size:22px !important;
    font-weight:800 !important;

    line-height:1.32 !important;

    letter-spacing:-.3px !important;
}


/* PANEL TEXT */

#shivam-about-closing .sac-panel p{
    max-width:370px !important;

    margin:
        11px
        0
        0 !important;

    color:
        rgba(255,255,255,.70) !important;

    font-size:13px !important;

    line-height:1.65 !important;
}


/* PANEL LINE */

#shivam-about-closing .sac-panel-line{
    width:52px !important;
    height:3px !important;

    margin-top:18px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}


/* =========================================================
   FLOAT BOX
========================================================= */

#shivam-about-closing .sac-float{
    position:absolute !important;

    right:8px !important;
    bottom:10px !important;

    z-index:3 !important;

    width:165px !important;

    padding:
        13px
        14px !important;

    background:#FFFFFF !important;

    border-left:
        3px solid
        var(--green) !important;

    border-radius:
        0
        7px
        7px
        0 !important;

    box-shadow:
        0 10px 24px
        rgba(0,22,65,.11) !important;
}


#shivam-about-closing .sac-float strong{
    display:block !important;

    color:var(--blue) !important;

    font-size:12px !important;
    font-weight:800 !important;

    line-height:1.4 !important;
}


#shivam-about-closing .sac-float span{
    display:block !important;

    margin-top:4px !important;

    color:var(--text) !important;

    font-size:9.5px !important;

    line-height:1.5 !important;
}


/* =========================================================
   BOTTOM TRANSITION
========================================================= */

#shivam-about-closing .sac-bottom{
    width:100% !important;

    margin-top:6px !important;

    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    gap:9px !important;
}


#shivam-about-closing .sac-bottom::before,
#shivam-about-closing .sac-bottom::after{
    content:"" !important;

    width:58px !important;
    height:1px !important;

    background:
        rgba(0,22,65,.10) !important;
}


#shivam-about-closing .sac-bottom-dot{
    width:6px !important;
    height:6px !important;

    border-radius:50% !important;

    background:var(--green) !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:950px){

    #shivam-about-closing{
        padding:
            40px
            18px
            44px !important;
    }


    #shivam-about-closing .sac-layout{
        gap:34px !important;

        grid-template-columns:
            minmax(0,1.02fr)
            minmax(270px,.98fr) !important;
    }


    #shivam-about-closing .sac-heading{
        font-size:32px !important;
    }


    #shivam-about-closing .sac-description{
        font-size:14px !important;
    }


    #shivam-about-closing .sac-meta{
        grid-template-columns:1fr !important;
    }


    #shivam-about-closing
    .sac-meta-item + .sac-meta-item{
        padding-left:0 !important;

        border-left:0 !important;

        border-top:
            1px solid
            rgba(0,22,65,.08) !important;
    }


    #shivam-about-closing .sac-visual{
        min-height:335px !important;
    }


    #shivam-about-closing .sac-panel{
        min-height:285px !important;

        padding:
            26px
            24px !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:700px){

    #shivam-about-closing{
        padding:
            34px
            14px
            38px !important;
    }


    #shivam-about-closing .sac-layout{
        grid-template-columns:1fr !important;

        gap:25px !important;
    }


    #shivam-about-closing .sac-content{
        text-align:center !important;
    }


    #shivam-about-closing .sac-label{
        justify-content:center !important;

        font-size:9px !important;
    }


    #shivam-about-closing .sac-label::before{
        width:20px !important;
    }


    #shivam-about-closing .sac-heading{
        max-width:520px !important;

        margin:0 auto !important;

        font-size:29px !important;

        line-height:1.18 !important;
    }


    #shivam-about-closing .sac-description{
        max-width:500px !important;

        margin:
            11px
            auto
            0 !important;

        font-size:13.5px !important;

        line-height:1.65 !important;
    }


    #shivam-about-closing .sac-meta{
        grid-template-columns:1fr !important;

        margin-top:18px !important;

        text-align:left !important;
    }


    #shivam-about-closing .sac-meta-item{
        padding:
            13px
            0 !important;
    }


    #shivam-about-closing
    .sac-meta-item + .sac-meta-item{
        padding-left:0 !important;

        border-left:0 !important;

        border-top:
            1px solid
            rgba(0,22,65,.08) !important;
    }


    #shivam-about-closing .sac-btn{
        min-height:44px !important;

        margin-top:18px !important;

        padding:
            0
            17px !important;

        font-size:12px !important;
    }


    #shivam-about-closing .sac-visual{
        min-height:320px !important;

        max-width:430px !important;

        margin:0 auto !important;
    }


    #shivam-about-closing .sac-green-shape{
        width:82% !important;
        height:72% !important;

        border-radius:
            8px
            32px
            8px
            8px !important;
    }


    #shivam-about-closing .sac-panel{
        width:88% !important;
        min-height:265px !important;

        margin-left:-18px !important;
        margin-top:22px !important;

        padding:
            22px
            20px !important;

        border-radius:
            8px
            8px
            30px
            8px !important;
    }


    #shivam-about-closing .sac-panel h3{
        font-size:19px !important;
    }


    #shivam-about-closing .sac-panel p{
        font-size:12.5px !important;

        line-height:1.6 !important;
    }


    #shivam-about-closing .sac-float{
        width:155px !important;

        right:4px !important;
        bottom:4px !important;

        padding:
            11px
            12px !important;
    }


    #shivam-about-closing .sac-float strong{
        font-size:11px !important;
    }


    #shivam-about-closing .sac-float span{
        font-size:9px !important;
    }

}

</style>


<section id="shivam-about-closing">

    <div class="sac-container">

        <div class="sac-layout">


            <!-- =================================================
                 LEFT CONTENT
            ================================================== -->

            <div class="sac-content">


                <div class="sac-label">
                    Let’s Work Together
                </div>


                <h2 class="sac-heading">

                    Let’s Discuss the Right Uniform

                    <span>
                        for Your Team
                    </span>

                </h2>


                <p class="sac-description">

                    Every organisation has different uniform needs.
                    Share your requirement with Shivam Uniform and our team
                    can help you explore suitable options for your school,
                    workplace, hospitality, security or service team.

                </p>



                <!-- CONTACT DETAILS -->

                <div class="sac-meta">


                    <!-- ADDRESS -->

                    <div class="sac-meta-item">


                        <div class="sac-meta-icon">

                            <i class="fa-solid fa-location-dot"></i>

                        </div>


                        <div>

                            <span class="sac-meta-title">
                                Visit Us
                            </span>

                            <p>
                                Plot No. 3948, Balaji Mandir Road,
                                Near Rao Rattan Singh Farm,
                                Ballabgarh, Faridabad
                            </p>

                        </div>


                    </div>



                    <!-- EMAIL -->

                    <div class="sac-meta-item">


                        <div class="sac-meta-icon">

                            <i class="fa-solid fa-envelope"></i>

                        </div>


                        <div>

                            <span class="sac-meta-title">
                                Email Us
                            </span>

                            <a href="mailto:shivamuniform605@gmail.com">
                                shivamuniform605@gmail.com
                            </a>

                        </div>


                    </div>


                </div>



                <!-- CTA -->

                <a
                    href="contact.php"
                    class="sac-btn"
                >

                    Discuss Your Requirement

                    <i class="fa-solid fa-arrow-right"></i>

                </a>


            </div>



            <!-- =================================================
                 RIGHT VISUAL
            ================================================== -->

            <div class="sac-visual">


                <div class="sac-green-shape"></div>


                <div class="sac-panel">


                    <div class="sac-panel-mark">
                        Shivam Uniform
                    </div>


                    <h3>
                        Practical Uniform Solutions for Different Teams
                    </h3>


                    <p>

                        From schools and workplaces to hospitality,
                        industrial, security and service environments,
                        we focus on comfort, practicality and a clean
                        professional appearance.

                    </p>


                    <div class="sac-panel-line"></div>


                </div>



                <div class="sac-float">


                    <strong>
                        Professional Identity
                    </strong>


                    <span>
                        Uniforms suited to real teams and everyday environments.
                    </span>


                </div>


            </div>


        </div>



        <!-- BOTTOM TRANSITION -->

        <div class="sac-bottom">

            <span class="sac-bottom-dot"></span>

        </div>


    </div>

</section>