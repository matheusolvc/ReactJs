<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdutoController extends Controller
{
    public function index()
    {

        $produtos = Produto::all();
        return response()->json($produtos);
    }

    public function show($id)
    {
        $produtos = Produto::FindOrFail($id);

        if (!$produtos) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        return response()->json($produtos);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'NOME' => 'required|max:255',
        ]);

        if ($validator->fails()) {

            //return response()->json(['errors' => $validator->errors()], 422);
            return response()->json($validator->errors(), 422);

        } else {

            $produtos = Produto::create($request->all());
            return response()->json($produtos);
        }
    }

    public function edit($id)
    {
        $produtos = Produto::FindOrFail($id);

        if (!$produtos) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        return response()->json($produtos);
    }

    public function update(Request $request, $id)
    {
        $produtos = Produto::FindOrFail($id);

        if (!$produtos) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $produtos->fill($request->all());
        $produtos->save();

        return response()->json($produtos);
    }

    public function destroy($id)
    {
        $produtos = Produto::FindOrFail($id);

        if (!$produtos) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $produtos->delete();
    }
}
