<?php
// Détection de la langue via ?lang=fr ou ?lang=en
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'fr';

// Vérification et chargement du fichier de langue
$localeFile = __DIR__ . "/locales/{$lang}.php";
if (!file_exists($localeFile)) {
    $localeFile = __DIR__ . "/locales/fr.php";
    $lang = 'fr';
}

// Inclusion des traductions
$trans = include($localeFile);
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="<?php echo htmlspecialchars($trans['contact_description']); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($trans['contact_title']); ?></title>
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/script.js" defer></script>
</head>
<body>

<!-- HEADER / NAVIGATION -->
<?php include("Model/header.php"); ?>

<!-- CONTENU PRINCIPAL -->
<main style="padding-bottom: 50px">
    <section class="contact">
        <h2><?php echo $trans['contact_title']; ?></h2>
        <p>
            <?php echo $trans['contact_text']; ?>
            <a href="mailto:noahlemr@gmail.com">noahlemr@gmail.com</a>
            <br />
            <?php echo $trans['contact_phone']; ?> : 07 83 94 03 17
        </p>
    </section>
    <section class="contact-social">
        <h2><?php echo $trans['contact_social_title']; ?></h2>
        <div class="social-links">
            <a href="https://www.linkedin.com/in/lemaire-noah/" target="_blank" rel="noopener noreferrer">🔗 LinkedIn</a>
            <a href="https://github.com/scorpenemods" target="_blank" rel="noopener noreferrer">🐙 GitHub</a>
            <a href="https://www.root-me.org/noahlemr" target="_blank" rel="noopener noreferrer">🧑‍💻 RootMe</a>
        </div>
    </section>
    <section class="contact-map">
        <h2>📍 Localisation</h2>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.312234523538!2d3.503332776718855!3d50.36204429504942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2edc768b409b3%3A0xb5f4dcec0bfdf494!2s59300%20Valenciennes%2C%20France!5e0!3m2!1sfr!2sfr!4v1707152024245"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </section>




</main>

<!-- FOOTER -->
<?php include("Model/Footer.php"); ?>
</body>
</html>
