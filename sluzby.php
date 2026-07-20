<?php
$pageTitle = 'Služby';
$pageDescription = 'Dlažby, mikrocement, dekoračné stierky, kúpeľne a interiérové práce na mieru.';
$activePage = 'sluzby';
require __DIR__ . '/inc/header.php';

function check_icon() {
    return '<svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
}
?>

<section class="page-header">
    <div class="container">
        <span class="eyebrow">Čo ponúkame</span>
        <h1>Interiérové služby na mieru</h1>
        <p>Špecializujeme sa výhradne na interiér — dlažby, mikrocement, dekoračné stierky, kúpeľne a dokončovacie práce. Hrubú stavbu ani murárske práce nerealizujeme.</p>
    </div>
</section>

<section class="services">
    <div class="container">

        <div class="service-detail" id="dlazby">
            <div class="service-detail__visual">
                <img class="service-detail__photo" src="img/dlazby/dlazby-terasa-01.webp" alt="Kladenie veľkoformátovej dlažby" loading="lazy">
            </div>
            <div class="service-detail__content">
                <span class="eyebrow">01 — Dlažby</span>
                <h2>Veľkoformátové dlažby a obklady</h2>
                <p>Kladenie interiérových dlažieb a obkladov s dôrazom na presnosť škár, spádovanie a dlhú životnosť povrchu. Pracujeme s veľkoformátovými aj mozaikovými formátmi.</p>
                <ul class="service-detail__list">
                    <li><?= check_icon() ?> Konzultácia formátu a vzoru kladenia</li>
                    <li><?= check_icon() ?> Príprava a vyrovnanie podkladu</li>
                    <li><?= check_icon() ?> Presné kladenie a škárovanie</li>
                    <li><?= check_icon() ?> Realizácia prechodov a lišt</li>
                </ul>
                <a href="kontakt.php" class="btn btn--primary" style="margin-top:1.5rem">Nezáväzná konzultácia</a>
            </div>
        </div>

        <div class="service-detail" id="mikrocement">
            <div class="service-detail__visual">
                <img class="service-detail__photo" src="img/mikrocement/mikrocement-sprchovy-kut.webp" alt="Mikrocement v sprchovom kúte" loading="lazy">
            </div>
            <div class="service-detail__content">
                <span class="eyebrow">02 — Mikrocement</span>
                <h2>Bezškárový mikrocement</h2>
                <p>Moderná, jednoliata povrchová úprava podláh, stien, schodísk aj kúpeľní. Mikrocement pôsobí elegantne, je odolný a ľahko udržiavateľný.</p>
                <ul class="service-detail__list">
                    <li><?= check_icon() ?> Aplikácia na podlahy, steny aj kúpeľňové jadrá</li>
                    <li><?= check_icon() ?> Široká škála svetlých odtieňov</li>
                    <li><?= check_icon() ?> Bezškárový, hygienický povrch</li>
                    <li><?= check_icon() ?> Ochranné povrchové vrstvy</li>
                </ul>
                <a href="kontakt.php" class="btn btn--primary" style="margin-top:1.5rem">Nezáväzná konzultácia</a>
            </div>
        </div>

        <div class="service-detail" id="stierky">
            <div class="service-detail__visual">
                <img class="service-detail__photo" src="img/stierky/stierky-mandala-01.webp" alt="Dekoračná stierka s ornamentálnym vzorom" loading="lazy">
            </div>
            <div class="service-detail__content">
                <span class="eyebrow">03 — Dekoračné stierky</span>
                <h2>Dekoračné stierky a benátsky štuk</h2>
                <p>Stenové stierky, ktoré dodajú priestoru hĺbku, textúru a charakter. Vhodné do obývačiek, spální, chodieb aj kancelárskych priestorov.</p>
                <ul class="service-detail__list">
                    <li><?= check_icon() ?> Výber štruktúry a odtieňa</li>
                    <li><?= check_icon() ?> Ručná aplikácia v niekoľkých vrstvách</li>
                    <li><?= check_icon() ?> Efekt hĺbky a jemného lesku</li>
                    <li><?= check_icon() ?> Ochranný náter pre dlhú životnosť</li>
                </ul>
                <a href="kontakt.php" class="btn btn--primary" style="margin-top:1.5rem">Nezáväzná konzultácia</a>
            </div>
        </div>

        <div class="service-detail" id="kupelne">
            <div class="service-detail__visual">
                <img class="service-detail__photo" src="img/kupelne/kupelne-vana-terazzo-01.webp" alt="Kompletná realizácia kúpeľne s vaňou" loading="lazy">
            </div>
            <div class="service-detail__content">
                <span class="eyebrow">04 — Kúpeľne</span>
                <h2>Kompletná realizácia kúpeľní</h2>
                <p>Kúpeľňu zrealizujeme na kľúč — od obkladov, dlažby a mikrocementu až po osadenie sanity, batérií a osvetlenia.</p>
                <ul class="service-detail__list">
                    <li><?= check_icon() ?> Návrh dispozície a materiálov</li>
                    <li><?= check_icon() ?> Obklady, dlažby alebo mikrocement</li>
                    <li><?= check_icon() ?> Osadenie sanity a batérií</li>
                    <li><?= check_icon() ?> Kompletné odovzdanie na kľúč</li>
                </ul>
                <a href="kontakt.php" class="btn btn--primary" style="margin-top:1.5rem">Nezáväzná konzultácia</a>
            </div>
        </div>

        <div class="service-detail" id="interier">
            <div class="service-detail__visual">
                <img class="service-detail__photo" src="img/kupelne/kupelne-betonovy-obklad-05.webp" alt="Dokončovacie interiérové práce — podlaha a osvetlenie" loading="lazy">
            </div>
            <div class="service-detail__content">
                <span class="eyebrow">05 — Interiérové práce</span>
                <h2>Dokončovacie interiérové práce</h2>
                <p>Maľby, podlahové krytiny, obklady stien a ďalšie dokončovacie práce, ktoré doplnia váš interiér do finálnej podoby.</p>
                <ul class="service-detail__list">
                    <li><?= check_icon() ?> Maľby a povrchové úpravy stien</li>
                    <li><?= check_icon() ?> Podlahové krytiny a lišty</li>
                    <li><?= check_icon() ?> Montáž doplnkov a osvetlenia</li>
                    <li><?= check_icon() ?> Finálne upratanie priestoru</li>
                </ul>
                <a href="kontakt.php" class="btn btn--primary" style="margin-top:1.5rem">Nezáväzná konzultácia</a>
            </div>
        </div>

    </div>
</section>

<?php require __DIR__ . '/inc/before-after.php'; ?>

<section class="timeline-section">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">Ako to prebieha</span>
            <h2>Priebeh typickej rekonštrukcie kúpeľne</h2>
            <p>Orientačný harmonogram prác — presný čas závisí od rozsahu a veľkosti priestoru.</p>
        </div>

        <ol class="timeline">
            <li class="timeline__step">
                <div class="timeline__marker">1</div>
                <div class="timeline__content">
                    <h3>Búracie a prípravné práce</h3>
                    <p>Demontáž starých obkladov, sanity a podláh, príprava podkladu.</p>
                    <span class="timeline__duration">1 – 3 dni</span>
                </div>
            </li>
            <li class="timeline__step">
                <div class="timeline__marker">2</div>
                <div class="timeline__content">
                    <h3>Inštalácie</h3>
                    <p>Rozvody vody a odpadov, elektroinštalácia, osadenie Geberit modulov.</p>
                    <span class="timeline__duration">2 – 4 dni</span>
                </div>
            </li>
            <li class="timeline__step">
                <div class="timeline__marker">3</div>
                <div class="timeline__content">
                    <h3>Hydroizolácia a hrubé omietky</h3>
                    <p>Izolácia mokrých zón, vyrovnanie a príprava podkladu pod obklady.</p>
                    <span class="timeline__duration">2 – 3 dni</span>
                </div>
            </li>
            <li class="timeline__step">
                <div class="timeline__marker">4</div>
                <div class="timeline__content">
                    <h3>Obklady, dlažby alebo mikrocement</h3>
                    <p>Precízne kladenie veľkoformátových dlažieb alebo aplikácia mikrocementu.</p>
                    <span class="timeline__duration">4 – 8 dní</span>
                </div>
            </li>
            <li class="timeline__step">
                <div class="timeline__marker">5</div>
                <div class="timeline__content">
                    <h3>Dekoračné stierky a maľby</h3>
                    <p>Povrchové úpravy stien mimo mokrých zón, maľby a dokončovacie detaily.</p>
                    <span class="timeline__duration">2 – 4 dni</span>
                </div>
            </li>
            <li class="timeline__step">
                <div class="timeline__marker">6</div>
                <div class="timeline__content">
                    <h3>Sanita, doplnky a odovzdanie</h3>
                    <p>Osadenie sanity, batérií, osvetlenia a finálne upratanie priestoru.</p>
                    <span class="timeline__duration">1 – 2 dni</span>
                </div>
            </li>
        </ol>

        <p class="timeline__total">Celková realizácia: <strong>2 – 4 týždne</strong> v závislosti od rozsahu prác.</p>
    </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
