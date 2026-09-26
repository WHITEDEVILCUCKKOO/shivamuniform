<!-- =========================================================
     SHIVAM UNIFORM
     CONTACT US PAGE - SECTION 02
     CLEAN CONTACT DETAILS SECTION
     ELEMENTOR SAFE / FULLY RESPONSIVE

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

#shivam-contact-details,
#shivam-contact-details *{
    box-sizing:border-box !important;
}


#shivam-contact-details{
    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;
    --light:#F7F9FB;
    --text:#65707C;
    --border:#E2E7EC;

    width:100% !important;

    margin:0 !important;

    padding:
        48px
        20px
        52px !important;

    position:relative !important;

    overflow:hidden !important;

    background:
        linear-gradient(
            135deg,
            #FFFFFF 0%,
            #F7F9FB 58%,
            #F3F8F4 100%
        ) !important;

    font-family:'Manrope',sans-serif !important;
}


/* =========================================================
   SUBTLE BACKGROUND DECORATION
========================================================= */

#shivam-contact-details::before{
    content:"" !important;

    position:absolute !important;

    width:260px !important;
    height:260px !important;

    right:-150px !important;
    top:-150px !important;

    border-radius:50% !important;

    background:
        rgba(30,113,44,.045) !important;

    pointer-events:none !important;
}


#shivam-contact-details::after{
    content:"" !important;

    position:absolute !important;

    width:170px !important;
    height:170px !important;

    left:-95px !important;
    bottom:-100px !important;

    border-radius:50% !important;

    border:
        1px solid
        rgba(0,22,65,.07) !important;

    pointer-events:none !important;
}


/* =========================================================
   CONTAINER
========================================================= */

#shivam-contact-details .scd-container{
    width:100% !important;

    max-width:1160px !important;

    margin:0 auto !important;

    position:relative !important;

    z-index:2 !important;
}


/* =========================================================
   TOP CONTENT
========================================================= */

#shivam-contact-details .scd-top{
    display:grid !important;

    grid-template-columns:
        minmax(0,.9fr)
        minmax(0,1.1fr) !important;

    align-items:end !important;

    gap:48px !important;

    margin-bottom:26px !important;
}


/* LABEL */

#shivam-contact-details .scd-label{
    display:flex !important;

    align-items:center !important;

    gap:9px !important;

    margin:0 0 10px !important;

    color:var(--green) !important;

    font-size:10px !important;
    font-weight:800 !important;

    letter-spacing:1.6px !important;

    text-transform:uppercase !important;
}


#shivam-contact-details .scd-label::before{
    content:"" !important;

    width:27px !important;
    height:2px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}


/* HEADING */

#shivam-contact-details .scd-heading{
    max-width:520px !important;

    margin:0 !important;

    color:var(--blue) !important;

    font-size:36px !important;
    font-weight:800 !important;

    line-height:1.16 !important;

    letter-spacing:-.9px !important;
}


#shivam-contact-details .scd-heading span{
    color:var(--green) !important;
}


/* INTRO */

#shivam-contact-details .scd-intro{
    max-width:620px !important;

    margin:0 !important;

    color:var(--text) !important;

    font-size:15px !important;
    font-weight:400 !important;

    line-height:1.72 !important;
}


/* =========================================================
   CONTACT GRID
========================================================= */

#shivam-contact-details .scd-grid{
    width:100% !important;

    display:grid !important;

    grid-template-columns:
        repeat(3,minmax(0,1fr)) !important;

    gap:16px !important;
}


/* =========================================================
   CARD
========================================================= */

#shivam-contact-details .scd-card{
    min-height:215px !important;

    padding:
        23px
        22px !important;

    position:relative !important;

    overflow:hidden !important;

    display:flex !important;

    flex-direction:column !important;

    justify-content:space-between !important;

    border-radius:11px !important;

    transition:
        transform .28s ease,
        box-shadow .28s ease,
        border-color .28s ease !important;
}


/* LIGHT */

#shivam-contact-details .scd-card-light{
    background:#FFFFFF !important;

    border:
        1px solid
        rgba(0,22,65,.10) !important;

    box-shadow:
        0 8px 22px
        rgba(0,22,65,.05) !important;
}


/* DARK CENTER */

#shivam-contact-details .scd-card-dark{
    background:
        linear-gradient(
            145deg,
            #001641 0%,
            #082A3F 70%,
            #12392E 100%
        ) !important;

    border:
        1px solid
        #001641 !important;

    box-shadow:
        0 13px 28px
        rgba(0,22,65,.13) !important;
}


/* HOVER */

#shivam-contact-details .scd-card:hover{
    transform:
        translateY(-4px) !important;
}


#shivam-contact-details .scd-card-light:hover{
    border-color:
        rgba(30,113,44,.35) !important;

    box-shadow:
        0 14px 30px
        rgba(0,22,65,.08) !important;
}


/* =========================================================
   TOP ACCENT
========================================================= */

#shivam-contact-details .scd-card::before{
    content:"" !important;

    position:absolute !important;

    top:0 !important;
    left:22px !important;

    width:42px !important;
    height:3px !important;

    border-radius:
        0
        0
        20px
        20px !important;

    background:var(--green) !important;
}


/* DARK DECORATION */

#shivam-contact-details
.scd-card-dark::after{
    content:"" !important;

    position:absolute !important;

    width:115px !important;
    height:115px !important;

    right:-55px !important;
    bottom:-55px !important;

    border-radius:50% !important;

    background:
        rgba(30,113,44,.16) !important;

    pointer-events:none !important;
}


/* =========================================================
   ICON
========================================================= */

#shivam-contact-details .scd-icon{
    width:46px !important;
    height:46px !important;

    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    margin-bottom:16px !important;

    border-radius:10px !important;

    font-size:18px !important;
}


/* LIGHT ICON */

#shivam-contact-details
.scd-card-light
.scd-icon{
    color:var(--green) !important;

    background:
        rgba(30,113,44,.07) !important;

    border:
        1px solid
        rgba(30,113,44,.18) !important;
}


/* DARK ICON */

#shivam-contact-details
.scd-card-dark
.scd-icon{
    color:#FFFFFF !important;

    background:var(--green) !important;

    border:
        1px solid
        rgba(255,255,255,.08) !important;
}


/* =========================================================
   SMALL LABEL
========================================================= */

#shivam-contact-details .scd-small{
    display:block !important;

    margin-bottom:6px !important;

    color:var(--green) !important;

    font-size:9px !important;
    font-weight:800 !important;

    letter-spacing:1.3px !important;

    text-transform:uppercase !important;
}


/* =========================================================
   CARD HEADING
========================================================= */

#shivam-contact-details .scd-card h3{
    margin:0 !important;

    font-size:19px !important;
    font-weight:800 !important;

    line-height:1.35 !important;
}


#shivam-contact-details
.scd-card-light h3{
    color:var(--blue) !important;
}


#shivam-contact-details
.scd-card-dark h3{
    color:#FFFFFF !important;
}


/* =========================================================
   CARD CONTENT
========================================================= */

#shivam-contact-details .scd-card p,
#shivam-contact-details .scd-card a{
    display:block !important;

    margin:
        9px
        0
        0 !important;

    font-size:14px !important;
    font-weight:500 !important;

    line-height:1.65 !important;

    text-decoration:none !important;
}


#shivam-contact-details
.scd-card-light p,
#shivam-contact-details
.scd-card-light a{
    color:#626D79 !important;
}


#shivam-contact-details
.scd-card-dark p,
#shivam-contact-details
.scd-card-dark a{
    color:
        rgba(255,255,255,.72) !important;
}


#shivam-contact-details .scd-card a:hover{
    color:#78C984 !important;
}


/* =========================================================
   BOTTOM LABEL
========================================================= */

#shivam-contact-details .scd-bottom{
    margin-top:20px !important;

    padding-top:14px !important;

    border-top:
        1px solid
        rgba(0,22,65,.08) !important;

    font-size:9px !important;
    font-weight:800 !important;

    letter-spacing:.8px !important;

    text-transform:uppercase !important;
}


#shivam-contact-details
.scd-card-light
.scd-bottom{
    color:rgba(0,22,65,.45) !important;
}


#shivam-contact-details
.scd-card-dark
.scd-bottom{
    color:#78C984 !important;

    border-top-color:
        rgba(255,255,255,.11) !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:900px){

    #shivam-contact-details{
        padding:
            43px
            18px
            46px !important;
    }


    #shivam-contact-details .scd-top{
        gap:34px !important;
    }


    #shivam-contact-details .scd-heading{
        font-size:32px !important;
    }


    #shivam-contact-details .scd-intro{
        font-size:14px !important;
    }


    #shivam-contact-details .scd-grid{
        grid-template-columns:
            repeat(2,minmax(0,1fr)) !important;
    }


    #shivam-contact-details .scd-card:last-child{
        grid-column:
            1 / -1 !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:650px){

    #shivam-contact-details{
        padding:
            38px
            14px
            41px !important;
    }


    #shivam-contact-details .scd-top{
        grid-template-columns:1fr !important;

        gap:12px !important;

        margin-bottom:22px !important;

        text-align:center !important;
    }


    #shivam-contact-details .scd-label{
        justify-content:center !important;

        font-size:9px !important;
    }


    #shivam-contact-details .scd-heading{
        max-width:100% !important;

        font-size:29px !important;

        line-height:1.18 !important;
    }


    #shivam-contact-details .scd-intro{
        max-width:520px !important;

        margin:0 auto !important;

        font-size:13.5px !important;

        line-height:1.65 !important;
    }


    #shivam-contact-details .scd-grid{
        grid-template-columns:1fr !important;

        gap:12px !important;
    }


    #shivam-contact-details .scd-card{
        min-height:auto !important;

        padding:
            21px
            18px !important;
    }


    #shivam-contact-details .scd-card::before{
        left:18px !important;
    }


    #shivam-contact-details .scd-icon{
        width:43px !important;
        height:43px !important;

        margin-bottom:14px !important;

        font-size:16px !important;
    }


    #shivam-contact-details .scd-card h3{
        font-size:18px !important;
    }


    #shivam-contact-details .scd-card p,
    #shivam-contact-details .scd-card a{
        font-size:13px !important;

        line-height:1.62 !important;
    }


    #shivam-contact-details .scd-bottom{
        margin-top:17px !important;

        padding-top:12px !important;

        font-size:8.5px !important;
    }

}

</style>


<section id="shivam-contact-details">

    <div class="scd-container">


        <!-- =================================================
             INTRO
        ================================================== -->

        <div class="scd-top">


            <div>

                <div class="scd-label">
                    Contact Information
                </div>


                <h2 class="scd-heading">
                    Connect with
                    <span>Shivam Uniform</span>
                </h2>

            </div>



            <p class="scd-intro">

                Have a uniform requirement for your school,
                organisation or professional team? Reach out to us
                with the basic details and our team will help you
                take the conversation forward.

            </p>


        </div>



        <!-- =================================================
             CONTACT CARDS
        ================================================== -->

        <div class="scd-grid">


            <!-- ADDRESS -->

            <article class="scd-card scd-card-light">

                <div>

                    <div class="scd-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>


                    <span class="scd-small">
                        Visit Us
                    </span>


                    <h3>
                        Shivam Uniform, Faridabad
                    </h3>


                    <p>
                        <?php echo htmlspecialchars($global_info['footer_address'] ?? ''); ?>
                    </p>

                </div>


                <div class="scd-bottom">
                    Business Location
                </div>

            </article>



            <!-- EMAIL -->

            <article class="scd-card scd-card-dark">

                <div>

                    <div class="scd-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>


                    <span class="scd-small">
                        Email Us
                    </span>


                    <h3>
                        Share Your Requirement
                    </h3>


                    <a href="mailto:shivamuniform605@gmail.com">
                        <?php echo htmlspecialchars($global_info['footer_email_1'] ?? ''); ?>
                    </a>


                    <p>
                        Send us your uniform category,
                        organisation type and the details
                        you would like to discuss.
                    </p>

                </div>


                <div class="scd-bottom">
                    Direct Email
                </div>

            </article>



            <!-- PHONE -->

            <article class="scd-card scd-card-light">

                <div>

                    <div class="scd-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>


                    <span class="scd-small">
                        Call Us
                    </span>


                    <h3>
                        Speak with Our Team
                    </h3>


                    <p>
                       <?php echo htmlspecialchars($global_info['globle_call_phone'] ?? ''); ?>
                    </p>


                    <p>
                        Connect directly to discuss your
                        school, corporate, industrial,
                        hospitality or service uniform needs.
                    </p>

                </div>


                <div class="scd-bottom">
                    Phone Contact
                </div>

            </article>


        </div>


    </div>

</section>