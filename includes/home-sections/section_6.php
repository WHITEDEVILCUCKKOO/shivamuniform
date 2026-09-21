<!-- =========================================================
     SHIVAM UNIFORM
     HOME PAGE - SECTION 06
     FEATURED UNIFORM SHOWCASE
     UPDATED WITH NEW 3 IMAGES

     BRAND COLORS:
     Blue  : #001641
     Green : #1E712C
     White : #FFFFFF
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>

#shivam-featured-uniforms,
#shivam-featured-uniforms *{
    box-sizing:border-box !important;
}

#shivam-featured-uniforms{
    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;
    --light:#F7F9FB;
    --text:#66707C;
    --border:#E4E8ED;

    width:100% !important;
    margin:0 !important;

    padding:52px 20px 56px !important;

    background:#FFFFFF !important;

    position:relative !important;
    overflow:hidden !important;

    font-family:'Manrope',sans-serif !important;
}


/* =========================================================
   CONTAINER
========================================================= */

#shivam-featured-uniforms .sfu-container{
    width:100% !important;
    max-width:1160px !important;

    margin:0 auto !important;

    position:relative !important;
    z-index:2 !important;
}


/* =========================================================
   HEADER
========================================================= */

#shivam-featured-uniforms .sfu-head{
    width:100% !important;

    display:flex !important;

    align-items:flex-end !important;
    justify-content:space-between !important;

    gap:35px !important;

    margin-bottom:28px !important;
}


#shivam-featured-uniforms .sfu-head-left{
    max-width:650px !important;
}


#shivam-featured-uniforms .sfu-label{
    display:flex !important;

    align-items:center !important;

    gap:9px !important;

    margin:0 0 10px !important;

    color:var(--green) !important;

    font-size:10.5px !important;
    font-weight:800 !important;

    line-height:1 !important;

    letter-spacing:1.6px !important;

    text-transform:uppercase !important;
}


#shivam-featured-uniforms .sfu-label::before{
    content:"" !important;

    width:28px !important;
    height:2px !important;

    border-radius:30px !important;

    background:var(--green) !important;
}


#shivam-featured-uniforms .sfu-heading{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:38px !important;
    font-weight:800 !important;

    line-height:1.18 !important;

    letter-spacing:-1.1px !important;
}


#shivam-featured-uniforms .sfu-heading span{
    color:var(--green) !important;
}


#shivam-featured-uniforms .sfu-description{
    max-width:610px !important;

    margin:11px 0 0 !important;

    color:var(--text) !important;

    font-size:14px !important;
    line-height:1.65 !important;
}


/* =========================================================
   HEADER LINK
========================================================= */

#shivam-featured-uniforms .sfu-view-link{
    flex:0 0 auto !important;

    display:inline-flex !important;

    align-items:center !important;

    gap:8px !important;

    color:var(--blue) !important;

    text-decoration:none !important;

    font-size:12px !important;
    font-weight:700 !important;

    border-bottom:
        1px solid
        rgba(0,22,65,.25) !important;

    padding-bottom:4px !important;

    transition:
        color .25s ease,
        border-color .25s ease !important;
}


#shivam-featured-uniforms .sfu-view-link:hover{
    color:var(--green) !important;

    border-color:var(--green) !important;
}


/* =========================================================
   GRID
========================================================= */

#shivam-featured-uniforms .sfu-grid{
    width:100% !important;

    display:grid !important;

    grid-template-columns:repeat(3,1fr) !important;

    gap:18px !important;
}


/* =========================================================
   ITEM
========================================================= */

#shivam-featured-uniforms .sfu-item{
    width:100% !important;

    position:relative !important;
}


/* =========================================================
   IMAGE
========================================================= */

#shivam-featured-uniforms .sfu-image{
    width:100% !important;

    height:335px !important;

    position:relative !important;

    overflow:hidden !important;

    border-radius:11px !important;

    background:#E8EBEF !important;

    box-shadow:
        0 7px 20px
        rgba(0,22,65,.06) !important;
}


#shivam-featured-uniforms .sfu-image img{
    width:100% !important;
    height:100% !important;

    display:block !important;

    object-fit:cover !important;
    object-position:center !important;

    transition:transform .6s ease !important;
}


#shivam-featured-uniforms .sfu-item:hover .sfu-image img{
    transform:scale(1.04) !important;
}


/* SUBTLE OVERLAY */

#shivam-featured-uniforms .sfu-image::after{
    content:"" !important;

    position:absolute !important;

    inset:0 !important;

    background:
        linear-gradient(
            180deg,
            transparent 55%,
            rgba(0,22,65,.12) 100%
        ) !important;

    pointer-events:none !important;
}


/* GREEN CORNER */

#shivam-featured-uniforms .sfu-corner{
    position:absolute !important;

    left:16px !important;
    top:16px !important;

    width:32px !important;
    height:4px !important;

    z-index:3 !important;

    border-radius:20px !important;

    background:var(--green) !important;
}


/* =========================================================
   TEXT BELOW IMAGE
========================================================= */

#shivam-featured-uniforms .sfu-content{
    padding:15px 3px 0 !important;
}


#shivam-featured-uniforms .sfu-category{
    display:block !important;

    margin-bottom:4px !important;

    color:var(--green) !important;

    font-size:9px !important;
    font-weight:800 !important;

    letter-spacing:1.1px !important;

    text-transform:uppercase !important;
}


#shivam-featured-uniforms .sfu-title{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:17px !important;
    font-weight:700 !important;

    line-height:1.35 !important;
}


#shivam-featured-uniforms .sfu-text{
    margin:5px 0 0 !important;

    color:#7B838E !important;

    font-size:12px !important;
    line-height:1.55 !important;
}


/* =========================================================
   CTA
========================================================= */

#shivam-featured-uniforms .sfu-action{
    display:flex !important;

    justify-content:center !important;

    margin-top:27px !important;
}


#shivam-featured-uniforms .sfu-btn{
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

    box-shadow:
        0 8px 20px
        rgba(0,22,65,.12) !important;

    transition:
        transform .25s ease,
        background .25s ease,
        box-shadow .25s ease !important;
}


#shivam-featured-uniforms .sfu-btn:hover{
    transform:translateY(-3px) !important;

    background:var(--green) !important;

    color:#FFFFFF !important;

    box-shadow:
        0 12px 25px
        rgba(30,113,44,.18) !important;
}


#shivam-featured-uniforms .sfu-arrow{
    display:inline-block !important;

    font-size:16px !important;

    transition:transform .25s ease !important;
}


#shivam-featured-uniforms .sfu-btn:hover .sfu-arrow{
    transform:translateX(4px) !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:900px){

    #shivam-featured-uniforms{
        padding:46px 18px 50px !important;
    }


    #shivam-featured-uniforms .sfu-heading{
        font-size:34px !important;
    }


    #shivam-featured-uniforms .sfu-image{
        height:290px !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:650px){

    #shivam-featured-uniforms{
        padding:40px 14px 44px !important;
    }


    #shivam-featured-uniforms .sfu-head{
        display:block !important;

        margin-bottom:23px !important;

        text-align:center !important;
    }


    #shivam-featured-uniforms .sfu-label{
        justify-content:center !important;

        font-size:9.5px !important;
    }


    #shivam-featured-uniforms .sfu-heading{
        font-size:29px !important;

        line-height:1.2 !important;

        letter-spacing:-.6px !important;
    }


    #shivam-featured-uniforms .sfu-description{
        margin:9px auto 0 !important;

        max-width:500px !important;

        font-size:13.2px !important;

        line-height:1.6 !important;
    }


    #shivam-featured-uniforms .sfu-view-link{
        margin-top:15px !important;
    }


    #shivam-featured-uniforms .sfu-grid{
        grid-template-columns:1fr !important;

        gap:22px !important;

        max-width:430px !important;

        margin:0 auto !important;
    }


    #shivam-featured-uniforms .sfu-image{
        height:285px !important;
    }


    #shivam-featured-uniforms .sfu-content{
        padding-top:12px !important;

        text-align:center !important;
    }


    #shivam-featured-uniforms .sfu-title{
        font-size:15px !important;
    }


    #shivam-featured-uniforms .sfu-text{
        font-size:11.5px !important;
    }


    #shivam-featured-uniforms .sfu-action{
        margin-top:24px !important;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:390px){

    #shivam-featured-uniforms .sfu-image{
        height:255px !important;
    }


    #shivam-featured-uniforms .sfu-heading{
        font-size:27px !important;
    }

}

</style>


<section id="shivam-featured-uniforms">

    <div class="sfu-container">


        <!-- HEADING -->

        <div class="sfu-head">


            <div class="sfu-head-left">

                <div class="sfu-label">
                    Featured Uniforms
                </div>


                <h2 class="sfu-heading">
                    A Closer Look at Our
                    <span>Uniform Range</span>
                </h2>


                <p class="sfu-description">
                    Explore selected uniform styles created for schools,
                    workplaces and professional teams.
                </p>

            </div>


            <a
                href="gallary.php"
                class="sfu-view-link"
            >
                View Gallery →
            </a>


        </div>



        <!-- =================================================
             SHOWCASE GRID
        ================================================== -->

        <div class="sfu-grid">


            <!-- IMAGE 01 -->

            <div class="sfu-item">

                <div class="sfu-image">

                    <span class="sfu-corner"></span>

                    <img
                        src="https://shivamuniform.hiralgems.com/wp-content/uploads/2026/09/uniform-image1.png"
                        alt="School Uniform Collection"
                        loading="lazy"
                    >

                </div>


                <div class="sfu-content">

                    <span class="sfu-category">
                        School
                    </span>

                    <h3 class="sfu-title">
                        School Uniform Collection
                    </h3>

                    <p class="sfu-text">
                        Comfortable and neat uniforms suited for everyday school wear.
                    </p>

                </div>

            </div>



            <!-- IMAGE 02 -->

            <div class="sfu-item">

                <div class="sfu-image">

                    <span class="sfu-corner"></span>

                    <img
                        src="https://shivamuniform.hiralgems.com/wp-content/uploads/2026/09/uniform-image2.png"
                        alt="School Uniform Collection"
                        loading="lazy"
                    >

                </div>


                <div class="sfu-content">

                    <span class="sfu-category">
                        School
                    </span>

                    <h3 class="sfu-title">
                        Smart School Uniforms
                    </h3>

                    <p class="sfu-text">
                        A clean and coordinated look designed for everyday student comfort.
                    </p>

                </div>

            </div>



            <!-- IMAGE 03 -->

            <div class="sfu-item">

                <div class="sfu-image">

                    <span class="sfu-corner"></span>

                    <img
                        src="https://shivamuniform.hiralgems.com/wp-content/uploads/2026/09/uniform-image3.png"
                        alt="School Uniform Collection"
                        loading="lazy"
                    >

                </div>


                <div class="sfu-content">

                    <span class="sfu-category">
                        School
                    </span>

                    <h3 class="sfu-title">
                        Everyday School Wear
                    </h3>

                    <p class="sfu-text">
                        Practical school uniforms with a neat and professional appearance.
                    </p>

                </div>

            </div>


        </div>



        <!-- CTA -->

        <div class="sfu-action">

            <a
                href="gallary.php"
                class="sfu-btn"
            >

                Explore More Uniforms

                <span class="sfu-arrow">
                    →
                </span>

            </a>

        </div>


    </div>

</section>