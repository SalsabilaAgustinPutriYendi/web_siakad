<?php

namespace App\Http\Controllers;

use App\Models\DashboardDosen;
use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Models\Prodi;
USE Illuminate\Support\Facades\Gate;

class DashboardDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        If(! Gate::allows('admin')){
            abort(403);
        }

        $dosens=DashboardDosen::latest()->paginate(10);
        return view('dashboard.dosen.index',['dosens'=>$dosens]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodis = Prodi::all();
        return view('dashboard.dosen.create', ['prodis'=>$prodis]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request-> validate([
            'nik' => 'required|unique:dosens',
            'nama' => 'required|min:3',
            'email' => 'required',
            'no_telp' => 'required',
            'prodi_id' => 'required',
            'jabatan' => 'required',
            'alamat' => 'nullable',
        ]);

        // dd($validated);
        DashboardDosen::create($validated);
        return redirect('/dashboard-dosen');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dashboard.dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodis = Prodi::all();
        $dosen = Dosen::find($id);
        return view('dashboard.dosen.edit', compact('prodis','dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request-> validate([
            'nik' => 'required',
            'nama' => 'required|min:3',
            'email' => 'required',
            'no_telp' => 'required',
            'prodi_id' => 'required',
            'jabatan' => 'required',
            'alamat' => 'nullable',
        ]);
        Dosen::where('id', $id)->update($validated);
        return redirect('/dashboard-dosen')->with('pesan', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Dosen::destroy($id);
        return redirect('dashboard-dosen')->with('pesan','Data berhasil dihapus');
    }
}
