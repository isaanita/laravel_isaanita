<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RumahSakit;

class RumahSakitController extends Controller
{
    public function index()
    {
        $data = RumahSakit::all();
        return view('rumah_sakit.index', compact('data'));
    }

    public function create()
    {
        return view('rumah_sakit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'required|string|max:20',
        ]);

        RumahSakit::create($request->all());

        return redirect()->route('rumah-sakit.index')
                         ->with('success', 'Rumah Sakit created successfully.');
    }

    public function edit($id)
    {
        $rumahSakit = RumahSakit::find($id);
        return view('rumah_sakit.edit', compact('rumahSakit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'required|string|max:20',
        ]);

        $rumahSakit = RumahSakit::findOrFail($id);
        $rumahSakit->update($request->all());

        return redirect()->route('rumah-sakit.index')
                         ->with('success', 'Rumah Sakit updated successfully.');
    }

    public function ajaxDelete($id)
    {
        $rumahSakit = RumahSakit::find($id);

        if ($rumahSakit) {
            $rumahSakit->delete();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404);
    }

}
