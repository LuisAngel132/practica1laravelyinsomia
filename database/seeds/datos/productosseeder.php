<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productosseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre_del_producto'=>'reloj',
            'comentario'=>'es de gran calidad',
            'persona'=>'1',
            ]);
         DB::table('productos')->insert([
          'nombre_del_producto'=>'camara',
         'comentario'=>'lente descompuesto',
        'persona'=>'2',
         ]);
         DB::table('productos')->insert([
         'nombre_del_producto'=>'audifonos',
      'comentario'=>'volumen bajo',
        'persona'=>'3',
                    ]);
          DB::table('productos')->insert([
              'nombre_del_producto'=>'estante',
         'comentario'=>'muy fragil',
            'persona'=>'4',
                        ]);
        DB::table('productos')->insert([
     'nombre_del_producto'=>'cartera',
        'comentario'=>'es de gran calidad',
         'persona'=>'5',
          ]);       
}
}