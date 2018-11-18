<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TenisHSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tenishorarios')->insert([
        	'hora'=>'8:00'
        ]);

        DB::table('tenishorarios')->insert([
        	'hora'=>'9:00'
        ]);

        DB::table('tenishorarios')->insert([
        	'hora'=>'10:00'
        ]);

        DB::table('tenishorarios')->insert([
        	'hora'=>'11:00'
        ]);
        
        DB::table('tenishorarios')->insert([
        	'hora'=>'12:00'
        ]);
    
        DB::table('tenishorarios')->insert([
        	'hora'=>'13:00'
        ]);
    
        DB::table('tenishorarios')->insert([
        	'hora'=>'14:00'
        ]);
    
        DB::table('tenishorarios')->insert([
        	'hora'=>'15:00'
        ]);

		DB::table('tenishorarios')->insert([
        	'hora'=>'16:00'
        ]);
        
        DB::table('tenishorarios')->insert([
        	'hora'=>'17:00'
        ]);
    
        DB::table('tenishorarios')->insert([
        	'hora'=>'18:00'
        ]);
    
        DB::table('tenishorarios')->insert([
        	'hora'=>'19:00'
        ]);
    
        DB::table('tenishorarios')->insert([
        	'hora'=>'20:00'
        ]);
        
        DB::table('tenishorarios')->insert([
        	'hora'=>'21:00'
        ]);
    }
}
