<header>
    <nav class="navbar">
        <a href="index.php?lang=<?php echo $lang; ?>" class="logo">MonPortfolio</a>
        <button class="toggle-button" id="nav-toggle" aria-label="Menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
        <div class="navbar-links" id="nav-links">
            <ul>
                <!-- Sélecteur de langue -->
                <li class="language-switcher">
                    <select id="language-selector" onchange="changeLanguage()">
                        <option value="fr" <?php echo ($lang == 'fr') ? 'selected' : ''; ?>>🇫🇷 FR</option>
                        <option value="en" <?php echo ($lang == 'en') ? 'selected' : ''; ?>>🇬🇧 EN</option>
                    </select>
                </li>
                <li><a href="index.php?lang=<?php echo $lang; ?>"><?php echo $trans['nav_accueil']; ?></a></li>
                <li><a href="projects.php?lang=<?php echo $lang; ?>"><?php echo $trans['nav_projects']; ?></a></li>
                <li><a href="experiences.php?lang=<?php echo $lang; ?>"><?php echo $trans['nav_experiences']; ?></a></li>
                <li><a href="cvpage.php?lang=<?php echo $lang; ?>"><?php echo $trans['nav_cv']; ?></a></li>
                <li><a href="contact.php?lang=<?php echo $lang; ?>"><?php echo $trans['nav_contact']; ?></a></li>
            </ul>
            <button class="dark-mode-toggle" id="dark-mode-toggle"><?php echo $trans['dark_mode']; ?></button>
        </div>
    </nav>
</header>