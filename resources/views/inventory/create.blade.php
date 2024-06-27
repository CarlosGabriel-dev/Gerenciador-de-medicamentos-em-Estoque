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
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="medication_id">ID Medicamento</label>
                <input type="text" class="form-control" id="medication_id" name="medication_id" pattern="[A-Z1-9\-]+" required>
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
                <label for="quantity">Quantidade</label>
                <input type="number" class="form-control" id="quantity" name="quantity" min="0" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</body>
</html>
