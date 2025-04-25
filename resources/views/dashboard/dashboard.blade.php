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
    <nav class="sidebar">
        <div class="sidebar-header">
            <img src="/img/Imagem1.png" alt="Logo do Instituto" class="humaniza-logo">
        </div>

        <div class="user-info">
            @auth
            <div class="user-avatar">
                {{ strtoupper(substr($user->name, 0, 1)) }}
            </div>
            <div class="user-details">
                <span class="user-name">{{ $user->name }} {{ $user->last_name ?? '' }}</span>
                <span class="user-role">{{ $user->role ?? 'Usuário' }}</span>
            </div>
            @endauth
        </div>
        <hr>
        <div class="sidebar-menu">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('inventory.index') }}">Inventário</a>
            <a href="{{ route('relatorio') }}">Relatório</a>
            <a href="{{ route('register') }}">Cadastrar</a>
        </div>
    </nav>
    
    <hr>

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

        <section>
            <h1>Dashboard</h1>
            <p>Uma rápida visão geral dos dados do inventário</p>
        </section>

        <section class="cards">

            <div class="card-inventory-status">
                <div>
                    <div class="card-icon">
                        <img src="/img/escudo.png" alt="Ícone representando status do inventário" width="45" height="45">
                    </div>
                    <div class="card-title">Bom</div>
                    <div class="card-subtitle">Status de Inventário</div>
                </div>
                <a href="{{ route('inventory.index') }}" class="card-button">Relatório detalhado</a>
            </div>

            <div class="card-pedidos">
                <div>
                    <div class="card-icon">
                        <img src="/img/pedidos.png" alt="Ícone de pedidos de medicamentos" width="45" height="45">
                    </div>
                    <div class="card-title">Medicamentos</div>
                    <div class="card-subtitle">Relatório de Inventário</div>
                </div>
                <a href="#" class="card-button-pedidos">Relatório detalhado</a>
            </div>

            <div class="card-avaliable">
                <div>
                    <div class="card-icon">
                        <img src="/img/estoque.png" alt="Ícone de medicamentos disponíveis" width="45" height="45">
                    </div>
                    <span class="card-number">{{ $data['total_medications'] }}</span>
                    <div class="card-subtitle">Medicamentos disponíveis</div>
                </div>
                <a href="{{ route('inventory.index') }}" class="card-button-avaliable">Ver inventário</a>
            </div>

            <div class="card-alerta">
                <div>
                    <div class="card-icon">
                        <img src="/img/alerta.png" alt="Ícone de medicamentos disponíveis" width="45" height="45">
                    </div>
                    <span class="card-number">{{ $data['medications_out_of_stock'] }}</span>
                    <div class="card-subtitle">Medicamentos Abaixo do Ideal</div>
                </div>
                <a href="{{ route('inventory.index') }}" class="card-button-alerta">Resolver Agora</a>
            </div>
        </section>

        <hr class="divider">

        <section class="info-cards">
            <div class="card-container">

                <div class="card-final">
                    <div class="card-title-final">
                        Inventário
                        <a href="{{ route('inventory.index') }}" class="card-link">Ir para Inventário &gt;&gt;</a>
                    </div>
                    <div class="card-content">
                        <div><span class="card-number">{{ $data['total_medications'] }}</span> Total de Remédio</div>
                    </div>
                </div>

                <div class="card-final">
                    <div class="card-title-final">
                        Relatório rápido
                        <a href="#" class="card-link">Ver relatório detalhado &gt;&gt;</a>
                    </div>
                    <div class="card-content">
                        <div><span class="card-number"></span> Saídas registradas</div>
                    </div>
                </div>

            </div>
        </section>
    </main>
</body>

</html>