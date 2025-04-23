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
        <form action="{{ route('inventory.update', $medication->id) }}" method="POST" class="form">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome do medicamento</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $medication->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="medication_id" class="form-label">ID do medicamento</label>
                <input type="text" name="medication_id" class="form-control" value="{{ old('medication_id', $medication->medication_id) }}" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <select name="type" class="form-select" required>
                    <option value="">- Selecione Tipo -</option>
                    @foreach (['Antibiótico', 'Analgésico', 'Anti-inflamatório', 'Anti-Hipertensivo', 'Antialérgico', 'Corticoide', 'Solução', 'Soro'] as $tipo)
                    <option value="{{ $tipo }}" {{ old('type', $medication->type) == $tipo ? 'selected' : '' }}>{{ $tipo }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="group" class="form-label">Grupo</label>
                <select name="group" class="form-select" required>
                    <option value="">- Selecione Grupo -</option>
                    @foreach (['Comum', 'Controlado', 'Receita Especial'] as $grupo)
                    <option value="{{ $grupo }}" {{ old('group', $medication->group) == $grupo ? 'selected' : '' }}>{{ $grupo }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Quantidade</label>
                <input type="number" name="quantity" class="form-control" value="{{ old('quantity', $medication->quantity) }}" required min="0">
            </div>

            <div class="mb-3">
                <label for="ideal_quantity" class="form-label">Quantidade Ideal</label>
                <input type="number" name="ideal_quantity" class="form-control" value="{{ old('ideal_quantity', $medication->ideal_quantity) }}" required min="0">
            </div>

            <div class="mb-3">
                <label for="minimum_quantity" class="form-label">Quantidade Mínima</label>
                <input type="number" name="minimum_quantity" class="form-control" value="{{ old('minimum_quantity', $medication->minimum_quantity) }}" required min="0">
            </div>

            <button type="submit" class="btn btn-primary">Atualizar Medicamento</button>
        </form>

    </div>
</body>

</html>