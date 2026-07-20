<?php
$cfg = require __DIR__ . '/inc/config.php';

$pageTitle = 'Kontakt';
$pageDescription = 'Kontaktujte ' . $cfg['site_name'] . ' — nezáväzná konzultácia k vašej interiérovej realizácii.';
$activePage = 'kontakt';

$errors  = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Honeypot pole — ak je vyplnené, ide o bota, tichý "úspech"
    $honeypot = trim($_POST['website'] ?? '');

    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $phone   = trim($_POST['phone'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $consent = isset($_POST['consent']);

    if ($honeypot === '') {
        if ($name === '' || mb_strlen($name) > 100) {
            $errors[] = 'Zadajte prosím platné meno.';
        }
        if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Zadajte prosím platný e-mail.';
        }
        if ($message === '' || mb_strlen($message) > 3000) {
            $errors[] = 'Napíšte prosím správu (max. 3000 znakov).';
        }
        if (!$consent) {
            $errors[] = 'Pre odoslanie je potrebný súhlas so spracovaním údajov.';
        }

        if (empty($errors)) {
            $to      = $cfg['email'];
            $subject = 'Nová správa z webu — ' . $cfg['site_name'];

            $body  = "Meno: {$name}\n";
            $body .= "E-mail: {$email}\n";
            $body .= 'Telefón: ' . ($phone !== '' ? $phone : '-') . "\n";
            $body .= 'Služba: ' . ($service !== '' ? $service : '-') . "\n\n";
            $body .= "Správa:\n{$message}\n";

            $headers   = [];
            $headers[] = 'From: ' . $cfg['site_name'] . ' <' . $cfg['email'] . '>';
            $headers[] = 'Reply-To: ' . $email;
            $headers[] = 'Content-Type: text/plain; charset=UTF-8';

            @mail($to, $subject, $body, implode("\r\n", $headers));

            $success = true;
            $name = $email = $phone = $service = $message = '';
        }
    } else {
        $success = true;
    }
}

require __DIR__ . '/inc/header.php';
?>

<section class="page-header">
    <div class="container">
        <span class="eyebrow">Sme tu pre vás</span>
        <h1>Poďme sa spolu porozprávať o vašom interiéri</h1>
        <p>Napíšte nám alebo zavolajte — konzultácia je vždy nezáväzná.</p>
    </div>
</section>

<section class="contact-section">
    <div class="container contact-grid">

        <div class="contact-info">
            <div class="contact-info__item">
                <span class="contact-info__icon" aria-hidden="true">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.5 21 3 13.5 3 4c0-.6.4-1 1-1h3.4c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
                </span>
                <div>
                    <h3>Telefón</h3>
                    <p><a href="tel:<?= htmlspecialchars($cfg['phone_link']) ?>"><?= htmlspecialchars($cfg['phone']) ?></a></p>
                </div>
            </div>
            <div class="contact-info__item">
                <span class="contact-info__icon" aria-hidden="true">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M4 7l8 6 8-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
                <div>
                    <h3>E-mail</h3>
                    <p><a href="mailto:<?= htmlspecialchars($cfg['email']) ?>"><?= htmlspecialchars($cfg['email']) ?></a></p>
                </div>
            </div>
            <div class="contact-info__item">
                <span class="contact-info__icon" aria-hidden="true">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 21s7-6.5 7-11.5A7 7 0 105 9.5C5 14.5 12 21 12 21z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><circle cx="12" cy="9.5" r="2.3" stroke="currentColor" stroke-width="1.5"/></svg>
                </span>
                <div>
                    <h3>Adresa</h3>
                    <p><?= htmlspecialchars($cfg['address_line1']) ?><br><?= htmlspecialchars($cfg['address_line2']) ?></p>
                </div>
            </div>
            <div class="contact-info__item">
                <span class="contact-info__icon" aria-hidden="true">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5"/><path d="M12 7v5l3 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                </span>
                <div>
                    <h3>Otváracie hodiny</h3>
                    <p><?= htmlspecialchars($cfg['hours_weekday']) ?><br><?= htmlspecialchars($cfg['hours_weekend']) ?></p>
                </div>
            </div>

            <div class="contact-map">
                <iframe src="<?= htmlspecialchars($cfg['map_embed_src']) ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Mapa — <?= htmlspecialchars($cfg['site_name']) ?>"></iframe>
            </div>
        </div>

        <div class="form-card">
            <h2>Napíšte nám</h2>

            <?php if ($success): ?>
                <div class="alert alert--success">Ďakujeme za správu! Ozveme sa vám čo najskôr.</div>
            <?php endif; ?>

            <?php if (!empty($errors)): ?>
                <div class="alert alert--error">
                    <?php foreach ($errors as $error): ?>
                        <div><?= htmlspecialchars($error) ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <form method="post" action="kontakt.php#kontakt-formular" novalidate>
                <input type="text" name="website" id="website" class="form-note" tabindex="-1" autocomplete="off" value="">

                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Meno a priezvisko *</label>
                        <input type="text" id="name" name="name" required maxlength="100" value="<?= htmlspecialchars($name ?? '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail *</label>
                        <input type="email" id="email" name="email" required maxlength="150" value="<?= htmlspecialchars($email ?? '') ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Telefón</label>
                        <input type="tel" id="phone" name="phone" maxlength="30" value="<?= htmlspecialchars($phone ?? '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="service">Mám záujem o</label>
                        <select id="service" name="service">
                            <option value="">Vyberte službu</option>
                            <option value="Dlažby">Dlažby</option>
                            <option value="Mikrocement">Mikrocement</option>
                            <option value="Dekoračné stierky">Dekoračné stierky</option>
                            <option value="Kúpeľne">Kúpeľne</option>
                            <option value="Interiérové práce">Interiérové práce</option>
                            <option value="Iné">Iné</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group form-group--full">
                        <label for="message">Správa *</label>
                        <textarea id="message" name="message" rows="5" required maxlength="3000"><?= htmlspecialchars($message ?? '') ?></textarea>
                    </div>
                </div>

                <label class="form-consent">
                    <input type="checkbox" name="consent" <?= !empty($_POST['consent']) ? 'checked' : '' ?> required>
                    <span>Súhlasím so spracovaním osobných údajov za účelom vybavenia mojej požiadavky.</span>
                </label>

                <button type="submit" class="btn btn--primary btn--block">Odoslať správu</button>
            </form>
        </div>

    </div>
</section>

<?php require __DIR__ . '/inc/before-after.php'; ?>

<?php require __DIR__ . '/inc/footer.php'; ?>
