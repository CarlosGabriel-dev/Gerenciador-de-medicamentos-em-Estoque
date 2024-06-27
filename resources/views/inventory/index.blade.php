<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Medicamentos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #343a40;
            color: #fff;
            padding-top: 20px;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
        }
        .sidebar a:hover {
            background-color: #007bff;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
            flex: 1;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2 class="text-center">Humaniza</h2>
        <a href="#">Dashboard</a>
        <a href="#">Inventário</a>
        <a href="#">Grupos de Medicamentos</a>
        <a href="#">Relatório</a>
        <a href="#">Cadastrar</a>
    </div>
    <div class="main-content">
        <div class="header">
            <h1>Lista de Medicamentos</h1>
            <a href="{{ route('inventory.create') }}" class="btn btn-primary">+ Cadastrar Novo Item</a>
        </div>
        <form action="{{ route('inventory.index') }}" method="GET" class="mb-3">
            <input type="text" name="search" class="form-control" placeholder="Pesquise inventário de medicamentos..." value="{{ request()->input('search') }}">
        </form>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>ID Medicamento</th>
                    <th>Nome Grupo</th>
                    <th>Quantidade</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @if($medications->isEmpty())
                    <tr>
                        <td colspan="5" class="text-center">Nenhum medicamento encontrado</td>
                    </tr>
                @else
                    @foreach($medications as $medication)
                    <tr>
                        <td>{{ $medication->name }}</td>
                        <td>{{ $medication->medication_id }}</td>
                        <td>{{ $medication->group }}</td>
                        <td>{{ $medication->quantity }}</td>
                        <td>
                            <a href="{{ route('inventory.edit', $medication->id) }}" class="btn btn-info" aria-label="Editar">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('inventory.destroy', $medication->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" aria-label="Excluir">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <footer class="rodape">
        Instituto de Estudos e Pesquisa - Humaniza &copy; 2024.
    </footer>

</body>
</html>
