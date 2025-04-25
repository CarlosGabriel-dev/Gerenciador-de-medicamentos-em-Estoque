<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Medicamento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Editar Medicamento</h1>
        <form action="{{ route('inventory.store') }}" method="POST" class="form">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome do medicamento</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="medication_id" class="form-label">ID do medicamento</label>
                        <input type="text" name="medication_id" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <select name="type" class="form-select" required>
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

                    <div class="mb-3">
                        <label for="group" class="form-label">Grupo</label>
                        <select name="group" class="form-select" required>
                            <option value="">- Selecione Grupo -</option>
                            <option value="Comum">Comum</option>
                            <option value="Controlado">Controlado</option>
                            <option value="Receita Especial">Receita Especial</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="expiration_date">Data de Validade</label>
                        <input type="date" name="expiration_date" id="expiration_date" class="form-control" value="{{ old('expiration_date', $medication->expiration_date ?? '') }}">
                    </div>

                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantidade</label>
                        <input type="number" name="quantity" class="form-control" required min="0">
                    </div>

                    <div class="mb-3">
                        <label for="ideal_quantity" class="form-label">Quantidade Ideal</label>
                        <input type="number" name="ideal_quantity" class="form-control" required min="0">
                    </div>

                    <div class="mb-3">
                        <label for="min_quantity" class="form-label">Quantidade Mínima</label>
                        <input type="number" name="minimum_quantity" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Atualizar Medicamento</button>
                    <a href="{{ route('inventory.index') }}" class="btn btn-secondary ms-2">Voltar para Inventário</a>
                </form>
    </div>
</body>

</html>