<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TRSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tenisreservas')->insert([
        	'id_usuario' => '1',
            'id_horario1' => '1',
            'id_horario2' =>'2',
        	'fecha_reserva' => '19-02-01'
        ]);

        DB::table('tenisreservas')->insert([
        	'id_usuario' => '2',
            'id_horario1' => '2',
            'id_horario2' => '3',
        	'fecha_reserva' => '19-02-02'
        ]);

        DB::table('tenisreservas')->insert([
        	'id_usuario' => '3',
            'id_horario1' => '3',
            'id_horario2' => '4',
        	'fecha_reserva' => '19-02-03'
        ]);

        DB::table('tenisreservas')->insert([
        	'id_usuario' => '4',
            'id_horario1' => '4',
            'id_horario2' => '5',
        	'fecha_reserva' => '19-02-04'
        ]);

        DB::table('tenisreservas')->insert([
        	'id_usuario' => '5',
            'id_horario1' => '5',
            'id_horario2' => '6',
        	'fecha_reserva' => '19-02-05'
        ]);

        DB::table('tenisreservas')->insert([
        	'id_usuario' => '6',
            'id_horario1' => '6',
            'id_horario2' => '7',
        	'fecha_reserva' => '19-02-06'
        ]);

        DB::table('tenisreservas')->insert([
        	'id_usuario' => '7',
            'id_horario1' => '7',
            'id_horario2' => '8',
        	'fecha_reserva' => '19-02-07'
        ]);
    }
}
