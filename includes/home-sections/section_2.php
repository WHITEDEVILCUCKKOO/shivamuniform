<!-- =========================================================
     SHIVAM UNIFORM
     HOME PAGE - SECTION 02
     ABOUT SECTION
     SIMPLE / CLEAN / PROFESSIONAL

     COLORS:
     Blue  : #001641
     Green : #1E712C
     White : #FFFFFF
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">


<style>

/* =========================================================
   RESET
========================================================= */

#shivam-about-clean,
#shivam-about-clean *{
    box-sizing:border-box !important;
}


#shivam-about-clean{
    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;
    --text:#626A77;
    --border:#E6E9EE;
    --light:#F7F9FA;

    width:100% !important;

    margin:0 !important;

    padding:
        76px
        20px
        78px !important;

    position:relative !important;

    overflow:hidden !important;

    background:#FFFFFF !important;

    font-family:'Manrope',sans-serif !important;
}



/* =========================================================
   CONTAINER
========================================================= */

#shivam-about-clean .sac-container{
    width:100% !important;

    max-width:1120px !important;

    margin:0 auto !important;

    display:grid !important;

    grid-template-columns:
        420px
        minmax(0,1fr) !important;

    align-items:center !important;

    gap:68px !important;

    position:relative !important;

    z-index:2 !important;
}



/* =========================================================
   LEFT IMAGE AREA
========================================================= */

#shivam-about-clean .sac-image-wrap{
    width:100% !important;

    max-width:420px !important;

    position:relative !important;
}



/* GREEN SHAPE */

#shivam-about-clean .sac-image-shape{
    position:absolute !important;

    width:78% !important;
    height:80% !important;

    left:-10px !important;
    bottom:-10px !important;

    border-radius:
        12px
        12px
        12px
        42px !important;

    background:var(--green) !important;
}



/* IMAGE */

#shivam-about-clean .sac-image{
    width:100% !important;

    height:405px !important;

    position:relative !important;

    z-index:2 !important;

    overflow:hidden !important;

    border-radius:
        12px
        12px
        12px
        42px !important;

    background:#EEF1F4 !important;

    box-shadow:
        0 16px 38px
        rgba(0,22,65,.09) !important;
}


#shivam-about-clean .sac-image img{
    width:100% !important;

    height:100% !important;

    display:block !important;

    object-fit:cover !important;

    object-position:center !important;

    transition:
        transform .55s ease !important;
}


#shivam-about-clean
.sac-image-wrap:hover
.sac-image img{
    transform:scale(1.025) !important;
}



/* =========================================================
   SMALL IMAGE LABEL
========================================================= */

#shivam-about-clean .sac-image-label{
    position:absolute !important;

    right:-18px !important;
    bottom:25px !important;

    z-index:4 !important;

    width:168px !important;

    padding:
        14px
        15px !important;

    border-radius:7px !important;

    background:var(--blue) !important;

    box-shadow:
        0 12px 28px
        rgba(0,22,65,.17) !important;
}


#shivam-about-clean .sac-image-label small{
    display:block !important;

    margin-bottom:4px !important;

    color:rgba(255,255,255,.55) !important;

    font-size:8px !important;

    font-weight:700 !important;

    letter-spacing:1.1px !important;

    text-transform:uppercase !important;
}


#shivam-about-clean .sac-image-label strong{
    display:block !important;

    color:#FFFFFF !important;

    font-size:12px !important;

    font-weight:700 !important;

    line-height:1.4 !important;
}


#shivam-about-clean .sac-image-label::before{
    content:"" !important;

    position:absolute !important;

    left:15px !important;
    top:-3px !important;

    width:31px !important;
    height:3px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}



/* =========================================================
   RIGHT CONTENT
========================================================= */

#shivam-about-clean .sac-content{
    width:100% !important;

    max-width:590px !important;
}



/* LABEL */

#shivam-about-clean .sac-label{
    display:flex !important;

    align-items:center !important;

    gap:10px !important;

    margin:
        0
        0
        12px !important;

    color:var(--green) !important;

    font-size:11px !important;

    font-weight:800 !important;

    letter-spacing:1.6px !important;

    text-transform:uppercase !important;
}


#shivam-about-clean .sac-label::before{
    content:"" !important;

    width:29px !important;
    height:2px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}



/* =========================================================
   HEADING
========================================================= */

#shivam-about-clean .sac-heading{
    max-width:560px !important;

    margin:0 !important;

    color:var(--blue) !important;

    font-size:40px !important;

    font-weight:800 !important;

    line-height:1.18 !important;

    letter-spacing:-1.3px !important;
}


#shivam-about-clean .sac-heading span{
    color:var(--green) !important;
}



/* =========================================================
   DESCRIPTION
========================================================= */

#shivam-about-clean .sac-description{
    max-width:570px !important;

    margin:
        18px
        0
        0 !important;

    color:var(--text) !important;

    font-size:15px !important;

    font-weight:400 !important;

    line-height:1.75 !important;
}


#shivam-about-clean
.sac-description
+
.sac-description{
    margin-top:11px !important;
}



/* =========================================================
   MINIMAL FEATURES
========================================================= */

#shivam-about-clean .sac-features{
    width:100% !important;

    display:flex !important;

    align-items:center !important;

    margin-top:26px !important;

    padding:
        18px
        0 !important;

    border-top:
        1px solid
        var(--border) !important;

    border-bottom:
        1px solid
        var(--border) !important;
}



/* EACH POINT */

#shivam-about-clean .sac-feature{
    flex:1 !important;

    display:flex !important;

    align-items:center !important;

    gap:9px !important;

    min-height:40px !important;

    padding:
        0
        16px !important;

    position:relative !important;
}


#shivam-about-clean
.sac-feature:first-child{
    padding-left:0 !important;
}


#shivam-about-clean
.sac-feature:last-child{
    padding-right:0 !important;
}


#shivam-about-clean
.sac-feature:not(:last-child)::after{
    content:"" !important;

    position:absolute !important;

    right:0 !important;

    top:3px !important;

    width:1px !important;

    height:35px !important;

    background:var(--border) !important;
}



/* ICON */

#shivam-about-clean .sac-icon{
    width:30px !important;

    height:30px !important;

    min-width:30px !important;

    display:flex !important;

    align-items:center !important;

    justify-content:center !important;

    border-radius:6px !important;

    background:
        rgba(30,113,44,.08) !important;

    color:var(--green) !important;
}


#shivam-about-clean .sac-icon svg{
    width:15px !important;

    height:15px !important;
}



/* TEXT */

#shivam-about-clean .sac-feature strong{
    display:block !important;

    color:var(--blue) !important;

    font-size:11.5px !important;

    font-weight:700 !important;

    line-height:1.35 !important;
}



/* =========================================================
   BUTTON
========================================================= */

#shivam-about-clean .sac-action{
    margin-top:25px !important;
}


#shivam-about-clean .sac-btn{
    min-height:48px !important;

    padding:
        0
        22px !important;

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
        0 9px 22px
        rgba(0,22,65,.12) !important;

    transition:
        transform .25s ease,
        background .25s ease,
        box-shadow .25s ease !important;
}


#shivam-about-clean .sac-btn:hover{
    transform:
        translateY(-3px) !important;

    background:
        var(--green) !important;

    color:#FFFFFF !important;

    box-shadow:
        0 13px 28px
        rgba(30,113,44,.19) !important;
}


#shivam-about-clean .sac-arrow{
    font-size:16px !important;

    transition:
        transform .25s ease !important;
}


#shivam-about-clean
.sac-btn:hover
.sac-arrow{
    transform:
        translateX(4px) !important;
}



/* =========================================================
   TABLET
========================================================= */

@media(max-width:950px){

    #shivam-about-clean{
        padding:
            65px
            20px !important;
    }


    #shivam-about-clean .sac-container{
        grid-template-columns:
            360px
            1fr !important;

        gap:45px !important;
    }


    #shivam-about-clean .sac-image{
        height:370px !important;
    }


    #shivam-about-clean .sac-heading{
        font-size:34px !important;
    }


    #shivam-about-clean .sac-description{
        font-size:14px !important;
    }

}



/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #shivam-about-clean{
        padding:
            54px
            16px
            58px !important;
    }


    #shivam-about-clean .sac-container{
        display:flex !important;

        flex-direction:column !important;

        gap:38px !important;
    }


    /* CONTENT FIRST */

    #shivam-about-clean .sac-content{
        order:1 !important;

        width:100% !important;

        max-width:540px !important;

        text-align:center !important;
    }


    /* IMAGE BELOW */

    #shivam-about-clean .sac-image-wrap{
        order:2 !important;

        max-width:385px !important;

        margin:0 auto !important;
    }


    #shivam-about-clean .sac-label{
        justify-content:center !important;

        font-size:10px !important;
    }


    #shivam-about-clean .sac-heading{
        max-width:100% !important;

        font-size:31px !important;

        line-height:1.2 !important;

        letter-spacing:-.7px !important;
    }


    #shivam-about-clean .sac-description{
        max-width:510px !important;

        margin-left:auto !important;
        margin-right:auto !important;

        font-size:13.8px !important;

        line-height:1.7 !important;
    }



    /* FEATURES */

    #shivam-about-clean .sac-features{
        max-width:400px !important;

        margin:
            24px
            auto
            0 !important;

        flex-direction:column !important;

        align-items:stretch !important;

        padding:
            4px
            0 !important;
    }


    #shivam-about-clean .sac-feature{
        width:100% !important;

        padding:
            12px
            0 !important;

        justify-content:flex-start !important;

        text-align:left !important;
    }


    #shivam-about-clean
    .sac-feature:not(:last-child)::after{
        left:0 !important;
        right:auto !important;

        top:auto !important;
        bottom:0 !important;

        width:100% !important;
        height:1px !important;
    }


    #shivam-about-clean .sac-action{
        margin-top:24px !important;
    }



    /* SMALLER IMAGE */

    #shivam-about-clean .sac-image{
        height:350px !important;

        border-radius:
            10px
            10px
            10px
            36px !important;
    }


    #shivam-about-clean .sac-image-shape{
        left:-7px !important;

        bottom:-7px !important;

        border-radius:
            10px
            10px
            10px
            40px !important;
    }


    #shivam-about-clean .sac-image-label{
        right:-4px !important;

        bottom:17px !important;

        width:155px !important;

        padding:
            12px
            13px !important;
    }

}



/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:420px){

    #shivam-about-clean .sac-heading{
        font-size:28px !important;
    }


    #shivam-about-clean .sac-image-wrap{
        max-width:340px !important;
    }


    #shivam-about-clean .sac-image{
        height:315px !important;
    }


    #shivam-about-clean .sac-btn{
        min-height:47px !important;

        padding:
            0
            18px !important;

        font-size:12px !important;
    }

}

</style>


<section id="shivam-about-clean">

    <div class="sac-container">


        <!-- =================================================
             SCHOOL UNIFORM IMAGE
        ================================================== -->

        <div class="sac-image-wrap">


            <div class="sac-image-shape"></div>


            <div class="sac-image">

                <!--
                SCHOOL UNIFORM IMAGE
                Unsplash image can be replaced anytime
                with client's real school uniform photo.
                -->

                <img
                    src="https://images.unsplash.com/photo-1588072432836-e10032774350?auto=format&fit=crop&w=900&q=88"
                    alt="School Uniforms by Shivam Uniform"
                    loading="lazy"
                >

            </div>


            <div class="sac-image-label">

                <small>
                    Shivam Uniform
                </small>

                <strong>
                    Uniforms for School &amp; Work
                </strong>

            </div>


        </div>



        <!-- =================================================
             CONTENT
        ================================================== -->

        <div class="sac-content">


            <div class="sac-label">

                About Shivam Uniform

            </div>



            <h2 class="sac-heading">

                Uniforms Designed for
                <span>Comfort &amp; Everyday Use.</span>

            </h2>



            <p class="sac-description">

                Shivam Uniform provides dependable uniform solutions
                for schools, corporates, industries, security teams,
                hospitality businesses and other organisations.

            </p>


            <p class="sac-description">

                We focus on comfortable fabrics, reliable stitching
                and a clean professional finish to meet the everyday
                requirements of different teams and institutions.

            </p>



            <!-- =============================================
                 SIMPLE FEATURES
            ============================================== -->

            <div class="sac-features">


                <div class="sac-feature">

                    <div class="sac-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                        >

                            <path
                                d="M7 4L4 7L7 11L9 9V20H15V9L17 11L20 7L17 4L14.5 6H9.5L7 4Z"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linejoin="round"
                            />

                        </svg>

                    </div>

                    <strong>
                        Quality Fabrics
                    </strong>

                </div>



                <div class="sac-feature">

                    <div class="sac-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                        >

                            <path
                                d="M12 3L19 6V11C19 15.6 16 19.3 12 21C8 19.3 5 15.6 5 11V6L12 3Z"
                                stroke="currentColor"
                                stroke-width="1.7"
                            />

                            <path
                                d="M9 12L11 14L15.5 9.5"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />

                        </svg>

                    </div>

                    <strong>
                        Reliable Stitching
                    </strong>

                </div>



                <div class="sac-feature">

                    <div class="sac-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                        >

                            <path
                                d="M5 7H19V18H5V7Z"
                                stroke="currentColor"
                                stroke-width="1.7"
                            />

                            <path
                                d="M9 7V5H15V7"
                                stroke="currentColor"
                                stroke-width="1.7"
                            />

                        </svg>

                    </div>

                    <strong>
                        Multiple Categories
                    </strong>

                </div>


            </div>



            <!-- CTA -->

            <div class="sac-action">

                <a
                    href="about.php"
                    class="sac-btn"
                >

                    Learn More About Us

                    <span class="sac-arrow">
                        →
                    </span>

                </a>

            </div>


        </div>


    </div>

</section>