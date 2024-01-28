@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login__content">
    <form class="search-form" action="/research" method="get">
        @csrf
        <div class="search-form__item">
            <select class="search-form__item-select" name="shop_area">
                <option value="">All area</option>
                @foreach ($shop_areas as $shop_area)
                <option value="{{ $shop_area->shop_area }}">{{ $shop_area->shop_area }}</option>
                @endforeach
            </select>
            <select class="search-form__item-select" name="shop_genre">
                <option value="">All genre</option>
                @foreach ($shop_genres as $shop_genre)
                <option value="{{ $shop_genre->shop_genre}}">{{ $shop_genre->shop_genre }}</option>
                @endforeach
            </select>
            <button class="search-form__button-submit" type="submit"></button>
            <input class="search-form__item-input" type="text" name="keyword" placeholder="Search..." value="{{ old('keyword') }}">
        </div>
    </form>
    検索機能

    <div class="shop-card">
        <div class="card__inner">
            @foreach ($shops as $shop)

            <div class="card__image">
                <img src="{{ $shop->shop_image }}" alt="">
                <input name="shop_image" type="hidden" value="{{ $shop->shop_image }}">
            </div>

            <div class="card__name">
                <p class="shop_name">{{ $shop->shop_name }}</p>
                <input name="shop_name" type="hidden" value="{{ $shop->shop_name }}">
            </div>

            <div class="card__text">
                <p class="shop_area">{{ $shop->shop_area }}</p>
                <input name="shop_area" type="hidden" value="{{ $shop->shop_area }}">
                <p class="shop_genre">{{ $shop->shop_genre }}</p>
                <input name="shop_genre" type="hidden" value="{{ $shop->shop_genre }}">
            </div>

            <div class="card__button">
                <form class="card__button" action="/detail/{{ $shop->id }}" method="post">
                    @csrf
                    <input name="id" type="hidden" value="{{ $shop->id }}">
                    <button class="card">詳しく見る</button>
                </form>

                <example-component>a</example-component>


                <form class="card__button" action="/bookmark" method="post">
                    @csrf
                    <input name="shop_id" type="hidden" value="{{ $shop->id }}">
                    <button class="card">お気に入り</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection