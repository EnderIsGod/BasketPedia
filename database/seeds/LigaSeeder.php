<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ligas')->insert([
        	'nama' => 'Atlantic',
        	'negara' => 'Jerman',
        	'gambar' => 'bundesliga.png',
        ]);

        DB::table('ligas')->insert([
        	'nama' => 'Pacific',
        	'negara' => 'Inggris',
        	'gambar' => 'premierleague.png',
        ]);

        DB::table('ligas')->insert([
        	'nama' => 'Central',
        	'negara' => 'Spanyol',
        	'gambar' => 'laliga.png',
        ]);

        DB::table('ligas')->insert([
        	'nama' => 'NorthWest',
        	'negara' => 'Itali',
        	'gambar' => 'seriea.png',
        ]);
    }
}
