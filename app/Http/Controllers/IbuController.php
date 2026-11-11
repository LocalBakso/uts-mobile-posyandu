<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use Illuminate\Http\Request;

class IbuController extends Controller
{
    public function index()
    {
        return Ibu::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ibu' => 'required|string|max:50',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required|string',
            'telepon' => 'required|string|max:13',
        ]);

        return Ibu::create($request->all());
    }

    public function show(string $id)
    {
        return Ibu::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $ibu = Ibu::findOrFail($id);
        $request->validate([
            'nama_ibu' => 'sometimes|required|string|max:50',
            'tgl_lahir' => 'sometimes|required|date',
            'alamat' => 'sometimes|required|string',
            'telepon' => 'sometimes|required|string|max:13',
        ]);

        $ibu->update($request->all());
        return $ibu;
    }

    public function destroy(string $id)
    {
        $ibu = Ibu::findOrFail($id);
        $ibu->delete();
        return response()->noContent();
    }
}