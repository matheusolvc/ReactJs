<?php

namespace App\Http\Controllers;

use App\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function index()
    {

        $vendas = Venda::all();
        return response()->json($vendas);
    }

    public function show($id)
    {
        $vendas = Venda::FindOrFail($id);

        if (!$vendas) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        return response()->json($vendas);
    }

    public function store(Request $request)
    {

        $vendas = Venda::create($request->all());
        return response()->json($vendas);
    }

    public function edit($id)
    {
        $vendas = Venda::FindOrFail($id);

        if (!$vendas) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        return response()->json($vendas);
    }

    public function update(Request $request, $id)
    {
        $vendas = Venda::FindOrFail($id);

        if (!$vendas) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $vendas->fill($request->all());
        $vendas->save();

        return response()->json($vendas);
    }

    public function destroy($id)
    {
        $vendas = Venda::FindOrFail($id);

        if (!$vendas) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $vendas->delete();
    }
}
