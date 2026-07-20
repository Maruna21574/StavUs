<?php
/**
 * Spoločná hlavička. Očakáva (voliteľne) premenné nastavené pred include:
 * $pageTitle, $pageDescription, $activePage (napr. 'home', 'sluzby', 'referencie', 'o-nas', 'kontakt')
 */
$cfg = require __DIR__ . '/config.php';

$pageTitle       = $pageTitle ?? $cfg['site_name'];
$pageDescription = $pageDescription ?? $cfg['site_tagline'];
$activePage      = $activePage ?? '';

$navItems = [
    'home'       => ['url' => 'index.php',      'label' => 'Domov'],
    'sluzby'     => ['url' => 'sluzby.php',      'label' => 'Služby'],
    'referencie' => ['url' => 'referencie.php',  'label' => 'Referencie'],
    'o-nas'      => ['url' => 'o-nas.php',       'label' => 'O nás'],
    'kontakt'    => ['url' => 'kontakt.php',     'label' => 'Kontakt'],
];
?>
<!doctype html>
<html lang="sk">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($pageTitle) ?> | <?= htmlspecialchars($cfg['site_name']) ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
<link rel="icon" type="image/png" href="img/favicon_stav.png?v=3">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">
</head>
<body>

<a class="skip-link" href="#main">Preskočiť na obsah</a>

<header class="site-header">
    <div class="container site-header__inner">
        <a href="index.php" class="brand">
            <img class="brand__logo" src="img/stav_us_blue.png" alt="<?= htmlspecialchars($cfg['site_name']) ?>">
        </a>

        <button class="nav-toggle" id="navToggle" aria-expanded="false" aria-controls="primaryNav" aria-label="Otvoriť menu">
            <span></span><span></span><span></span>
        </button>

        <nav class="nav" id="primaryNav">
            <ul class="nav__list">
                <?php foreach ($navItems as $key => $item): ?>
                <li>
                    <a href="<?= htmlspecialchars($item['url']) ?>" class="<?= $activePage === $key ? 'is-active' : '' ?>">
                        <?= htmlspecialchars($item['label']) ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
            <a href="tel:<?= htmlspecialchars($cfg['phone_link']) ?>" class="nav__phone">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.5 21 3 13.5 3 4c0-.6.4-1 1-1h3.4c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
                <?= htmlspecialchars($cfg['phone']) ?>
            </a>
        </nav>
    </div>
</header>

<main id="main">
