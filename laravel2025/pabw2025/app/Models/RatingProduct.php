<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RatingProduct extends Model
{
    //
    use HasFactory;

    protected $table    = 'table_rating_product';
    protected $fillable = ['product_id', 'rating'];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
