<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
    <!-- <img src="/img/imagem2.png" style="position:absolute; top:0;left:0;width:100%;height: 100%; z-index: -1;" alt=""> -->
    <div class="login-container">
        <img class="imagem" src="/img/Imagem1.png" alt="Imagem Logo Instituto">
        <h2>Conectar-se</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input class="input-login" type="email" name="email" placeholder="Email" required>
            <input class="input-login" type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
