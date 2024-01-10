<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoparea extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'shop_area',
    ];

    public function shop(){
        return $this->belongsTo(Shop::class);
    }
}
