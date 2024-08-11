<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillble = ['nim', 'nama_lengkap', 'tempat_lahir', 'tgl_lahir', 'email', 'prodi_id', 'alamat'];

    public function prodi(){
        return $this->belongsTo(Prodi::class);
    }

    public function scopePencarian(Builder $query): void
    {
        if ($search = request('search')) {
            $query->where('nama_lengkap', 'like', '%' . $search . '%')
                  ->orWhere('email', 'like', '%' . $search . '%');

        }
    }
}
