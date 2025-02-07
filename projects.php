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
    <meta name="description" content="<?php echo htmlspecialchars($trans['projects_description']); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($trans['projects_title']); ?></title>
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/script.js" defer></script>
</head>
<body>

<!-- HEADER / NAVIGATION -->
<?php include("Model/header.php"); ?>

<!-- CONTENU PRINCIPAL -->
<main>
    <section class="projects">
        <h2><?php echo $trans['projects_current']; ?></h2>
        <div class="projects-container">
            <article class="project-card">
                <img src="images/projet1.png" alt="Projet UPHF" />
                <h3><?php echo $trans['project1_title']; ?></h3>
                <p><?php echo $trans['project1_desc']; ?></p>
            </article>

            <article class="project-card">
                <img src="images/projet2.png" alt="LemWork" />
                <h3><?php echo $trans['project2_title']; ?></h3>
                <p><?php echo $trans['project2_desc1']; ?></p>
                <p><?php echo $trans['project2_desc2']; ?></p>
            </article>
        </div>
    </section>

    <section class="projects" style="padding-bottom: 100px;">
        <h2><?php echo $trans['projects_completed']; ?></h2>
        <div class="projects-container">
            <article class="project-card">
                <img src="images/projet3.png" alt="Projet Puissance 4" />
                <h3><?php echo $trans['project3_title']; ?></h3>
                <p><?php echo $trans['project3_desc1']; ?></p>
                <p><?php echo $trans['project3_desc2']; ?></p>
            </article>
        </div>
    </section>
</main>

<!-- FOOTER -->
<?php include("Model/Footer.php"); ?>


</body>
</html>
