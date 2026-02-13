<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Medicamento</title>
    <link rel="stylesheet" href="/css/create.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="/js/dashboard.js" defer></script>
</head>

<body>
    <nav class="sidebar">
        <h2 class="text-center">Humaniza</h2>
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('inventory.index') }}">Inventário</a>
        <a href="{{ route('relatorio.index') }}">Relatório</a>
        <a href="{{ route('register') }}">Cadastrar</a>
    </nav>
    <!-- Conteúdo principal -->
    <div class="col-md-10 p-4">
        <h2>Adicionar novo medicamento</h2>

        <!-- Mensagens de sucesso -->
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <!-- Mensagens de erro de validação -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Formulário -->
        <form action="{{ route('inventory.store') }}" method="POST" class="form">
            @csrf

            <div class="form-row">
                <div class="form-col">
                    <label for="name" class="form-label">Nome do medicamento</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-col">
                    <label for="medication_id" class="form-label">ID do medicamento</label>
                    <input type="text" name="medication_id" class="form-control" required>
                </div>

                <div class="form-col">
                    <label for="type" class="form-label">Tipo</label>
                    <select name="type" class="form-control" required>
                        <option value="">- Selecione Tipo -</option>
                        <option value="Antibiótico">Antibiótico</option>
                        <option value="Analgésico">Analgésico</option>
                        <option value="Anti-inflamatório">Anti-inflamatório</option>
                        <option value="Antihipertensivo">Anti-Hipertensivos</option>
                        <option value="Antialérgico">Antialérgicos</option>
                        <option value="Corticoide">Corticoides</option>
                        <option value="Solução">Soluções</option>
                        <option value="Soro">Soros</option>
                    </select>
                </div>

                <div class="form-col">
                    <label for="group" class="form-label">Grupo</label>
                    <select name="group" class="form-control" required>
                        <option value="">- Selecione Grupo -</option>
                        <option value="Comum">Comum</option>
                        <option value="Controlado">Controlado</option>
                        <option value="Receita Especial">Receita Especial</option>
                    </select>
                </div>

                <div class="form-col">
                    <label for="expiration_date" class="form-label">Data de Validade</label>
                    <input type="date" name="expiration_date" id="expiration_date" class="form-control" value="{{ old('expiration_date', $medication->expiration_date ?? '') }}">
                </div>

                <div class="form-col">
                    <label for="quantity" class="form-label">Quantidade</label>
                    <input type="number" name="quantity" class="form-control" required min="0">
                </div>

                <div class="form-col">
                    <label for="ideal_quantity" class="form-label">Quantidade Ideal</label>
                    <input type="number" name="ideal_quantity" class="form-control" required min="0">
                </div>

                <div class="form-col">
                    <label for="minimum_quantity" class="form-label">Quantidade Mínima</label>
                    <input type="number" name="minimum_quantity" class="form-control" required>
                </div>
            </div>

            <div class="mt-3 d-flex gap-2">
                <button type="submit" class="btn">Salvar detalhes</button>
                <a href="{{ route('inventory.index') }}" class="btn btn-secondary">Voltar para Inventário</a>
            </div>
        </form>
    </div>
    </div>
    </div>
</body>
</html>