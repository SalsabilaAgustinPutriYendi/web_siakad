<?php

namespace App\Http\Controllers;

use App\Models\DashboardMataKuliah;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliahs=DashboardMataKuliah::latest()->paginate(10);
        return view('akademik.mahasiswa',['matakuliahs'=>$matakuliahs]);
    }

}
