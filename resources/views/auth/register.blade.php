<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Humaniza</title>
    <link rel="stylesheet" href="/css/register.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 bg-dark text-white min-vh-100">
                <div class="d-flex flex-column p-3">
                    <h3 class="text-center">Humaniza</h3>
                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link text-white">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('inventory.index') }}" class="nav-link text-white">Inventário</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('relatorio') }}" class="nav-link text-white">Relatórios</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link text-white">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        <img src="/img/Imagem1.png" alt="Humaniza Logo" class="logo">
        <div class="title">Registro - Humaniza</div>
        <form>
            <div class="input-group">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="confirm-password">Confirmar Senha</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit" class="btn">Registrar</button>
        </form>
        </div>
    </div>
</div>
</body>
</html>