<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopAreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('shopareas')->insert(
                [
                    'id' => '1',
                    'shop_id' => '1',
                    'shop_area' => '東京都',
                ]
            );
            DB::table('shopareas')->insert(
                [
                    'id' => '2',
                    'shop_id' => '2',
                    'shop_area' => '大阪府',
                ]
            );
            DB::table('shopareas')->insert(
                [
                    'id' => '3',
                    'shop_id' => '3',
                    'shop_area' => '福岡県',
                ]
            );
            DB::table('shopareas')->insert(
                [
                    'id' => '4',
                    'shop_id' => '4',
                    'shop_area' => '東京都',
                ]
            );
            DB::table('shopareas')->insert(
                [
                    'id' => '5',
                    'shop_id' => '5',
                    'shop_area' => '東京都',
                ]
            );
            DB::table('shopareas')->insert(
                [
                    'id' => '6',
                    'shop_id' => '6',
                    'shop_area' => '東京都',
                ]
            );
            DB::table('shopareas')->insert(
                [
                    'id' => '7',
                    'shop_id' => '7',
                    'shop_area' => '大阪府',
                ]
            );
            DB::table('shopareas')->insert(
                [
                    'id' => '8',
                    'shop_id' => '8',
                    'shop_area' => '東京都',
                ]
            );
            DB::table('shopareas')->insert(
                [
                    'id' => '9',
                    'shop_id' => '9',
                    'shop_area' => '大阪府',
                ]
            );
            DB::table('shopareas')->insert(
                [
                    'id' => '10',
                    'shop_id' => '10',
                    'shop_area' => '東京都',
                ]
            );
            DB::table('shopareas')->insert(
                [
                    'id' => '11',
                    'shop_id' => '11',
                    'shop_area' => '大阪府',
                ]
            );
            DB::table('shopareas')->insert(
                [
                    'id' => '12',
                    'shop_id' => '12',
                    'shop_area' => '福岡県',
                ]
            );
            DB::table('shopareas')->insert(
                [
                    'id' => '13',
                    'shop_id' => '13',
                    'shop_area' => '東京都',
                ]
            );
            DB::table('shopareas')->insert(
                [
                    'id' => '14',
                    'shop_id' => '14',
                    'shop_area' => '大阪府',
                ]
            );
            DB::table('shopareas')->insert(
                [
                    'id' => '15',
                    'shop_id' => '15',
                    'shop_area' => '東京都',
                ]
            );
            DB::table('shopareas')->insert(
                [
                    'id' => '16',
                    'shop_id' => '16',
                    'shop_area' => '大阪府',
                ]
            );
            DB::table('shopareas')->insert(
                [
                    'id' => '17',
                    'shop_id' => '17',
                    'shop_area' => '東京都',
                ]
            );
            DB::table('shopareas')->insert(
                [
                    'id' => '18',
                    'shop_id' => '18',
                    'shop_area' => '東京都',
                ]
            );
            DB::table('shopareas')->insert(
                [
                    'id' => '19',
                    'shop_id' => '19',
                    'shop_area' => '福岡県',
                ]
            );
            DB::table('shopareas')->insert(
                [
                    'id' => '20',
                    'shop_id' => '20',
                    'shop_area' => '大阪府',
                ]
            );
    }
}
