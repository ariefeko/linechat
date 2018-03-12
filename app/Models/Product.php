<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['nama', 'image', 'deskripsi', 'jumlah'];

    public $timestamps = true;

    // public function ekspedisi()
    // {
    //     return $this->hasMany(KotaExp::class, 'id_kota');
    // }

    // public function outlet()
    // {
    //     return $this->hasMany(OutletMerchant::class, 'id_kota');
    // }

    // public function h2hque()
    // {
    //     return $this->hasMany(ProductH2hQueue::class, 'customer_area_code', 'id_kota_new');
    // }
}
