@extends('auth.layout.app')
@section('content')

    <canvas id="particleCanvas"></canvas>
    <div class="login-container">
        <div class="login-box">
            <div class="avatar">

                <a href="{{ url('/') }}"><img src=".png" alt="Avatar"></a>

            </div>
            <h2>Connexion</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form id="loginForm" method="post" action="{{ route('login') }}">
                @csrf
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
                <div class="options">
                    <a href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                </div>
                <button type="submit" class="login-btn">Se connecter</button>
                <div class="or-text">Ou connectez-vous avec</div>
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
                <p>Pas encore de compte ? <a href="{{ route('register') }}">Créez-en un</a></p>
            </div>
        </div>
    </div>
@endsection