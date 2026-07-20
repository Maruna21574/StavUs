<?php
/**
 * Znovupoužiteľná sekcia "Pred a po" — vkladá sa cez require na viacerých stránkach.
 * Očakáva, že $cfg už bol načítaný v header.php (nie je tu potrebný).
 */
$beforeAfterItems = [
    [
        'before'  => 'img/kupelne/kupelne-pred-rekonstrukciou-03.webp',
        'after'   => 'img/kupelne/kupelne-zeleny-obklad-02.webp',
        'caption' => 'Kúpeľňa — kompletná rekonštrukcia (obklady, kúrenie, sanita)',
    ],
    [
        'before'  => 'img/kupelne/kupelne-pred-rekonstrukciou-01.webp',
        'after'   => 'img/kupelne/kupelne-wc-drevany-obklad.webp',
        'caption' => 'Kúpeľňa — nová dlažba a obklady',
    ],
];
?>
<section class="before-after">
    <div class="container">
        <div class="section-head section-head--center">
            <span class="eyebrow">Vizuálne porovnanie</span>
            <h2>Pred a po</h2>
            <p>Potiahnite posuvník myšou (alebo prstom) a pozrite si, ako sa priestor zmenil.</p>
        </div>

        <div class="before-after__grid">
            <?php foreach ($beforeAfterItems as $ba): ?>
                <figure class="ba-item">
                    <div class="ba-slider" data-ba-slider>
                        <img class="ba-slider__img ba-slider__after" src="<?= htmlspecialchars($ba['after']) ?>" alt="Stav po realizácii">
                        <div class="ba-slider__before-wrap">
                            <img class="ba-slider__img" src="<?= htmlspecialchars($ba['before']) ?>" alt="Stav pred realizáciou">
                        </div>
                        <div class="ba-slider__divider" aria-hidden="true"></div>
                        <span class="ba-slider__label ba-slider__label--before">Pred</span>
                        <span class="ba-slider__label ba-slider__label--after">Po</span>
                        <button type="button" class="ba-slider__handle" tabindex="-1" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M8 7l-5 5 5 5M16 7l5 5-5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <input type="range" class="ba-slider__range" min="0" max="100" value="50" aria-label="Posuvník porovnania pred a po">
                    </div>
                    <figcaption><?= htmlspecialchars($ba['caption']) ?></figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>
