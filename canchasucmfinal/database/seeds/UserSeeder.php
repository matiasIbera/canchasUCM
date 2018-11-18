<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'=> 'Matías',
        	'apellido' =>'Ibera',
        	'email' =>'mti.ibera@hotmail.es',
        	'password' =>bcrypt('1234'),
        	'rut' =>'18.819.430-3',
        	'carrera_id' =>'1',
        	'anio_ingreso'=>'2014',
        	'type' =>'admin'
        ]);

        DB::table('users')->insert([
        	'name'=> 'Nelson',
        	'apellido' =>'Gonzalez',
        	'email' =>'nelson@hotmail.com',
        	'password' =>bcrypt('1234'),
        	'rut' =>'19.905.305-k',
        	'carrera_id' =>'1',
        	'anio_ingreso'=>'2014',
        	'type' =>'admin'
        ]);

          DB::table('users')->insert([
        	'name'=> 'José',
        	'apellido' =>'Soto',
        	'email' =>'josesoto@gmail.com',
        	'password' =>bcrypt('1234'),
        	'rut' =>'17.305.234-2',
        	'carrera_id' =>'2',
        	'anio_ingreso'=>'2010',
        	'type' =>'member'
        ]);

            DB::table('users')->insert([
        	'name'=> 'Juan',
        	'apellido' =>'Pino',
        	'email' =>'juanp@hotmail.es',
        	'password' =>bcrypt('1234'),
        	'rut' =>'19.579.323-5',
        	'carrera_id' =>'3',
        	'anio_ingreso'=>'2016',
        	'type' =>'member'
        ]);

              DB::table('users')->insert([
        	'name'=> 'Pablo',
        	'apellido' =>'Hernandez',
        	'email' =>'pabloH@hotmail.com',
        	'password' =>bcrypt('1234'),
        	'rut' =>'18.999.343-6',
        	'carrera_id' =>'4',
        	'anio_ingreso'=>'2013',
        	'type' =>'member'
        ]);

                DB::table('users')->insert([
        	'name'=> 'Rodrigo',
        	'apellido' =>'Gonzalez',
        	'email' =>'rodrigog@hotmail.es',
        	'password' =>bcrypt('1234'),
        	'rut' =>'17.023.323-1',
        	'carrera_id' =>'5',
        	'anio_ingreso'=>'2012',
        	'type' =>'member'
        ]);

                  DB::table('users')->insert([
        	'name'=> 'Gonzalo',
        	'apellido' =>'Jorquera',
        	'email' =>'gonzaloj@hotmail.com',
        	'password' =>bcrypt('1234'),
        	'rut' =>'19.023.124-9',
        	'carrera_id' =>'6',
        	'anio_ingreso'=>'2015',
        	'type' =>'member'
        ]);
    }
}
