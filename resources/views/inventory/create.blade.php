<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Medicamento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Adicionar Novo Medicamento</h1>
        <form action="{{ route('inventory.store') }}" method="POST">
            @csrf
            <div class="form-group">
    <label for="medication_id">CATMAT Medicamento</label>
    <input type="text" class="form-control" id="medication_id" name="medication_id" pattern="[A-Z1-9\-]+" required>
</div>

<div class="form-group">
    <label for="medication_name">Nome do Medicamento</label>
    <input type="text" class="form-control" id="medication_name" name="medication_name" required>
</div>

<div class="form-group">
    <label for="active_principle">Princípio Ativo</label>
    <input type="text" class="form-control" id="active_principle" name="active_principle" required>
</div>

<div class="form-group">
    <label for="group">Nome Grupo</label>
    <select class="form-control" id="group" name="group" required>
        <option value="Comum">Comum</option>
        <option value="Controlado">Controlado</option>
        <option value="Receita Simples">Receita Simples</option>
        <option value="Receita A">Receita A</option>
        <option value="Receita B">Receita B</option>
        <option value="Psicotropicos">Psicotropicos</option>
    </select>
</div>

<div class="form-group">
    <label for="supply_type">Tipo de Fornecimento</label>
    <input type="text" class="form-control" id="supply_type" name="supply_type" pattern="[A-Z1-9\-]+" required>
</div>

<div class="form-group">
    <label for="min_quantity">Quantidade Minima</label>
    <input type="number" class="form-control" id="min_quantity" name="min_quantity" min="0" required>
</div>

<div class="form-group">
    <label for="ideal_quantity">Quantidade Ideal</label>
    <input type="number" class="form-control" id="ideal_quantity" name="ideal_quantity" min="0" required>
</div>

<div class="form-group">
    <label for="expiry_date">Data de Vencimento</label>
    <input type="date" class="form-control" id="expiry_date" name="expiry_date" required>
</div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</body>
</html>
