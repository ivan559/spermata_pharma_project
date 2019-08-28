<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(PermissionTableSeeder::class);
    	$this->call(userTableSeeder::class);
        

    }
}
