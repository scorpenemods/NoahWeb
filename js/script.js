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

// Vérifie si l'URL contient "index.php" ou si c'est la page d'accueil sans extension
const isIndexPage = window.location.pathname.endsWith("index.php") || window.location.pathname === "/";

// Sélection de l'image uniquement sur index.php
const heroImage = isIndexPage ? document.querySelector(".hero-image img") : null;

function updateHeroImage() {
    if (heroImage) {
        if (document.body.classList.contains("dark-mode")) {
            heroImage.src = "images/indexx.png";
        } else {
            heroImage.src = "images/index.png";
        }
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

        // Exécute updateHeroImage uniquement sur index.php
        if (isIndexPage) {
            updateHeroImage();
        }
    });
}

// Appliquer le thème sauvegardé au chargement de la page
window.addEventListener("load", () => {
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme === "dark") {
        document.body.classList.add("dark-mode");
    }

    // Exécute updateHeroImage uniquement sur index.php
    if (isIndexPage) {
        updateHeroImage();
    }
});

// CHANGEMENT DE LANGUE
function changeLanguage() {
    var lang = document.getElementById("language-selector").value;
    window.location.href = "?lang=" + lang;
}
