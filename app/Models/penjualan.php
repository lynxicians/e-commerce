<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    public function produk()
    {
        return $this->belongsTo('App\Models\Produk', 'product_name', 'id');
    }

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'users_name', 'id');
    }
}
