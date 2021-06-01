<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function order_details()
    {
        return $this->belongsTo('App\Models\OrderDetail', 'product_id', 'id');
    }
}
}
