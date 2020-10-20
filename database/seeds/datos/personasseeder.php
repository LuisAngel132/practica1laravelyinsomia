<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class personasseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('personas')->insert([
            'nombre'=> 'Raul',
            'appaterno'=>'Jimenez',
            'apmaterno'=>'Sanchez',
        ]);
        DB::table('personas')->insert([
            'nombre'=> 'Francisco',
            'appaterno'=>'Ezequiel',
            'apmaterno'=>'Sandoval',
        ]);
        DB::table('personas')->insert([
            'nombre'=> 'Cristian',
            'appaterno'=>'Zaragoza',
            'apmaterno'=>'Labaron',
        ]);
        DB::table('personas')->insert([
            'nombre'=> 'Mauricio',
            'appaterno'=>'Barajas',
            'apmaterno'=>'Ochoa',
        ]);
        DB::table('personas')->insert([
            'nombre'=> 'Leonardo',
            'appaterno'=>'Dicaprio',
            'apmaterno'=>'Gonzales',
        ]);
        }
}
