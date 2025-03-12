<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Medicamento</title>
    <link rel="stylesheet" href="/css/create.css">
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
    <div class="container">
        <aside class="sidebar">
            <h1>Humaniza</h1>
            <p class="user">Carlos Gabriel <span>Super Admin</span></p>
            <nav>
                <ul>
                    <li class="active">Inventário</li>
                    <li>Lista de Medicamentos</li>
                    <li>Grupos de Medicamentos</li>
                    <li>Relatório</li>
                    <li>Cadastrar</li>
                </ul>
            </nav>
        </aside>
        
        <main class="content">
            <header>
                <h2>Adicionar novo medicamento</h2>
                <span class="date">14 Janeiro 2024 - 08:45:04</span>
            </header>
            
            <form action="salvar_medicamento.php" method="POST" class="form">
                <input type="text" name="nome" placeholder="Nome do medicamento" required>
                <input type="text" name="id" placeholder="ID do medicamento" required>
                <select name="grupo" required>
                    <option value="">- Selecione Grupo -</option>
                </select>
                <input type="number" name="quantidade" placeholder="Quantidade em Número" required>
                <input type="number" name="ideal" placeholder="Quantidade ideal" required>
                <input type="number" name="minima" placeholder="Quantidade mínima" required>
                <button type="submit" class="btn">Salvar detalhes</button>
            </form>
        </main>
    </div>
</body>
</html>
