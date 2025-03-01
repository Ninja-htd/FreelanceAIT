<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Freelancer - Portfolio</title>
    <link rel="stylesheet" href="{{ asset('./Css/style.css') }}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- Section Hero -->
    <header class="hero">
        <div class="hero-content">
            <h1>Je suis <span class="highlight">Freelancer</span></h1>
            <p>Développeur Web | Designer UI/UX | Consultant</p>
            <div class="search-box">
                <input type="text" placeholder="Recherchez un service..." />
                <button class="search-btn">Rechercher</button>
            </div>
        </div>
        <div class="hero-image">
            <img src="hero.jpg" alt="Freelancer" />
            <div>
                @if(auth()->check())
                    <a href="{{ route('Dashbord') }}">Tableaux de Bord</a>
                @else
                    <a href="{{ route('register') }}">S'inscrire</a>
                    <a href="{{ route('login') }}">Se connecter</a>
                @endif
            </div>
        </div>
    </header>

    <!-- Section Services -->
    <section class="services" data-aos="fade-up" data-aos-duration="1000">
        <h2>Mes Services</h2>
        <div class="service-container">
            <div class="service-card">
                <h3>Développement Web</h3>
                <p>Création de sites modernes et responsives.</p>
            </div>
            <div class="service-card">
                <h3>Design UI/UX</h3>
                <p>Expérience utilisateur intuitive et design attractif.</p>
            </div>
            <div class="service-card">
                <h3>Consulting</h3>
                <p>Accompagnement et conseils en stratégie digitale.</p>
            </div>
        </div>
    </section>

    <!-- Section Portfolio -->
    <section class="portfolio" data-aos="fade-up" data-aos-duration="1000">
        <h2>Mes Projets</h2>
        <div class="portfolio-gallery">
            <img src="project1.jpg" alt="Projet 1" />
            <img src="project2.jpg" alt="Projet 2" />
            <img src="project3.jpg" alt="Projet 3" />
        </div>
    </section>

    <!-- Section Contact -->
    <section class="contact" data-aos="fade-up" data-aos-duration="1000">
        <h2>Contactez-moi</h2>
        <form id="contact-form">
            <input type="text" id="name" placeholder="Votre Nom" required />
            <input type="email" id="email" placeholder="Votre Email" required />
            <textarea id="message" placeholder="Votre Message" required></textarea>
            <button type="submit">Envoyer</button>
        </form>
        <p id="response-message"></p>
    </section>

    <script src="{{ asset('./Js/script.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>