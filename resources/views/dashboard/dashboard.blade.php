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

        <main class="main-content">

            <header class="header-greeting">
                <div class="header">
                    <span class="icon" id="greeting-icon">☀️</span>
                    <span class="text" id="greeting-text">Bom dia</span>
                </div>
                <div class="date-time">
                    <span id="current-date">14 Janeiro 2024</span> •
                    <span id="current-time">08:45:04</span>
                </div>
            </header>

            <hr class="divider">

            <header>
                <h1>Dashboard</h1>
                <p>Uma rápida visão geral dos dados do inventário</p>
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

            <hr class="divider">

            <section class="info-cards">
                <div class="card-container">

                    <div class="card-final">
                        <div class="card-title-final">Inventário<a href="#" class="card-link">Ver para configuração &gt;&gt;</a></div>
                        <div class="card-content">
                            <div><span class="card-number">298</span> Total de Remédio</div>
                            <div><span class="card-number">24</span> Grupos de medicamentos</div>
                        </div>
                    </div>

                    <div class="card-final">
                        <div class="card-title-final">Relatório rápido<a href="#" class="card-link">Ver relatório detalhado &gt;&gt;</a></div>
                        <div class="card-content">
                            <div><span class="card-number">70,856</span> Medicamentos vendidos</div>
                            <div><span class="card-number">5,288</span> Saídas registradas</div>
                        </div>
                    </div>

                    <div class="card-final">
                        <div class="card-title-final">Relatório rápido <a href="#" class="card-link">Ver relatório detalhado &gt;&gt;</a></div>
                        <div class="card-content">
                            <div><span class="card-number">70,856</span> Medicamentos vendidos</div>
                            <div><span class="card-number">5,288</span> Saídas registradas</div>
                        </div>
                    </div>

                    <div class="card-final">
                        <div class="card-title-final">Relatório rápido <a href="#" class="card-link">Ver relatório detalhado &gt;&gt;</a></div>
                        <div class="card-content">
                            <div>
                                <span class="card-number">70,856</span>
                                Medicamentos vendidos
                            </div>
                            <div><span class="card-number">5,288</span> Saídas registradas</div>
                        </div>
                    </div>

                </div>
            </section>
        </main>
    </div>
</body>

</html>