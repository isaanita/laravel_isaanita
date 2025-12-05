<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\RumahSakit;

class PasienController extends Controller
{
    public function index()
    {
        $rs = RumahSakit::all();
        $data = Pasien::with('rumahSakit')->get();

        return view('pasien.index', compact('data', 'rs'));
    }

    public function filter(Request $request) {
        $id_rs = $request->rumah_sakit_id;

        $data = Pasien::with('rumahSakit')
            ->where('rumah_sakit_id', $id_rs)
            ->get();

        return response()->json($data);
    }

    public function create()
    {
        $rs = RumahSakit::all();
        return view('pasien.create', compact('rs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'telepon' => 'required|string|max:20',
            'rumah_sakit_id' => 'required|exists:rumah_sakits,id',
        ]);

        Pasien::create($request->all());

        return redirect()->route('pasien.index')
                         ->with('success', 'Pasien created successfully.');
    }

    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);
        $rs = RumahSakit::all();

        return view('pasien.edit', compact('pasien', 'rs'));
    }

    public function update(Request $request, $id) {
        $pasien = Pasien::findOrFail($id);
        $pasien->update($request->all());

        return redirect()->route('pasien.index')
                         ->with('success', 'Pasien updated successfully.');
    }

    public function ajaxDelete($id)
    {
        $pasien = Pasien::find($id);
        if (!$pasien) {
            return response()->json(['success' => false, 'message' => 'Pasien not found'], 404);
        }
        $pasien->delete();

        return response()->json(['success' => true]);
    }
}
