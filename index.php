<?php
// Détermine la langue via un paramètre GET, par exemple ?lang=fr ou ?lang=en
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'fr';

// Vérifie que le fichier de langue existe, sinon on utilise le français par défaut
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
    <meta name="description" content="<?php echo htmlspecialchars($trans['description']); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($trans['title']); ?></title>
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/script.js" defer></script>
</head>
<body>
<!-- HEADER / NAVIGATION -->
<?php include("Model/header.php"); ?>

<!-- CONTENU PRINCIPAL -->
<!-- CONTENU PRINCIPAL -->
<main style="padding-bottom: 100px">
    <section class="hero">
        <div class="hero-content">
            <h1><?php echo $trans['hero_title']; ?></h1>
            <p class="tagline"><?php echo $trans['hero_tagline']; ?></p>
        </div>
        <div class="hero-image">
            <img src="images/index.png" alt="<?php echo $trans['hero_image_alt']; ?>" />
        </div>
    </section>

    <section class="skills-section">
        <h2><?php echo $trans['skills_title']; ?></h2>
        <div class="skills-container">
            <div class="skill">
                <h3><?php echo $trans['skill_web']; ?></h3>
                <p>HTML, CSS, JavaScript, PHP, Bash, Node.js</p>
            </div>
            <div class="skill">
                <h3><?php echo $trans['skill_db']; ?></h3>
                <p>MySQL, PostgreSQL</p>
            </div>
            <div class="skill">
                <h3><?php echo $trans['skill_cybersecurity']; ?></h3>
                <p><?php echo $trans['skill_cybersecurity_desc']; ?></p>
            </div>
            <div class="skill">
                <h3><?php echo $trans['skill_tools_methods']; ?></h3>
                <p>Git, Agile, Docker, Linux</p>
            </div>
        </div>
    </section>
</main>


<!-- FOOTER -->
<?php include("Model/Footer.php"); ?>
</body>
</html>
