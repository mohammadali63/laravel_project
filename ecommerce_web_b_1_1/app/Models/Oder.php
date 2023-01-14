<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    use HasFactory;

    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class,'order_id');
    }
}
