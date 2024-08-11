<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class JabatanController extends Controller
{
    // public function index()
    // {
    //     $jabatan = Jabatan::paginate(10);
    //     return view('dashboard.jabatan.index',['jabatans' => $jabatans]);
    // }

    public function index()
    {
        $jabatans=Jabatan::latest()->paginate(10);
        return view('dashboard.jabatan.index',['jabatans'=>$jabatans]);
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
        $validated = $request-> validate([
            'kode_jabatan' => 'required|unique:jabatans',
            'nama_jabatan' => 'required|min:3',
            'keterangan' => 'required',

        ]);

        // dd($validated);
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
        $jabatan = Jabatan::find($id);
        return view('dashboard.jabatan.edit', compact('jabatan'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request-> validate([
            'kode_jabatan' => 'required',
            'nama_jabatan' => 'required|min:3',
            'keterangan' => 'required',

        ]);
        Jabatan::where('id', $id)->update($validated);
        return redirect('dashboard-jabatan')->with('pesan', 'Data Berhasil di Ubah');

        // $validated = $request-> validate([
        //     'nim' => 'required|unique:mahasiswas',
        //     'nama_lengkap' => 'required|min:3',
        //     'tempat_lahir' => 'required',
        //     'tgl_lahir' => 'required',
        //     'email' => 'required',
        //     'prodi_id' => 'required',
        //     'alamat' => 'nullable',
        // ]);

        // // dd($validated);
        // DashboardMahasiswa::create($validated);
        // return redirect('/dashboard-mahasiswa');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jabatan::destroy($id);
        return redirect('dashboard-jabatan')->with('pesan','Data berhasil dihapus');
    }
}
