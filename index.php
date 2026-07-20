<?php
$pageTitle = 'Domov';
$pageDescription = 'Interiérové realizácie na mieru — dlažby, mikrocement, dekoračné stierky a kompletné kúpeľne.';
$activePage = 'home';
require __DIR__ . '/inc/header.php';
?>

<section class="video-hero" data-video-hero aria-label="Úvodná prezentácia">
    <article class="video-hero__slide video-hero__slide--craft" data-hero-slide aria-hidden="true">
        <video class="video-hero__video" muted loop playsinline preload="metadata" poster="img/hero-pokladka-poster.jpg">
            <source src="img/hero-pokladka.mp4" type="video/mp4">
        </video>
        <div class="video-hero__overlay" aria-hidden="true"></div>
        <div class="container video-hero__inner">
            <div class="video-hero__content">
                <span class="video-hero__eyebrow">Precízne remeslo · STAVUs</span>
                <h1>Interiér stojí na detailoch, ktoré robíme poriadne</h1>
                <p>Obklady, dlažby a povrchy realizované s presnosťou od prvého zamerania po poslednú škáru.</p>
                <div class="video-hero__actions">
                    <a href="kontakt.php" class="btn btn--light">Nezáväzná konzultácia</a>
                    <a href="referencie.php" class="video-hero__text-link">Pozrieť realizácie <span>→</span></a>
                </div>
            </div>
        </div>
    </article>

    <article class="video-hero__slide video-hero__slide--bath" data-hero-slide aria-hidden="true">
        <video class="video-hero__video" muted loop playsinline preload="metadata" poster="img/hero-kupelna-poster.jpg">
            <source src="img/hero-kupelna.mp4" type="video/mp4">
        </video>
        <div class="video-hero__overlay" aria-hidden="true"></div>
        <div class="container video-hero__inner">
            <div class="video-hero__content">
                <span class="video-hero__eyebrow">Kúpeľne na kľúč</span>
                <h2>Priestor, v ktorom sa každý deň začína lepšie</h2>
                <p>Kompletná realizácia kúpeľne — od obkladov a sanity až po čistý finálny detail.</p>
                <a href="sluzby.php#kupelne" class="btn btn--primary">Realizácia kúpeľne</a>
            </div>
        </div>
    </article>

    <article class="video-hero__slide video-hero__slide--light is-active" data-hero-slide aria-hidden="false">
        <video class="video-hero__video" muted loop playsinline preload="metadata" poster="img/hero-sprcha-poster.jpg">
            <source src="img/hero-sprcha.mp4" type="video/mp4">
        </video>
        <div class="video-hero__overlay" aria-hidden="true"></div>
        <div class="container video-hero__inner">
            <div class="video-hero__content">
                <span class="video-hero__eyebrow">Obklady bez kompromisov</span>
                <h2>Precízny obklad mení celý priestor</h2>
                <p>Čisté línie, presné škáry a kvalitné prevedenie, ktoré zostane krásne aj po rokoch.</p>
                <div class="video-hero__actions">
                    <a href="sluzby.php" class="btn btn--primary">Naše služby</a>
                    <a href="kontakt.php" class="btn btn--outline">Napíšte nám</a>
                </div>
            </div>
        </div>
    </article>

    <div class="video-hero__controls" role="tablist" aria-label="Vyberte úvodnú sekciu">
        <button type="button" class="is-active" data-hero-control data-hero-target="2" role="tab" aria-selected="true"><span>01</span> Obklad</button>
        <button type="button" data-hero-control data-hero-target="0" role="tab" aria-selected="false"><span>02</span> Remeslo</button>
        <button type="button" data-hero-control data-hero-target="1" role="tab" aria-selected="false"><span>03</span> Kúpeľne</button>
    </div>
</section>

<section class="hero hero--legacy" aria-hidden="true">
    <span class="hero__blob hero__blob--1" aria-hidden="true"></span>
    <span class="hero__blob hero__blob--2" aria-hidden="true"></span>
    <div class="container hero__grid">
        <div class="hero__content">
            <span class="eyebrow">Interiérové realizácie</span>
            <h1>Interiéry, ktoré majú dušu — od dlažby po poslednú stierku</h1>
            <p>Navrhujeme a realizujeme moderné interiéry: dlažby, mikrocement, dekoračné stierky a kúpeľne na mieru. Bez hrubej stavby, len čistá interiérová remeselná práca.</p>
            <div class="hero__actions">
                <a href="kontakt.php" class="btn btn--primary">Nezáväzná konzultácia</a>
                <a href="sluzby.php" class="btn btn--outline">Pozrieť služby</a>
            </div>
            <div class="hero__stats">
                <div class="hero__stat"><strong>10+</strong><span>rokov skúseností</span></div>
                <div class="hero__stat"><strong>150+</strong><span>dokončených realizácií</span></div>
                <div class="hero__stat"><strong>100&nbsp;%</strong><span>individuálny prístup</span></div>
            </div>
        </div>
        <div class="hero__visual">
            <img class="hero__visual-photo" src="img/mikrocement/mikrocement-sprchovy-kut.webp" alt="Realizácia — mikrocement v kúpeľni" loading="eager">
            <span class="hero__visual-pattern" aria-hidden="true"></span>
            <span class="hero__visual-label">Realizácia<br>Mikrocement · Kúpeľňa</span>
            <div class="hero__card-float">
                <div class="usp__icon" aria-hidden="true">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <div>
                    <strong>Bez tmavých kompromisov</strong>
                    svetlé, vzdušné a moderné riešenia
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services" id="sluzby">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">Čomu sa venujeme</span>
            <h2>Naše služby</h2>
            <p>Zameriavame sa výhradne na interiérové práce — žiadna hrubá stavba, žiadne murárske práce. Len čistý, precízny interiérový výsledok.</p>
        </div>

        <div class="services__grid">
            <article class="service-card">
                <span class="service-card__icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M3 9h18M9 3v18" stroke="currentColor" stroke-width="1.6"/><rect x="3" y="3" width="18" height="18" rx="1.5" stroke="currentColor" stroke-width="1.6"/></svg>
                </span>
                <h3>Dlažby</h3>
                <p>Veľkoformátové dlažby a obklady do interiéru s precíznym prevedením škár a spádov.</p>
                <a href="sluzby.php#dlazby" class="service-card__link">Viac o službe
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            </article>

            <article class="service-card">
                <span class="service-card__icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M12 3c2 3 5 6 5 10a5 5 0 11-10 0c0-4 3-7 5-10z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg>
                </span>
                <h3>Mikrocement</h3>
                <p>Bezškárová, elegantná povrchová úprava podláh, stien aj kúpeľní v jednoliatom dizajne.</p>
                <a href="sluzby.php#mikrocement" class="service-card__link">Viac o službe
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            </article>

            <article class="service-card">
                <span class="service-card__icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M3 17c2-4 4-2 6-6s4-2 6-6M3 12c2-4 4-2 6-6M9 22c2-4 4-2 6-6s4-2 6-6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
                </span>
                <h3>Dekoračné stierky</h3>
                <p>Benátsky štuk a dekoračné stierky, ktoré dodajú stenám hĺbku, textúru a charakter.</p>
                <a href="sluzby.php#stierky" class="service-card__link">Viac o službe
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            </article>

            <article class="service-card">
                <span class="service-card__icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M3 12h18M5 12V6a2 2 0 012-2h2a2 2 0 012 2v6M4 12v7a1 1 0 001 1h1M20 12v7a1 1 0 01-1 1h-1M8 20v-2M16 20v-2" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
                <h3>Kúpeľne</h3>
                <p>Kompletná realizácia kúpeľní na kľúč — od obkladov po sanitu a osvetlenie.</p>
                <a href="sluzby.php#kupelne" class="service-card__link">Viac o službe
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            </article>

            <article class="service-card">
                <span class="service-card__icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M4 21V9l8-6 8 6v12M9 21v-6h6v6" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg>
                </span>
                <h3>Interiérové práce</h3>
                <p>Maľby, podlahy, obklady stien a ďalšie dokončovacie práce pre kompletný interiér.</p>
                <a href="sluzby.php#interier" class="service-card__link">Viac o službe
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            </article>
        </div>
    </div>
</section>

<section class="process">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">Ako to prebieha</span>
            <h2>Jednoduchý proces spolupráce</h2>
        </div>
        <div class="process__grid">
            <div class="process__step">
                <h3>Konzultácia</h3>
                <p>Prejdeme si vaše predstavy, priestor a rozpočet — nezáväzne a zadarmo.</p>
            </div>
            <div class="process__step">
                <h3>Návrh</h3>
                <p>Pripravíme dizajnový návrh a výber materiálov presne podľa vášho štýlu.</p>
            </div>
            <div class="process__step">
                <h3>Realizácia</h3>
                <p>Precízne prevedenie prác remeselníkmi s dôrazom na detail a čistotu práce.</p>
            </div>
            <div class="process__step">
                <h3>Odovzdanie</h3>
                <p>Priestor odovzdáme pripravený na okamžité používanie, vrátane záruky.</p>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/inc/before-after.php'; ?>

<section class="usp">
    <div class="container usp__grid">
        <div class="usp__item">
            <span class="usp__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg>
            </span>
            <div><strong>Moderný dizajn</strong><span>aktuálne trendy v interiéri</span></div>
        </div>
        <div class="usp__item">
            <span class="usp__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M12 2l3 7h7l-5.5 4.5L18.5 21 12 16.5 5.5 21l2-7.5L2 9h7l3-7z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg>
            </span>
            <div><strong>Kvalitné materiály</strong><span>overení dodávatelia</span></div>
        </div>
        <div class="usp__item">
            <span class="usp__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.6"/><path d="M12 7v5l3 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
            </span>
            <div><strong>Rýchla realizácia</strong><span>dodržiavanie termínov</span></div>
        </div>
        <div class="usp__item">
            <span class="usp__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M12 21s-7-4.35-9.5-8.5C.6 8.6 2.4 5 6 5c2 0 3.3 1 4 2 .7-1 2-2 4-2 3.6 0 5.4 3.6 3.5 7.5C19 16.65 12 21 12 21z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg>
            </span>
            <div><strong>Individuálny prístup</strong><span>riešenie na mieru</span></div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">Referencie klientov</span>
            <h2>Čo hovoria naši klienti</h2>
            <p>Ukážkové hodnotenia — po dokončení prvých realizácií doplníme reálne referencie.</p>
        </div>
        <div class="testimonials__grid">
            <div class="testimonial">
                <div class="testimonial__stars">★★★★★</div>
                <p>„Mikrocement v kúpeľni predčil naše očakávania — pôsobí luxusne a jednoducho sa udržiava.“</p>
                <div class="testimonial__author">
                    <span class="testimonial__avatar">M</span>
                    <div><strong>Michaela K.</strong><span>Bratislava</span></div>
                </div>
            </div>
            <div class="testimonial">
                <div class="testimonial__stars">★★★★★</div>
                <p>„Profesionálny prístup od návrhu až po realizáciu. Termíny aj rozpočet dodržané.“</p>
                <div class="testimonial__author">
                    <span class="testimonial__avatar">J</span>
                    <div><strong>Ján M.</strong><span>Trnava</span></div>
                </div>
            </div>
            <div class="testimonial">
                <div class="testimonial__stars">★★★★★</div>
                <p>„Dekoračná stierka v obývačke dala priestoru úplne nový charakter. Odporúčam.“</p>
                <div class="testimonial__author">
                    <span class="testimonial__avatar">K</span>
                    <div><strong>Katarína P.</strong><span>Pezinok</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
