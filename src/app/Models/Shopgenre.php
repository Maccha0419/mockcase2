<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopgenre extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'shop_genre',
    ];

    public function shop(){
        return $this->belongsTo(Shop::class);
    }
}
