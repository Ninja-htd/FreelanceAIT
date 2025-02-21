<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Design Avancé</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('./Css/register.css') }}">
    <script defer src="{{ asset('./Js/login.js') }}"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <canvas id="particleCanvas"></canvas>
    <div class="login-container">
        <div class="login-box">
            <div class="avatar">

                <a href="{{ url('/') }}"><img src=".png" alt="Avatar"></a>

            </div>
            <h2>Inscription</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form id="RegisterForm" method="post" action="{{ route('register') }}">
                @csrf
                <div class="input-group">
                    <label for="name">Nom et prénom</label>
                    <div class="input-field">
                        <input type="text" id="email" name="name" placeholder="Entrez votre nom et prénom" required>
                        <span class="icon"><i class="fas fa-envelope"></i></span>
                    </div>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <div class="input-field">
                        <input type="text" id="email" name="email" placeholder="Entrez votre email" required>
                        <span class="icon"><i class="fas fa-envelope"></i></span>
                    </div>
                </div>
                <div class="input-group">
                    <label for="password">Mot de passe</label>
                    <div class="input-field">
                        <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe"
                            required>
                        <span class="icon toggle-password"><i class="fas fa-eye"></i></span>
                    </div>
                </div>
                <div class="input-group">
                    <label for="password">Confirmer mot de passe</label>
                    <div class="input-field">
                        <input type="password" id="password" name="password_confirmation"
                            placeholder="Confirmer votre mot de passe" required>
                        <span class="icon toggle-password"><i class="fas fa-eye"></i></span>
                    </div>
                </div>

                <button type="submit" class="login-btn">S'inscrire</button>
                <div class="or-text">Ou inscrivez-vous avec</div>
                <div class="social-login">
                    <button class="google-btn">
                        <i class="fab fa-google"></i> Google
                    </button>
                    <button class="facebook-btn">
                        <i class="fab fa-facebook"></i> Facebook
                    </button>
                </div>
            </form>
            <div class="register-link">
                <p>J'ai un compte ? <a href="{{ route('login') }}">Se connecter</a></p>
            </div>
        </div>
    </div>
</body>

</html>