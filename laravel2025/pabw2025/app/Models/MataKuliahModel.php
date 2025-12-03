<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DosenModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MataKuliahModel extends Model
{
    //
    use HasFactory;
    protected $table = 'table_mata_kuliah';
    protected $fillable = [
        'nama_mata_kuliah',
        'kode_mata_kuliah',
        'dosen_id',
        'sks',
    ];

    public function dosen(){
        return $this->belongsTo(DosenModel::class, 'dosen_id', 'id');
    }
}
