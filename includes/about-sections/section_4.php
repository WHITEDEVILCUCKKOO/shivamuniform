<!-- =========================================================
     SHIVAM UNIFORM
     ABOUT US PAGE - SECTION 04
     WHO WE SERVE
     CLEAN LEFT CONTENT + RIGHT LIST
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

#shivam-who-we-serve,
#shivam-who-we-serve *{
    box-sizing:border-box !important;
}

#shivam-who-we-serve{
    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;
    --light:#F7F9FB;
    --text:#65707C;
    --border:#E3E8EC;

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

#shivam-who-we-serve::before{
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


#shivam-who-we-serve::after{
    content:"" !important;

    position:absolute !important;

    width:170px !important;
    height:170px !important;

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

#shivam-who-we-serve .sws-container{
    width:100% !important;

    max-width:1160px !important;

    margin:0 auto !important;

    display:grid !important;

    grid-template-columns:
        minmax(290px,.80fr)
        minmax(0,1.20fr) !important;

    gap:48px !important;

    align-items:center !important;

    position:relative !important;

    z-index:2 !important;
}


/* =========================================================
   LEFT SIDE
========================================================= */

#shivam-who-we-serve .sws-left{
    width:100% !important;

    display:flex !important;

    flex-direction:column !important;

    align-items:flex-start !important;

    justify-content:center !important;

    text-align:left !important;
}


/* =========================================================
   LABEL
========================================================= */

#shivam-who-we-serve .sws-label{
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


#shivam-who-we-serve .sws-label::before{
    content:"" !important;

    width:27px !important;

    height:2px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}


/* =========================================================
   HEADING
========================================================= */

#shivam-who-we-serve .sws-heading{
    width:100% !important;

    max-width:490px !important;

    margin:0 !important;

    color:var(--blue) !important;

    font-size:36px !important;

    font-weight:800 !important;

    line-height:1.16 !important;

    letter-spacing:-.9px !important;
}


#shivam-who-we-serve .sws-heading span{
    display:block !important;

    color:var(--green) !important;
}


/* =========================================================
   DESCRIPTION
========================================================= */

#shivam-who-we-serve .sws-description{
    width:100% !important;

    max-width:480px !important;

    margin:
        13px
        0
        0 !important;

    color:var(--text) !important;

    font-size:15px !important;

    font-weight:400 !important;

    line-height:1.7 !important;
}


/* =========================================================
   SMALL ACCENT
========================================================= */

#shivam-who-we-serve .sws-accent{
    display:flex !important;

    align-items:center !important;

    gap:8px !important;

    margin-top:18px !important;
}


#shivam-who-we-serve .sws-accent-dot{
    width:7px !important;

    height:7px !important;

    border-radius:50% !important;

    background:var(--green) !important;
}


#shivam-who-we-serve .sws-accent-line{
    width:48px !important;

    height:1px !important;

    background:
        rgba(0,22,65,.18) !important;
}


/* =========================================================
   NOTE BOX
========================================================= */

#shivam-who-we-serve .sws-note{
    width:100% !important;

    max-width:445px !important;

    margin-top:19px !important;

    padding:
        15px
        17px !important;

    position:relative !important;

    overflow:hidden !important;

    background:
        linear-gradient(
            145deg,
            #001641 0%,
            #082A3F 72%,
            #12392E 100%
        ) !important;

    border-left:
        3px solid
        var(--green) !important;

    border-radius:
        0
        8px
        8px
        0 !important;

    box-shadow:
        0 10px 24px
        rgba(0,22,65,.10) !important;
}


#shivam-who-we-serve .sws-note::after{
    content:"" !important;

    position:absolute !important;

    width:90px !important;
    height:90px !important;

    right:-42px !important;
    bottom:-46px !important;

    border-radius:50% !important;

    background:
        rgba(30,113,44,.13) !important;

    pointer-events:none !important;
}


#shivam-who-we-serve .sws-note p{
    margin:0 !important;

    position:relative !important;

    z-index:2 !important;

    color:
        rgba(255,255,255,.80) !important;

    font-size:13px !important;

    font-weight:500 !important;

    line-height:1.62 !important;
}


/* =========================================================
   RIGHT LIST
========================================================= */

#shivam-who-we-serve .sws-list{
    width:100% !important;

    background:#FFFFFF !important;

    border:
        1px solid
        rgba(0,22,65,.08) !important;

    border-radius:12px !important;

    overflow:hidden !important;

    box-shadow:
        0 10px 28px
        rgba(0,22,65,.05) !important;
}


/* =========================================================
   ITEM
========================================================= */

#shivam-who-we-serve .sws-item{
    width:100% !important;

    display:grid !important;

    grid-template-columns:
        48px
        minmax(0,1fr)
        auto !important;

    align-items:center !important;

    gap:14px !important;

    padding:
        15px
        18px !important;

    border-bottom:
        1px solid
        rgba(0,22,65,.075) !important;

    transition:
        background .25s ease,
        padding-left .25s ease !important;
}


#shivam-who-we-serve .sws-item:last-child{
    border-bottom:0 !important;
}


#shivam-who-we-serve .sws-item:hover{
    padding-left:22px !important;

    background:
        rgba(30,113,44,.035) !important;
}


/* =========================================================
   ICON
========================================================= */

#shivam-who-we-serve .sws-icon{
    width:42px !important;

    height:42px !important;

    display:flex !important;

    align-items:center !important;

    justify-content:center !important;

    border-radius:10px !important;

    color:var(--green) !important;

    background:
        rgba(30,113,44,.07) !important;

    border:
        1px solid
        rgba(30,113,44,.16) !important;

    font-size:16px !important;

    transition:
        background .25s ease,
        color .25s ease !important;
}


#shivam-who-we-serve .sws-item:hover .sws-icon{
    background:var(--green) !important;

    color:#FFFFFF !important;
}


/* =========================================================
   ITEM HEADING
========================================================= */

#shivam-who-we-serve .sws-item h3{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:16px !important;

    font-weight:800 !important;

    line-height:1.35 !important;
}


/* =========================================================
   ITEM PARAGRAPH
========================================================= */

#shivam-who-we-serve .sws-item p{
    margin:
        4px
        0
        0 !important;

    color:var(--text) !important;

    font-size:12.5px !important;

    line-height:1.55 !important;
}


/* =========================================================
   RIGHT CATEGORY
========================================================= */

#shivam-who-we-serve .sws-end{
    min-width:84px !important;

    display:flex !important;

    align-items:center !important;

    justify-content:flex-end !important;

    gap:7px !important;

    color:
        rgba(0,22,65,.52) !important;

    font-size:8.5px !important;

    font-weight:800 !important;

    letter-spacing:.9px !important;

    text-transform:uppercase !important;
}


#shivam-who-we-serve .sws-end::after{
    content:"" !important;

    width:20px !important;

    height:2px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:950px){

    #shivam-who-we-serve{
        padding:
            40px
            18px
            44px !important;
    }


    #shivam-who-we-serve .sws-container{
        grid-template-columns:
            minmax(250px,.78fr)
            minmax(0,1.22fr) !important;

        gap:34px !important;
    }


    #shivam-who-we-serve .sws-heading{
        font-size:32px !important;
    }


    #shivam-who-we-serve .sws-description{
        font-size:14px !important;
    }


    #shivam-who-we-serve .sws-item{
        grid-template-columns:
            45px
            minmax(0,1fr) !important;
    }


    #shivam-who-we-serve .sws-end{
        display:none !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:700px){

    #shivam-who-we-serve{
        padding:
            36px
            14px
            40px !important;
    }


    #shivam-who-we-serve .sws-container{
        grid-template-columns:1fr !important;

        gap:24px !important;
    }


    #shivam-who-we-serve .sws-left{
        align-items:center !important;

        text-align:center !important;
    }


    #shivam-who-we-serve .sws-label{
        justify-content:center !important;

        font-size:9px !important;
    }


    #shivam-who-we-serve .sws-label::before{
        width:20px !important;
    }


    #shivam-who-we-serve .sws-heading{
        max-width:520px !important;

        font-size:29px !important;

        line-height:1.18 !important;
    }


    #shivam-who-we-serve .sws-description{
        max-width:500px !important;

        margin-top:11px !important;

        font-size:13.5px !important;

        line-height:1.65 !important;
    }


    #shivam-who-we-serve .sws-accent{
        justify-content:center !important;

        margin-top:15px !important;
    }


    #shivam-who-we-serve .sws-note{
        max-width:500px !important;

        margin-top:16px !important;

        padding:
            14px
            15px !important;

        border-left:0 !important;

        border-top:
            3px solid
            var(--green) !important;

        border-radius:
            0
            0
            8px
            8px !important;
    }


    #shivam-who-we-serve .sws-note p{
        font-size:12.5px !important;

        text-align:center !important;
    }


    #shivam-who-we-serve .sws-list{
        max-width:520px !important;

        margin:0 auto !important;
    }


    #shivam-who-we-serve .sws-item{
        grid-template-columns:
            42px
            minmax(0,1fr) !important;

        gap:11px !important;

        padding:
            14px
            13px !important;

        text-align:left !important;
    }


    #shivam-who-we-serve .sws-item:hover{
        padding-left:16px !important;
    }


    #shivam-who-we-serve .sws-icon{
        width:38px !important;

        height:38px !important;

        font-size:15px !important;
    }


    #shivam-who-we-serve .sws-item h3{
        font-size:15px !important;
    }


    #shivam-who-we-serve .sws-item p{
        font-size:12px !important;
    }

}

</style>


<section id="shivam-who-we-serve">

    <div class="sws-container">


        <!-- =================================================
             LEFT CONTENT
        ================================================== -->

        <div class="sws-left">


            <div class="sws-label">
                Who We Serve
            </div>


            <h2 class="sws-heading">

                Uniform Solutions for

                <span>
                    Different Teams & Environments
                </span>

            </h2>


            <p class="sws-description">

                Different organisations have different uniform needs.
                We consider where the uniform will be worn, how it will
                be used and the professional appearance the team needs.

            </p>


            <div class="sws-accent">

                <span class="sws-accent-dot"></span>

                <span class="sws-accent-line"></span>

            </div>


            <div class="sws-note">

                <p>

                    From school uniforms to workplace and service uniforms,
                    our focus stays on comfort, practicality and a neat
                    professional appearance.

                </p>

            </div>


        </div>



        <!-- =================================================
             RIGHT LIST
        ================================================== -->

        <div class="sws-list">


            <!-- SCHOOL -->

            <div class="sws-item">


                <div class="sws-icon">

                    <i class="fa-solid fa-graduation-cap"></i>

                </div>


                <div>

                    <h3>
                        Schools & Educational Institutions
                    </h3>

                    <p>
                        Practical and comfortable uniforms for everyday student use.
                    </p>

                </div>


                <div class="sws-end">
                    School
                </div>


            </div>



            <!-- CORPORATE -->

            <div class="sws-item">


                <div class="sws-icon">

                    <i class="fa-solid fa-briefcase"></i>

                </div>


                <div>

                    <h3>
                        Corporate Teams
                    </h3>

                    <p>
                        Clean professional uniforms for an organised workplace appearance.
                    </p>

                </div>


                <div class="sws-end">
                    Corporate
                </div>


            </div>



            <!-- INDUSTRIAL -->

            <div class="sws-item">


                <div class="sws-icon">

                    <i class="fa-solid fa-industry"></i>

                </div>


                <div>

                    <h3>
                        Industrial Workplaces
                    </h3>

                    <p>
                        Uniform solutions suited to practical workplace requirements.
                    </p>

                </div>


                <div class="sws-end">
                    Industry
                </div>


            </div>



            <!-- HOSPITALITY -->

            <div class="sws-item">


                <div class="sws-icon">

                    <i class="fa-solid fa-bell-concierge"></i>

                </div>


                <div>

                    <h3>
                        Hotels & Hospitality
                    </h3>

                    <p>
                        Smart uniforms that support a neat hospitality presentation.
                    </p>

                </div>


                <div class="sws-end">
                    Hospitality
                </div>


            </div>



            <!-- SECURITY -->

            <div class="sws-item">


                <div class="sws-icon">

                    <i class="fa-solid fa-shield-halved"></i>

                </div>


                <div>

                    <h3>
                        Security & Service Teams
                    </h3>

                    <p>
                        Professional uniforms for security and service environments.
                    </p>

                </div>


                <div class="sws-end">
                    Service
                </div>


            </div>



            <!-- EVENTS -->

            <div class="sws-item">


                <div class="sws-icon">

                    <i class="fa-solid fa-calendar-check"></i>

                </div>


                <div>

                    <h3>
                        Events & Special Requirements
                    </h3>

                    <p>
                        Uniform solutions based on team needs and event presentation.
                    </p>

                </div>


                <div class="sws-end">
                    Events
                </div>


            </div>


        </div>


    </div>

</section>