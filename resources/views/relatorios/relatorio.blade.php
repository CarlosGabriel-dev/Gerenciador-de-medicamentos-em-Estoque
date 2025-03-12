<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Atividades</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            width: 250px;
            background-color: #1e293b;
            height: 100vh;
            position: fixed;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            padding: 10px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #334155;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h3 class="text-white text-center">Humaniza</h3>
        <a href="#">Dashboard</a>
        <a href="#">Inventário</a>
        <a href="#">Relatório de Atividades</a>
    </div>
    <div class="content">
        <h2>Relatório de Atividades</h2>
        <p>Relatório relacionado às atividades da farmácia.</p>
        <div class="row">
            <div class="col-md-6">
                <label>Período:</label>
                <input type="date" class="form-control">
            </div>
            <div class="col-md-6">
                <label>Grupo de Medicamento:</label>
                <select class="form-control">
                    <option>Selecione...</option>
                </select>
            </div>
        </div>
        <canvas id="relatorioChart"></canvas>
        <script>
            var ctx = document.getElementById('relatorioChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['1 Dec', '8 Dec', '16 Dec', '31 Dec'],
                    datasets: [{
                        label: 'Média de saída e entrada',
                        data: [50, 150, 90, 146],
                        borderColor: 'blue',
                        fill: true
                    }]
                }
            });
        </script>
    </div>
</body>
</html>
