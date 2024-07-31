<?php

namespace App\Http\Controllers;

use App\Models\Faixa;
use Illuminate\Http\Request;

class FaixaController extends Controller
{
    public function index()
    {
        return Faixa::all();
    }

    public function store(Request $request)
    {
        $faixa = Faixa::create($request->all());
        return response()->json($faixa, 201);
    }

    public function show($id)
    {
        return Faixa::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $faixa = Faixa::findOrFail($id);
        $faixa->update($request->all());
        return response()->json($faixa, 200);
    }

    public function destroy($id)
    {
        Faixa::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
