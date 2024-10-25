<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Novo Medicamento</title>
    @if(session('success'))
    <div id="popup" class="popup show">
        <p>{{ session('success') }}</p>
        <button onclick="closePopup()">Fechar</button>
    </div>
    @endif
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h2>Adicionar Novo Medicamento</h2>
        <form id="medicamentoForm" method="POST" action="{{ route('inventory.create') }}">
            @csrf
            <div class="form-group">
                <label for="catmat">CATMAT Medicamento</label>
                <input type="text" id="catmat" name="catmat">
            </div>
            <div class="form-group">
                <label for="nome">Nome do Medicamento</label>
                <input type="text" id="nome" name="nome">
            </div>
            <div class="form-group">
                <label for="principio">Princípio Ativo</label>
                <input type="text" id="principio" name="principio">
            </div>
            <div class="form-group">
                <label for="grupo">Nome Grupo</label>
                <select id="grupo" name="grupo">
                    <option value="comum">Comum</option>
                    <!-- Outras opções aqui -->
                </select>
            </div>
            <div class="form-group">
                <label for="fornecimento">Tipo de Fornecimento</label>
                <input type="text" id="fornecimento" name="fornecimento">
            </div>
            <div class="form-group">
                <label for="minima">Quantidade Mínima</label>
                <input type="number" id="minima" name="minima">
            </div>
            <div class="form-group">
                <label for="ideal">Quantidade Ideal</label>
                <input type="number" id="ideal" name="ideal">
            </div>
            <div class="buttons">
                <button type="submit" class="btn-save">Salvar</button>
                <button type="button" class="btn-cancel" onclick="cancel()">Cancelar</button>
            </div>
        </form>
    </div>

    <div id="popup" class="popup">
        <p>Cadastro realizado com sucesso!</p>
        <button onclick="closePopup()">Fechar</button>
    </div>

    <script>
        function cancel() {
            if(confirm("Tem certeza que deseja cancelar?")) {
                document.getElementById('medicamentoForm').reset();
            }
        }

        function closePopup() {
            document.getElementById('popup').classList.remove('show');
        }
    </script>
</body>
</html>
