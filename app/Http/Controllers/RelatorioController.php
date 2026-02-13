<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;
// IMPORTANTE: Se seu model chamar 'Saida', mude aqui para 'App\Models\Saida'
use App\Models\Movimentacao; 

class RelatorioController extends Controller
{
    public function index(Request $request)
    {
        $startDate = $request->input('start_date', Carbon::now()->subDays(30)->startOfDay());
        $endDate   = $request->input('end_date', Carbon::now()->endOfDay());
        
        // Verifica se o Model existe antes de tentar rodar a query para evitar erro
        try {
            $dados = Movimentacao::select([
                    DB::raw('DATE(created_at) as date'), 
                    DB::raw('COUNT(*) as total')
                ])
                ->where('tipo', 'saida') // Ajuste conforme seu banco ('saida', 'out', 'venda')
                ->whereBetween('created_at', [$startDate, $endDate])
                ->groupBy('date')
                ->orderBy('date', 'ASC')
                ->get();
        } catch (\Exception $e) {
            $dados = [];
        }

        $chartLabels = [];
        $chartData = [];

        foreach ($dados as $dado) {
            $chartLabels[] = Carbon::parse($dado->date)->format('d M');
            $chartData[]   = $dado->total;
        }
        
        $logs = [];

        $users = User::latest()->take(5)->get();
        foreach($users as $user) {
            $logs[] = [
                'tipo' => 'Cadastro',
                'id' => substr($user->name, 0, 15), // Pega só o primeiro nome/parte
                'date' => $user->created_at->format('d M H:i'),
                'timestamp' => $user->created_at->timestamp
            ];
        }

        if (!empty($dados)) {
            $movs = Movimentacao::latest()->take(5)->get();
            foreach($movs as $m) {
                $logs[] = [
                    'tipo' => 'Baixa',
                    'id' => 'Med #' . $m->medicamento_id,
                    'date' => $m->created_at->format('d M H:i'),
                    'timestamp' => $m->created_at->timestamp
                ];
            }
        }

        usort($logs, function($a, $b) {
            return $b['timestamp'] - $a['timestamp'];
        });

        $logs = array_slice($logs, 0, 8);

        return view('relatorios.relatorio', compact('chartLabels', 'chartData', 'logs'));
    }
}