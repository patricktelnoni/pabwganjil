<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\MataKuliahModel;

class DosenModel extends Model
{
    //
    use HasFactory;
    
    protected $table = 'table_dosen';
    protected $fillable = [
        'nama_dosen',
        'nipdosen',
    ];

    public function mataKuliah(){
        return $this->hasMany(MataKuliahModel::class, 'dosen_id', 'id'); 
    }
}
