document.addEventListener("DOMContentLoaded", function () {
    // MENU RESPONSIVE
    const navToggle = document.getElementById("nav-toggle");
    const navLinks = document.getElementById("nav-links");

    if (navToggle) {
        navToggle.addEventListener("click", () => {
            navLinks.classList.toggle("active");
        });
    }

    // DARK MODE TOGGLE
    const darkModeToggle = document.getElementById("dark-mode-toggle");

    // Vérifie si l'URL correspond à la page d'accueil (index.php ou index.html ou "/")
    const isIndexPage = window.location.pathname.endsWith("index.php") ||
        window.location.pathname.endsWith("index.html") ||
        window.location.pathname === "/";

    // Sélectionne l'image uniquement si on est sur la page d'accueil
    const heroImage = isIndexPage ? document.querySelector(".hero-image img") : null;

    function updateHeroImage() {
        // Vérifie si l'image existe avant d'essayer de modifier son src
        if (!heroImage) return;
        heroImage.src = document.body.classList.contains("dark-mode")
            ? "images/indexx.png"
            : "images/index.png";
    }

    if (darkModeToggle) {
        darkModeToggle.addEventListener("click", () => {
            document.body.classList.toggle("dark-mode");

            // Sauvegarde de la préférence dans le localStorage
            if (document.body.classList.contains("dark-mode")) {
                localStorage.setItem("theme", "dark");
            } else {
                localStorage.setItem("theme", "light");
            }

            // Exécute updateHeroImage uniquement si on est sur la page d'accueil
            if (isIndexPage) {
                updateHeroImage();
            }
        });
    }

    // Appliquer le thème sauvegardé au chargement de la page
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme === "dark") {
        document.body.classList.add("dark-mode");
    }

    // Exécute updateHeroImage uniquement si on est sur la page d'accueil
    if (isIndexPage) {
        updateHeroImage();
    }

    // CHANGEMENT DE LANGUE
    const languageSelector = document.getElementById("language-selector");
    if (languageSelector) {
        languageSelector.addEventListener("change", function () {
            var lang = this.value;
            window.location.href = "?lang=" + lang;
        });
    }
});
