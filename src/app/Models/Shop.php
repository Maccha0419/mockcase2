<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'shop_name',
        'shop_area',
        'shop_genre',
        'shop_overview',
        'shop_image',
        ];

    public function reservation(){
        return $this->hasOne(Reservation::class);
    }
    public function like(){
        return $this->hasOne(Bookmark::class);
    }

    public function scopeShopareaSearch($query, $shop_area){
        if (!empty($shop_area)) {
            $query->where('shop_area', $shop_area);
        }
    }
    public function scopeShopgenreSearch($query, $shop_genre){
        if (!empty($shop_genre)) {
            $query->where('shop_genre', $shop_genre);
        }
    }
    public function scopeKeywordSearch($query, $keyword){
        if (!empty($keyword)) {
            $query->where('shop_name', 'like', '%' . $keyword . '%')->orwhere('shop_overview', 'like', '%' . $keyword . '%');
        }
    }
}
