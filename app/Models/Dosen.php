<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosens';

    protected $fillable = ['nik', 'nama_lengkap','email','no_telp','prodi_id', 'jabatan', 'alamat'];

    public function prodi()
    {
        return $this-> belongsTo(Prodi::class);
    }
}
