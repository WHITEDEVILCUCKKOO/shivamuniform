<!-- =========================================================
     SHIVAM UNIFORM
     HOME PAGE - COUNTER SECTION
     COMPLETE FINAL VERSION

     FEATURES:
     - Premium Gradient Background
     - Brand Colors
     - Responsive
     - Counter Starts ONLY When User Reaches Section
     - Runs Only Once

     BRAND COLORS:
     Blue  : #001641
     Green : #1E712C
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">


<style>

/* =========================================================
   RESET
========================================================= */

#shivam-counter-section,
#shivam-counter-section *{
    box-sizing:border-box !important;
}


#shivam-counter-section{

    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;

    width:100% !important;

    margin:0 !important;

    padding:
        38px
        20px
        40px !important;

    position:relative !important;

    overflow:hidden !important;

    font-family:'Manrope',sans-serif !important;


    /* PREMIUM GRADIENT BACKGROUND */

    background:

        radial-gradient(
            circle at 82% 18%,
            rgba(30,113,44,.24) 0%,
            rgba(30,113,44,.09) 21%,
            transparent 44%
        ),

        radial-gradient(
            circle at 8% 90%,
            rgba(30,113,44,.11) 0%,
            transparent 32%
        ),

        linear-gradient(
            120deg,
            #001641 0%,
            #001A48 45%,
            #072A3C 72%,
            #123F32 100%
        ) !important;
}



/* =========================================================
   DECORATIVE CIRCLES
========================================================= */

#shivam-counter-section::before{

    content:"" !important;

    position:absolute !important;

    width:320px !important;
    height:320px !important;

    right:-175px !important;
    top:-190px !important;

    border-radius:50% !important;

    border:
        1px solid
        rgba(255,255,255,.06) !important;

    pointer-events:none !important;
}


#shivam-counter-section::after{

    content:"" !important;

    position:absolute !important;

    width:230px !important;
    height:230px !important;

    left:-145px !important;
    bottom:-155px !important;

    border-radius:50% !important;

    border:
        1px solid
        rgba(255,255,255,.04) !important;

    pointer-events:none !important;
}



/* =========================================================
   CONTAINER
========================================================= */

#shivam-counter-section .scounter-container{

    width:100% !important;

    max-width:1140px !important;

    margin:0 auto !important;

    position:relative !important;

    z-index:2 !important;
}



/* =========================================================
   HEADING AREA
========================================================= */

#shivam-counter-section .scounter-head{

    width:100% !important;

    max-width:700px !important;

    margin:
        0
        auto
        22px !important;

    text-align:center !important;
}



/* SMALL LABEL */

#shivam-counter-section .scounter-label{

    display:inline-flex !important;

    align-items:center !important;

    justify-content:center !important;

    gap:8px !important;

    margin:
        0
        0
        8px !important;

    color:#83CC8D !important;

    font-size:10px !important;

    font-weight:800 !important;

    line-height:1 !important;

    letter-spacing:1.5px !important;

    text-transform:uppercase !important;
}


#shivam-counter-section .scounter-label::before,
#shivam-counter-section .scounter-label::after{

    content:"" !important;

    width:21px !important;

    height:2px !important;

    border-radius:30px !important;

    background:#4D9F59 !important;
}



/* =========================================================
   HEADING
========================================================= */

#shivam-counter-section .scounter-heading{

    margin:0 !important;

    color:#FFFFFF !important;

    font-size:34px !important;

    font-weight:800 !important;

    line-height:1.17 !important;

    letter-spacing:-.9px !important;
}


#shivam-counter-section .scounter-heading span{

    color:#74C27F !important;
}



/* DESCRIPTION */

#shivam-counter-section .scounter-description{

    max-width:610px !important;

    margin:
        8px
        auto
        0 !important;

    color:
        rgba(255,255,255,.68) !important;

    font-size:13px !important;

    font-weight:400 !important;

    line-height:1.6 !important;
}



/* =========================================================
   COUNTER GRID
========================================================= */

#shivam-counter-section .scounter-grid{

    width:100% !important;

    display:grid !important;

    grid-template-columns:
        repeat(4,1fr) !important;

    border-top:
        1px solid
        rgba(255,255,255,.11) !important;

    border-bottom:
        1px solid
        rgba(255,255,255,.11) !important;
}



/* =========================================================
   COUNTER ITEM
========================================================= */

#shivam-counter-section .scounter-item{

    min-height:132px !important;

    position:relative !important;

    display:flex !important;

    flex-direction:column !important;

    align-items:center !important;

    justify-content:center !important;

    padding:
        17px
        16px !important;

    text-align:center !important;
}


#shivam-counter-section
.scounter-item:not(:last-child){

    border-right:
        1px solid
        rgba(255,255,255,.11) !important;
}



/* GREEN TOP ACCENT */

#shivam-counter-section
.scounter-item::before{

    content:"" !important;

    position:absolute !important;

    top:-1px !important;

    left:50% !important;

    transform:
        translateX(-50%) !important;

    width:32px !important;

    height:3px !important;

    border-radius:
        0
        0
        20px
        20px !important;

    background:#3F934C !important;
}



/* =========================================================
   NUMBER
========================================================= */

#shivam-counter-section
.scounter-number-row{

    display:flex !important;

    align-items:flex-end !important;

    justify-content:center !important;

    gap:2px !important;

    margin-bottom:6px !important;
}


#shivam-counter-section
.scounter-number{

    color:#FFFFFF !important;

    font-size:39px !important;

    font-weight:800 !important;

    line-height:1 !important;

    letter-spacing:-1.3px !important;
}


#shivam-counter-section
.scounter-suffix{

    color:#80C989 !important;

    font-size:21px !important;

    font-weight:800 !important;

    line-height:1.1 !important;
}



/* =========================================================
   TEXT
========================================================= */

#shivam-counter-section
.scounter-title{

    margin:0 !important;

    color:#FFFFFF !important;

    font-size:12.5px !important;

    font-weight:700 !important;

    line-height:1.35 !important;
}


#shivam-counter-section
.scounter-text{

    max-width:165px !important;

    margin:
        3px
        auto
        0 !important;

    color:
        rgba(255,255,255,.52) !important;

    font-size:10px !important;

    font-weight:400 !important;

    line-height:1.45 !important;
}



/* =========================================================
   BOTTOM NOTE
========================================================= */

#shivam-counter-section
.scounter-bottom{

    max-width:730px !important;

    margin:
        17px
        auto
        0 !important;

    text-align:center !important;

    color:
        rgba(255,255,255,.66) !important;

    font-size:11px !important;

    line-height:1.55 !important;
}


#shivam-counter-section
.scounter-bottom strong{

    color:#FFFFFF !important;
}



/* =========================================================
   TABLET
========================================================= */

@media(max-width:900px){

    #shivam-counter-section{

        padding:
            34px
            18px
            36px !important;
    }


    #shivam-counter-section
    .scounter-grid{

        grid-template-columns:
            repeat(2,1fr) !important;
    }


    #shivam-counter-section
    .scounter-item{

        min-height:125px !important;
    }


    #shivam-counter-section
    .scounter-item:nth-child(2){

        border-right:0 !important;
    }


    #shivam-counter-section
    .scounter-item:nth-child(1),
    #shivam-counter-section
    .scounter-item:nth-child(2){

        border-bottom:
            1px solid
            rgba(255,255,255,.11) !important;
    }


    #shivam-counter-section
    .scounter-heading{

        font-size:31px !important;
    }

}



/* =========================================================
   MOBILE
========================================================= */

@media(max-width:600px){

    #shivam-counter-section{

        padding:
            30px
            14px
            32px !important;
    }


    #shivam-counter-section
    .scounter-head{

        margin-bottom:19px !important;
    }


    #shivam-counter-section
    .scounter-label{

        margin-bottom:7px !important;

        font-size:9px !important;
    }


    #shivam-counter-section
    .scounter-label::before,
    #shivam-counter-section
    .scounter-label::after{

        width:16px !important;
    }


    #shivam-counter-section
    .scounter-heading{

        font-size:27px !important;

        line-height:1.2 !important;

        letter-spacing:-.5px !important;
    }


    #shivam-counter-section
    .scounter-description{

        margin-top:7px !important;

        font-size:12px !important;

        line-height:1.55 !important;
    }


    #shivam-counter-section
    .scounter-grid{

        grid-template-columns:
            repeat(2,1fr) !important;
    }


    #shivam-counter-section
    .scounter-item{

        min-height:112px !important;

        padding:
            14px
            8px !important;
    }


    #shivam-counter-section
    .scounter-number{

        font-size:31px !important;
    }


    #shivam-counter-section
    .scounter-suffix{

        font-size:17px !important;
    }


    #shivam-counter-section
    .scounter-title{

        font-size:11px !important;
    }


    #shivam-counter-section
    .scounter-text{

        max-width:135px !important;

        font-size:9px !important;

        line-height:1.4 !important;
    }


    #shivam-counter-section
    .scounter-bottom{

        margin-top:15px !important;

        font-size:10px !important;
    }

}



/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:370px){

    #shivam-counter-section
    .scounter-grid{

        grid-template-columns:1fr !important;
    }


    #shivam-counter-section
    .scounter-item{

        min-height:105px !important;

        border-right:0 !important;

        border-bottom:
            1px solid
            rgba(255,255,255,.11) !important;
    }


    #shivam-counter-section
    .scounter-item:last-child{

        border-bottom:0 !important;
    }

}

</style>



<section id="shivam-counter-section">

    <div class="scounter-container">


        <!-- =================================================
             HEADING
        ================================================== -->

        <div class="scounter-head">


            <div class="scounter-label">
                Shivam Uniform
            </div>


            <h2 class="scounter-heading">

                Built Around
                <span>
                    Reliable Uniform Solutions
                </span>

            </h2>


            <p class="scounter-description">

                Practical uniform solutions for schools,
                workplaces, industries and professional teams.

            </p>


        </div>



        <!-- =================================================
             COUNTERS
        ================================================== -->

        <div class="scounter-grid">


            <!-- =============================================
                 COUNTER 01
            ============================================== -->

            <div class="scounter-item">


                <div class="scounter-number-row">

                    <span
                        class="scounter-number"
                        data-target="7"
                    >
                        0
                    </span>


                    <span class="scounter-suffix">
                        +
                    </span>

                </div>


                <h3 class="scounter-title">
                    Uniform Categories
                </h3>


                <p class="scounter-text">
                    Solutions for different requirements.
                </p>


            </div>



            <!-- =============================================
                 COUNTER 02
            ============================================== -->

            <div class="scounter-item">


                <div class="scounter-number-row">

                    <span
                        class="scounter-number"
                        data-target="100"
                    >
                        0
                    </span>


                    <span class="scounter-suffix">
                        %
                    </span>

                </div>


                <h3 class="scounter-title">
                    Quality Focus
                </h3>


                <p class="scounter-text">
                    Comfort, finish and usability.
                </p>


            </div>



            <!-- =============================================
                 COUNTER 03
            ============================================== -->

            <div class="scounter-item">


                <div class="scounter-number-row">

                    <span
                        class="scounter-number"
                        data-target="6"
                    >
                        0
                    </span>


                    <span class="scounter-suffix">
                        +
                    </span>

                </div>


                <h3 class="scounter-title">
                    Sectors Served
                </h3>


                <p class="scounter-text">
                    From schools to workplaces.
                </p>


            </div>



            <!-- =============================================
                 COUNTER 04
            ============================================== -->

            <div class="scounter-item">


                <div class="scounter-number-row">

                    <span
                        class="scounter-number"
                        data-target="4"
                    >
                        0
                    </span>


                    <span class="scounter-suffix">
                        Step
                    </span>

                </div>


                <h3 class="scounter-title">
                    Simple Process
                </h3>


                <p class="scounter-text">
                    Requirement to final delivery.
                </p>


            </div>


        </div>



        <!-- =================================================
             BOTTOM NOTE
        ================================================== -->

        <div class="scounter-bottom">

            Need uniforms for your organisation?

            <strong>
                Share your requirement with Shivam Uniform.
            </strong>

        </div>


    </div>

</section>



<script>

(function(){


    /* =====================================================
       GET SECTION
    ===================================================== */

    const section =
        document.querySelector(
            '#shivam-counter-section'
        );


    if(!section){
        return;
    }



    /* =====================================================
       GET ALL COUNTERS
    ===================================================== */

    const counters =
        section.querySelectorAll(
            '.scounter-number'
        );


    let counterStarted = false;



    /* =====================================================
       SINGLE COUNTER ANIMATION
    ===================================================== */

    function runCounter(element){


        const target =
            Number(
                element.getAttribute(
                    'data-target'
                )
            );


        if(!Number.isFinite(target)){
            return;
        }


        /* Animation duration */

        const duration = 1700;


        let startTime = null;



        function animate(time){


            if(startTime === null){

                startTime = time;

            }


            const elapsed =
                time - startTime;


            const progress =
                Math.min(
                    elapsed / duration,
                    1
                );


            /*
             Smooth Ease-Out Animation
            */

            const easedProgress =
                1 -
                Math.pow(
                    1 - progress,
                    3
                );


            const currentValue =
                Math.floor(
                    target * easedProgress
                );


            element.textContent =
                currentValue.toLocaleString();



            if(progress < 1){


                requestAnimationFrame(
                    animate
                );


            }else{


                element.textContent =
                    target.toLocaleString();


            }


        }


        requestAnimationFrame(
            animate
        );

    }



    /* =====================================================
       START ALL COUNTERS
       ONLY ONCE
    ===================================================== */

    function startCounters(){


        if(counterStarted){
            return;
        }


        counterStarted = true;



        counters.forEach(
            function(counter,index){


                /*
                 Tiny delay between each counter
                 gives premium animation feel
                */

                setTimeout(
                    function(){


                        runCounter(
                            counter
                        );


                    },

                    index * 100

                );


            }
        );


    }



    /* =====================================================
       START ONLY WHEN USER REACHES THIS SECTION
    ===================================================== */

    if(
        'IntersectionObserver'
        in window
    ){


        const observer =
            new IntersectionObserver(


                function(
                    entries,
                    observerInstance
                ){


                    entries.forEach(
                        function(entry){


                            /*
                             IMPORTANT

                             Counter does NOT start on page load.

                             It starts only when:
                             - section enters viewport
                             - around 45% section is visible
                            */


                            if(
                                entry.isIntersecting &&
                                entry.intersectionRatio >= 0.45
                            ){


                                startCounters();


                                /*
                                 Stop observing after
                                 first successful animation
                                */

                                observerInstance.unobserve(
                                    section
                                );


                            }


                        }
                    );


                },


                {
                    threshold:[
                        0,
                        0.25,
                        0.45,
                        0.60
                    ],


                    /*
                     Prevent early animation
                     when section is still below screen
                    */

                    rootMargin:
                        "0px 0px -5% 0px"
                }


            );


        observer.observe(
            section
        );


    }else{


        /* =================================================
           FALLBACK FOR OLD BROWSERS
        ================================================= */


        function checkSection(){


            if(counterStarted){
                return;
            }


            const rect =
                section.getBoundingClientRect();


            const viewportHeight =
                window.innerHeight ||
                document.documentElement.clientHeight;



            /*
             Trigger when section reaches
             around lower-middle viewport
            */

            const triggerPoint =
                viewportHeight * 0.72;



            if(
                rect.top <= triggerPoint &&
                rect.bottom >= 0
            ){


                startCounters();


                window.removeEventListener(
                    'scroll',
                    checkSection
                );


                window.removeEventListener(
                    'resize',
                    checkSection
                );


            }


        }



        window.addEventListener(
            'scroll',
            checkSection,
            {
                passive:true
            }
        );


        window.addEventListener(
            'resize',
            checkSection
        );


        checkSection();


    }


})();

</script>