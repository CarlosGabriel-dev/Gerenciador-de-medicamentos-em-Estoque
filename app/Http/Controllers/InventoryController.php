<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medication;

class InventoryController extends Controller
{
    // Mostra a lista de medicamentos
    public function index(Request $request)
    {
        $search = $request->input('search');
        $medications = Medication::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('medication_id', 'LIKE', "%{$search}%")
            ->orWhere('group', 'LIKE', "%{$search}%")
            ->get();

        return view('inventory.index', compact('medications'));
    }

    // Mostra o formulário de criação de novo medicamento
    public function create()
    {
        return view('inventory.create');
    }

    // Armazena um novo medicamento no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'medication_id' => 'required|unique:medications',
            'group' => 'required',
            'quantity' => 'required|integer',
        ]);

        Medication::create($request->all());

        return redirect()->route('inventory.index')->with('success', 'Medicamento cadastrado com sucesso.');
    }

    // Mostra o formulário de edição de um medicamento
    public function edit($id)
    {
        $medication = Medication::findOrFail($id);

        return view('inventory.edit', compact('medication'));
    }

    // Atualiza um medicamento no banco de dados
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'medication_id' => 'required|unique:medications,medication_id,' . $id,
            'group' => 'required',
            'quantity' => 'required|integer',
        ]);

        $medication = Medication::findOrFail($id);
        $medication->update($request->all());

        return redirect()->route('inventory.index')->with('success', 'Medicamento atualizado com sucesso.');
    }

    // Remove um medicamento do banco de dados
    public function destroy($id)
    {
        $medication = Medication::findOrFail($id);
        $medication->delete();

        return redirect()->route('inventory.index')->with('success', 'Medicamento excluído com sucesso.');
    }
}