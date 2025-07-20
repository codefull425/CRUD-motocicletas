<?php

namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Models\Moto;
    use Illuminate\Http\Request;

class MotoController extends Controller
{
    public function index()
    {
        return response()->json(Moto::all());
    }

    public function store(Request $request)
    {
        $moto = Moto::create($request->all());
        return response()->json($moto, 201);
    }

    public function show($id)
    {
        return response()->json(Moto::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $moto = Moto::findOrFail($id);
        $moto->update($request->all());
        return response()->json($moto);
    }

    public function destroy($id)
    {
        Moto::destroy($id);
        return response()->json(null, 204);
    }

}
