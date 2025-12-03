<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\RatingProduct;

class Product extends Model
{
    //
    use HasFactory;

    protected $table    = 'table_product';
    protected $fillable = ['nama_produk', 'harga_produk', 'foto_produk'];

    public function ratings(){
        return $this->hasMany(RatingProduct::class, 'product_id', 'id');
    }
}
