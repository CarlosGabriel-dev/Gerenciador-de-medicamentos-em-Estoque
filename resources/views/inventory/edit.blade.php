<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Medicamento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">;;;0 
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Medicamento</h1>
        <form action="{{ route('inventory.update', $medication->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome</label>
                <input  type="text" class="form-control" id="name" name="name" value="{{ $medication->name }}" required>
            </div>
            <div class="form-group">
                <label for="medication_id">ID Medicamento</label>
                <input type="text" class="form-control" id="medication_id" name="medication_id" value="{{ $medication->medication_id }}" required>
            </div>
            <div class="form-group">
                <label for="group">Nome Grupo</label>
                <input type="text" class="form-control" id="group" name="group" value="{{ $medication->group }}" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantidade</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $medication->quantity }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</body>
</html>
