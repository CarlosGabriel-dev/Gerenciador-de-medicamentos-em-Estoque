<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/dashboard.css">
    <script src="/js/dashboard.js" defer></script>
    <title>Dashboard</title>
</head>

<body>
    <div class="container">
        <aside class="sidebar">
            <h2>Humaniza</h2>
            <div class="user-info">
                <p>Carlos Gabriel</p>
                <span>Super Admin</span>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('inventory.index') }}">Inventário</a></li>
                    <li><a href="{{ route('relatorio') }}">Relatórios</a></li>
                    <li><a href="{{ route('register') }}">Cadastrar</a></li>
                </ul>
            </nav>
        </aside>

        <div class="header-right">
            <div class="greeting">
                <div class="greeting-top">
                    <span class="icon" id="greeting-icon">☀️</span>
                    <span class="text" id="greeting-text">Bom dia</span>
                </div>
                <div class="date-time">
                    <span id="current-date">14 Janeiro 2024</span> •
                    <span id="current-time">08:45:04</span>
                </div>
            </div>
        </div>

        <main class="main-content">

            <header>
                <h1>Dashboard</h1>
            </header>

            <section class="cards">

                <div class="card-inventory-status">
                    <div>
                        <div class="card-icon">
                            <img src="/img/escudo.png" alt="Ícone" style="width: 45px; height: 45px;">
                        </div>
                        <div class="card-title">Bom</div>
                        <div class="card-subtitle">Status de Inventário</div>
                    </div>
                    <a href="#" class="card-button">Relatório detalhado</a>
                </div>

                <div class="card-pedidos">
                    <div>
                        <div class="card-icon">
                            <img src="/img/pedidos.png" alt="Ícone" style="width: 45px; height: 45px;">
                        </div>
                        <div class="card-title">Pedidos</div>
                        <div class="card-subtitle">Relatório de Pedido</div>
                    </div>
                    <a href="#" class="card-button-pedidos">Relatório detalhado</a>
                </div>

                <div class="card-avaliable">
                    <div>
                        <div class="card-icon">
                            <img src="/img/estoque.png" alt="Ícone" style="width: 45px; height: 45px;">
                        </div>
                        <div class="card-title"></div>
                        <div class="card-subtitle">Medicamentos disponíveis</div>
                    </div>
                    <a href="#" class="card-button-avaliable">Ver inventário</a>
                </div>

                <div class="card-alert">
                    <div>
                        <div class="card-icon">
                            <img src="/img/alerta.png" alt="Ícone" style="width: 45px; height: 45px;">
                        </div>
                        <div class="card-title"></div>
                        <div class="card-subtitle">Medicamentos disponíveis</div>
                    </div>
                    <a href="#" class="card-button-alert">Resolver agora</a>
                </div>
            </section>

            <section class="info-cards">
                <div class="info-card">
                    <h4>Inventário</h4>
                    <p>Total de Remédio: 298</p>
                    <p>Grupos de medicamentos: 24</p>
                    <a href="#">Ver para configuração &gt;&gt;</a>
                </div>
                <div class="info-card">
                    <h4>Relatório rápido</h4>
                    <p>Medicamentos vendidos: 70,856</p>
                    <p>Saídas registradas: 5,288</p>
                    <p>Janeiro 2024</p>
                </div>
                <div class="info-card">
                    <h4>Minha farmácia</h4>
                    <p>Total de Usuários: 04</p>
                    <a href="#">Go to User Management &gt;&gt;</a>
                </div>
                <div class="info-card">
                    <h4>Medicamentos</h4>
                    <p>Entrada de medicamentos: 845</p>
                    <a href="#">Vai para cadastro de produto &gt;&gt;</a>
                </div>
            </section>
        </main>
    </div>
</body>

</html>