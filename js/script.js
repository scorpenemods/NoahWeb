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

    // Détection de la page d'accueil (index.php, index.html ou "/")
    const pathname = window.location.pathname;
    const isIndexPage = pathname.endsWith("index.php") || pathname.endsWith("index.html") || pathname === "/";

    // Sélection de l'image uniquement si on est sur la page d'accueil
    const heroImage = isIndexPage ? document.querySelector(".hero-image img") : null;

    // Fonction de mise à jour de l'image
    function updateHeroImage() {
        if (!heroImage) {
            console.log("heroImage element not found");
            return;
        }
        if (document.body.classList.contains("dark-mode")) {
            heroImage.src = "images/indexx.png";
        } else {
            heroImage.src = "images/index.png";
        }
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

            // Met à jour l'image uniquement sur la page d'accueil
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
