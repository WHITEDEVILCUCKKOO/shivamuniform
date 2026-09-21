<!-- =========================================================
     SHIVAM UNIFORM
     GALLERY PAGE - SECTION 02
     UNIFORM SHOWCASE GRID
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

#shivam-gallery-showcase,
#shivam-gallery-showcase *{
    box-sizing:border-box !important;
}

#shivam-gallery-showcase{
    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;
    --text:#65707C;

    width:100% !important;
    margin:0 !important;

    padding:
        42px
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

#shivam-gallery-showcase::before{
    content:"" !important;

    position:absolute !important;

    width:250px !important;
    height:250px !important;

    right:-145px !important;
    top:-150px !important;

    border-radius:50% !important;

    background:
        rgba(30,113,44,.045) !important;

    pointer-events:none !important;
}

#shivam-gallery-showcase::after{
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

#shivam-gallery-showcase .sgs-container{
    width:100% !important;
    max-width:1160px !important;

    margin:0 auto !important;

    position:relative !important;
    z-index:2 !important;
}


/* =========================================================
   HEADER
========================================================= */

#shivam-gallery-showcase .sgs-header{
    width:100% !important;

    display:grid !important;

    grid-template-columns:
        minmax(0,.92fr)
        minmax(0,1.08fr) !important;

    gap:44px !important;

    align-items:end !important;

    margin-bottom:24px !important;
}


#shivam-gallery-showcase .sgs-label{
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

    letter-spacing:1.5px !important;

    text-transform:uppercase !important;
}


#shivam-gallery-showcase .sgs-label::before{
    content:"" !important;

    width:27px !important;
    height:2px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}


#shivam-gallery-showcase .sgs-heading{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:36px !important;
    font-weight:800 !important;

    line-height:1.16 !important;

    letter-spacing:-.9px !important;
}


#shivam-gallery-showcase .sgs-heading span{
    color:var(--green) !important;
}


#shivam-gallery-showcase .sgs-intro{
    max-width:600px !important;

    margin:0 !important;

    color:var(--text) !important;

    font-size:15px !important;

    line-height:1.68 !important;
}


/* =========================================================
   EDITORIAL GRID
========================================================= */

#shivam-gallery-showcase .sgs-grid{
    width:100% !important;

    display:grid !important;

    grid-template-columns:
        1.18fr
        .82fr
        .82fr !important;

    grid-template-rows:
        235px
        235px !important;

    gap:13px !important;
}


/* =========================================================
   ITEM
========================================================= */

#shivam-gallery-showcase .sgs-item{
    position:relative !important;

    overflow:hidden !important;

    background:var(--blue) !important;

    border-radius:11px !important;

    box-shadow:
        0 8px 22px
        rgba(0,22,65,.06) !important;

    transition:
        transform .3s ease,
        box-shadow .3s ease !important;
}


#shivam-gallery-showcase .sgs-item:hover{
    transform:
        translateY(-3px) !important;

    box-shadow:
        0 14px 30px
        rgba(0,22,65,.10) !important;
}


#shivam-gallery-showcase .sgs-item:nth-child(1){
    grid-row:
        1 / 3 !important;
}


#shivam-gallery-showcase .sgs-item:nth-child(4){
    grid-column:
        2 / 4 !important;
}


/* IMAGE */

#shivam-gallery-showcase .sgs-item img{
    width:100% !important;
    height:100% !important;

    display:block !important;

    object-fit:cover !important;
    object-position:center !important;

    transition:
        transform .55s ease,
        filter .55s ease !important;
}


#shivam-gallery-showcase .sgs-item:hover img{
    transform:
        scale(1.045) !important;

    filter:
        brightness(.92) !important;
}


/* OVERLAY */

#shivam-gallery-showcase .sgs-item::after{
    content:"" !important;

    position:absolute !important;
    inset:0 !important;

    background:
        linear-gradient(
            180deg,
            rgba(0,22,65,.02) 30%,
            rgba(0,22,65,.76) 100%
        ) !important;

    pointer-events:none !important;
}


/* GREEN TOP ACCENT */

#shivam-gallery-showcase .sgs-item::before{
    content:"" !important;

    position:absolute !important;

    top:0 !important;
    left:0 !important;

    width:42px !important;
    height:3px !important;

    background:var(--green) !important;

    z-index:3 !important;

    transition:
        width .3s ease !important;
}


#shivam-gallery-showcase .sgs-item:hover::before{
    width:78px !important;
}


/* =========================================================
   ITEM CONTENT
========================================================= */

#shivam-gallery-showcase .sgs-content{
    position:absolute !important;

    left:18px !important;
    right:18px !important;
    bottom:16px !important;

    z-index:4 !important;
}


#shivam-gallery-showcase .sgs-content span{
    display:block !important;

    margin-bottom:4px !important;

    color:#85D08F !important;

    font-size:8.5px !important;
    font-weight:800 !important;

    letter-spacing:1.15px !important;

    text-transform:uppercase !important;
}


#shivam-gallery-showcase .sgs-content h3{
    margin:0 !important;

    color:#FFFFFF !important;

    font-size:18px !important;
    font-weight:800 !important;

    line-height:1.28 !important;
}


#shivam-gallery-showcase .sgs-content p{
    margin:
        5px
        0
        0 !important;

    max-width:360px !important;

    color:
        rgba(255,255,255,.72) !important;

    font-size:12px !important;

    line-height:1.52 !important;
}


/* LARGE FIRST ITEM */

#shivam-gallery-showcase
.sgs-item:nth-child(1)
.sgs-content{
    left:22px !important;
    right:22px !important;
    bottom:20px !important;
}


#shivam-gallery-showcase
.sgs-item:nth-child(1)
.sgs-content h3{
    font-size:24px !important;
}


#shivam-gallery-showcase
.sgs-item:nth-child(1)
.sgs-content p{
    font-size:13px !important;

    line-height:1.6 !important;
}


/* =========================================================
   BOTTOM NOTE
========================================================= */

#shivam-gallery-showcase .sgs-bottom{
    width:100% !important;

    display:grid !important;

    grid-template-columns:
        38px
        minmax(0,1fr) !important;

    gap:12px !important;

    align-items:start !important;

    margin-top:21px !important;

    padding-top:17px !important;

    border-top:
        1px solid
        rgba(0,22,65,.09) !important;
}


#shivam-gallery-showcase .sgs-bottom-icon{
    width:36px !important;
    height:36px !important;

    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    border-radius:9px !important;

    background:
        rgba(30,113,44,.07) !important;

    border:
        1px solid
        rgba(30,113,44,.15) !important;

    color:var(--green) !important;

    font-size:14px !important;
}


#shivam-gallery-showcase .sgs-bottom p{
    margin:0 !important;

    max-width:840px !important;

    color:var(--text) !important;

    font-size:13.5px !important;

    line-height:1.65 !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:950px){

    #shivam-gallery-showcase{
        padding:
            38px
            18px
            42px !important;
    }


    #shivam-gallery-showcase .sgs-header{
        gap:30px !important;
    }


    #shivam-gallery-showcase .sgs-heading{
        font-size:32px !important;
    }


    #shivam-gallery-showcase .sgs-intro{
        font-size:14px !important;
    }


    #shivam-gallery-showcase .sgs-grid{
        grid-template-columns:
            1fr
            1fr !important;

        grid-template-rows:
            300px
            205px
            205px !important;
    }


    #shivam-gallery-showcase .sgs-item:nth-child(1){
        grid-column:
            1 / 3 !important;

        grid-row:auto !important;
    }


    #shivam-gallery-showcase .sgs-item:nth-child(4){
        grid-column:auto !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:700px){

    #shivam-gallery-showcase{
        padding:
            34px
            14px
            38px !important;
    }


    #shivam-gallery-showcase .sgs-header{
        grid-template-columns:1fr !important;

        gap:10px !important;

        margin-bottom:20px !important;

        text-align:center !important;
    }


    #shivam-gallery-showcase .sgs-label{
        justify-content:center !important;

        font-size:9px !important;
    }


    #shivam-gallery-showcase .sgs-label::before{
        width:20px !important;
    }


    #shivam-gallery-showcase .sgs-heading{
        font-size:29px !important;

        line-height:1.18 !important;
    }


    #shivam-gallery-showcase .sgs-intro{
        max-width:500px !important;

        margin:0 auto !important;

        font-size:13.5px !important;

        line-height:1.65 !important;
    }


    #shivam-gallery-showcase .sgs-grid{
        display:grid !important;

        grid-template-columns:1fr !important;

        grid-template-rows:none !important;

        gap:11px !important;

        max-width:500px !important;

        margin:0 auto !important;
    }


    #shivam-gallery-showcase .sgs-item,
    #shivam-gallery-showcase .sgs-item:nth-child(1),
    #shivam-gallery-showcase .sgs-item:nth-child(4){
        grid-column:auto !important;
        grid-row:auto !important;

        height:235px !important;
    }


    #shivam-gallery-showcase .sgs-item:nth-child(1){
        height:285px !important;
    }


    #shivam-gallery-showcase .sgs-content{
        left:15px !important;
        right:15px !important;
        bottom:14px !important;
    }


    #shivam-gallery-showcase
    .sgs-item:nth-child(1)
    .sgs-content{
        left:17px !important;
        right:17px !important;
        bottom:16px !important;
    }


    #shivam-gallery-showcase
    .sgs-item:nth-child(1)
    .sgs-content h3{
        font-size:20px !important;
    }


    #shivam-gallery-showcase .sgs-content h3{
        font-size:16px !important;
    }


    #shivam-gallery-showcase .sgs-content p{
        font-size:11.8px !important;
    }


    #shivam-gallery-showcase .sgs-bottom{
        margin-top:18px !important;

        padding-top:15px !important;

        text-align:left !important;
    }


    #shivam-gallery-showcase .sgs-bottom p{
        font-size:12.5px !important;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #shivam-gallery-showcase .sgs-item,
    #shivam-gallery-showcase .sgs-item img,
    #shivam-gallery-showcase .sgs-item::before{
        transition:none !important;
    }

}

</style>


<section id="shivam-gallery-showcase">

    <div class="sgs-container">


        <!-- HEADER -->

        <div class="sgs-header">


            <div>

                <div class="sgs-label">
                    Uniform Showcase
                </div>


                <h2 class="sgs-heading">

                    Explore Our

                    <span>
                        Uniform Collection
                    </span>

                </h2>

            </div>


            <p class="sgs-intro">

                From classrooms and workplaces to hospitality,
                industrial and service environments, explore
                uniform solutions focused on comfort,
                practicality and professional presentation.

            </p>


        </div>



        <!-- SHOWCASE GRID -->

        <div class="sgs-grid">


            <!-- SCHOOL -->

            <article class="sgs-item">

                <img
                    src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1000&q=88"
                    alt="School uniforms"
                    loading="lazy"
                >


                <div class="sgs-content">

                    <span>
                        School Uniforms
                    </span>


                    <h3>
                        Smart, Comfortable & Ready for Everyday School Life
                    </h3>


                    <p>
                        Practical uniform solutions focused on comfort,
                        neat presentation and everyday student use.
                    </p>

                </div>

            </article>



            <!-- CORPORATE -->

            <article class="sgs-item">

                <img
                    src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=800&q=88"
                    alt="Corporate uniforms"
                    loading="lazy"
                >


                <div class="sgs-content">

                    <span>
                        Corporate
                    </span>

                    <h3>
                        Professional Teamwear
                    </h3>

                </div>

            </article>



            <!-- INDUSTRIAL -->

            <article class="sgs-item">

                <img
                    src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&w=800&q=88"
                    alt="Industrial uniforms"
                    loading="lazy"
                >


                <div class="sgs-content">

                    <span>
                        Industrial
                    </span>

                    <h3>
                        Practical Workwear
                    </h3>

                </div>

            </article>



            <!-- HOSPITALITY -->

            <article class="sgs-item">

                <img
                    src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1100&q=88"
                    alt="Hospitality uniforms"
                    loading="lazy"
                >


                <div class="sgs-content">

                    <span>
                        Hospitality & Service
                    </span>


                    <h3>
                        A Professional Look for Customer-Facing Teams
                    </h3>


                    <p>
                        Clean uniform styling for hospitality,
                        hotel and service environments.
                    </p>

                </div>

            </article>


        </div>



        <!-- BOTTOM NOTE -->

        <div class="sgs-bottom">


            <div class="sgs-bottom-icon">

                <i class="fa-solid fa-shirt"></i>

            </div>


            <p>

                Every organisation has different uniform needs.
                The final uniform can be discussed around the working
                environment, team requirements, fabric preference,
                fitting and overall professional appearance.

            </p>


        </div>


    </div>

</section>