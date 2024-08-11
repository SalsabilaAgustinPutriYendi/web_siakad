<?php

namespace App\Http\Controllers;

use App\Models\DashboardMataKuliah;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardMataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.matakuliah.index',[
            'matakuliahs' => DashboardMataKuliah::latest()->pencarian()->paginate(10)]);
    }

    public function cetakPdf()
    {
        $pdf = PDF::loadView('dashboard.matakuliah.cetak_pdf', ['matakuliahs' => DashboardMataKuliah::all()]);
        return $pdf->stream('Laporan-Data-Matakuliah.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $matakuliahs = DashboardMataKuliah::all();
        return view ('dashboard.matakuliah.create', ['matakuliahs' => DashboardMataKuliah::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_mk' => 'required|unique:matakuliahss',
            'nama_mk' => 'required|min:3',
            'sks' => 'required',
            'semester' => 'required'
        ]);
        //dd($validated);
        DashboardMataKuliah::create($validated);
        return redirect('dashboard-matakuliah')->with('pesan', 'Data berhasil diubah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $matakuliah = DashboardMataKuliah::findOrFail($id);
        return view('dashboard.matakuliah.show', compact('matakuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $matakuliah = DashboardMataKuliah::find($id);
        return view ('dashboard.matakuliah.edit', compact('matakuliah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'kode_mk' => 'required',
            'nama_mk' => 'required|min:3',
            'sks' => 'required',
            'semester' => 'required'
        ]);
        DashboardMataKuliah::where('id', $id)->update($validated);
        return redirect('dashboard-matakuliah')->with('pesan', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DashboardMataKuliah::destroy($id);
        return redirect('dashboard-matakuliah')->with('pesan', 'Data berhasil dihapus');
    }
}
