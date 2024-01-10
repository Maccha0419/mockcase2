@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="shop-card">
        <div class="card__button">
            <form class="card__button" action="/" method="get">
                @csrf
                <button class="card"></button>
            </form>
        </div>

        <div class="card__name">
            <p class="shop_name">{{ $shops->shop_name }}</p>
            <input name="shop_name" type="hidden" value="{{ $shops->shop_name }}">
        </div>

        <div class="card__image">
            <img src="{{ $shops->shop_image }}" alt="">
            <input name="shop_image" type="hidden" value="{{ $shops->shop_image }}">
        </div>

        <div class="card__text">
            <p class="shop_area">{{ $shops->shop_area }}</p>
            <input name="shop_area" type="hidden" value="{{ $shops->shop_area }}">
            <p class="shop_genre">{{ $shops->shop_genre }}</p>
            <input name="shop_genre" type="hidden" value="{{ $shops->shop_genre }}">
            <p class="shop_genre">{{ $shops->shop_overview }}</p>
            <input name="shop_genre" type="hidden" value="{{ $shops->shop_overview }}">
        </div>
    </div>

    <div class="reservation-card">
        <div class="reservation__title">
            <h2 class="title">予約</h2>
        </div>
        <form class="reservation-form" action="/reservation/complete" method="post">
            @csrf
            <input name="id" type="hidden" value="{{ $shops->id }}">
            <div class="reservation-form__date">
                <input class="reservation-form__item" type="date" id="reservation_date" name="reservation_date" value="" />
            </div>
            <div class="reservation-form__time">
                <input class="reservation-form__item" type="time" id="reservation_time" name="reservation_time" value="" step="1800"/>
            </div>
            <div class="reservation-form__number">
                <select class="reservation-form__item-input" name="reservation_number">
                    <option value="" selected hidden>人数</option>
                    <option value="1">1人</option>
                    <option value="2">2人</option>
                    <option value="3">3人</option>
                    <option value="4">4人</option>
                    <option value="5">5人</option>
                    <option value="6">6人</option>
                </select>
            </div>
            <button class="reservation-form__button-submit">予約する</button>
        </form>
    </div>
</div>
@endsection