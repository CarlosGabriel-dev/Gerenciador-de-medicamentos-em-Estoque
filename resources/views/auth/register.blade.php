<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Humaniza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/register.css">
    <script src="/js/dashboard.js" defer></script>
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

    <!-- Cabeçalho -->
    <header class="header-greeting">
        <div class="header">
            <span class="icon" id="greeting-icon">☀️</span>
            <span class="text" id="greeting-text">Boa tarde</span>
        </div>
        <div class="date-time">
            <span id="current-date">25 Abril 2025</span>
            <span id="current-time">14:09:45</span>
        </div>
    </header>

    <hr class="divider">

    <div class="header-left">
        <h1 class="register-title">Cadastrar Novo Usuário</h1>
    </div>

    <div class="main-content">
        <div class="register-container">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-grid">
                    <div class="form-row">
                        <div class="input-group half-width">
                            <label for="name">Nome</label>
                            <input type="text" id="name" name="name" required autofocus>
                        </div>
                        <div class="input-group half-width">
                            <label for="last_name">Sobrenome</label>
                            <input type="text" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-group half-width">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="input-group half-width">
                            <label for="role">Cargo</label>
                            <select id="role" name="role" required>
                                <option value="" selected disabled>Selecione um cargo</option>
                                <option value="Farmaceutico">Farmacêutico</option>
                                <option value="Coordenador">Coordenador(a)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-group half-width">
                            <label for="password">Senha</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="input-group half-width">
                            <label for="password_confirmation">Confirmar Senha</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn">Registrar</button>
            </form>
        </div>
    </div>

    <footer class="rodape">
        Instituto de Estudos e Pesquisa - Humaniza &copy; 2024.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>