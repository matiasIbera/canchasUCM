<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BRSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('babyreservas')->insert([
        	'id_usuario' => '1',
        	'id_horario' => '1',
        	'fecha_reserva' => '18-11-02'
        ]);

        DB::table('babyreservas')->insert([
        	'id_usuario' => '2',
        	'id_horario' => '2',
        	'fecha_reserva' => '18-11-02'
        ]);

        DB::table('babyreservas')->insert([
        	'id_usuario' => '3',
        	'id_horario' => '3',
        	'fecha_reserva' => '18-11-03'
        ]);

        DB::table('babyreservas')->insert([
        	'id_usuario' => '4',
        	'id_horario' => '4',
        	'fecha_reserva' => '18-11-03'
        ]);

        DB::table('babyreservas')->insert([
        	'id_usuario' => '5',
        	'id_horario' => '5',
        	'fecha_reserva' => '18-11-03'
        ]);

        DB::table('babyreservas')->insert([
        	'id_usuario' => '6',
        	'id_horario' => '6',
        	'fecha_reserva' => '18-11-04'
        ]);

        DB::table('babyreservas')->insert([
        	'id_usuario' => '7',
        	'id_horario' => '7',
        	'fecha_reserva' => '18-11-04'
        ]);
    }
}
