<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class DashboardMataKuliah extends Model
{
    use HasFactory;

    protected $fillable = ['kode_mk', 'nama_mk', 'sks', 'semester'];

    protected $table = 'matakuliahss';

    public function scopePencarian(Builder $query): void
    {
        if ($search = request('search')) {
            $query->where('nama_mk', 'like', '%' . $search . '%')
                  ->orWhere('kode_mk', 'like', '%' . $search . '%');

        }
    }
}
