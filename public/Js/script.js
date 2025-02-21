document.addEventListener("DOMContentLoaded", function() {
    // Gestion du formulaire de contact
    document.getElementById("contact-form").addEventListener("submit", function(event) {
        event.preventDefault();
        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;
        let message = document.getElementById("message").value;
        
        if (name && email && message) {
            document.getElementById("response-message").textContent = "Message envoyé avec succès !";
            document.getElementById("response-message").style.color = "lightgreen";
        } else {
            document.getElementById("response-message").textContent = "Veuillez remplir tous les champs.";
            document.getElementById("response-message").style.color = "red";
        }
    });
});