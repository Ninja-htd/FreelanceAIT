<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Freelancer</title>
    <link rel="stylesheet" href="{{ asset('./Css/freelancer.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="dashboard">
        <aside class="sidebar">
            <h2>Freelancer Dashboard</h2>
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">🏠 Accueil</a></li>
                    <li><a href="#">📂 Projets</a></li>
                    <li><a href="#">💰 Revenus</a></li>
                    <li><a href="#">📧 Messages</a></li>
                    <li><a href="#">⭐ Avis</a></li>
                    <li><a href="#">⚙️ Paramètres</a></li>
                    <li><a href="javascript:void()"
                            onclick="document.getElementById('logoutsubmit').submit();">Déconnecter</a></li>
                    <form action="{{ route('logout') }}" style="display: none;" method="post" id="logoutsubmit">
                        @csrf
                    </form>
                </ul>
            </nav>
        </aside>
        <main class="content">
            <h1>Tableau de Bord Freelancer</h1>
            <div class="stats">
                <div class="card">
                    <h3>Revenus</h3>
                    <p>3,500€</p>
                    <canvas id="revenusChart"></canvas>
                </div>
                <div class="card">
                    <h3>Projets en cours</h3>
                    <p>7</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 70%;"></div>
                    </div>
                </div>
                <div class="card">
                    <h3>Messages</h3>
                    <p>5 nouveaux messages</p>
                </div>
                <div class="card">
                    <h3>Avis Clients</h3>
                    <p>⭐ 4.8/5</p>
                </div>
            </div>
            <div class="chart-container">
                <h2>Évolution des Revenus</h2>
                <canvas id="evolutionChart"></canvas>
            </div>
            <div class="progress-section">
                <h2>Progression des Objectifs</h2>
                <div class="progress-bar">
                    <div class="progress" style="width: 85%;">85%</div>
                </div>
            </div>
        </main>
    </div>
    <script src="script.js"></script>
    <script>
        var ctx = document.getElementById('evolutionChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin'],
                datasets: [{
                    label: 'Revenus (€)',
                    data: [2000, 2500, 3000, 3200, 3500, 4000],
                    borderColor: 'blue',
                    fill: false
                }]
            }
        });
    </script>
</body>

</html>