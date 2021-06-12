<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'nama' => 'GOLDEN STATE WARRIORS',
            'liga_id' => 2,
            'gambar' => 'chelsea.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'LOS ANGELES LAKERS',
            'liga_id' => 2,
            'gambar' => 'leicester.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'LOS ANGELES CLIPPERS',
            'liga_id' => 2,
            'gambar' => 'mu.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'SACRAMENTO KINGS',
            'liga_id' => 2,
            'gambar' => 'liverpool.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'PHOENIX SUNS',
            'liga_id' => 2,
            'gambar' => 'tottenham.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'BOSTON CELTICS',
            'liga_id' => 1,
            'gambar' => 'dortmund.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'TORONTO RAPTORS',
            'liga_id' => 1,
            'gambar' => 'munchen.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'DENVER NUGGETS',
            'liga_id' => 4,
            'gambar' => 'juve.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'UTAH JAZZ',
            'liga_id' => 4,
            'gambar' => 'asroma.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'OKLAHOMA CITY THUNDER',
            'liga_id' => 4,
            'gambar' => 'acmilan.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'MINNESOTA TIMBERWOLVES',
            'liga_id' => 4,
            'gambar' => 'lazio.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'CLEVELAND CAVALIERS',
            'liga_id' => 3,
            'gambar' => 'madrid.png'
        ]);
    }
}
