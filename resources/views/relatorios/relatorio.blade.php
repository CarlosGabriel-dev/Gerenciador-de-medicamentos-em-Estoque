<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Atividades</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="stylesheet" href="{{ asset('css/relatorio.css') }}">
</head>
<body class="bg-gray-100 font-sans text-gray-700">

    <div class="container mx-auto p-6">
        
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">
                    <span class="text-gray-400">Relatórios ›</span> Relatório de Atividades
                </h1>
                <p class="text-sm text-gray-500 mt-1">Relatório relacionado às atividades da farmácia.</p>
            </div>
            <button class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded shadow-sm hover:bg-gray-50 text-sm font-medium flex items-center gap-2">
                Download Relatório 
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
            <div>
                <label class="block text-xs font-semibold text-gray-500 mb-1 uppercase tracking-wide">Período</label>
                <div class="relative">
                    <input type="text" value="01 Janeiro 2024 - 31 Janeiro 2024" class="w-full border border-gray-300 rounded px-3 py-2 text-sm bg-gray-50 focus:outline-none focus:border-blue-500 text-gray-600">
                    <span class="absolute right-3 top-2.5 text-gray-400">📅</span>
                </div>
            </div>
            <div>
                <label class="block text-xs font-semibold text-gray-500 mb-1 uppercase tracking-wide">Grupo do Medicamento</label>
                <select class="w-full border border-gray-300 rounded px-3 py-2 text-sm bg-gray-50 focus:outline-none focus:border-blue-500 text-gray-600">
                    <option>- Select Group -</option>
                </select>
            </div>
            <div>
                <label class="block text-xs font-semibold text-gray-500 mb-1 uppercase tracking-wide">Nome do Usuário</label>
                <select class="w-full border border-gray-300 rounded px-3 py-2 text-sm bg-gray-50 focus:outline-none focus:border-blue-500 text-gray-600">
                    <option>- Select User Name -</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                <h2 class="text-lg font-bold text-gray-800 mb-6">Média de saída e entrada de medicamentos</h2>
                <div class="relative h-80 w-full">
                    <canvas 
                        id="relatorioChart"
                        data-labels="{{ json_encode($chartLabels) }}"
                        data-values="{{ json_encode($chartData) }}"
                    ></canvas>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 flex flex-col h-[420px]">
                <div class="flex justify-between font-bold text-gray-800 mb-4 px-2 border-b pb-2">
                    <span>ID do medicamento</span>
                    <span>Data e Hora</span>
                </div>
                
                <div class="overflow-y-auto scroller flex-1 pr-2">
                    <table class="w-full text-sm text-gray-600">
                        <tbody>
                            @foreach($logs as $log)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="py-3 px-2 font-medium text-gray-700">{{ $log['id'] }}</td>
                                <td class="py-3 px-2 text-right text-gray-500">{{ $log['date'] }}</td>
                            </tr>
                            @endforeach
                            @foreach($logs as $log)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="py-3 px-2 font-medium text-gray-700">{{ $log['id'] }}</td>
                                <td class="py-3 px-2 text-right text-gray-500">{{ $log['date'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/relatorio.js') }}"></script>
</body>
</html>