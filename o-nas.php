<?php
$cfg = require __DIR__ . '/inc/config.php';
$pageTitle = 'O nás';
$pageDescription = 'Spoznajte tím ' . $cfg['site_name'] . ' — špecialistov na interiérové realizácie.';
$activePage = 'o-nas';
require __DIR__ . '/inc/header.php';
?>

<section class="page-header">
    <div class="container">
        <span class="eyebrow">Náš príbeh</span>
        <h1>Sme tím zameraný výhradne na interiér</h1>
        <p>Nerobíme hrubú stavbu ani murárske práce — sústredíme sa len na to, v čom sme najlepší: dokonalé interiérové povrchy.</p>
    </div>
</section>

<section class="about-intro">
    <div class="container">
        <div class="about-intro__visual">
            <img class="about-intro__photo" src="img/kupelne/kupelne-betonovy-obklad-02.webp" alt="Realizácia kúpeľne — betónový obklad" loading="lazy">
        </div>
        <div>
            <span class="eyebrow">Kto sme</span>
            <h2>Remeslo, na ktorom záleží do posledného detailu</h2>
            <p>Sme <?= htmlspecialchars($cfg['site_name']) ?> — tím špecializovaný na interiérové dlažby, mikrocement, dekoračné stierky a kompletné kúpeľne. Zámerne sa nevenujeme hrubej stavbe ani murárskym prácam, aby sme sa mohli naplno sústrediť na kvalitu finálnych povrchov, ktoré vidíte a používate každý deň.</p>
            <p>Naším cieľom je priniesť do interiéru svetlé, moderné a nadčasové riešenia — bez tmavých, ťaživých plôch — ktoré pôsobia vzdušne a útulne zároveň.</p>
        </div>
    </div>
</section>

<section class="values">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">Prečo my</span>
            <h2>Hodnoty, ktoré nás vedú</h2>
        </div>
        <div class="values__grid">
            <div class="value-card">
                <span class="value-card__icon" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M12 2l3 7h7l-5.5 4.5L18.5 21 12 16.5 5.5 21l2-7.5L2 9h7l3-7z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg>
                </span>
                <h3>Precíznosť</h3>
                <p>Detail rieši výsledný dojem — preto mu venujeme maximálnu pozornosť.</p>
            </div>
            <div class="value-card">
                <span class="value-card__icon" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
                <h3>Spoľahlivosť</h3>
                <p>Dohodnuté termíny a rozpočty dodržiavame — komunikujeme otvorene.</p>
            </div>
            <div class="value-card">
                <span class="value-card__icon" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M4 21V9l8-6 8 6v12M9 21v-6h6v6" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg>
                </span>
                <h3>Individuálny prístup</h3>
                <p>Každý priestor je iný — riešenia prispôsobujeme presne vašim potrebám.</p>
            </div>
            <div class="value-card">
                <span class="value-card__icon" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.6"/><path d="M8 12l3 3 5-6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
                <h3>Kvalita bez kompromisov</h3>
                <p>Pracujeme len s materiálmi a postupmi, za ktorými si stojíme.</p>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/inc/before-after.php'; ?>

<?php require __DIR__ . '/inc/footer.php'; ?>
