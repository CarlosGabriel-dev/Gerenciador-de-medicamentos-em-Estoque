!DOCTYPE html>
<html>
<head>
    <title>Gerenciamento de Medicamentos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Gerenciamento de Medicamentos</a>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>