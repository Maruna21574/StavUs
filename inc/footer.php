</main>

<section class="cta-band">
    <div class="container cta-band__inner">
        <div>
            <h2>Máte predstavu o novom interiéri?</h2>
            <p>Poraďme sa spolu — konzultácia je nezáväzná a bez poplatku.</p>
        </div>
        <a href="kontakt.php" class="btn btn--light">Dohodnúť konzultáciu</a>
    </div>
</section>

<footer class="site-footer">
    <div class="container site-footer__grid">
        <div class="footer-col footer-col--brand">
            <img class="footer-brand__logo" src="img/stav_us_blue.png" alt="<?= htmlspecialchars($cfg['site_name']) ?>">
            <p><?= htmlspecialchars($cfg['site_tagline']) ?></p>
            <?php if (!empty($cfg['social']['instagram']) || !empty($cfg['social']['facebook'])): ?>
            <div class="footer-social">
                <?php if (!empty($cfg['social']['instagram'])): ?>
                    <a href="<?= htmlspecialchars($cfg['social']['instagram']) ?>" aria-label="Instagram">Instagram</a>
                <?php endif; ?>
                <?php if (!empty($cfg['social']['facebook'])): ?>
                    <a href="<?= htmlspecialchars($cfg['social']['facebook']) ?>" aria-label="Facebook">Facebook</a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>

        <div class="footer-col">
            <h3>Navigácia</h3>
            <ul>
                <?php foreach ($navItems as $item): ?>
                    <li><a href="<?= htmlspecialchars($item['url']) ?>"><?= htmlspecialchars($item['label']) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="footer-col">
            <h3>Služby</h3>
            <ul>
                <li><a href="sluzby.php#dlazby">Dlažby</a></li>
                <li><a href="sluzby.php#mikrocement">Mikrocement</a></li>
                <li><a href="sluzby.php#stierky">Dekoračné stierky</a></li>
                <li><a href="sluzby.php#kupelne">Kúpeľne</a></li>
                <li><a href="sluzby.php#interier">Interiérové práce</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h3>Kontakt</h3>
            <ul class="footer-contact">
                <li><a href="tel:<?= htmlspecialchars($cfg['phone_link']) ?>"><?= htmlspecialchars($cfg['phone']) ?></a></li>
                <li><a href="mailto:<?= htmlspecialchars($cfg['email']) ?>"><?= htmlspecialchars($cfg['email']) ?></a></li>
                <li><?= htmlspecialchars($cfg['address_line1']) ?>, <?= htmlspecialchars($cfg['address_line2']) ?></li>
                <li><?= htmlspecialchars($cfg['hours_weekday']) ?></li>
            </ul>
        </div>
    </div>

    <div class="site-footer__bottom">
        <div class="container site-footer__bottom-inner">
            <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($cfg['site_name']) ?>. Všetky práva vyhradené.</p>
            <ul class="footer-legal">
                <li><a href="gdpr.php">Ochrana osobných údajov</a></li>
                <li><a href="gdpr.php#cookies">Cookies</a></li>
            </ul>
        </div>
    </div>
</footer>

<div class="cookie-banner" id="cookieBanner" hidden>
    <div class="cookie-banner__inner">
        <p>Táto stránka používa cookies na zabezpečenie základnej funkčnosti a analýzu návštevnosti. Viac info nájdete v <a href="gdpr.php#cookies">zásadách používania cookies</a>.</p>
        <div class="cookie-banner__actions">
            <button type="button" class="btn btn--outline btn--sm" id="cookieDecline">Odmietnuť</button>
            <button type="button" class="btn btn--primary btn--sm" id="cookieAccept">Súhlasím</button>
        </div>
    </div>
</div>

<script src="js/main.js"></script>
</body>
</html>
