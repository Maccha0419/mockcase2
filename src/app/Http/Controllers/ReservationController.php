<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Reservation;
use App\Models\Shop;

class ReservationController extends Controller
{
    public function reservation(Request $request)
    {
        $user = Auth::user();
        $shop = Reservation::where([
            ['shop_id', $request->id],
            ['reservation_date', $request->reservation_date],
            ['reservation_time', $request->reservation_time],
        ])->get();
        if($shop===null){
            Reservation::insert([
                'user_id' => $user->id,
                'shop_id' => $request->id,
                'reservation_date' => $request->reservation_date,
                'reservation_time' => $request->reservation_time,
                'reservation_number' => $request->reservation_number,
            ]);
            return view('done');
        }else{
            dd($shop);
            return back();
        };
    }
}
