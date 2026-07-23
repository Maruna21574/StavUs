<?php
$cfg = require __DIR__ . '/inc/config.php';
$pageTitle = 'Ochrana osobných údajov';
$pageDescription = 'Informácie o spracúvaní osobných údajov a používaní cookies na webe ' . $cfg['site_name'] . '.';
$activePage = '';
require __DIR__ . '/inc/header.php';
?>

<section class="page-header">
    <div class="container">
        <span class="eyebrow">Právne informácie</span>
        <h1>Ochrana osobných údajov a cookies</h1>
        <p>Posledná aktualizácia: <?= date('d.m.Y') ?></p>
    </div>
</section>

<section class="legal">
    <div class="container legal-content">

        <h2 id="ochrana-udajov">Ochrana osobných údajov</h2>
        <p>Prevádzkovateľom webovej stránky a spracovateľom osobných údajov je <strong><?= htmlspecialchars($cfg['site_name']) ?></strong>, so sídlom <?= htmlspecialchars($cfg['address_line1']) ?>, <?= htmlspecialchars($cfg['address_line2']) ?> (ďalej len „prevádzkovateľ“). Kontaktovať nás môžete na e-maile <a href="mailto:<?= htmlspecialchars($cfg['email']) ?>"><?= htmlspecialchars($cfg['email']) ?></a> alebo telefonicky na <a href="tel:<?= htmlspecialchars($cfg['phone_link']) ?>"><?= htmlspecialchars($cfg['phone']) ?></a>.</p>

        <h3>Aké údaje spracúvame</h3>
        <p>Prostredníctvom kontaktného formulára spracúvame údaje, ktoré nám sami poskytnete: meno a priezvisko, e-mailová adresa, telefónne číslo (nepovinné) a obsah vašej správy.</p>

        <h3>Účel a právny základ spracovania</h3>
        <p>Údaje spracúvame výhradne za účelom vybavenia vašej požiadavky a nezáväznej konzultácie k realizácii. Právnym základom je váš súhlas udelený pri odoslaní formulára a oprávnený záujem prevádzkovateľa reagovať na prijaté dopyty.</p>

        <h3>Doba uchovávania</h3>
        <p>Osobné údaje uchovávame len po dobu nevyhnutnú na vybavenie vašej požiadavky, prípadne po dobu trvania zmluvného vzťahu a zákonných archivačných lehôt, ak z neho vznikne.</p>

        <h3>Vaše práva</h3>
        <p>V súlade s nariadením GDPR a zákonom č. 18/2018 Z. z. máte právo na prístup k svojim údajom, ich opravu, vymazanie, obmedzenie spracovania, prenosnosť a právo namietať proti spracovaniu. Svoje práva si môžete uplatniť na kontaktnom e-maile vyššie. Zároveň máte právo podať sťažnosť Úradu na ochranu osobných údajov SR.</p>

        <h2 id="cookies">Používanie cookies</h2>
        <p>Táto stránka používa malé množstvo súborov cookie a technológií lokálneho úložiska prehliadača:</p>
        <ul>
            <li><strong>Nevyhnutné cookies</strong> — zabezpečujú základnú funkčnosť stránky (napr. zapamätanie vášho súhlasu s cookies). Bez nich stránka nemôže fungovať správne.</li>
        </ul>
        <p>Analytické ani marketingové cookies na stránke aktuálne nepoužívame. Súhlas alebo nesúhlas s cookies môžete kedykoľvek zmeniť vymazaním údajov lokálneho úložiska vo vašom prehliadači pre túto stránku.</p>

        <p class="legal-note">Tento text je všeobecným vzorom a neslúži ako právne záväzné stanovisko. Pred plným nasadením webu odporúčame obsah tejto stránky skonzultovať s právnikom, aby zodpovedal presnému rozsahu spracovania údajov vo vašej prevádzke.</p>

    </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
