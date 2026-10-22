
<style>
    .uniform-col-wrapper {
        font-family: 'Inter', sans-serif;
        box-sizing: border-box;
        background: #f8fafc;
        color: #1e293b;
        padding: 3rem 1rem;
        width: 100%;
        overflow: hidden;
    }

    .uniform-col-wrapper *,
    .uniform-col-wrapper *::before,
    .uniform-col-wrapper *::after {
        box-sizing: border-box;
    }

    .uniform-col-container {
        max-width: 1280px;
        width: 100%;
        margin: 0 auto;
    }

    .uniform-col-header-row {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin-bottom: 2rem;
        gap: 1.25rem;
    }

    .uniform-col-badge-group {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 0.5rem;
    }

    .uniform-col-badge-line {
        width: 1.75rem;
        height: 2px;
        background: #059669;
        border-radius: 999px;
    }

    .uniform-col-badge-text {
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        color: #047857;
        text-transform: uppercase;
    }

    .uniform-col-title {
        font-size: 1.75rem;
        font-weight: 700;
        letter-spacing: -0.025em;
        color: #0f172a;
        line-height: 1.2;
        margin: 0;
    }

    .uniform-col-title-accent {
        color: #047857;
    }

    .uniform-col-cards-track {
        display: flex;
        gap: 1.25rem;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        padding: 0.5rem 0.25rem 1.25rem;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: thin;
        scrollbar-color: #cbd5e1 #f1f5f9;
    }

    .uniform-col-card {
        flex: 0 0 78vw;
        max-width: 300px;
        min-width: 0;
        padding: 0.625rem;
        background: #fff;
        border: 1px solid #e2e8f0;
        border-radius: 1.25rem;
        box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
        scroll-snap-align: start;
    }

    .uniform-col-img-wrapper {
        position: relative;
        width: 100%;
        aspect-ratio: 4 / 5;
        overflow: hidden;
        border-radius: 1rem;
        background: #e2e8f0;
    }

    .uniform-col-slide {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        opacity: 0;
        visibility: hidden;
    }

    .uniform-col-slide.uniform-col-slide-active {
        opacity: 1;
        visibility: visible;
    }

    .uniform-col-gradient-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to top,
            rgba(0,0,0,0.82) 0%,
            rgba(0,0,0,0.25) 48%,
            transparent 100%
        );
        pointer-events: none;
    }

    .uniform-col-content-box {
        position: absolute;
        z-index: 2;
        bottom: 1rem;
        left: 0.875rem;
        right: 0.875rem;
        pointer-events: none;
    }

    .uniform-col-tag {
        display: inline-block;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 0.05em;
        color: #34d399;
        text-transform: uppercase;
        margin-bottom: 0.3rem;
    }

    .uniform-col-card-title {
        color: #fff;
        font-size: 1rem;
        font-weight: 600;
        line-height: 1.4;
        margin: 0;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .uniform-col-arrow {
        position: absolute;
        z-index: 5;
        top: 50%;
        transform: translateY(-50%);
        width: 34px;
        height: 34px;
        border: none;
        border-radius: 50%;
        background: rgba(255,255,255,0.94);
        color: #0f172a;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 23px;
        line-height: 1;
        cursor: pointer;
        box-shadow: 0 2px 8px rgba(0,0,0,0.18);
        padding: 0;
    }

    .uniform-col-arrow:hover {
        background: #047857;
        color: #fff;
    }

    .uniform-col-prev {
        left: 10px;
    }

    .uniform-col-next {
        right: 10px;
    }

    .uniform-col-pagination {
        position: absolute;
        z-index: 5;
        top: 12px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        gap: 6px;
    }

    .uniform-col-dot {
        width: 7px;
        height: 7px;
        border: 0;
        border-radius: 50%;
        padding: 0;
        background: rgba(255,255,255,0.6);
        cursor: pointer;
    }

    .uniform-col-dot.uniform-col-dot-active {
        background: #fff;
        width: 19px;
        border-radius: 10px;
    }

    .uniform-col-swipe-hint {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.5rem;
        margin-top: 0.75rem;
        font-size: 0.75rem;
        color: #64748b;
    }

    @media (min-width: 480px) {
        .uniform-col-card {
            flex-basis: 55vw;
        }
    }

    @media (min-width: 640px) {
        .uniform-col-title {
            font-size: 2.25rem;
        }

        .uniform-col-card {
            flex-basis: 40vw;
            max-width: 320px;
            padding: 0.75rem;
            border-radius: 1.5rem;
        }

        .uniform-col-card-title {
            font-size: 1.05rem;
        }

        .uniform-col-tag {
            font-size: 11px;
        }
    }

    @media (min-width: 768px) {
        .uniform-col-header-row {
            flex-direction: row;
            align-items: flex-end;
            justify-content: space-between;
            margin-bottom: 2.5rem;
        }
    }

    @media (min-width: 1024px) {
        .uniform-col-title {
            font-size: 3rem;
        }

        .uniform-col-cards-track {
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            overflow: visible;
            padding: 0;
            scrollbar-width: none;
        }

        .uniform-col-cards-track::-webkit-scrollbar {
            display: none;
        }

        .uniform-col-card {
            width: 100%;
            max-width: none;
            min-width: 0;
        }

        .uniform-col-card:hover {
            box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1);
        }

        .uniform-col-swipe-hint {
            display: none;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .uniform-col-wrapper * {
            scroll-behavior: auto;
        }
    }
</style>

<div class="uniform-col-wrapper">
    <section class="uniform-col-container">

        <div class="uniform-col-header-row">
            <div>
                <div class="uniform-col-badge-group">
                    <span class="uniform-col-badge-line"></span>
                    <span class="uniform-col-badge-text">UNIFORM GALLERY</span>
                </div>

                <h2 class="uniform-col-title">
                    Work With <span class="uniform-col-title-accent">Top Brands</span>
                </h2>
            </div>
        </div>

        <div class="uniform-col-cards-track" id="uniformCardsTrack">

            <!-- CARD 1 -->
            <div class="uniform-col-card">
                <div class="uniform-col-img-wrapper">

                    <img class="uniform-col-slide uniform-col-slide-active"
                         src="assets/brand_kk/brand_1/Confident Polo Portrait by Modern Offices.png"
                         alt="School uniform collection"
                         loading="lazy">

                    <img class="uniform-col-slide"
                         src="assets/brand_kk/brand_1/Godrej Embroidered Black Polo Sleeve.png"
                         alt="School uniform style two"
                         loading="lazy">

                    

                    <div class="uniform-col-gradient-overlay"></div>

                    <button class="uniform-col-arrow uniform-col-prev"
                            type="button"
                            aria-label="Previous school uniform image">&#8249;</button>

                    <button class="uniform-col-arrow uniform-col-next"
                            type="button"
                            aria-label="Next school uniform image">&#8250;</button>

                    <div class="uniform-col-pagination"></div>

                    <div class="uniform-col-content-box">
                        <!-- <span class="uniform-col-tag">School Uniforms</span> -->
                        <h3 class="uniform-col-card-title">Godrej</h3>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="uniform-col-card">
                <div class="uniform-col-img-wrapper">

                    <img class="uniform-col-slide uniform-col-slide-active"
                         src="assets/brand_kk/brand_2/Modern Polo Portrait at Glass Facade.png"
                         alt="Industrial polo uniform"
                         loading="lazy">

                    <img class="uniform-col-slide"
                         src="assets/brand_kk/brand_2/Corporate Profile with Safety Logos.png"
                         alt="Industrial workwear collection"
                         loading="lazy">

                    <!-- <img class="uniform-col-slide"
                         src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=600&q=80"
                         alt="Professional team workwear"
                         loading="lazy"> -->

                    <div class="uniform-col-gradient-overlay"></div>

                    <button class="uniform-col-arrow uniform-col-prev"
                            type="button"
                            aria-label="Previous industrial uniform image">&#8249;</button>

                    <button class="uniform-col-arrow uniform-col-next"
                            type="button"
                            aria-label="Next industrial uniform image">&#8250;</button>

                    <div class="uniform-col-pagination"></div>

                    <div class="uniform-col-content-box">
                        <!-- <span class="uniform-col-tag">Industrial Uniforms</span> -->
                        <h3 class="uniform-col-card-title">M3M</h3>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="uniform-col-card">
                <div class="uniform-col-img-wrapper">

                    <img class="uniform-col-slide uniform-col-slide-active"
                         src="assets/brand_kk/brand_3/Sujata Polo Shirt Triptych Showcase.png"
                         alt="Corporate team uniforms"
                         loading="lazy">

                    <img class="uniform-col-slide"
                         src="assets/brand_kk/brand_3/Expert Technician Servicing Ceiling AC.png"
                         alt="Corporate polo shirts"
                         loading="lazy">

                    <!-- <img class="uniform-col-slide"
                         src="assets/brand_kk/Godrej Embroidered Black Polo Sleeve.png"
                         alt="Customized company uniforms"
                         loading="lazy"> -->

                    <div class="uniform-col-gradient-overlay"></div>

                    <button class="uniform-col-arrow uniform-col-prev"
                            type="button"
                            aria-label="Previous corporate uniform image">&#8249;</button>

                    <button class="uniform-col-arrow uniform-col-next"
                            type="button"
                            aria-label="Next corporate uniform image">&#8250;</button>

                    <div class="uniform-col-pagination"></div>

                    <div class="uniform-col-content-box">
                        <!-- <span class="uniform-col-tag">Corporate Uniforms</span> -->
                        <h3 class="uniform-col-card-title">Sujata</h3>
                    </div>
                </div>
            </div>

            <!-- CARD 4 -->
            <div class="uniform-col-card">
                <div class="uniform-col-img-wrapper">

                    <img class="uniform-col-slide uniform-col-slide-active"
                         src="assets/brand_kk/brand_4/Professional Office Portrait in Navy Polo.png"
                         alt="Hospitality and restaurant environment"
                         loading="lazy">

                    <img class="uniform-col-slide"
                         src="assets/brand_kk/brand_4/Rear View in a Modern Office.png"
                         alt="Hospitality staff uniform"
                         loading="lazy">
<!-- 
                    <img class="uniform-col-slide"
                         src="assets/brand_kk/Godrej Embroidered Black Polo Sleeve.png"
                         alt="Professional hospitality workwear"
                         loading="lazy"> -->

                    <div class="uniform-col-gradient-overlay"></div>

                    <button class="uniform-col-arrow uniform-col-prev"
                            type="button"
                            aria-label="Previous hospitality uniform image">&#8249;</button>

                    <button class="uniform-col-arrow uniform-col-next"
                            type="button"
                            aria-label="Next hospitality uniform image">&#8250;</button>

                    <div class="uniform-col-pagination"></div>

                    <div class="uniform-col-content-box">
                        <!-- <span class="uniform-col-tag">Hospitality Uniforms</span> -->
                        <h3 class="uniform-col-card-title">Pristyn Care</h3>
                    </div>
                </div>
            </div>
            
            <!-- CARD 4 -->
            <div class="uniform-col-card">
                <div class="uniform-col-img-wrapper">

                    <img class="uniform-col-slide uniform-col-slide-active"
                         src="assets/brand_kk/brand_5/Hooded ORAYA Jacket in Urban Garden frient.png"
                         alt="Hospitality and restaurant environment"
                         loading="lazy">

                    <img class="uniform-col-slide"
                         src="assets/brand_kk/brand_5/Hooded ORAYA Jacket in Urban Garden.png"
                         alt="Hospitality staff uniform"
                         loading="lazy">
<!-- 
                    <img class="uniform-col-slide"
                         src="assets/brand_kk/Godrej Embroidered Black Polo Sleeve.png"
                         alt="Professional hospitality workwear"
                         loading="lazy"> -->

                    <div class="uniform-col-gradient-overlay"></div>

                    <button class="uniform-col-arrow uniform-col-prev"
                            type="button"
                            aria-label="Previous hospitality uniform image">&#8249;</button>

                    <button class="uniform-col-arrow uniform-col-next"
                            type="button"
                            aria-label="Next hospitality uniform image">&#8250;</button>

                    <div class="uniform-col-pagination"></div>

                    <div class="uniform-col-content-box">
                        <!-- <span class="uniform-col-tag">Hospitality Uniforms</span> -->
                        <h3 class="uniform-col-card-title">Okaya</h3>
                    </div>
                </div>
            </div>

        </div>

        <div class="uniform-col-swipe-hint">
            <span>Swipe cards or use the arrows to explore images</span>
        </div>

    </section>
</div>

<script>
(function () {
    const uniformTrack = document.getElementById('uniformCardsTrack');

    if (!uniformTrack) return;

    const uniformCards = uniformTrack.querySelectorAll('.uniform-col-card');
    const uniformTimers = [];

    uniformCards.forEach(function (card) {
        const uniformSlides = Array.from(
            card.querySelectorAll('.uniform-col-slide')
        );

        const uniformPrev = card.querySelector('.uniform-col-prev');
        const uniformNext = card.querySelector('.uniform-col-next');
        const uniformPagination = card.querySelector('.uniform-col-pagination');

        if (!uniformSlides.length) return;

        let uniformCurrentIndex = 0;
        let uniformTimer = null;

        // Create image indicator dots
        uniformSlides.forEach(function (slide, index) {
            const uniformDot = document.createElement('button');

            uniformDot.type = 'button';
            uniformDot.className = 'uniform-col-dot';
            uniformDot.setAttribute('aria-label', 'Show image ' + (index + 1));

            uniformDot.addEventListener('click', function () {
                uniformShowSlide(index);
                uniformRestartTimer();
            });

            uniformPagination.appendChild(uniformDot);
        });

        const uniformDots = Array.from(
            uniformPagination.querySelectorAll('.uniform-col-dot')
        );

        function uniformShowSlide(index) {
            uniformCurrentIndex =
                (index + uniformSlides.length) % uniformSlides.length;

            uniformSlides.forEach(function (slide, slideIndex) {
                slide.classList.toggle(
                    'uniform-col-slide-active',
                    slideIndex === uniformCurrentIndex
                );
            });

            uniformDots.forEach(function (dot, dotIndex) {
                dot.classList.toggle(
                    'uniform-col-dot-active',
                    dotIndex === uniformCurrentIndex
                );
            });
        }

        function uniformNextSlide() {
            uniformShowSlide(uniformCurrentIndex + 1);
        }

        function uniformPrevSlide() {
            uniformShowSlide(uniformCurrentIndex - 1);
        }

        function uniformStartTimer() {
            uniformStopTimer();

            uniformTimer = setInterval(function () {
                uniformNextSlide();
            }, 3000);

            uniformTimers.push(function () {
                uniformStopTimer();
            });
        }

        function uniformStopTimer() {
            if (uniformTimer) {
                clearInterval(uniformTimer);
                uniformTimer = null;
            }
        }

        function uniformRestartTimer() {
            uniformStopTimer();
            uniformStartTimer();
        }

        uniformNext.addEventListener('click', function () {
            uniformNextSlide();
            uniformRestartTimer();
        });

        uniformPrev.addEventListener('click', function () {
            uniformPrevSlide();
            uniformRestartTimer();
        });

        // Pause image changes while the user interacts with a card
        card.addEventListener('mouseenter', uniformStopTimer);
        card.addEventListener('mouseleave', uniformStartTimer);
        card.addEventListener('focusin', uniformStopTimer);
        card.addEventListener('focusout', uniformStartTimer);

        uniformShowSlide(0);
        uniformStartTimer();
    });

    // Mobile and tablet: automatically move the cards horizontally
    let uniformTrackTimer = null;
    let uniformTrackPaused = false;
    let uniformResumeTimer = null;

    function uniformStartTrack() {
        clearInterval(uniformTrackTimer);

        if (window.innerWidth >= 1024) return;

        uniformTrackTimer = setInterval(function () {
            if (uniformTrackPaused) return;

            const maxScroll =
                uniformTrack.scrollWidth - uniformTrack.clientWidth;

            if (maxScroll <= 0) return;

            if (uniformTrack.scrollLeft >= maxScroll - 10) {
                uniformTrack.scrollTo({
                    left: 0,
                    behavior: 'smooth'
                });
            } else {
                const firstCard = uniformTrack.querySelector('.uniform-col-card');

                if (firstCard) {
                    const cardWidth =
                        firstCard.getBoundingClientRect().width + 20;

                    uniformTrack.scrollBy({
                        left: cardWidth,
                        behavior: 'smooth'
                    });
                }
            }
        }, 4000);
    }

    function uniformPauseTrack() {
        uniformTrackPaused = true;
        clearTimeout(uniformResumeTimer);
    }

    function uniformResumeTrack() {
        clearTimeout(uniformResumeTimer);

        uniformResumeTimer = setTimeout(function () {
            uniformTrackPaused = false;
        }, 3000);
    }

    uniformTrack.addEventListener('touchstart', uniformPauseTrack, {
        passive: true
    });

    uniformTrack.addEventListener('touchend', uniformResumeTrack, {
        passive: true
    });

    uniformTrack.addEventListener('mousedown', uniformPauseTrack);
    uniformTrack.addEventListener('mouseup', uniformResumeTrack);

    window.addEventListener('resize', uniformStartTrack);

    uniformStartTrack();
})();
</script>

