<!-- =========================================================
     SHIVAM UNIFORM
     HOME PAGE - SECTION 05
     SIMPLE WORK PROCESS
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

#shivam-process-section,
#shivam-process-section *{
    box-sizing:border-box !important;
}

#shivam-process-section{
    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;
    --light:#F7F9FB;
    --text:#666E7A;
    --border:#E5E9EE;

    width:100% !important;
    margin:0 !important;

    padding:52px 20px 56px !important;

    background:#F7F9FB !important;

    font-family:'Manrope',sans-serif !important;

    position:relative !important;
    overflow:hidden !important;
}

#shivam-process-section .sps-container{
    width:100% !important;
    max-width:1140px !important;

    margin:0 auto !important;

    position:relative !important;
    z-index:2 !important;
}


/* =========================================================
   HEADING
========================================================= */

#shivam-process-section .sps-head{
    width:100% !important;
    max-width:720px !important;

    margin:0 auto 32px !important;

    text-align:center !important;
}

#shivam-process-section .sps-label{
    display:inline-flex !important;

    align-items:center !important;
    justify-content:center !important;

    gap:8px !important;

    margin:0 0 10px !important;

    color:var(--green) !important;

    font-size:10.5px !important;
    font-weight:800 !important;

    letter-spacing:1.6px !important;
    text-transform:uppercase !important;
}

#shivam-process-section .sps-label::before,
#shivam-process-section .sps-label::after{
    content:"" !important;

    width:24px !important;
    height:2px !important;

    border-radius:30px !important;

    background:var(--green) !important;
}

#shivam-process-section .sps-heading{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:38px !important;
    font-weight:800 !important;

    line-height:1.18 !important;

    letter-spacing:-1.1px !important;
}

#shivam-process-section .sps-heading span{
    color:var(--green) !important;
}

#shivam-process-section .sps-description{
    max-width:630px !important;

    margin:11px auto 0 !important;

    color:var(--text) !important;

    font-size:14px !important;
    line-height:1.65 !important;
}


/* =========================================================
   PROCESS WRAP
========================================================= */

#shivam-process-section .sps-process{
    width:100% !important;

    display:grid !important;
    grid-template-columns:repeat(4,1fr) !important;

    gap:0 !important;

    position:relative !important;
}


/* center line */

#shivam-process-section .sps-process::before{
    content:"" !important;

    position:absolute !important;

    left:12% !important;
    right:12% !important;
    top:31px !important;

    height:1px !important;

    background:#D7DDE4 !important;

    z-index:0 !important;
}


/* =========================================================
   STEP
========================================================= */

#shivam-process-section .sps-step{
    position:relative !important;

    z-index:2 !important;

    text-align:center !important;

    padding:0 18px !important;
}


/* ICON CIRCLE */

#shivam-process-section .sps-icon{
    width:62px !important;
    height:62px !important;

    margin:0 auto 17px !important;

    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    border-radius:50% !important;

    background:#FFFFFF !important;

    border:1px solid #DDE2E8 !important;

    color:var(--blue) !important;

    box-shadow:
        0 7px 18px
        rgba(0,22,65,.06) !important;

    position:relative !important;

    transition:
        transform .3s ease,
        background .3s ease,
        color .3s ease,
        border-color .3s ease !important;
}

#shivam-process-section .sps-step:hover .sps-icon{
    transform:translateY(-4px) !important;

    background:var(--green) !important;

    color:#FFFFFF !important;

    border-color:var(--green) !important;
}

#shivam-process-section .sps-icon svg{
    width:25px !important;
    height:25px !important;
}


/* NUMBER */

#shivam-process-section .sps-number{
    position:absolute !important;

    right:-3px !important;
    top:-3px !important;

    width:22px !important;
    height:22px !important;

    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    border-radius:50% !important;

    background:var(--blue) !important;

    color:#FFFFFF !important;

    border:2px solid #F7F9FB !important;

    font-size:8px !important;
    font-weight:800 !important;
}


/* TEXT */

#shivam-process-section .sps-step h3{
    margin:0 0 6px !important;

    color:var(--blue) !important;

    font-size:15px !important;
    font-weight:700 !important;

    line-height:1.35 !important;
}

#shivam-process-section .sps-step p{
    max-width:220px !important;

    margin:0 auto !important;

    color:#7A828E !important;

    font-size:12px !important;
    line-height:1.55 !important;
}


/* =========================================================
   BOTTOM NOTE
========================================================= */

#shivam-process-section .sps-note{
    max-width:760px !important;

    margin:30px auto 0 !important;

    padding:15px 18px !important;

    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    gap:9px !important;

    border-radius:7px !important;

    background:#FFFFFF !important;

    border:1px solid var(--border) !important;

    color:#69717C !important;

    font-size:12px !important;

    text-align:center !important;
}

#shivam-process-section .sps-note strong{
    color:var(--blue) !important;
}

#shivam-process-section .sps-note-dot{
    width:7px !important;
    height:7px !important;

    flex:0 0 7px !important;

    border-radius:50% !important;

    background:var(--green) !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:900px){

    #shivam-process-section{
        padding:46px 18px 50px !important;
    }

    #shivam-process-section .sps-process{
        grid-template-columns:repeat(2,1fr) !important;

        gap:28px 10px !important;
    }

    #shivam-process-section .sps-process::before{
        display:none !important;
    }

    #shivam-process-section .sps-heading{
        font-size:34px !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:600px){

    #shivam-process-section{
        padding:40px 14px 44px !important;
    }

    #shivam-process-section .sps-head{
        margin-bottom:25px !important;
    }

    #shivam-process-section .sps-label{
        font-size:9.5px !important;
    }

    #shivam-process-section .sps-label::before,
    #shivam-process-section .sps-label::after{
        width:18px !important;
    }

    #shivam-process-section .sps-heading{
        font-size:29px !important;

        line-height:1.2 !important;

        letter-spacing:-.6px !important;
    }

    #shivam-process-section .sps-description{
        margin-top:9px !important;

        font-size:13.2px !important;
        line-height:1.6 !important;
    }

    #shivam-process-section .sps-process{
        grid-template-columns:1fr 1fr !important;

        gap:24px 8px !important;
    }

    #shivam-process-section .sps-step{
        padding:0 7px !important;
    }

    #shivam-process-section .sps-icon{
        width:54px !important;
        height:54px !important;

        margin-bottom:13px !important;
    }

    #shivam-process-section .sps-icon svg{
        width:21px !important;
        height:21px !important;
    }

    #shivam-process-section .sps-number{
        width:20px !important;
        height:20px !important;

        font-size:7px !important;
    }

    #shivam-process-section .sps-step h3{
        font-size:13px !important;
    }

    #shivam-process-section .sps-step p{
        font-size:10.8px !important;
        line-height:1.5 !important;
    }

    #shivam-process-section .sps-note{
        margin-top:24px !important;

        padding:13px 14px !important;

        font-size:10.8px !important;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:380px){

    #shivam-process-section .sps-process{
        grid-template-columns:1fr !important;

        gap:22px !important;
    }

    #shivam-process-section .sps-step p{
        max-width:250px !important;
    }

}

</style>


<section id="shivam-process-section">

    <div class="sps-container">


        <!-- HEADING -->

        <div class="sps-head">

            <div class="sps-label">
                Our Process
            </div>

            <h2 class="sps-heading">
                From Requirement to
                <span>Ready Uniforms</span>
            </h2>

            <p class="sps-description">
                A simple process to understand your uniform requirement
                and deliver the right solution for your team or institution.
            </p>

        </div>



        <!-- PROCESS -->

        <div class="sps-process">


            <!-- STEP 01 -->

            <div class="sps-step">

                <div class="sps-icon">

                    <span class="sps-number">01</span>

                    <svg viewBox="0 0 24 24" fill="none">
                        <path
                            d="M5 6H19V17H9L5 20V6Z"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M8 10H16M8 13H13"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round"
                        />
                    </svg>

                </div>

                <h3>
                    Share Your Requirement
                </h3>

                <p>
                    Tell us the category, quantity and basic uniform needs.
                </p>

            </div>



            <!-- STEP 02 -->

            <div class="sps-step">

                <div class="sps-icon">

                    <span class="sps-number">02</span>

                    <svg viewBox="0 0 24 24" fill="none">
                        <path
                            d="M7 4L4 7L7 11L9 9V20H15V9L17 11L20 7L17 4L14.5 6H9.5L7 4Z"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linejoin="round"
                        />
                    </svg>

                </div>

                <h3>
                    Fabric &amp; Style
                </h3>

                <p>
                    Suitable fabric and uniform style are selected for the requirement.
                </p>

            </div>



            <!-- STEP 03 -->

            <div class="sps-step">

                <div class="sps-icon">

                    <span class="sps-number">03</span>

                    <svg viewBox="0 0 24 24" fill="none">
                        <path
                            d="M6 5H18V19H6V5Z"
                            stroke="currentColor"
                            stroke-width="1.7"
                        />
                        <path
                            d="M9 9H15M9 13H15M9 17H13"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round"
                        />
                    </svg>

                </div>

                <h3>
                    Production
                </h3>

                <p>
                    Uniforms are prepared with attention to stitching and finish.
                </p>

            </div>



            <!-- STEP 04 -->

            <div class="sps-step">

                <div class="sps-icon">

                    <span class="sps-number">04</span>

                    <svg viewBox="0 0 24 24" fill="none">
                        <path
                            d="M3 7H15V17H3V7Z"
                            stroke="currentColor"
                            stroke-width="1.7"
                        />
                        <path
                            d="M15 10H19L21 13V17H15V10Z"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linejoin="round"
                        />
                        <circle
                            cx="7"
                            cy="18"
                            r="2"
                            stroke="currentColor"
                            stroke-width="1.7"
                        />
                        <circle
                            cx="18"
                            cy="18"
                            r="2"
                            stroke="currentColor"
                            stroke-width="1.7"
                        />
                    </svg>

                </div>

                <h3>
                    Final Delivery
                </h3>

                <p>
                    Finished uniforms are prepared for your organisation or team.
                </p>

            </div>


        </div>



        <!-- SIMPLE BOTTOM NOTE -->

        <div class="sps-note">

            <span class="sps-note-dot"></span>

            <span>
                Looking for uniforms for your institution?
                <strong>Contact Shivam Uniform with your requirement.</strong>
            </span>

        </div>


    </div>

</section>