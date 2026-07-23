<?php
$pageTitle = 'Referencie';
$pageDescription = 'Ukážky realizácií — dlažby, mikrocement, dekoračné stierky a kúpeľne.';
$activePage = 'referencie';
require __DIR__ . '/inc/header.php';

// Realizácie zoskupené podľa skutočného projektu — fotky z tej istej realizácie
// idú v galérii pekne za sebou. Každá realizácia má kategóriu, názov, mesto a fotky.
$projects = [
    ['cat' => 'dlazby',      'title' => 'Terasa a bazén',             'city' => 'Senec',      'images' => [
        'img/dlazby/dlazby-terasa-01.webp',
        'img/dlazby/dlazby-terasa-02.webp',
        'img/dlazby/dlazby-terasa-03.webp',
        'img/dlazby/dlazby-terasa-04.webp',
        'img/dlazby/dlazby-bazen-01.webp',
        'img/dlazby/dlazby-bazen-02.webp',
        'img/dlazby/dlazby-bazen-03.webp',
        'img/dlazby/dlazby-schodisko-01.webp',
    ]],
    ['cat' => 'kupelne',     'title' => 'Kúpeľňa so sprchovým kútom', 'city' => 'Bratislava', 'images' => [
        'img/kupelne/kupelne-sprchovy-kut-01.webp',
        'img/kupelne/kupelne-umyvadlo-01.webp',
        'img/kupelne/kupelne-sprcha-wc-01.webp',
    ]],
    ['cat' => 'kupelne',     'title' => 'Kúpeľňa — drevený dekor',    'city' => 'Trnava',     'images' => [
        'img/kupelne/kupelne-pred-rekonstrukciou-01.webp',
        'img/kupelne/kupelne-vana-mozaika.webp',
    ]],
    ['cat' => 'kupelne',     'title' => 'WC — drevený dekor',          'city' => 'Trnava',     'images' => [
        'img/kupelne/kupelne-priprava-instalacia.webp',
        'img/kupelne/kupelne-wc-drevany-obklad.webp',
    ]],
    ['cat' => 'kupelne',     'title' => 'Kúpeľňa — zelený obklad',    'city' => 'Senec',      'images' => [
        'img/kupelne/kupelne-pred-rekonstrukciou-02.webp',
        'img/kupelne/kupelne-pred-rekonstrukciou-03.webp',
        'img/kupelne/kupelne-zeleny-obklad-01.webp',
        'img/kupelne/kupelne-zeleny-obklad-02.webp',
    ]],
    ['cat' => 'kupelne',     'title' => 'Kúpeľňa — sivý obklad',       'city' => 'Senec',      'images' => [
        'img/kupelne/kupelne-sprchovy-kut-02.webp',
        'img/kupelne/kupelne-industrialne-umyvadlo.webp',
        'img/kupelne/kupelne-sprchovy-kut-04.webp',
    ]],
    ['cat' => 'mikrocement', 'title' => 'Detail povrchu',             'city' => 'Trnava',     'images' => [
        'img/mikrocement/mikrocement-detail-01.webp',
        'img/mikrocement/mikrocement-detail-02.webp',
    ]],
    ['cat' => 'stierky',     'title' => 'Akcentová stena',            'city' => 'Modra',      'images' => [
        'img/stierky/stierky-akcentova-stena.webp',
    ]],
    ['cat' => 'kupelne',     'title' => 'Malá kúpeľňa',               'city' => 'Pezinok',    'images' => [
        'img/kupelne/kupelne-mala-kupelna-01.webp',
        'img/kupelne/kupelne-wc-detail-01.webp',
        'img/kupelne/kupelne-wc-detail-02.webp',
    ]],
    ['cat' => 'kupelne',     'title' => 'Kúpeľňa — terazzo',          'city' => 'Modra',      'images' => [
        'img/kupelne/kupelne-vana-terazzo-01.webp',
        'img/kupelne/kupelne-sprcha-terazzo-01.webp',
        'img/kupelne/kupelne-vana-terazzo-02.webp',
        'img/kupelne/kupelne-sprcha-terazzo-02.webp',
    ]],
    ['cat' => 'dlazby',      'title' => 'Obklad pultu',               'city' => 'Bratislava', 'images' => [
        'img/dlazby/dlazby-obklad-pult.webp',
    ]],
    ['cat' => 'stierky',     'title' => 'Benátsky štuk — ornament',   'city' => 'Bratislava', 'images' => [
        'img/stierky/stierky-mandala-01.webp',
        'img/stierky/stierky-mandala-02.webp',
    ]],
    ['cat' => 'mikrocement', 'title' => 'Sprchová nika',              'city' => 'Malacky',    'images' => [
        'img/mikrocement/mikrocement-sprchovy-kut.webp',
    ]],
    ['cat' => 'kupelne',     'title' => 'Kúpeľňa — betónový vzhľad',  'city' => 'Malacky',    'images' => [
        'img/kupelne/kupelne-betonovy-obklad-01.webp',
        'img/kupelne/kupelne-betonovy-obklad-02.webp',
        'img/kupelne/kupelne-betonovy-obklad-03.webp',
        'img/kupelne/kupelne-betonovy-obklad-04.webp',
        'img/kupelne/kupelne-betonovy-obklad-05.webp',
    ]],
    ['cat' => 'kupelne',     'title' => 'Sprchový kút — betónový obklad', 'city' => 'Malacky', 'images' => [
        'img/kupelne/kupelne-sprchovy-kut-05.webp',
    ]],
    ['cat' => 'stierky',     'title' => 'Dekoračná stierka',          'city' => 'Modra',      'images' => [
        'img/stierky/stierky-dekorativna-01.webp',
        'img/stierky/stierky-dekorativna-02.webp',
    ]],
    ['cat' => 'stierky',     'title' => 'Stierka — obývačka',         'city' => 'Pezinok',    'images' => [
        'img/stierky/stierky-ruzova-stena.webp',
    ]],
    ['cat' => 'stierky',     'title' => 'Aplikácia stierky',          'city' => 'Trnava',     'images' => [
        'img/stierky/stierky-aplikacia.webp',
    ]],
    ['cat' => 'kupelne',     'title' => 'Kúpeľňa s vaňou',            'city' => 'Bratislava', 'images' => [
        'img/kupelne/kupelne-vana-bezova-01.webp',
    ]],
    ['cat' => 'kupelne',     'title' => 'Kúpeľňa — terakotová skrinka', 'city' => 'Trnava',   'images' => [
        'img/kupelne/kupelne-umyvadlo-terakota.webp',
    ]],
];

$filters = [
    'all'         => 'Všetko',
    'dlazby'      => 'Dlažby',
    'mikrocement' => 'Mikrocement',
    'stierky'     => 'Dekoračné stierky',
    'kupelne'     => 'Kúpeľne',
];
?>

<section class="page-header">
    <div class="container">
        <span class="eyebrow">Naša práca</span>
        <h1>Referencie a realizácie</h1>
        <p>Výber z realizovaných prác — dlažby, mikrocement, dekoračné stierky a kúpeľne.</p>
    </div>
</section>

<section class="gallery">
    <div class="container">
        <div class="filters">
            <?php foreach ($filters as $key => $label): ?>
                <button type="button" class="filter-btn <?= $key === 'all' ? 'is-active' : '' ?>" data-filter="<?= htmlspecialchars($key) ?>">
                    <?= htmlspecialchars($label) ?>
                </button>
            <?php endforeach; ?>
        </div>

        <div class="gallery__grid">
            <?php foreach ($projects as $project): ?>
                <?php $photoCount = count($project['images']); ?>
                <button type="button" class="gallery-item" data-category="<?= htmlspecialchars($project['cat']) ?>" data-caption="<?= htmlspecialchars($project['title'] . ' · ' . $project['city']) ?>" data-images='<?= htmlspecialchars(json_encode($project['images']), ENT_QUOTES) ?>'>
                    <img class="gallery-item__photo" src="<?= htmlspecialchars($project['images'][0]) ?>" alt="<?= htmlspecialchars($project['title'] . ' — ' . $project['city']) ?>" loading="lazy">
                    <?php if ($photoCount > 1): ?>
                        <span class="gallery-item__count" aria-label="<?= $photoCount ?> fotografií">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 7h3l1.5-2h7L17 7h3v12H4V7Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><circle cx="12" cy="13" r="3.2" stroke="currentColor" stroke-width="1.8"/></svg>
                            <?= $photoCount ?>
                        </span>
                    <?php endif; ?>
                    <div class="gallery-item__label">
                        <strong><?= htmlspecialchars($project['title']) ?></strong>
                        <?= htmlspecialchars($project['city']) ?>
                    </div>
                </button>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<div class="lightbox" id="lightbox" hidden>
    <button type="button" class="lightbox__close" id="lightboxClose" aria-label="Zavrieť">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
    </button>
    <button type="button" class="lightbox__nav lightbox__nav--prev" id="lightboxPrev" aria-label="Predchádzajúca fotka">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M15 6l-6 6 6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </button>
    <button type="button" class="lightbox__nav lightbox__nav--next" id="lightboxNext" aria-label="Nasledujúca fotka">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </button>
    <figure class="lightbox__figure">
        <img class="lightbox__img" id="lightboxImg" src="" alt="">
        <figcaption class="lightbox__caption">
            <span id="lightboxCaption"></span>
            <span class="lightbox__counter" id="lightboxCounter"></span>
        </figcaption>
    </figure>
</div>

<?php require __DIR__ . '/inc/before-after.php'; ?>

<section class="projects-map">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">Kde pôsobíme</span>
            <h2>Trenčín a okolie</h2>
            <p>Realizácie robíme v Trenčíne a jeho okolí — v prípade záujmu sa dohodneme aj na realizácii mimo tohto regiónu.</p>
        </div>
    </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
