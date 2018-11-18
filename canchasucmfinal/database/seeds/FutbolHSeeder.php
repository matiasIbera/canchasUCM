<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class FutbolHSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('horarios')->insert([
        	'hora'=>'8:00'
        ]);

        DB::table('horarios')->insert([
        	'hora'=>'9:00'
        ]);

        DB::table('horarios')->insert([
        	'hora'=>'10:00'
        ]);

        DB::table('horarios')->insert([
        	'hora'=>'11:00'
        ]);
        
        DB::table('horarios')->insert([
        	'hora'=>'12:00'
        ]);
    
        DB::table('horarios')->insert([
        	'hora'=>'13:00'
        ]);
    
        DB::table('horarios')->insert([
        	'hora'=>'14:00'
        ]);
    
        DB::table('horarios')->insert([
        	'hora'=>'15:00'
        ]);

		DB::table('horarios')->insert([
        	'hora'=>'16:00'
        ]);
        
        DB::table('horarios')->insert([
        	'hora'=>'17:00'
        ]);
    
        DB::table('horarios')->insert([
        	'hora'=>'18:00'
        ]);
    
        DB::table('horarios')->insert([
        	'hora'=>'19:00'
        ]);
    
        DB::table('horarios')->insert([
        	'hora'=>'20:00'
        ]);
        
        DB::table('horarios')->insert([
        	'hora'=>'21:00'
        ]);
    
    
    }
}
