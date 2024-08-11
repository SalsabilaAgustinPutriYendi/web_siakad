<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jabatan = Jabatan::paginate(10);
        return view('dashboard.jabatan.index',['jabatans' => $jabatan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.jabatan.create',['jabatans' =>Jabatan::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
                'kode_jabatan' => 'required|unique:jabatans',
                'nama_jabatan' => 'required|min:3',
                'keterangan' => 'required',


         ]);

         //dd($validated);

         Jabatan::create($validated);
         return redirect('/dashboard-jabatan')->with('pesan', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('dashboard.jabatan.show', compact('jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('dashboard.jabatan.edit', compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validated = $request->validate([
            'kode_jabatan' => 'required|unique',
                'nama_jabatan' => 'required|min:3',
                'keterangan' => 'required',
        ]);

        Jabatan::where('id', $id)->update($validated);
        return redirect('dashboard-jabatan')->with('pesan','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jabatan::destroy($id);
        return redirect('dashboard-jabatan')->with('pesan', 'Data berhasil dihapus');
    }
}
