<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(CarreraSeeder::class);
    	$this->call(UserSeeder::class);
    	$this->call(FutbolHSeeder::class);
    	$this->call(BabyHSeeder::class);
    	$this->call(TenisHSeeder::class);
    	$this->call(FRSeeder::class);
    	$this->call(BRSeeder::class);
    	$this->call(TRSeeder::class);
        // $this->call(UsersTableSeeder::class);

    	Model::reguard();
    }
}
