<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Humaniza</title>
    <link rel="stylesheet" href="/css/register.css">
</head>
<body>
    <div class="container">
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
</body>
</html>