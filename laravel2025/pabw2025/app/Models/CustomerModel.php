<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    //
    protected $table = 'table_customer';
    protected $fillable=[
        'customer_id',
        'customer_name',
        'phone_number',
        'city',
        'amt_paid',
    ];
}
