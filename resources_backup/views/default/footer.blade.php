<footer class="footer desktop">
    <div class="custom-container">
        <div class="footer__inner ">
            <div class="footer__col">
                <ul class="footer__nav">
                    <li>
                        <a href="#">@lang('translate.catalog')</a>
                    </li>
                    <li>
                        <a href="#">@lang('translate.aboutus')</a>
                    </li>
                    <li>
                        <a href="#">@lang('translate.activity')</a>
                    </li>
                    <li>
                        <a href="#">@lang('translate.contact')</a>
                    </li>
                </ul>
            </div>
            <div class="footer__col">
                <span class="footer__contacts">@lang('translate.contact'):</span>
                <a href="tel:{{ $information->number }}" class="footer__contacts">
                    <span class="bold"><span class="margin">@lang('translate.number')</span>{{ $information->number }}</span>
                </a>
                <a href="mailto:{{ $information->mail }}" class="footer__contacts">
                    <span class="bold margin">@lang('translate.mail')</span>{{ $information->mail }}
                </a>
                <span class="footer__copyright">@lang('translate.copyright')</span>
                <span class="footer__all-rights-reserved">@lang('translate.rightreserve')</span>
            </div>
            <div class="footer__col footer__social__wrapper">
                <div class="footer__social">
                    <a href="{{ $information->facebook }}" class="footer__social__link">
                        <img src="res/svg/footer/fb.svg">
                    </a>
                    <img class="footer__qr" src="res/svg/fb-qr.svg">
                </div>
                <div class="footer__social">
                    <a href="{{ $information->instagram }}" class="footer__social__link">
                        <img src="res/svg/footer/ig.svg">
                    </a>
                    <img class="footer__qr" src="res/svg/ig-qr.svg">
                </div>
            </div>
        </div>
    </div>
</footer>
<footer class="footer mobile">
    <div class="custom-container">
        <div class="footer__inner ">
            <div class="footer__col">
                <ul class="footer__nav">
                    <li>
                        <a href="#">@lang('translate.catalog')</a>
                    </li>
                    <li>
                        <a href="#">@lang('translate.aboutus')</a>
                    </li>
                    <li>
                        <a href="#">@lang('translate.activity')</a>
                    </li>
                    <li>
                        <a href="#">@lang('translate.contact')</a>
                    </li>
                </ul>
            </div>
            <div class="footer__col footer__social__wrapper">
                <div class="footer__social">
                    <a href="{{ $information->facebook }}" class="footer__social__link">
                        <img src="res/svg/footer/fb.svg">
                    </a>
                    <img class="footer__qr" src="res/svg/fb-qr.svg">
                </div>
                <div class="footer__social">
                    <a href="{{ $information->instagram }}" class="footer__social__link">
                        <img src="res/svg/footer/ig.svg">
                    </a>
                    <img class="footer__qr" src="res/svg/ig-qr.svg">
                </div>
            </div>
            <div class="footer__col">
                <span class="footer__contacts">@lang('translate.contact')</span>
                <a href="tel:{{ $information->number  }}" class="footer__contacts">
                    <span class="bold"><span class="margin">@lang('translate.number')</span>{{ $information->number  }}</span>
                </a>
                <a href="mailto:{{ $information->mail  }}" class="footer__contacts">
                    <span class="bold margin">@lang('translate.mail')</span>{{ $information->mail  }}
                </a>
                <span class="footer__copyright">@lang('translate.copyright')</span>
                <span class="footer__all-rights-reserved">@lang('translate.rightreserve')</span>
            </div>
        </div>
    </div>
</footer>

<script src="https://unpkg.com/swiper/js/swiper.js"></script>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
<script type="text/javascript">
    let isMobile = false;

    function watchForHover() {
        let hasHoverClass = false;
        let container = document.body;
        let lastTouchTime = 0;

        function enableHover() {
            // discard emulated mouseMove events coming from touch events
            if (new Date() - lastTouchTime < 500) return;
            if (hasHoverClass) return;

            container.className = container.className.replace(' touch', '');
            hasHoverClass = true;
            isMobile = true;
        }

        function disableHover() {
            if (!hasHoverClass) return;

            container.className += ' touch';
            hasHoverClass = false;
            isMobile = false;
        }

        function updateLastTouchTime() {
            lastTouchTime = new Date();
        }

        document.addEventListener('touchstart', updateLastTouchTime, true);
        document.addEventListener('touchstart', disableHover, true);
        document.addEventListener('mousemove', enableHover, true);

        enableHover();
    }

    watchForHover();

    let mySwiper = new Swiper('#pic-slider', {
        slidesPerView: 1,
        loop: true,
        pagination: {
            el: '#pic-slider-pagination',
            clickable: true
        }
    });

    let mySwiper2 = new Swiper('#modal-slider', {
        slidesPerView: 1,
        observer: true,
        observeParents: true,
        loop: true,
        pagination: {
            el: '#modal-slider-pagination',
            clickable: true
        }
    });

    let isPreHeaderMenuOpen = false;
    const togglePreHeaderMenu = () => {
        if (window.innerWidth <= 800) {
            if (isPreHeaderMenuOpen)
                document.querySelector('#pre-header-menu').classList.remove('active');
            else document.querySelector('#pre-header-menu').classList.add('active');

            isPreHeaderMenuOpen = !isPreHeaderMenuOpen;
        }
    }

    let isModalContentShown = false;
    const modalButton = (id) => {
        if (!isModalContentShown) {
            isModalContentShown = true;
            document.querySelector(`#a${id}`).classList.remove('content-hidden');
            return;
        }
    }

    let isModalOpen = false;
    const toggleModal = (id) => {
        if (!isModalOpen)
            document.querySelector(`#a${id}`).style.display = '';
        else document.querySelector(`#a${id}`).style.display = 'none';

        isModalOpen = !isModalOpen;
        isModalContentShown = false;
        document.querySelector(`#a${id}`).classList.add('content-hidden');
    }

    let shownTab = '#obodki';
    document.querySelector(shownTab).classList.add('active');
    const showTab = (tabId) => {
        document.querySelector(shownTab).classList.remove('active');
        document.querySelector(tabId).classList.add('active');
        shownTab = tabId;
        return false;
    }

    let langsShown = false,
        chosenLang = 'RU';
    const toggleLangs = () => {
        if (langsShown)
            document.querySelector('#lang-content').classList.remove('active');
        else document.querySelector('#lang-content').classList.add('active');
        langsShown = !langsShown;
    }
    const chooseLang = lang => {
        chosenLang = lang;
        document.querySelector('#lang').innerHTML = lang;
        toggleLangs();
    }

    if (isMobile) {
        const tabs = document.querySelectorAll('.pics-tab');
        const materials = document.querySelectorAll('.index-page__section-about__materials__left')
        const sliders = document.querySelectorAll('.swiper-container');
        let isDown = false;
        let isDownOnSlider = false;
        let startX;
        let scrollLeft;

        sliders.forEach(slider => {
            slider.addEventListener('mousedown', () => {
                isDownOnSlider = true;
            });
            slider.addEventListener('mouseup', () => {
                isDownOnSlider = false;
            });
        });

        function dragOnElem(elems) {
            elems.forEach(el => {
                el.addEventListener('mousedown', (e) => {
                    isDown = true;
                    startX = e.pageX - el.offsetLeft;
                    scrollLeft = el.scrollLeft;
                });
                el.addEventListener('mouseleave', () => {
                    isDown = false;
                });
                el.addEventListener('mouseup', () => {
                    isDown = false;
                });
                el.addEventListener('mousemove', (e) => {
                    if (!isDown || isDownOnSlider) return;
                    e.preventDefault();
                    const x = e.pageX - el.offsetLeft;
                    const walk = (x - startX); //scroll-fast
                    el.scrollLeft = scrollLeft - walk;
                });
            });
        }

        dragOnElem(tabs);
        dragOnElem(materials);
    }
</script>
