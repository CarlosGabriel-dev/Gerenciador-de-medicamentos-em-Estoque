<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 bg-dark text-white min-vh-100">
                <div class="d-flex flex-column p-3">
                    <h3 class="text-center">Humaniza</h3>
                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link text-white">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('inventory.index') }}" class="nav-link text-white">Inventário</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('relatorio') }}" class="nav-link text-white">Relatórios</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link text-white">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10">
                <div class="container mt-3">
                    <h2>Dashboard</h2>
                    <p>Uma rápida visão geral dos dados do Inventário</p>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card text-center bg-success text-white mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Bom</h5>
                                    <p class="card-text">Status do Inventário</p>
                                    <a href="#" class="btn btn-light">Relatório detalhado</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-warning text-dark mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Pedidos</h5>
                                    <p class="card-text">Relatório de Pedido</p>
                                    <a href="#" class="btn btn-dark">Relatório detalhado</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-primary text-white mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $data['total_medications'] }}</h5>
                                    <p class="card-text">Medicamentos disponíveis</p>
                                    <a href="#" class="btn btn-light">Ver Inventário</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-danger text-white mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $data['medications_out_of_stock'] }}</h5>
                                    <p class="card-text">Medicamentos em Falta</p>
                                    <a href="#" class="btn btn-light">Resolver agora</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Inventário</h5>
                                    <p>Total de Remédio: {{ $data['total_medications'] }}</p>
                                    <p>Grupos de medicamentos: {{ $data['total_groups'] }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Relatório rápido</h5>
                                    <p>Medicamentos vendidos: {{ $data['total_medications_sold'] }}</p>
                                    <p>Saídas registradas: {{ $data['total_sales'] }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Minha farmácia</h5>
                                    <p>Total de Usuários: {{ $data['total_users'] }}</p>
                                    <a href="#" class="btn btn-primary">Go to User Management</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Medicamentos</h5>
                                    <p>Entrada de medicamentos: {{ $data['total_medications_in'] }}</p>
                                    <a href="#" class="btn btn-primary">Cadastrar novo medicamento</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="rodape">
        Instituto de Estudos e Pesquisa - Humaniza &copy; 2024.
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
