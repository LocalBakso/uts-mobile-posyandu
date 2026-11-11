<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    public function index()
    {
        return Anak::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_ibu' => 'required|integer',
            'nama_anak' => 'required|string|max:50',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|max:9',
        ]);

        return Anak::create($request->all());
    }

    public function show(string $id)
    {
        return Anak::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $anak = Anak::findOrFail($id);
        $request->validate([
            'id_ibu' => 'sometimes|required|integer',
            'nama_anak' => 'sometimes|required|string|max:50',
            'tgl_lahir' => 'sometimes|required|date',
            'jenis_kelamin' => 'sometimes|required|string|max:9',
        ]);

        $anak->update($request->all());
        return $anak;
    }

    public function destroy(string $id)
    {
        $anak = Anak::findOrFail($id);
        $anak->delete();
        return response()->noContent();
    }
}