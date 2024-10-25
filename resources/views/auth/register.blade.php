<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/css/register.css">
</head>
<body>
    <div class="register-container">
        <img class="imagem" src="/img/Imagem1.png" alt="">
        <h2>Register Novo Funcionario</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input class="input-register" type="text" name="name" placeholder="Name" required>
            <input class="input-register" type="email" name="email" placeholder="Email" required>
            <input class="input-register" type="password" name="password" placeholder="Password" required>
            <input class="input-register" type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
