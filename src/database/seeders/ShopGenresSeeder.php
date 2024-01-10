<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopGenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('shopgenres')->insert(
                [
                    'id' => '1',
                    'shop_id' => '1',
                    'shop_genre' => '寿司',
                ]
            );
            DB::table('shopgenres')->insert(
                [
                    'id' => '2',
                    'shop_id' => '2',
                    'shop_genre' => '焼肉',
                ]
            );
            DB::table('shopgenres')->insert(
                [
                    'id' => '3',
                    'shop_id' => '3',
                    'shop_genre' => '居酒屋',
                ]
            );
            DB::table('shopgenres')->insert(
                [
                    'id' => '4',
                    'shop_id' => '4',
                    'shop_genre' => 'イタリアン',
                ]
            );
            DB::table('shopgenres')->insert(
                [
                    'id' => '5',
                    'shop_id' => '5',
                    'shop_genre' => '寿司',
                ]
            );
            DB::table('shopgenres')->insert(
                [
                    'id' => '6',
                    'shop_id' => '6',
                    'shop_genre' => '焼肉',
                ]
            );
            DB::table('shopgenres')->insert(
                [
                    'id' => '7',
                    'shop_id' => '7',
                    'shop_genre' => 'イタリアン',
                ]
            );
            DB::table('shopgenres')->insert(
                [
                    'id' => '8',
                    'shop_id' => '8',
                    'shop_genre' => 'ラーメン',
                ]
            );
            DB::table('shopgenres')->insert(
                [
                    'id' => '9',
                    'shop_id' => '9',
                    'shop_genre' => '居酒屋',
                ]
            );
            DB::table('shopgenres')->insert(
                [
                    'id' => '10',
                    'shop_id' => '10',
                    'shop_genre' => '寿司',
                ]
            );
            DB::table('shopgenres')->insert(
                [
                    'id' => '11',
                    'shop_id' => '11',
                    'shop_genre' => '焼肉',
                ]
            );
            DB::table('shopgenres')->insert(
                [
                    'id' => '12',
                    'shop_id' => '12',
                    'shop_genre' => '焼肉',
                ]
            );
            DB::table('shopgenres')->insert(
                [
                    'id' => '13',
                    'shop_id' => '13',
                    'shop_genre' => '居酒屋',
                ]
            );
            DB::table('shopgenres')->insert(
                [
                    'id' => '14',
                    'shop_id' => '14',
                    'shop_genre' => '寿司',
                ]
            );
            DB::table('shopgenres')->insert(
                [
                    'id' => '15',
                    'shop_id' => '15',
                    'shop_genre' => 'ラーメン',
                ]
            );
            DB::table('shopgenres')->insert(
                [
                    'id' => '16',
                    'shop_id' => '16',
                    'shop_genre' => '居酒屋',
                ]
            );
            DB::table('shopgenres')->insert(
                [
                    'id' => '17',
                    'shop_id' => '17',
                    'shop_genre' => '寿司',
                ]
            );
            DB::table('shopgenres')->insert(
                [
                    'id' => '18',
                    'shop_id' => '18',
                    'shop_genre' => '焼肉',
                ]
            );
            DB::table('shopgenres')->insert(
                [
                    'id' => '19',
                    'shop_id' => '19',
                    'shop_genre' => 'イタリアン',
                ]
            );
            DB::table('shopgenres')->insert(
                [
                    'id' => '20',
                    'shop_id' => '20',
                    'shop_genre' => '寿司',
                ]
            );
    }
}
