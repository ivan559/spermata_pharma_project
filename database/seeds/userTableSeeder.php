<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class,20)->create();
        Role::create([
        	'name' 	 => 'Admin',
        	'slug'	 => 'admin',
        	'special'=> 'all-access'
        ]);

        Role::create([
            'name'=> 'Cliente',
            'slug'=> 'cliente',
            'special' => 'all-access'
        ]);
        Role::create([
            'name' => 'Proveedor',
            'slug' => 'proveedor',
            'special' => 'all-access'

        ]);
        
    }
}
