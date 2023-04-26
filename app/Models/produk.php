<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $fillable = ['Quantity'];
    protected $primaryKey = 'ProductID';
    public function penjualan()
    {        
        return $this->hasMany('App\Models\Penjualan', 'ProductID');
    }
}
