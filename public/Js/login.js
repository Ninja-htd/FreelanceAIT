document.addEventListener("DOMContentLoaded", () => {
    const passwordInput = document.getElementById("password");
    const togglePassword = document.querySelector(".toggle-password i");
    const emailInput = document.getElementById("email");
    const loginForm = document.getElementById("loginForm");

    // 🔥 Amélioration : Gestion sécurisée du stockage du mot de passe
    const saveCredentials = (email, password) => {
        localStorage.setItem("email", email);
        sessionStorage.setItem("password", password); // Stocke temporairement le mot de passe
    };


    // 🔥 Afficher/Cacher le mot de passe
    togglePassword.addEventListener("click", () => {
        passwordInput.type = passwordInput.type === "password" ? "text" : "password";
        togglePassword.classList.toggle("fa-eye");
        togglePassword.classList.toggle("fa-eye-slash");
    });


    // 🔥 Validation des champs
    const validateForm = () => {
        if (!emailInput.value.includes("@") || passwordInput.value.length < 6) {
            alert("Veuillez entrer un email valide et un mot de passe d'au moins 6 caractères.");
            return false;
        }
        return true;
    };

    const canvas = document.getElementById("particleCanvas");
    const ctx = canvas.getContext("2d");
    let particles = [];

    function initParticles() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        particles = [];
        for (let i = 0; i < 80; i++) { // Nombre de particules
            particles.push({
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                radius: Math.random() * 3 + 1,
                speed: Math.random() * 2 + 1
            });
        }
    }

    function drawParticles() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.fillStyle = "rgba(255, 255, 255, 0.8)";

        particles.forEach(p => {
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
            ctx.fill();
        });
    }

    function updateParticles() {
        particles.forEach(p => {
            p.y += p.speed;
            if (p.y > canvas.height) p.y = 0;
        });
    }

    function animateParticles() {
        drawParticles();
        updateParticles();
        requestAnimationFrame(animateParticles);
    }

    window.addEventListener("resize", initParticles);
    initParticles();
    animateParticles();
});
