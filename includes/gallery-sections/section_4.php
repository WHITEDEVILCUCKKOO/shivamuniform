<!-- =========================================================
     SHIVAM UNIFORM
     GALLERY PAGE - SECTION 05
     VIDEO GALLERY
     6 VIDEO CARDS
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

#shivam-video-gallery,
#shivam-video-gallery *{
    box-sizing:border-box !important;
}

#shivam-video-gallery{
    --blue:#001641;
    --green:#1E712C;
    --white:#FFFFFF;
    --text:#D7DFE6;

    width:100% !important;
    margin:0 !important;

    padding:
        44px
        20px
        50px !important;

    position:relative !important;
    overflow:hidden !important;

    background:
        radial-gradient(
            circle at 92% 8%,
            rgba(30,113,44,.18) 0%,
            transparent 28%
        ),
        radial-gradient(
            circle at 8% 92%,
            rgba(255,255,255,.05) 0%,
            transparent 24%
        ),
        linear-gradient(
            135deg,
            #001641 0%,
            #001A47 52%,
            #0A2E3B 78%,
            #12392E 100%
        ) !important;

    font-family:'Manrope',sans-serif !important;
}


/* BACKGROUND DECORATION */

#shivam-video-gallery::before{
    content:"" !important;

    position:absolute !important;

    width:260px !important;
    height:260px !important;

    right:-145px !important;
    top:-150px !important;

    border-radius:50% !important;

    border:
        1px solid
        rgba(30,113,44,.18) !important;

    pointer-events:none !important;
}

#shivam-video-gallery::after{
    content:"" !important;

    position:absolute !important;

    width:180px !important;
    height:180px !important;

    left:-105px !important;
    bottom:-110px !important;

    border-radius:50% !important;

    background:
        rgba(30,113,44,.06) !important;

    pointer-events:none !important;
}


/* CONTAINER */

#shivam-video-gallery .svg-container{
    width:100% !important;
    max-width:1160px !important;

    margin:0 auto !important;

    position:relative !important;
    z-index:2 !important;
}


/* HEADER */

#shivam-video-gallery .svg-header{
    width:100% !important;

    display:grid !important;

    grid-template-columns:
        minmax(0,.95fr)
        minmax(0,1.05fr) !important;

    gap:45px !important;

    align-items:end !important;

    margin-bottom:24px !important;
}


#shivam-video-gallery .svg-label{
    display:inline-flex !important;

    align-items:center !important;

    gap:9px !important;

    margin-bottom:9px !important;

    color:#83CF8D !important;

    font-size:10px !important;
    font-weight:800 !important;

    letter-spacing:1.5px !important;

    text-transform:uppercase !important;
}


#shivam-video-gallery .svg-label::before{
    content:"" !important;

    width:27px !important;
    height:2px !important;

    border-radius:20px !important;

    background:var(--green) !important;
}


#shivam-video-gallery .svg-heading{
    margin:0 !important;

    color:#FFFFFF !important;

    font-size:36px !important;
    font-weight:800 !important;

    line-height:1.16 !important;

    letter-spacing:-.9px !important;
}


#shivam-video-gallery .svg-heading span{
    color:#82CF8D !important;
}


#shivam-video-gallery .svg-intro{
    max-width:570px !important;

    margin:0 !important;

    color:
        rgba(255,255,255,.70) !important;

    font-size:15px !important;

    line-height:1.68 !important;
}


/* GRID */

#shivam-video-gallery .svg-grid{
    width:100% !important;

    display:grid !important;

    grid-template-columns:
        repeat(3,minmax(0,1fr)) !important;

    gap:15px !important;
}


/* CARD */

#shivam-video-gallery .svg-card{
    width:100% !important;

    position:relative !important;
    overflow:hidden !important;

    background:#FFFFFF !important;

    border:
        1px solid
        rgba(255,255,255,.08) !important;

    border-radius:11px !important;

    box-shadow:
        0 8px 24px
        rgba(0,0,0,.08) !important;

    transition:
        transform .3s ease,
        box-shadow .3s ease !important;
}


#shivam-video-gallery .svg-card:hover{
    transform:
        translateY(-4px) !important;

    box-shadow:
        0 16px 32px
        rgba(0,0,0,.16) !important;
}


/* MEDIA */

#shivam-video-gallery .svg-media{
    width:100% !important;

    aspect-ratio:16 / 10 !important;

    position:relative !important;
    overflow:hidden !important;

    background:var(--blue) !important;
}


#shivam-video-gallery .svg-media img{
    width:100% !important;
    height:100% !important;

    display:block !important;

    object-fit:cover !important;

    transition:
        transform .55s ease,
        filter .55s ease !important;
}


#shivam-video-gallery .svg-card:hover .svg-media img{
    transform:
        scale(1.045) !important;

    filter:
        brightness(.84) !important;
}


/* OVERLAY */

#shivam-video-gallery .svg-media::after{
    content:"" !important;

    position:absolute !important;
    inset:0 !important;

    background:
        linear-gradient(
            180deg,
            rgba(0,22,65,.06),
            rgba(0,22,65,.42)
        ) !important;

    z-index:1 !important;
}


/* TAG */

#shivam-video-gallery .svg-tag{
    position:absolute !important;

    top:12px !important;
    left:12px !important;

    z-index:4 !important;

    display:inline-flex !important;

    align-items:center !important;

    gap:6px !important;

    padding:
        6px
        9px !important;

    border-radius:6px !important;

    background:
        rgba(0,22,65,.88) !important;

    color:#FFFFFF !important;

    font-size:8.5px !important;
    font-weight:800 !important;

    letter-spacing:.9px !important;

    text-transform:uppercase !important;
}


#shivam-video-gallery .svg-tag i{
    color:#83CF8D !important;
}


/* PLAY BUTTON */

#shivam-video-gallery .svg-play{
    width:54px !important;
    height:54px !important;

    position:absolute !important;

    left:50% !important;
    top:50% !important;

    transform:
        translate(-50%,-50%) !important;

    z-index:5 !important;

    display:flex !important;

    align-items:center !important;
    justify-content:center !important;

    border-radius:50% !important;

    background:var(--green) !important;

    color:#FFFFFF !important;

    font-size:16px !important;

    box-shadow:
        0 9px 24px
        rgba(0,0,0,.20) !important;

    transition:
        transform .25s ease,
        background .25s ease !important;
}


#shivam-video-gallery .svg-play i{
    margin-left:2px !important;
}


#shivam-video-gallery .svg-card:hover .svg-play{
    transform:
        translate(-50%,-50%)
        scale(1.08) !important;

    background:#FFFFFF !important;

    color:var(--green) !important;
}


/* CONTENT */

#shivam-video-gallery .svg-content{
    padding:
        16px
        17px
        18px !important;

    position:relative !important;
}


#shivam-video-gallery .svg-category{
    display:block !important;

    margin-bottom:4px !important;

    color:var(--green) !important;

    font-size:9px !important;
    font-weight:800 !important;

    letter-spacing:1.1px !important;

    text-transform:uppercase !important;
}


#shivam-video-gallery .svg-content h3{
    margin:0 !important;

    color:var(--blue) !important;

    font-size:17px !important;
    font-weight:800 !important;

    line-height:1.33 !important;
}


#shivam-video-gallery .svg-content p{
    margin:
        7px
        0
        0 !important;

    color:#66717C !important;

    font-size:12.8px !important;

    line-height:1.58 !important;
}


/* BOTTOM DETAIL */

#shivam-video-gallery .svg-content::after{
    content:"" !important;

    position:absolute !important;

    left:17px !important;
    bottom:0 !important;

    width:40px !important;
    height:3px !important;

    border-radius:
        20px
        20px
        0
        0 !important;

    background:var(--green) !important;

    transition:
        width .3s ease !important;
}


#shivam-video-gallery .svg-card:hover .svg-content::after{
    width:78px !important;
}


/* TABLET */

@media(max-width:950px){

    #shivam-video-gallery{
        padding:
            40px
            18px
            44px !important;
    }


    #shivam-video-gallery .svg-header{
        gap:30px !important;
    }


    #shivam-video-gallery .svg-heading{
        font-size:32px !important;
    }


    #shivam-video-gallery .svg-intro{
        font-size:14px !important;
    }


    #shivam-video-gallery .svg-grid{
        grid-template-columns:
            repeat(2,minmax(0,1fr)) !important;

        gap:14px !important;
    }

}


/* MOBILE */

@media(max-width:600px){

    #shivam-video-gallery{
        padding:
            34px
            14px
            40px !important;
    }


    #shivam-video-gallery .svg-header{
        grid-template-columns:1fr !important;

        gap:10px !important;

        margin-bottom:20px !important;

        text-align:center !important;
    }


    #shivam-video-gallery .svg-label{
        justify-content:center !important;

        font-size:9px !important;
    }


    #shivam-video-gallery .svg-label::before{
        width:20px !important;
    }


    #shivam-video-gallery .svg-heading{
        font-size:29px !important;

        line-height:1.18 !important;
    }


    #shivam-video-gallery .svg-intro{
        max-width:500px !important;

        margin:0 auto !important;

        font-size:13.5px !important;

        line-height:1.65 !important;
    }


    #shivam-video-gallery .svg-grid{
        grid-template-columns:1fr !important;

        gap:12px !important;

        max-width:470px !important;

        margin:0 auto !important;
    }


    #shivam-video-gallery .svg-play{
        width:50px !important;
        height:50px !important;

        font-size:15px !important;
    }


    #shivam-video-gallery .svg-content{
        padding:
            15px
            15px
            17px !important;
    }


    #shivam-video-gallery .svg-content h3{
        font-size:16px !important;
    }


    #shivam-video-gallery .svg-content p{
        font-size:12.5px !important;
    }


    #shivam-video-gallery .svg-content::after{
        left:15px !important;
    }

}


/* REDUCED MOTION */

@media(prefers-reduced-motion:reduce){

    #shivam-video-gallery .svg-card,
    #shivam-video-gallery .svg-media img,
    #shivam-video-gallery .svg-play,
    #shivam-video-gallery .svg-content::after{
        transition:none !important;
    }

}

</style>


<section id="shivam-video-gallery">

    <div class="svg-container">


        <!-- HEADER -->

        <div class="svg-header">

            <div>

                <div class="svg-label">
                    Video Gallery
                </div>


                <h2 class="svg-heading">

                    Watch Our

                    <span>
                        Uniform Showcase
                    </span>

                </h2>

            </div>


            <p class="svg-intro">

                Take a closer look at different uniform styles,
                team presentation, fabrics and finishing through
                our visual video gallery.

            </p>

        </div>



        <!-- GRID -->

        <div class="svg-grid">


            <!-- VIDEO 01 -->

            <article class="svg-card">

                <div class="svg-media">

                    <img
                        src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=900&q=88"
                        alt="School uniform video"
                        loading="lazy"
                    >

                    <div class="svg-tag">
                        <i class="fa-solid fa-video"></i>
                        Video
                    </div>

                    <div class="svg-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                </div>


                <div class="svg-content">

                    <span class="svg-category">
                        School Uniforms
                    </span>

                    <h3>
                        Everyday School Uniform Showcase
                    </h3>

                    <p>
                        A closer look at practical and well-presented
                        school uniforms for everyday student use.
                    </p>

                </div>

            </article>



            <!-- VIDEO 02 -->

            <article class="svg-card">

                <div class="svg-media">

                    <img
                        src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=900&q=88"
                        alt="Corporate uniform video"
                        loading="lazy"
                    >

                    <div class="svg-tag">
                        <i class="fa-solid fa-video"></i>
                        Video
                    </div>

                    <div class="svg-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                </div>


                <div class="svg-content">

                    <span class="svg-category">
                        Corporate
                    </span>

                    <h3>
                        Professional Corporate Teamwear
                    </h3>

                    <p>
                        Coordinated professional uniforms for
                        a clean and consistent workplace appearance.
                    </p>

                </div>

            </article>



            <!-- VIDEO 03 -->

            <article class="svg-card">

                <div class="svg-media">

                    <img
                        src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&w=900&q=88"
                        alt="Industrial uniform video"
                        loading="lazy"
                    >

                    <div class="svg-tag">
                        <i class="fa-solid fa-video"></i>
                        Video
                    </div>

                    <div class="svg-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                </div>


                <div class="svg-content">

                    <span class="svg-category">
                        Industrial
                    </span>

                    <h3>
                        Industrial Workwear Showcase
                    </h3>

                    <p>
                        Practical uniform presentation suited
                        to industrial and workplace environments.
                    </p>

                </div>

            </article>



            <!-- VIDEO 04 -->

            <article class="svg-card">

                <div class="svg-media">

                    <img
                        src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=900&q=88"
                        alt="Hospitality uniform video"
                        loading="lazy"
                    >

                    <div class="svg-tag">
                        <i class="fa-solid fa-video"></i>
                        Video
                    </div>

                    <div class="svg-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                </div>


                <div class="svg-content">

                    <span class="svg-category">
                        Hospitality
                    </span>

                    <h3>
                        Hospitality Team Presentation
                    </h3>

                    <p>
                        Smart uniform styling for hotel,
                        hospitality and guest-facing teams.
                    </p>

                </div>

            </article>



            <!-- VIDEO 05 -->

            <article class="svg-card">

                <div class="svg-media">

                    <img
                        src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&w=900&q=88"
                        alt="Housekeeping uniform video"
                        loading="lazy"
                    >

                    <div class="svg-tag">
                        <i class="fa-solid fa-video"></i>
                        Video
                    </div>

                    <div class="svg-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                </div>


                <div class="svg-content">

                    <span class="svg-category">
                        Housekeeping
                    </span>

                    <h3>
                        Service & Housekeeping Uniforms
                    </h3>

                    <p>
                        Practical and presentable uniforms
                        for housekeeping and service teams.
                    </p>

                </div>

            </article>



            <!-- VIDEO 06 -->

            <article class="svg-card">

                <div class="svg-media">

                    <img
                        src="https://images.unsplash.com/photo-1529390079861-591de354faf5?auto=format&fit=crop&w=900&q=88"
                        alt="Event uniform video"
                        loading="lazy"
                    >

                    <div class="svg-tag">
                        <i class="fa-solid fa-video"></i>
                        Video
                    </div>

                    <div class="svg-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                </div>


                <div class="svg-content">

                    <span class="svg-category">
                        Events
                    </span>

                    <h3>
                        Event Team Uniform Showcase
                    </h3>

                    <p>
                        Coordinated teamwear for organised
                        events and professional environments.
                    </p>

                </div>

            </article>


        </div>

    </div>

</section>