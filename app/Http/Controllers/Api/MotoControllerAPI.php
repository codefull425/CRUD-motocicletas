<?php

namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Models\Moto;
    use Illuminate\Http\Request;
    use Illuminate\Http\JsonResponse;
class MotoControllerAPI extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Moto::all());
    }

    public function store(Request $request): JsonResponse
    {
        $moto = Moto::create($request->all());
        return response()->json($moto, 201);
    }

    public function show($id): JsonResponse
    {
        return response()->json(Moto::findOrFail($id));
    }

    public function update(Request $request, $id): JsonResponse
    {
        $moto = Moto::findOrFail($id);
        $moto->update($request->all());
        return response()->json($moto);
    }

    public function destroy($id): JsonResponse
    {
        Moto::destroy($id);
        return response()->json(null, 204);
    }

}
