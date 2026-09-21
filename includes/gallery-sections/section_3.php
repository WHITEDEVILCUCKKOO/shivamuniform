<!-- =========================================================
     SHIVAM UNIFORM
     GALLERY PAGE - EQUAL IMAGE GRID
     20 IMAGES
     5 ROWS × 4 IMAGES
     CLEAN PREMIUM VERSION
     ELEMENTOR SAFE / RESPONSIVE

     BRAND COLORS:
     BLUE  : #001641
     GREEN : #1E712C
     WHITE : #FFFFFF
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>

/* =========================================================
   RESET
========================================================= */

#shivam-gallery-grid,
#shivam-gallery-grid *{
    box-sizing:border-box !important;
}

#shivam-gallery-grid{
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

#shivam-gallery-grid::before{
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


#shivam-gallery-grid::after{
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

#shivam-gallery-grid .sgg-container{
    width:100% !important;
    max-width:1160px !important;

    margin:0 auto !important;

    position:relative !important;
    z-index:2 !important;
}


/* =========================================================
   HEADER
========================================================= */

#shivam-gallery-grid .sgg-header{
    width:100% !important;

    display:flex !important;

    align-items:flex-end !important;
    justify-content:space-between !important;

    gap:38px !important;

    margin-bottom:24px !important;
}


#shivam-gallery-grid .sgg-left{
    max-width:640px !important;
}


/* LABEL */

#shivam-gallery-grid .sgg-label{
    display:inline-flex !important;

    align-items:center !important;

    gap:9px !important;

    margin-bottom:9px !important;

    color:var(--green) !important;

    font-size:10px !important;
    font-weight:800 !important;

    letter-spacing:1.5px !important;

    text-transform:uppercase !important;
}


#shivam-gallery-grid .sgg-label::before{
    content:"" !important;

    width:27px !important;
    height:2px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}


/* HEADING */

#shivam-gallery-grid .sgg-heading{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:36px !important;
    font-weight:800 !important;

    line-height:1.16 !important;

    letter-spacing:-.9px !important;
}


#shivam-gallery-grid .sgg-heading span{
    color:var(--green) !important;
}


/* DESCRIPTION */

#shivam-gallery-grid .sgg-text{
    max-width:440px !important;

    margin:0 !important;

    color:var(--text) !important;

    font-size:15px !important;

    line-height:1.68 !important;
}


/* =========================================================
   GRID
========================================================= */

#shivam-gallery-grid .sgg-grid{
    width:100% !important;

    display:grid !important;

    grid-template-columns:
        repeat(4,minmax(0,1fr)) !important;

    gap:13px !important;
}


/* =========================================================
   ITEM
========================================================= */

#shivam-gallery-grid .sgg-item{
    width:100% !important;

    aspect-ratio:1 / 1 !important;

    position:relative !important;

    overflow:hidden !important;

    border-radius:10px !important;

    background:var(--blue) !important;

    box-shadow:
        0 6px 18px
        rgba(0,22,65,.05) !important;

    cursor:pointer !important;

    transition:
        transform .3s ease,
        box-shadow .3s ease !important;
}


#shivam-gallery-grid .sgg-item:hover{
    transform:
        translateY(-3px) !important;

    box-shadow:
        0 12px 26px
        rgba(0,22,65,.10) !important;
}


/* IMAGE */

#shivam-gallery-grid .sgg-item img{
    width:100% !important;
    height:100% !important;

    display:block !important;

    object-fit:cover !important;
    object-position:center !important;

    transition:
        transform .5s ease,
        filter .5s ease !important;
}


/* OVERLAY */

#shivam-gallery-grid .sgg-item::after{
    content:"" !important;

    position:absolute !important;
    inset:0 !important;

    background:
        linear-gradient(
            180deg,
            rgba(0,22,65,0) 40%,
            rgba(0,22,65,.72) 100%
        ) !important;

    opacity:.82 !important;

    transition:
        opacity .3s ease !important;

    pointer-events:none !important;
}


/* GREEN BOTTOM LINE */

#shivam-gallery-grid .sgg-item::before{
    content:"" !important;

    position:absolute !important;

    left:0 !important;
    bottom:0 !important;

    width:0 !important;
    height:3px !important;

    background:var(--green) !important;

    z-index:4 !important;

    transition:
        width .3s ease !important;
}


/* HOVER */

#shivam-gallery-grid .sgg-item:hover img{
    transform:
        scale(1.055) !important;

    filter:
        brightness(.9) !important;
}


#shivam-gallery-grid .sgg-item:hover::before{
    width:100% !important;
}


#shivam-gallery-grid .sgg-item:hover::after{
    opacity:.96 !important;
}


/* =========================================================
   CAPTION
========================================================= */

#shivam-gallery-grid .sgg-caption{
    position:absolute !important;

    left:14px !important;
    right:14px !important;
    bottom:13px !important;

    z-index:5 !important;

    transform:
        translateY(3px) !important;

    transition:
        transform .3s ease !important;
}


#shivam-gallery-grid .sgg-item:hover .sgg-caption{
    transform:
        translateY(0) !important;
}


#shivam-gallery-grid .sgg-caption span{
    display:block !important;

    margin-bottom:3px !important;

    color:#84D08F !important;

    font-size:8.5px !important;
    font-weight:800 !important;

    letter-spacing:1px !important;

    text-transform:uppercase !important;
}


#shivam-gallery-grid .sgg-caption h3{
    margin:0 !important;

    color:#FFFFFF !important;

    font-size:14px !important;
    font-weight:800 !important;

    line-height:1.3 !important;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:950px){

    #shivam-gallery-grid{
        padding:
            38px
            18px
            42px !important;
    }


    #shivam-gallery-grid .sgg-heading{
        font-size:32px !important;
    }


    #shivam-gallery-grid .sgg-text{
        font-size:14px !important;
    }


    #shivam-gallery-grid .sgg-grid{
        grid-template-columns:
            repeat(2,minmax(0,1fr)) !important;

        gap:12px !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:600px){

    #shivam-gallery-grid{
        padding:
            34px
            14px
            38px !important;
    }


    #shivam-gallery-grid .sgg-header{
        display:block !important;

        text-align:center !important;

        margin-bottom:20px !important;
    }


    #shivam-gallery-grid .sgg-label{
        justify-content:center !important;

        font-size:9px !important;
    }


    #shivam-gallery-grid .sgg-label::before{
        width:20px !important;
    }


    #shivam-gallery-grid .sgg-heading{
        font-size:29px !important;

        line-height:1.18 !important;
    }


    #shivam-gallery-grid .sgg-text{
        max-width:500px !important;

        margin:
            10px
            auto
            0 !important;

        font-size:13.5px !important;

        line-height:1.65 !important;
    }


    #shivam-gallery-grid .sgg-grid{
        grid-template-columns:1fr !important;

        gap:11px !important;

        max-width:470px !important;

        margin:0 auto !important;
    }


    #shivam-gallery-grid .sgg-item{
        aspect-ratio:4 / 3 !important;

        border-radius:9px !important;
    }


    #shivam-gallery-grid .sgg-caption{
        left:13px !important;
        right:13px !important;
        bottom:12px !important;
    }


    #shivam-gallery-grid .sgg-caption h3{
        font-size:13.5px !important;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #shivam-gallery-grid .sgg-item,
    #shivam-gallery-grid .sgg-item img,
    #shivam-gallery-grid .sgg-item::before,
    #shivam-gallery-grid .sgg-caption{
        transition:none !important;
    }

}

</style>


<section id="shivam-gallery-grid">

    <div class="sgg-container">


        <!-- HEADER -->

        <div class="sgg-header">


            <div class="sgg-left">

                <div class="sgg-label">
                    Uniform Gallery
                </div>

                <h2 class="sgg-heading">
                    Explore Our
                    <span>Uniform Collection</span>
                </h2>

            </div>


            <p class="sgg-text">
                Browse uniform styles for schools, corporates,
                industries, hospitality, security teams and
                professional work environments.
            </p>


        </div>



        <!-- 20 IMAGE GRID -->

        <div class="sgg-grid">


            <!-- 01 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=700&q=88"
                    alt="School Uniform"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>School</span>
                    <h3>School Uniforms</h3>
                </div>

            </div>


            <!-- 02 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=700&q=88"
                    alt="Student Uniform"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>School</span>
                    <h3>Student Uniforms</h3>
                </div>

            </div>


            <!-- 03 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=700&q=88"
                    alt="Corporate Uniform"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>Corporate</span>
                    <h3>Corporate Teamwear</h3>
                </div>

            </div>


            <!-- 04 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=700&q=88"
                    alt="Professional Corporate Team"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>Corporate</span>
                    <h3>Professional Wear</h3>
                </div>

            </div>


            <!-- 05 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&w=700&q=88"
                    alt="Industrial Uniform"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>Industrial</span>
                    <h3>Industrial Workwear</h3>
                </div>

            </div>


            <!-- 06 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=700&q=88"
                    alt="Industrial Team Uniform"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>Industrial</span>
                    <h3>Workplace Uniforms</h3>
                </div>

            </div>


            <!-- 07 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=700&q=88"
                    alt="Hospitality Uniform"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>Hospitality</span>
                    <h3>Hotel Teamwear</h3>
                </div>

            </div>


            <!-- 08 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=700&q=88"
                    alt="Service Uniform"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>Service</span>
                    <h3>Service Uniforms</h3>
                </div>

            </div>


            <!-- 09 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&w=700&q=88"
                    alt="Housekeeping Uniform"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>Housekeeping</span>
                    <h3>Housekeeping Wear</h3>
                </div>

            </div>


            <!-- 10 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?auto=format&fit=crop&w=700&q=88"
                    alt="Industrial Workwear"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>Industrial</span>
                    <h3>Practical Workwear</h3>
                </div>

            </div>


            <!-- 11 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=700&q=88"
                    alt="Office Uniform"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>Corporate</span>
                    <h3>Office Uniforms</h3>
                </div>

            </div>


            <!-- 12 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=700&q=88"
                    alt="Team Uniform"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>Professional</span>
                    <h3>Team Uniforms</h3>
                </div>

            </div>


            <!-- 13 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1529390079861-591de354faf5?auto=format&fit=crop&w=700&q=88"
                    alt="Event Team Uniform"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>Events</span>
                    <h3>Event Teamwear</h3>
                </div>

            </div>


            <!-- 14 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=700&q=88"
                    alt="Coordinated Uniforms"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>Team</span>
                    <h3>Coordinated Uniforms</h3>
                </div>

            </div>


            <!-- 15 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=700&q=88"
                    alt="Restaurant Teamwear"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>Hospitality</span>
                    <h3>Restaurant Teamwear</h3>
                </div>

            </div>


            <!-- 16 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1556745757-8d76bdb6984b?auto=format&fit=crop&w=700&q=88"
                    alt="Front Desk Uniform"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>Service</span>
                    <h3>Front Desk Uniforms</h3>
                </div>

            </div>


            <!-- 17 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1568992687947-868a62a9f521?auto=format&fit=crop&w=700&q=88"
                    alt="Corporate Staff Uniform"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>Corporate</span>
                    <h3>Staff Uniforms</h3>
                </div>

            </div>


            <!-- 18 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=700&q=88"
                    alt="Professional Workplace Wear"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>Professional</span>
                    <h3>Workplace Wear</h3>
                </div>

            </div>


            <!-- 19 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=700&q=88"
                    alt="Professional Team Identity"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>Team</span>
                    <h3>Professional Identity</h3>
                </div>

            </div>


            <!-- 20 -->

            <div class="sgg-item">

                <img
                    src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=700&q=88"
                    alt="Custom Teamwear"
                    loading="lazy"
                >

                <div class="sgg-caption">
                    <span>Uniforms</span>
                    <h3>Custom Teamwear</h3>
                </div>

            </div>


        </div>

    </div>

</section>