<!-- =========================================================
     SHIVAM UNIFORM
     HOME PAGE - SECTION 03
     OUR UNIFORM CATEGORIES
     UPDATED WITH NEW 6 IMAGES

     BRAND COLORS:
     Blue  : #001641
     Green : #1E712C
     White : #FFFFFF
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>

#shivam-category-section,
#shivam-category-section *{
    box-sizing:border-box !important;
}

#shivam-category-section{
    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;
    --light:#F7F9FB;
    --text:#646D79;

    width:100% !important;
    margin:0 !important;

    padding:52px 20px 56px !important;

    background:#F7F9FB !important;

    position:relative !important;
    overflow:hidden !important;

    font-family:'Manrope',sans-serif !important;
}


/* =========================================================
   CONTAINER
========================================================= */

#shivam-category-section .scs-container{
    width:100% !important;
    max-width:1180px !important;

    margin:0 auto !important;

    position:relative !important;
    z-index:2 !important;
}


/* =========================================================
   HEADING AREA
========================================================= */

#shivam-category-section .scs-head{
    width:100% !important;
    max-width:720px !important;

    margin:0 auto 29px !important;

    text-align:center !important;
}


/* LABEL */

#shivam-category-section .scs-label{
    display:inline-flex !important;

    align-items:center !important;
    justify-content:center !important;

    gap:8px !important;

    margin:0 0 10px !important;

    color:var(--green) !important;

    font-size:10.5px !important;
    font-weight:800 !important;

    letter-spacing:1.6px !important;
    line-height:1 !important;

    text-transform:uppercase !important;
}


#shivam-category-section .scs-label::before,
#shivam-category-section .scs-label::after{
    content:"" !important;

    width:24px !important;
    height:2px !important;

    border-radius:30px !important;

    background:var(--green) !important;
}


/* =========================================================
   HEADING
========================================================= */

#shivam-category-section .scs-heading{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:38px !important;
    font-weight:800 !important;

    line-height:1.17 !important;

    letter-spacing:-1.1px !important;
}


#shivam-category-section .scs-heading span{
    color:var(--green) !important;
}


/* DESCRIPTION */

#shivam-category-section .scs-description{
    max-width:630px !important;

    margin:11px auto 0 !important;

    color:var(--text) !important;

    font-size:14px !important;
    font-weight:400 !important;

    line-height:1.65 !important;
}


/* =========================================================
   CATEGORY GRID
========================================================= */

#shivam-category-section .scs-grid{
    width:100% !important;

    display:grid !important;

    grid-template-columns:repeat(3,1fr) !important;

    gap:16px !important;
}


/* =========================================================
   CATEGORY CARD
========================================================= */

#shivam-category-section .scs-card{
    width:100% !important;
    height:285px !important;

    position:relative !important;

    display:block !important;

    overflow:hidden !important;

    border-radius:11px !important;

    background:#DDE2E8 !important;

    text-decoration:none !important;

    box-shadow:
        0 7px 20px
        rgba(0,22,65,.07) !important;

    transition:
        transform .35s ease,
        box-shadow .35s ease !important;
}


#shivam-category-section .scs-card:hover{
    transform:translateY(-5px) !important;

    box-shadow:
        0 16px 34px
        rgba(0,22,65,.12) !important;
}


/* =========================================================
   IMAGE
========================================================= */

#shivam-category-section .scs-card img{
    position:absolute !important;

    inset:0 !important;

    width:100% !important;
    height:100% !important;

    display:block !important;

    object-fit:cover !important;
    object-position:center !important;

    transition:transform .6s ease !important;
}


#shivam-category-section .scs-card:hover img{
    transform:scale(1.05) !important;
}


/* =========================================================
   OVERLAY
========================================================= */

#shivam-category-section .scs-overlay{
    position:absolute !important;

    inset:0 !important;

    z-index:1 !important;

    background:
        linear-gradient(
            180deg,
            rgba(0,22,65,.01) 25%,
            rgba(0,22,65,.20) 54%,
            rgba(0,22,65,.94) 100%
        ) !important;
}


/* =========================================================
   GREEN ACCENT
========================================================= */

#shivam-category-section .scs-accent{
    position:absolute !important;

    left:18px !important;
    top:18px !important;

    z-index:3 !important;

    width:32px !important;
    height:4px !important;

    border-radius:30px !important;

    background:var(--green) !important;

    transition:width .3s ease !important;
}


#shivam-category-section .scs-card:hover .scs-accent{
    width:50px !important;
}


/* =========================================================
   CARD CONTENT
========================================================= */

#shivam-category-section .scs-content{
    position:absolute !important;

    left:0 !important;
    right:0 !important;
    bottom:0 !important;

    z-index:4 !important;

    padding:21px 19px 18px !important;
}


#shivam-category-section .scs-small{
    display:block !important;

    margin:0 0 4px !important;

    color:rgba(255,255,255,.60) !important;

    font-size:8px !important;
    font-weight:700 !important;

    line-height:1.3 !important;

    letter-spacing:1.1px !important;

    text-transform:uppercase !important;
}


#shivam-category-section .scs-title-row{
    display:flex !important;

    align-items:center !important;
    justify-content:space-between !important;

    gap:10px !important;
}


#shivam-category-section .scs-title{
    margin:0 !important;

    color:#FFFFFF !important;

    font-size:17px !important;
    font-weight:700 !important;

    line-height:1.3 !important;
}


/* =========================================================
   ARROW
========================================================= */

#shivam-category-section .scs-arrow{
    width:30px !important;
    height:30px !important;

    min-width:30px !important;

    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    border-radius:50% !important;

    background:rgba(255,255,255,.10) !important;

    border:1px solid rgba(255,255,255,.18) !important;

    color:#FFFFFF !important;

    font-size:14px !important;

    transition:
        background .3s ease,
        transform .3s ease !important;
}


#shivam-category-section .scs-card:hover .scs-arrow{
    background:var(--green) !important;

    transform:translateX(3px) !important;
}


/* =========================================================
   BOTTOM CTA
========================================================= */

#shivam-category-section .scs-action{
    width:100% !important;

    display:flex !important;
    justify-content:center !important;

    margin-top:25px !important;
}


#shivam-category-section .scs-btn{
    min-height:47px !important;

    padding:0 22px !important;

    display:inline-flex !important;

    align-items:center !important;
    justify-content:center !important;

    gap:8px !important;

    border-radius:6px !important;

    background:var(--blue) !important;

    color:#FFFFFF !important;

    text-decoration:none !important;

    font-size:12.5px !important;
    font-weight:700 !important;

    line-height:1 !important;

    box-shadow:
        0 8px 20px
        rgba(0,22,65,.12) !important;

    transition:
        transform .25s ease,
        background .25s ease,
        box-shadow .25s ease !important;
}


#shivam-category-section .scs-btn:hover{
    transform:translateY(-3px) !important;

    background:var(--green) !important;

    color:#FFFFFF !important;

    box-shadow:
        0 12px 26px
        rgba(30,113,44,.18) !important;
}


#shivam-category-section .scs-btn-arrow{
    display:inline-block !important;

    font-size:16px !important;

    transition:transform .25s ease !important;
}


#shivam-category-section .scs-btn:hover .scs-btn-arrow{
    transform:translateX(4px) !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:900px){

    #shivam-category-section{
        padding:46px 18px 50px !important;
    }


    #shivam-category-section .scs-grid{
        grid-template-columns:repeat(2,1fr) !important;

        gap:14px !important;
    }


    #shivam-category-section .scs-card{
        height:275px !important;
    }


    #shivam-category-section .scs-heading{
        font-size:34px !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:600px){

    #shivam-category-section{
        padding:40px 14px 44px !important;
    }


    #shivam-category-section .scs-head{
        margin-bottom:23px !important;
    }


    #shivam-category-section .scs-label{
        margin-bottom:9px !important;

        font-size:9.5px !important;
    }


    #shivam-category-section .scs-label::before,
    #shivam-category-section .scs-label::after{
        width:18px !important;
    }


    #shivam-category-section .scs-heading{
        font-size:29px !important;

        line-height:1.2 !important;

        letter-spacing:-.6px !important;
    }


    #shivam-category-section .scs-description{
        margin-top:9px !important;

        font-size:13.2px !important;

        line-height:1.6 !important;
    }


    #shivam-category-section .scs-grid{
        grid-template-columns:repeat(2,1fr) !important;

        gap:9px !important;
    }


    #shivam-category-section .scs-card{
        height:215px !important;

        border-radius:9px !important;
    }


    #shivam-category-section .scs-accent{
        left:12px !important;
        top:12px !important;

        width:23px !important;
        height:3px !important;
    }


    #shivam-category-section .scs-content{
        padding:15px 12px 13px !important;
    }


    #shivam-category-section .scs-small{
        font-size:7px !important;
    }


    #shivam-category-section .scs-title{
        font-size:12.5px !important;
    }


    #shivam-category-section .scs-arrow{
        width:25px !important;
        height:25px !important;

        min-width:25px !important;

        font-size:11px !important;
    }


    #shivam-category-section .scs-action{
        margin-top:21px !important;
    }


    #shivam-category-section .scs-btn{
        min-height:45px !important;

        padding:0 18px !important;

        font-size:11.5px !important;
    }

}


/* =========================================================
   VERY SMALL MOBILE
========================================================= */

@media(max-width:380px){

    #shivam-category-section .scs-grid{
        grid-template-columns:1fr !important;
    }


    #shivam-category-section .scs-card{
        height:255px !important;
    }


    #shivam-category-section .scs-title{
        font-size:14px !important;
    }

}

</style>


<section id="shivam-category-section">

    <div class="scs-container">


        <!-- SECTION HEADING -->

        <div class="scs-head">

            <div class="scs-label">
                Our Uniform Range
            </div>


            <h2 class="scs-heading">
                Uniform Solutions for
                <span>Different Needs</span>
            </h2>


            <p class="scs-description">
                Explore practical and professional uniforms for schools,
                workplaces, service teams and organisations.
            </p>

        </div>



        <!-- CATEGORY GRID -->

        <div class="scs-grid">


            <!-- CARD 01 -->

            <a href="gallary.php" class="scs-card">

                <img
                    src="https://shivamuniform.hiralgems.com/wp-content/uploads/2026/09/image-uniform-1.png"
                    alt="School Uniforms"
                    loading="lazy"
                >

                <div class="scs-overlay"></div>
                <span class="scs-accent"></span>

                <div class="scs-content">

                    <span class="scs-small">
                        Students
                    </span>

                    <div class="scs-title-row">

                        <h3 class="scs-title">
                            School Uniforms
                        </h3>

                        <span class="scs-arrow">→</span>

                    </div>

                </div>

            </a>



            <!-- CARD 02 -->

            <a href="gallary.php" class="scs-card">

                <img
                    src="https://shivamuniform.hiralgems.com/wp-content/uploads/2026/09/image-uniform-2.png"
                    alt="Industrial Uniforms"
                    loading="lazy"
                >

                <div class="scs-overlay"></div>
                <span class="scs-accent"></span>

                <div class="scs-content">

                    <span class="scs-small">
                        Workforce
                    </span>

                    <div class="scs-title-row">

                        <h3 class="scs-title">
                            Industrial Uniforms
                        </h3>

                        <span class="scs-arrow">→</span>

                    </div>

                </div>

            </a>



            <!-- CARD 03 -->

            <a href="gallary.php" class="scs-card">

                <img
                    src="https://shivamuniform.hiralgems.com/wp-content/uploads/2026/09/image-uniform-3.png"
                    alt="Corporate Uniforms"
                    loading="lazy"
                >

                <div class="scs-overlay"></div>
                <span class="scs-accent"></span>

                <div class="scs-content">

                    <span class="scs-small">
                        Business
                    </span>

                    <div class="scs-title-row">

                        <h3 class="scs-title">
                            Corporate Uniforms
                        </h3>

                        <span class="scs-arrow">→</span>

                    </div>

                </div>

            </a>



            <!-- CARD 04 -->

            <a href="gallary.php" class="scs-card">

                <img
                    src="https://shivamuniform.hiralgems.com/wp-content/uploads/2026/09/image-uniform-4.png"
                    alt="Security Uniforms"
                    loading="lazy"
                >

                <div class="scs-overlay"></div>
                <span class="scs-accent"></span>

                <div class="scs-content">

                    <span class="scs-small">
                        Security Staff
                    </span>

                    <div class="scs-title-row">

                        <h3 class="scs-title">
                            Security Uniforms
                        </h3>

                        <span class="scs-arrow">→</span>

                    </div>

                </div>

            </a>



            <!-- CARD 05 -->

            <a href="gallary.php" class="scs-card">

                <img
                    src="https://shivamuniform.hiralgems.com/wp-content/uploads/2026/09/image-uniform-5.png"
                    alt="Housekeeping Uniforms"
                    loading="lazy"
                >

                <div class="scs-overlay"></div>
                <span class="scs-accent"></span>

                <div class="scs-content">

                    <span class="scs-small">
                        Service Staff
                    </span>

                    <div class="scs-title-row">

                        <h3 class="scs-title">
                            Housekeeping Uniforms
                        </h3>

                        <span class="scs-arrow">→</span>

                    </div>

                </div>

            </a>



            <!-- CARD 06 -->

            <a href="gallary.php" class="scs-card">

                <img
                    src="https://shivamuniform.hiralgems.com/wp-content/uploads/2026/09/image-uniform-6.png"
                    alt="Hotel Uniforms"
                    loading="lazy"
                >

                <div class="scs-overlay"></div>
                <span class="scs-accent"></span>

                <div class="scs-content">

                    <span class="scs-small">
                        Hospitality
                    </span>

                    <div class="scs-title-row">

                        <h3 class="scs-title">
                            Hotel Uniforms
                        </h3>

                        <span class="scs-arrow">→</span>

                    </div>

                </div>

            </a>


        </div>



        <!-- VIEW ALL -->

        <div class="scs-action">

            <a href="gallary.php" class="scs-btn">

                View Complete Collection

                <span class="scs-btn-arrow">
                    →
                </span>

            </a>

        </div>


    </div>

</section>