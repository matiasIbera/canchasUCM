<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BabyHSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('babyhorarios')->insert([
        	'hora'=>'8:00'
        ]);

        DB::table('babyhorarios')->insert([
        	'hora'=>'9:00'
        ]);

        DB::table('babyhorarios')->insert([
        	'hora'=>'10:00'
        ]);

        DB::table('babyhorarios')->insert([
        	'hora'=>'11:00'
        ]);
        
        DB::table('babyhorarios')->insert([
        	'hora'=>'12:00'
        ]);
    
        DB::table('babyhorarios')->insert([
        	'hora'=>'13:00'
        ]);
    
        DB::table('babyhorarios')->insert([
        	'hora'=>'14:00'
        ]);
    
        DB::table('babyhorarios')->insert([
        	'hora'=>'15:00'
        ]);

		DB::table('babyhorarios')->insert([
        	'hora'=>'16:00'
        ]);
        
        DB::table('babyhorarios')->insert([
        	'hora'=>'17:00'
        ]);
    
        DB::table('babyhorarios')->insert([
        	'hora'=>'18:00'
        ]);
    
        DB::table('babyhorarios')->insert([
        	'hora'=>'19:00'
        ]);
    
        DB::table('babyhorarios')->insert([
        	'hora'=>'20:00'
        ]);
        
        DB::table('babyhorarios')->insert([
        	'hora'=>'21:00'
        ]);
    }
}
