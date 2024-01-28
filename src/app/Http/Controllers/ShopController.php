<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
        $shop_areas = Shop::groupBy('shop_area')->get('shop_area');
        $shop_genres = Shop::groupBy('shop_genre')->get('shop_genre');
        $shops = Shop::get();
        return view('shop', compact('shops','shop_areas','shop_genres'));
    }

    public function detail($id)
    {
        $shops = Shop::where('id', $id)->first();
        return view('detail', compact('shops'));
    }

    public function search(Request $request)
    {
        $shop_areas = Shop::groupBy('shop_area')->get('shop_area');
        $shop_genres = Shop::groupBy('shop_genre')->get('shop_genre');
        $shops = Shop::ShopareaSearch($request->shop_area)->ShopgenreSearch($request->shop_genre)->KeywordSearch($request->keyword)->get();
        return view('shop', compact('shops','shop_areas','shop_genres'));
    }
}
