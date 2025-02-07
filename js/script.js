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
const heroImage = document.querySelector(".hero-image img");

function updateHeroImage() {
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

        // Mise à jour de l'image
        updateHeroImage();
    });
}

// Appliquer le thème sauvegardé au chargement de la page
window.addEventListener("load", () => {
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme === "dark") {
        document.body.classList.add("dark-mode");
    }

    // Mise à jour de l'image dès le chargement
    updateHeroImage();
});

// CHANGEMENT DE LANGUE
function changeLanguage() {
    var lang = document.getElementById("language-selector").value;
    window.location.href = "?lang=" + lang;
}
