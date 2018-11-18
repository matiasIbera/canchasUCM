<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carreras')->insert([
        	'nombre'=> 'Ingeniería civíl informática'
        ]);

         DB::table('carreras')->insert([
        	'nombre'=> 'Ingeniería civíl industrial'
        ]);

          DB::table('carreras')->insert([
        	'nombre'=> 'Ingeniería civíl electrónica'
        ]);

           DB::table('carreras')->insert([
        	'nombre'=> 'Ingeniería civíl'
        ]);

            DB::table('carreras')->insert([
        	'nombre'=> 'Ingeniería en construcción'
        ]);

             DB::table('carreras')->insert([
        	'nombre'=> 'Enfermería'
        ]);

         DB::table('carreras')->insert([
        	'nombre'=> 'Medicina'
        ]);

         DB::table('carreras')->insert([
        	'nombre'=> 'Pedagogía en inglés'
        ]);

         DB::table('carreras')->insert([
        	'nombre'=> 'Pedagogía general básica'
        ]);
    }
}
