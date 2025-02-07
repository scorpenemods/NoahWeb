<?php
// Détection de la langue (via ?lang=fr ou ?lang=en)
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'fr';

// Vérifie que le fichier de langue existe, sinon charge le français par défaut
$localeFile = __DIR__ . "/locales/{$lang}.php";
if (!file_exists($localeFile)) {
    $localeFile = __DIR__ . "/locales/fr.php";
    $lang = 'fr';
}

// Charge les traductions
$trans = include($localeFile);
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="<?php echo htmlspecialchars($trans['page_title']); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($trans['page_title']); ?></title>
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/script.js" defer></script>
</head>
<body>
<!-- HEADER / NAVIGATION -->
<?php include("Model/header.php"); ?>

<!-- CONTENU PRINCIPAL -->
<main style="padding: 20px">
    <!-- Section Expériences Professionnelles -->
    <section class="experiences">
        <h2><?php echo $trans['professional_experience_title']; ?></h2>
        <div class="experience-item">
            <h3><?php echo $trans['experience_item1_title']; ?></h3>
            <p><?php echo $trans['experience_item1_desc']; ?></p>
        </div>
        <div class="experience-item">
            <h3><?php echo $trans['experience_item2_title']; ?></h3>
            <p><?php echo $trans['experience_item2_desc']; ?></p>
        </div>
        <div class="experience-item">
            <h3><?php echo $trans['experience_item3_title']; ?></h3>
            <p><?php echo $trans['experience_item3_desc']; ?></p>
        </div>
    </section>

    <!-- Section Parcours Académique -->
    <section class="education">
        <h2><?php echo $trans['academic_experience_title']; ?></h2>
        <div class="experience-item">
            <h3><?php echo $trans['education_item2_title']; ?></h3>
            <p><?php echo $trans['education_item2_desc']; ?></p>
        </div>
        <div class="experience-item">
            <h3><?php echo $trans['education_item1_title']; ?></h3>
            <p><?php echo $trans['education_item1_desc1']; ?></p>
            <p><?php echo $trans['education_item1_desc2']; ?></p>
        </div>
    </section>
</main>

<!-- FOOTER -->
<?php include("Model/Footer.php"); ?>


</body>
</html>
