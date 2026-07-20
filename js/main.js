document.addEventListener('DOMContentLoaded', function () {
    var navToggle = document.getElementById('navToggle');
    var nav = document.getElementById('primaryNav');

    if (navToggle && nav) {
        navToggle.addEventListener('click', function () {
            var isOpen = nav.classList.toggle('is-open');
            navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            document.body.classList.toggle('menu-open', isOpen);
        });

        nav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                nav.classList.remove('is-open');
                navToggle.setAttribute('aria-expanded', 'false');
                document.body.classList.remove('menu-open');
            });
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && nav.classList.contains('is-open')) {
                nav.classList.remove('is-open');
                navToggle.setAttribute('aria-expanded', 'false');
                document.body.classList.remove('menu-open');
                navToggle.focus();
            }
        });
    }

    var filterButtons = document.querySelectorAll('.filter-btn');
    var galleryItems = document.querySelectorAll('.gallery-item');

    if (filterButtons.length && galleryItems.length) {
        filterButtons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                filterButtons.forEach(function (b) { b.classList.remove('is-active'); });
                btn.classList.add('is-active');

                var filter = btn.getAttribute('data-filter');

                galleryItems.forEach(function (item) {
                    var match = filter === 'all' || item.getAttribute('data-category') === filter;
                    item.style.display = match ? '' : 'none';
                });
            });
        });
    }

    initBeforeAfterSliders();
    initProjectsMap();
    initCookieBanner();
    initLightbox();
    initVideoHero();
});

function initVideoHero() {
    var hero = document.querySelector('[data-video-hero]');
    if (!hero) return;

    var slides = Array.prototype.slice.call(hero.querySelectorAll('[data-hero-slide]'));
    var controls = Array.prototype.slice.call(hero.querySelectorAll('[data-hero-control]'));
    var activeIndex = 2;
    var activeControlIndex = 0;
    var autoTimer = null;
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function activate(index) {
        activeIndex = index;
        slides.forEach(function (slide, slideIndex) {
            var active = slideIndex === activeIndex;
            var video = slide.querySelector('video');
            slide.classList.toggle('is-active', active);
            slide.setAttribute('aria-hidden', active ? 'false' : 'true');
            if (!video) return;
            if (active && !reduceMotion) {
                var playPromise = video.play();
                if (playPromise) playPromise.catch(function () { /* poster zostane viditeľný */ });
            } else {
                video.pause();
            }
        });

        controls.forEach(function (control, controlIndex) {
            var active = parseInt(control.getAttribute('data-hero-target'), 10) === activeIndex;
            control.classList.toggle('is-active', active);
            control.setAttribute('aria-selected', active ? 'true' : 'false');
            if (active) activeControlIndex = controlIndex;
        });
    }

    controls.forEach(function (control, index) {
        control.addEventListener('click', function () {
            activate(parseInt(control.getAttribute('data-hero-target'), 10));
            startAutoPlay();
        });
    });

    function startAutoPlay() {
        window.clearInterval(autoTimer);
        if (reduceMotion || document.hidden) return;
        autoTimer = window.setInterval(function () {
            var nextControlIndex = (activeControlIndex + 1) % controls.length;
            activate(parseInt(controls[nextControlIndex].getAttribute('data-hero-target'), 10));
        }, 3000);
    }

    hero.addEventListener('mouseenter', function () { window.clearInterval(autoTimer); });
    hero.addEventListener('mouseleave', startAutoPlay);
    hero.addEventListener('focusin', function () { window.clearInterval(autoTimer); });
    hero.addEventListener('focusout', function (event) {
        if (!hero.contains(event.relatedTarget)) startAutoPlay();
    });
    document.addEventListener('visibilitychange', function () {
        if (document.hidden) window.clearInterval(autoTimer);
        else startAutoPlay();
    });

    activate(2);
    startAutoPlay();
}

// ---------------------------------------------------------------------
// Lightbox (popup) pre galériu referencií
// ---------------------------------------------------------------------
function initLightbox() {
    var items = Array.prototype.slice.call(document.querySelectorAll('.gallery-item'));
    var lightbox = document.getElementById('lightbox');
    if (!items.length || !lightbox) return;

    var imgEl = document.getElementById('lightboxImg');
    var captionEl = document.getElementById('lightboxCaption');
    var counterEl = document.getElementById('lightboxCounter');
    var closeBtn = document.getElementById('lightboxClose');
    var prevBtn = document.getElementById('lightboxPrev');
    var nextBtn = document.getElementById('lightboxNext');

    var currentIndex = 0;
    var currentImages = [];
    var currentCaption = '';
    var lastFocused = null;

    function render() {
        var src = currentImages[currentIndex];
        if (!src) return;
        imgEl.src = src;
        imgEl.alt = currentCaption + (currentImages.length > 1 ? ' — fotka ' + (currentIndex + 1) + ' z ' + currentImages.length : '');
        captionEl.textContent = currentCaption;
        counterEl.textContent = currentImages.length > 1 ? (currentIndex + 1) + ' / ' + currentImages.length : '';
        prevBtn.hidden = currentImages.length < 2;
        nextBtn.hidden = currentImages.length < 2;
    }

    function open(item) {
        try {
            currentImages = JSON.parse(item.getAttribute('data-images') || '[]');
        } catch (err) {
            currentImages = [];
        }
        if (!currentImages.length) {
            currentImages = [item.querySelector('img').getAttribute('src')];
        }
        currentCaption = item.getAttribute('data-caption') || '';
        currentIndex = 0;
        lastFocused = document.activeElement;
        render();
        lightbox.hidden = false;
        document.body.classList.add('lightbox-open');
        closeBtn.focus();
    }

    function close() {
        lightbox.hidden = true;
        document.body.classList.remove('lightbox-open');
        if (lastFocused) lastFocused.focus();
    }

    function nav(delta) {
        if (!currentImages.length) return;
        currentIndex = (currentIndex + delta + currentImages.length) % currentImages.length;
        render();
    }

    items.forEach(function (item) {
        item.addEventListener('click', function () { open(item); });
    });

    closeBtn.addEventListener('click', close);
    prevBtn.addEventListener('click', function () { nav(-1); });
    nextBtn.addEventListener('click', function () { nav(1); });

    lightbox.addEventListener('click', function (e) {
        if (e.target === lightbox) close();
    });

    document.addEventListener('keydown', function (e) {
        if (lightbox.hidden) return;
        if (e.key === 'Escape') close();
        if (e.key === 'ArrowLeft') nav(-1);
        if (e.key === 'ArrowRight') nav(1);
    });
}

// ---------------------------------------------------------------------
// Cookie / GDPR banner
// ---------------------------------------------------------------------
function initCookieBanner() {
    var banner = document.getElementById('cookieBanner');
    if (!banner) return;

    var STORAGE_KEY = 'stavus_cookie_consent';
    var acceptBtn = document.getElementById('cookieAccept');
    var declineBtn = document.getElementById('cookieDecline');

    var stored = null;
    try { stored = localStorage.getItem(STORAGE_KEY); } catch (err) { stored = null; }

    if (!stored) {
        banner.hidden = false;
    }

    function setConsent(value) {
        try { localStorage.setItem(STORAGE_KEY, value); } catch (err) { /* ignore */ }
        banner.hidden = true;
    }

    if (acceptBtn) acceptBtn.addEventListener('click', function () { setConsent('accepted'); });
    if (declineBtn) declineBtn.addEventListener('click', function () { setConsent('declined'); });
}

// ---------------------------------------------------------------------
// Before / After posuvník
// ---------------------------------------------------------------------
function initBeforeAfterSliders() {
    var sliders = document.querySelectorAll('[data-ba-slider]');
    if (!sliders.length) return;

    sliders.forEach(function (slider) {
        var range = slider.querySelector('.ba-slider__range');
        if (!range) return;

        function setPosition(pct) {
            pct = Math.min(100, Math.max(0, pct));
            slider.style.setProperty('--pos', pct + '%');
            range.value = pct;
        }

        function pctFromClientX(clientX) {
            var rect = slider.getBoundingClientRect();
            return ((clientX - rect.left) / rect.width) * 100;
        }

        var dragging = false;

        slider.addEventListener('pointerdown', function (e) {
            dragging = true;
            slider.setPointerCapture(e.pointerId);
            setPosition(pctFromClientX(e.clientX));
        });

        slider.addEventListener('pointermove', function (e) {
            if (!dragging) return;
            setPosition(pctFromClientX(e.clientX));
        });

        ['pointerup', 'pointercancel', 'pointerleave'].forEach(function (evt) {
            slider.addEventListener(evt, function () { dragging = false; });
        });

        range.addEventListener('input', function () {
            setPosition(parseFloat(range.value));
        });

        setPosition(parseFloat(range.value) || 50);
    });
}

// ---------------------------------------------------------------------
// Mapa realizovaných projektov (Leaflet + OpenStreetMap)
// ---------------------------------------------------------------------
function initProjectsMap() {
    var el = document.getElementById('projectsMap');
    if (!el || typeof L === 'undefined') return;

    var locations = [];
    try {
        locations = JSON.parse(el.getAttribute('data-locations') || '[]');
    } catch (err) {
        locations = [];
    }
    if (!locations.length) return;

    var map = L.map(el, { scrollWheelZoom: false }).setView([48.27, 17.32], 9);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> prispievatelia'
    }).addTo(map);

    var pinIcon = L.divIcon({
        className: 'map-pin',
        html: '<span></span>',
        iconSize: [26, 26],
        iconAnchor: [13, 26],
        popupAnchor: [0, -26]
    });

    locations.forEach(function (loc) {
        var countLabel = loc.count === 1 ? 'realizácia' : (loc.count < 5 ? 'realizácie' : 'realizácií');
        L.marker([loc.lat, loc.lng], { icon: pinIcon })
            .addTo(map)
            .bindPopup('<strong>' + loc.name + '</strong><br>' + loc.count + ' ' + countLabel);
    });

    el.addEventListener('click', function enableZoom() {
        map.scrollWheelZoom.enable();
    }, { once: true });
}
