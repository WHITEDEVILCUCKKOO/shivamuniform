<!-- =========================================================
     SHIVAM UNIFORM
     CONTACT US PAGE - SECTION 04
     LOCATION + LIVE GOOGLE MAP
     CLEAN / PREMIUM / RESPONSIVE

     BRAND COLORS:
     BLUE  : #001641
     GREEN : #1E712C
     WHITE : #FFFFFF
========================================================= -->

<?php  include'./admin_access/db_config.php' ?>




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

#shivam-contact-map,
#shivam-contact-map *{
    box-sizing:border-box !important;
}


#shivam-contact-map{
    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;
    --light:#F7F9FB;
    --text:#65707C;

    width:100% !important;

    margin:0 !important;

    padding:
        46px
        20px
        50px !important;

    position:relative !important;

    overflow:hidden !important;

    background:
        linear-gradient(
            135deg,
            #FFFFFF 0%,
            #F8FAFB 58%,
            #F3F8F4 100%
        ) !important;

    font-family:'Manrope',sans-serif !important;
}


/* =========================================================
   BACKGROUND DECORATION
========================================================= */

#shivam-contact-map::before{
    content:"" !important;

    position:absolute !important;

    width:260px !important;
    height:260px !important;

    right:-145px !important;
    top:-145px !important;

    border-radius:50% !important;

    background:
        rgba(30,113,44,.045) !important;

    pointer-events:none !important;
}


#shivam-contact-map::after{
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

#shivam-contact-map .scm-container{
    width:100% !important;

    max-width:1160px !important;

    margin:0 auto !important;

    position:relative !important;

    z-index:2 !important;
}


/* =========================================================
   HEADER
========================================================= */

#shivam-contact-map .scm-header{
    width:100% !important;

    display:grid !important;

    grid-template-columns:
        minmax(0,.9fr)
        minmax(0,1.1fr) !important;

    gap:48px !important;

    align-items:end !important;

    margin-bottom:25px !important;
}


/* LABEL */

#shivam-contact-map .scm-label{
    display:flex !important;

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


#shivam-contact-map .scm-label::before{
    content:"" !important;

    width:27px !important;
    height:2px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}


/* HEADING */

#shivam-contact-map .scm-heading{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:36px !important;
    font-weight:800 !important;

    line-height:1.16 !important;

    letter-spacing:-.9px !important;
}


#shivam-contact-map .scm-heading span{
    color:var(--green) !important;
}


/* INTRO */

#shivam-contact-map .scm-intro{
    max-width:620px !important;

    margin:0 !important;

    color:var(--text) !important;

    font-size:15px !important;

    line-height:1.7 !important;
}


/* =========================================================
   MAIN BOX
========================================================= */

#shivam-contact-map .scm-main{
    width:100% !important;

    display:grid !important;

    grid-template-columns:
        minmax(290px,.72fr)
        minmax(0,1.28fr) !important;

    min-height:400px !important;

    position:relative !important;

    overflow:hidden !important;

    background:#FFFFFF !important;

    border:
        1px solid
        rgba(0,22,65,.08) !important;

    border-radius:14px !important;

    box-shadow:
        0 15px 38px
        rgba(0,22,65,.07) !important;
}


/* TOP ACCENT */

#shivam-contact-map .scm-main::before{
    content:"" !important;

    position:absolute !important;

    left:0 !important;
    top:0 !important;

    width:105px !important;
    height:4px !important;

    background:var(--green) !important;

    z-index:5 !important;
}


/* =========================================================
   LEFT INFO
========================================================= */

#shivam-contact-map .scm-info{
    min-height:400px !important;

    padding:
        31px
        28px !important;

    position:relative !important;

    overflow:hidden !important;

    display:flex !important;

    flex-direction:column !important;

    justify-content:space-between !important;

    background:
        radial-gradient(
            circle at 92% 8%,
            rgba(30,113,44,.18) 0%,
            transparent 32%
        ),
        linear-gradient(
            145deg,
            #001641 0%,
            #082B3C 68%,
            #12392E 100%
        ) !important;
}


/* DECORATION */

#shivam-contact-map .scm-info::before{
    content:"" !important;

    position:absolute !important;

    width:150px !important;
    height:150px !important;

    right:-75px !important;
    top:-75px !important;

    border-radius:50% !important;

    border:
        1px solid
        rgba(255,255,255,.08) !important;

    pointer-events:none !important;
}


#shivam-contact-map .scm-info-top,
#shivam-contact-map .scm-info-bottom{
    position:relative !important;

    z-index:2 !important;
}


/* =========================================================
   MAIN ICON
========================================================= */

#shivam-contact-map .scm-main-icon{
    width:48px !important;
    height:48px !important;

    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    margin-bottom:17px !important;

    border-radius:11px !important;

    background:var(--green) !important;

    color:#FFFFFF !important;

    font-size:18px !important;

    box-shadow:
        0 8px 18px
        rgba(30,113,44,.18) !important;
}


/* SMALL LABEL */

#shivam-contact-map .scm-info-small{
    display:block !important;

    margin-bottom:6px !important;

    color:#82CF8D !important;

    font-size:9px !important;
    font-weight:800 !important;

    letter-spacing:1.4px !important;

    text-transform:uppercase !important;
}


/* HEADING */

#shivam-contact-map .scm-info h3{
    margin:0 !important;

    color:#FFFFFF !important;

    font-size:24px !important;
    font-weight:800 !important;

    line-height:1.28 !important;
}


/* ADDRESS */

#shivam-contact-map .scm-address{
    margin:
        11px
        0
        0 !important;

    color:
        rgba(255,255,255,.72) !important;

    font-size:14px !important;

    line-height:1.68 !important;
}


/* =========================================================
   INFO ROWS
========================================================= */

#shivam-contact-map .scm-info-bottom{
    margin-top:24px !important;
}


#shivam-contact-map .scm-row{
    width:100% !important;

    display:grid !important;

    grid-template-columns:
        27px
        minmax(0,1fr) !important;

    gap:9px !important;

    padding:
        12px
        0 !important;

    border-top:
        1px solid
        rgba(255,255,255,.10) !important;
}


#shivam-contact-map .scm-row i{
    margin-top:3px !important;

    color:#7BC486 !important;

    font-size:13px !important;
}


#shivam-contact-map .scm-row strong{
    display:block !important;

    margin-bottom:3px !important;

    color:#FFFFFF !important;

    font-size:12.5px !important;
    font-weight:800 !important;
}


#shivam-contact-map .scm-row span,
#shivam-contact-map .scm-row a{
    display:block !important;

    color:
        rgba(255,255,255,.67) !important;

    font-size:12.5px !important;

    line-height:1.52 !important;

    text-decoration:none !important;

    transition:
        color .25s ease !important;
}


#shivam-contact-map .scm-row a:hover{
    color:#8AD594 !important;
}


/* =========================================================
   MAP AREA
========================================================= */

#shivam-contact-map .scm-map{
    width:100% !important;

    min-height:400px !important;

    position:relative !important;

    background:#F4F6F7 !important;
}


/* IFRAME */

#shivam-contact-map .scm-map iframe{
    display:block !important;

    width:100% !important;
    height:100% !important;

    min-height:400px !important;

    margin:0 !important;
    padding:0 !important;

    border:0 !important;

    filter:
        saturate(.92)
        contrast(1.02) !important;
}


/* =========================================================
   MAP FLOATING LABEL
========================================================= */

#shivam-contact-map .scm-map-label{
    position:absolute !important;

    left:18px !important;
    bottom:18px !important;

    z-index:3 !important;

    display:inline-flex !important;

    align-items:center !important;

    gap:8px !important;

    padding:
        10px
        13px !important;

    border-radius:7px !important;

    background:
        rgba(255,255,255,.96) !important;

    color:var(--blue) !important;

    border-left:
        3px solid
        var(--green) !important;

    box-shadow:
        0 7px 20px
        rgba(0,22,65,.12) !important;

    font-size:11.5px !important;
    font-weight:800 !important;
}


#shivam-contact-map .scm-map-label i{
    color:var(--green) !important;

    font-size:12px !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:950px){

    #shivam-contact-map{
        padding:
            42px
            18px
            46px !important;
    }


    #shivam-contact-map .scm-header{
        gap:32px !important;
    }


    #shivam-contact-map .scm-heading{
        font-size:32px !important;
    }


    #shivam-contact-map .scm-intro{
        font-size:14px !important;
    }


    #shivam-contact-map .scm-main{
        grid-template-columns:
            minmax(250px,.75fr)
            minmax(0,1.25fr) !important;
    }


    #shivam-contact-map .scm-info{
        padding:
            27px
            22px !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:700px){

    #shivam-contact-map{
        padding:
            38px
            14px
            41px !important;
    }


    #shivam-contact-map .scm-header{
        grid-template-columns:1fr !important;

        gap:11px !important;

        margin-bottom:21px !important;

        text-align:center !important;
    }


    #shivam-contact-map .scm-label{
        justify-content:center !important;

        font-size:9px !important;
    }


    #shivam-contact-map .scm-heading{
        font-size:29px !important;

        line-height:1.18 !important;
    }


    #shivam-contact-map .scm-intro{
        max-width:520px !important;

        margin:0 auto !important;

        font-size:13.5px !important;

        line-height:1.65 !important;
    }


    #shivam-contact-map .scm-main{
        grid-template-columns:1fr !important;

        min-height:auto !important;
    }


    #shivam-contact-map .scm-info{
        min-height:auto !important;

        padding:
            24px
            19px !important;
    }


    #shivam-contact-map .scm-main-icon{
        width:44px !important;
        height:44px !important;

        margin-bottom:14px !important;

        font-size:16px !important;
    }


    #shivam-contact-map .scm-info h3{
        font-size:21px !important;
    }


    #shivam-contact-map .scm-address{
        font-size:13.5px !important;
    }


    #shivam-contact-map .scm-info-bottom{
        margin-top:19px !important;
    }


    #shivam-contact-map .scm-row{
        padding:
            11px
            0 !important;
    }


    #shivam-contact-map .scm-map{
        min-height:315px !important;
    }


    #shivam-contact-map .scm-map iframe{
        height:315px !important;

        min-height:315px !important;
    }


    #shivam-contact-map .scm-map-label{
        left:12px !important;
        bottom:12px !important;

        max-width:
            calc(100% - 24px) !important;

        padding:
            9px
            10px !important;

        font-size:10px !important;
    }

}

</style>


<section id="shivam-contact-map">

    <div class="scm-container">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="scm-header">


            <div>

                <div class="scm-label">
                    Our Location
                </div>


                <h2 class="scm-heading">

                    Visit

                    <span>
                        Shivam Uniform
                    </span>

                </h2>

            </div>



            <p class="scm-intro">

                Visit us in Ballabgarh, Faridabad to discuss your
                school, corporate, industrial, hospitality,
                security or other uniform requirements.

            </p>


        </div>



        <!-- =================================================
             LOCATION + MAP
        ================================================== -->

        <div class="scm-main">


            <!-- LEFT DETAILS -->

            <div class="scm-info">


                <div class="scm-info-top">


                    <div class="scm-main-icon">

                        <i class="fa-solid fa-location-dot"></i>

                    </div>


                    <span class="scm-info-small">
                        Visit Our Location
                    </span>


                    <h3>
                        Shivam Uniform
                    </h3>


                    <p class="scm-address">

                        <?php echo htmlspecialchars($global_info['footer_address'] ?? ''); ?>

                    </p>


                </div>



                <div class="scm-info-bottom">


                    <!-- EMAIL -->

                    <div class="scm-row">

                        <i class="fa-solid fa-envelope"></i>

                        <div>

                            <strong>
                                Email Us
                            </strong>

                            <a href="mailto:<?php echo htmlspecialchars($global_info['footer_email_1'] ?? ''); ?>">
                                <?php echo htmlspecialchars($global_info['footer_email_1'] ?? ''); ?>
                            </a>

                        </div>

                    </div>



                    <!-- LOCATION -->

                    <div class="scm-row">

                        <i class="fa-solid fa-map-location-dot"></i>

                        <div>

                            <strong>
                                Location
                            </strong>

                            <span>
                                Ballabgarh, Faridabad
                            </span>

                        </div>

                    </div>



                    <!-- SERVICES -->

                    <div class="scm-row">

                        <i class="fa-solid fa-shirt"></i>

                        <div>

                            <strong>
                                Uniform Solutions
                            </strong>

                            <span>
                                Schools, corporates, industries,
                                hospitality, security and more.
                            </span>

                        </div>

                    </div>


                </div>


            </div>



            <!-- =================================================
                 GOOGLE MAP
            ================================================== -->

            <div class="scm-map">


                <iframe
                    src="<?php echo htmlspecialchars($global_info['map_link'] ?? ''); ?>"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen=""
                    aria-label="Shivam Uniform location map">
                </iframe>


                <div class="scm-map-label">

                    <i class="fa-solid fa-location-dot"></i>

                    Shivam Uniform · Ballabgarh, Faridabad

                </div>


            </div>


        </div>


    </div>

</section>