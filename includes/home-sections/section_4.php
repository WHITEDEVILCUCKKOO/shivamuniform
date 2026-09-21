<!-- =========================================================
     SHIVAM UNIFORM
     HOME PAGE - SECTION 04
     WHY CHOOSE US
     CLEAN / MINIMAL / PROFESSIONAL

     BRAND COLORS:
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

#shivam-why-section,
#shivam-why-section *{
    box-sizing:border-box !important;
}

#shivam-why-section{
    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;
    --light:#F7F9FB;
    --text:#646D79;
    --border:#E6E9EE;

    width:100% !important;

    margin:0 !important;

    padding:
        54px
        20px
        56px !important;

    position:relative !important;

    overflow:hidden !important;

    background:#FFFFFF !important;

    font-family:'Manrope',sans-serif !important;
}


/* =========================================================
   CONTAINER
========================================================= */

#shivam-why-section .sws-container{
    width:100% !important;

    max-width:1140px !important;

    margin:0 auto !important;

    display:grid !important;

    grid-template-columns:
        minmax(0,.90fr)
        minmax(0,1.10fr) !important;

    align-items:center !important;

    gap:75px !important;

    position:relative !important;

    z-index:2 !important;
}


/* =========================================================
   LEFT CONTENT
========================================================= */

#shivam-why-section .sws-content{
    width:100% !important;

    max-width:500px !important;
}


/* LABEL */

#shivam-why-section .sws-label{
    display:flex !important;

    align-items:center !important;

    gap:9px !important;

    margin:
        0
        0
        11px !important;

    color:var(--green) !important;

    font-size:10.5px !important;

    font-weight:800 !important;

    line-height:1 !important;

    letter-spacing:1.6px !important;

    text-transform:uppercase !important;
}


#shivam-why-section .sws-label::before{
    content:"" !important;

    width:28px !important;
    height:2px !important;

    background:var(--green) !important;

    border-radius:30px !important;
}


/* =========================================================
   HEADING
========================================================= */

#shivam-why-section .sws-heading{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:39px !important;

    font-weight:800 !important;

    line-height:1.18 !important;

    letter-spacing:-1.2px !important;
}


#shivam-why-section .sws-heading span{
    color:var(--green) !important;
}


/* =========================================================
   DESCRIPTION
========================================================= */

#shivam-why-section .sws-description{
    margin:
        17px
        0
        0 !important;

    color:var(--text) !important;

    font-size:14.5px !important;

    font-weight:400 !important;

    line-height:1.75 !important;
}


/* =========================================================
   SMALL ACCENT LINE
========================================================= */

#shivam-why-section .sws-line{
    width:55px !important;

    height:3px !important;

    margin-top:22px !important;

    border-radius:30px !important;

    background:var(--green) !important;
}


/* =========================================================
   CTA
========================================================= */

#shivam-why-section .sws-action{
    margin-top:25px !important;
}


#shivam-why-section .sws-btn{
    min-height:47px !important;

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

    line-height:1 !important;

    box-shadow:
        0 8px 21px
        rgba(0,22,65,.11) !important;

    transition:
        transform .25s ease,
        background .25s ease,
        box-shadow .25s ease !important;
}


#shivam-why-section .sws-btn:hover{
    transform:translateY(-3px) !important;

    background:var(--green) !important;

    color:#FFFFFF !important;

    box-shadow:
        0 12px 27px
        rgba(30,113,44,.18) !important;
}


#shivam-why-section .sws-btn-arrow{
    display:inline-block !important;

    font-size:16px !important;

    transition:transform .25s ease !important;
}


#shivam-why-section
.sws-btn:hover
.sws-btn-arrow{
    transform:translateX(4px) !important;
}


/* =========================================================
   RIGHT SIDE
========================================================= */

#shivam-why-section .sws-points{
    width:100% !important;

    border-top:
        1px solid
        var(--border) !important;
}


/* =========================================================
   SINGLE POINT
========================================================= */

#shivam-why-section .sws-point{
    width:100% !important;

    display:grid !important;

    grid-template-columns:
        52px
        minmax(0,1fr) !important;

    align-items:center !important;

    gap:17px !important;

    padding:
        19px
        0 !important;

    border-bottom:
        1px solid
        var(--border) !important;

    transition:
        padding-left .3s ease !important;
}


#shivam-why-section .sws-point:hover{
    padding-left:8px !important;
}


/* =========================================================
   ICON
========================================================= */

#shivam-why-section .sws-icon{
    width:46px !important;
    height:46px !important;

    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    border-radius:9px !important;

    background:
        rgba(30,113,44,.08) !important;

    color:var(--green) !important;

    transition:
        background .3s ease,
        color .3s ease !important;
}


#shivam-why-section
.sws-point:hover
.sws-icon{
    background:var(--green) !important;

    color:#FFFFFF !important;
}


#shivam-why-section .sws-icon svg{
    width:21px !important;
    height:21px !important;
}


/* =========================================================
   POINT TEXT
========================================================= */

#shivam-why-section .sws-point-content h3{
    margin:
        0
        0
        4px !important;

    color:var(--blue) !important;

    font-size:15px !important;

    font-weight:700 !important;

    line-height:1.35 !important;
}


#shivam-why-section .sws-point-content p{
    margin:0 !important;

    color:#7A828E !important;

    font-size:12.5px !important;

    font-weight:400 !important;

    line-height:1.55 !important;
}


/* =========================================================
   BACKGROUND DECORATION
========================================================= */

#shivam-why-section::before{
    content:"" !important;

    position:absolute !important;

    width:300px !important;
    height:300px !important;

    left:-190px !important;
    bottom:-190px !important;

    border-radius:50% !important;

    border:
        1px solid
        rgba(0,22,65,.04) !important;

    pointer-events:none !important;
}


#shivam-why-section::after{
    content:"" !important;

    position:absolute !important;

    width:150px !important;
    height:150px !important;

    left:-90px !important;
    bottom:-90px !important;

    border-radius:50% !important;

    background:
        rgba(30,113,44,.025) !important;

    pointer-events:none !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:900px){

    #shivam-why-section{
        padding:
            48px
            18px
            50px !important;
    }


    #shivam-why-section .sws-container{
        gap:45px !important;
    }


    #shivam-why-section .sws-heading{
        font-size:34px !important;
    }


    #shivam-why-section .sws-point{
        grid-template-columns:
            46px
            minmax(0,1fr) !important;

        gap:14px !important;

        padding:
            17px
            0 !important;
    }


    #shivam-why-section .sws-icon{
        width:42px !important;
        height:42px !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:700px){

    #shivam-why-section{
        padding:
            40px
            15px
            43px !important;
    }


    #shivam-why-section .sws-container{
        display:flex !important;

        flex-direction:column !important;

        gap:31px !important;
    }


    #shivam-why-section .sws-content{
        max-width:550px !important;

        text-align:center !important;
    }


    #shivam-why-section .sws-label{
        justify-content:center !important;

        font-size:9.5px !important;
    }


    #shivam-why-section .sws-heading{
        font-size:29px !important;

        line-height:1.2 !important;

        letter-spacing:-.6px !important;
    }


    #shivam-why-section .sws-description{
        margin-top:13px !important;

        font-size:13.5px !important;

        line-height:1.68 !important;
    }


    #shivam-why-section .sws-line{
        margin:
            18px
            auto
            0 !important;
    }


    #shivam-why-section .sws-action{
        margin-top:21px !important;
    }


    #shivam-why-section .sws-points{
        max-width:520px !important;

        margin:0 auto !important;
    }


    #shivam-why-section .sws-point{
        grid-template-columns:
            43px
            minmax(0,1fr) !important;

        gap:13px !important;

        padding:
            16px
            0 !important;

        text-align:left !important;
    }


    #shivam-why-section .sws-point:hover{
        padding-left:0 !important;
    }


    #shivam-why-section .sws-icon{
        width:40px !important;
        height:40px !important;

        border-radius:8px !important;
    }


    #shivam-why-section .sws-icon svg{
        width:19px !important;
        height:19px !important;
    }


    #shivam-why-section .sws-point-content h3{
        font-size:14px !important;
    }


    #shivam-why-section .sws-point-content p{
        font-size:11.5px !important;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:390px){

    #shivam-why-section{
        padding:
            38px
            13px
            40px !important;
    }


    #shivam-why-section .sws-heading{
        font-size:27px !important;
    }


    #shivam-why-section .sws-btn{
        min-height:45px !important;

        padding:
            0
            18px !important;

        font-size:11.5px !important;
    }

}

</style>


<section id="shivam-why-section">

    <div class="sws-container">


        <!-- =================================================
             LEFT CONTENT
        ================================================== -->

        <div class="sws-content">


            <div class="sws-label">
                Why Shivam Uniform
            </div>


            <h2 class="sws-heading">

                Simple Standards.
                <span>Reliable Uniforms.</span>

            </h2>


            <p class="sws-description">

                A good uniform should feel comfortable, look professional
                and perform well through everyday use. At Shivam Uniform,
                we focus on practical details that matter to schools,
                organisations and working teams.

            </p>


            <div class="sws-line"></div>


            <div class="sws-action">

                <a
                    href="contact.php"
                    class="sws-btn"
                >

                    Discuss Your Requirement

                    <span class="sws-btn-arrow">
                        →
                    </span>

                </a>

            </div>


        </div>



        <!-- =================================================
             RIGHT POINTS
        ================================================== -->

        <div class="sws-points">


            <!-- 01 -->

            <div class="sws-point">


                <div class="sws-icon">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >

                        <path
                            d="M7 4L4 7L7 11L9 9V20H15V9L17 11L20 7L17 4L14.5 6H9.5L7 4Z"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linejoin="round"
                        />

                    </svg>

                </div>


                <div class="sws-point-content">

                    <h3>
                        Comfortable Fabrics
                    </h3>

                    <p>
                        Materials selected with everyday comfort and usability in mind.
                    </p>

                </div>


            </div>



            <!-- 02 -->

            <div class="sws-point">


                <div class="sws-icon">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
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


                <div class="sws-point-content">

                    <h3>
                        Reliable Stitching
                    </h3>

                    <p>
                        Clean finishing designed for regular and repeated use.
                    </p>

                </div>


            </div>



            <!-- 03 -->

            <div class="sws-point">


                <div class="sws-icon">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >

                        <path
                            d="M5 8H19V19H5V8Z"
                            stroke="currentColor"
                            stroke-width="1.7"
                        />

                        <path
                            d="M9 8V5H15V8"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round"
                        />

                        <path
                            d="M5 12H19"
                            stroke="currentColor"
                            stroke-width="1.7"
                        />

                    </svg>

                </div>


                <div class="sws-point-content">

                    <h3>
                        Uniforms for Different Sectors
                    </h3>

                    <p>
                        Solutions for schools, corporates, industries and service teams.
                    </p>

                </div>


            </div>



            <!-- 04 -->

            <div class="sws-point">


                <div class="sws-icon">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >

                        <path
                            d="M4 6H20V18H4V6Z"
                            stroke="currentColor"
                            stroke-width="1.7"
                        />

                        <path
                            d="M8 10H16"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round"
                        />

                        <path
                            d="M8 14H13"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round"
                        />

                    </svg>

                </div>


                <div class="sws-point-content">

                    <h3>
                        Requirement-Based Solutions
                    </h3>

                    <p>
                        Uniform options suited to the needs of different institutions and teams.
                    </p>

                </div>


            </div>


        </div>


    </div>

</section>