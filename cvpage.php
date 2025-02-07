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
    <meta name="description" content="<?php echo htmlspecialchars($trans['cv_description']); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($trans['cv_title']); ?></title>
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/script.js" defer></script>
</head>
<body>

<!-- HEADER / NAVIGATION -->
<?php include("Model/header.php"); ?>

<!-- CONTENU PRINCIPAL -->
<main style="padding-bottom: 100px">
    <section class="cv-section">
        <h2><a href="monCV.pdf" download="MonCV.pdf"><?php echo $trans['cv_download']; ?></a></h2>
        <div class="cv-container">
            <!-- L'iframe affiche le PDF -->
            <iframe src="monCV.pdf?zoom=100" width="100%" height="800px" style="border: none;"></iframe>
            <noscript>
                <p><?php echo $trans['cv_noscript']; ?> <a href="monCV.pdf" target="_blank"><?php echo $trans['cv_download_here']; ?></a>.</p>
            </noscript>
        </div>
    </section>
</main>

<!-- FOOTER -->
<?php include("Model/Footer.php"); ?>


</body>
</html>
