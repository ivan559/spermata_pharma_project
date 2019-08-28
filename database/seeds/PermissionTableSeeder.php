<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $this->call(UsersTableSeeder::class);
        Permission::create([
            'name'=>'Navega users',
            'slug'=>'user.index',
            'description' => 'Lista los user',
        ]);

        Permission::create([
            'name'=>'Crea user',
            'slug'=>'user.create',
            'description' => 'Registra los user',
        ]);

          Permission::create([
            'name'=>'Navega user',
            'slug'=>'user.show',
            'description' => 'Visualizar los user',
        ]);

           Permission::create([
            'name'=>'edita user',
            'slug'=>'user.edit',
            'description' => 'Edita los user',
        ]);

            Permission::create([
            'name'=>'elimina user',
            'slug'=>'user.destroy',
            'description' => 'Elimina los user ',
        ]);




        Permission::create([
        	'name'=>'Navega Clientes',
        	'slug'=>'clientes.index',
        	'description' => 'Lista los clientes',
        ]);

        Permission::create([
        	'name'=>'Crea Clientes',
        	'slug'=>'clientes.create',
        	'description' => 'Registra los clientes',
        ]);

          Permission::create([
        	'name'=>'Navega Clientes',
        	'slug'=>'clientes.show',
        	'description' => 'Visualizar los clientes',
        ]);

           Permission::create([
        	'name'=>'edita Clientes',
        	'slug'=>'clientes.edit',
        	'description' => 'Edita los clientes',
        ]);

            Permission::create([
        	'name'=>'elimina Clientes',
        	'slug'=>'clientes.destroy',
        	'description' => 'Elimina los clientes ',
        ]);

      //roles


         Permission::create([
        	'name'=>'Navega roles',
        	'slug'=>'roles.index',
        	'description' => 'Lista los roles',
        ]);

        Permission::create([
        	'name'=>'Crea roles',
        	'slug'=>'roles.create',
        	'description' => 'Registra los roles',
        ]);

          Permission::create([
        	'name'=>'Navega roles',
        	'slug'=>'roles.show',
        	'description' => 'Visualizar los roles',
        ]);

           Permission::create([
        	'name'=>'edita roles',
        	'slug'=>'roles.edit',
        	'description' => 'Edita los roles',
        ]);

            Permission::create([
        	'name'=>'elimina roles',
        	'slug'=>'roles.destroy',
        	'description' => 'Elimina los roles ',
        ]);


         //Provvedores
         Permission::create([
        	'name'=>'Navega proveedor',
        	'slug'=>'proveedores.index',
        	'description' => 'Lista los proveedor',
        ]);

        Permission::create([
        	'name'=>'Crea proveedor',
        	'slug'=>'proveedores.create',
        	'description' => 'Registra los proveedor',
        ]);

          Permission::create([
        	'name'=>'Navega proveedor',
        	'slug'=>'proveedores.show',
        	'description' => 'Visualizar los proveedor',
        ]);

           Permission::create([
        	'name'=>'edita proveedor',
        	'slug'=>'proveedores.edit',
        	'description' => 'Edita los proveedor',
        ]);

            Permission::create([
        	'name'=>'elimina proveedor',
        	'slug'=>'proveedores.destroy',
        	'description' => 'Elimina los proveedor ',
        ]);

           //Medicamentos

       Permission::create([
        	'name'=>'Navega medicamentos',
        	'slug'=>'medicamentos.index',
        	'description' => 'Lista los medicamentos',
        ]);

        Permission::create([
        	'name'=>'Crea medicamentos',
        	'slug'=>'medicamentos.create',
        	'description' => 'Registra los medicamentos',
        ]);

          Permission::create([
        	'name'=>'Navega medicamentos',
        	'slug'=>'medicamentos.show',
        	'description' => 'Visualizar los medicamentos',
        ]);

           Permission::create([
        	'name'=>'edita medicamentos',
        	'slug'=>'medicamentos.edit',
        	'description' => 'Edita los medicamentos',
        ]);

            Permission::create([
        	'name'=>'elimina medicamentos',
        	'slug'=>'medicamentos.destroy',
        	'description' => 'Elimina los medicamentos ',
        ]);


         //MedicamentosxCLientes
            Permission::create([
        	'name'=>'Navega medicamentosxclientes',
        	'slug'=>'medicamentosxclientes.index',
        	'description' => 'Lista los medicamentosxclientes',
        ]);

        Permission::create([
        	'name'=>'Crea medicamentosxclientes',
        	'slug'=>'medicamentosxclientes.create',
        	'description' => 'Registra los medicamentosxclientes',
        ]);

          Permission::create([
        	'name'=>'Navega medicamentosxclientes',
        	'slug'=>'medicamentosxclientes.show',
        	'description' => 'Visualizar los medicamentosxclientes',
        ]);

           Permission::create([
        	'name'=>'edita medicamentosxclientes',
        	'slug'=>'medicamentosxclientes.edit',
        	'description' => 'Edita los medicamentosxclientes',
        ]);

            Permission::create([
        	'name'=>'elimina medicamentosxclientes',
        	'slug'=>'medicamentosxclientes.destroy',
        	'description' => 'Elimina los medicamentosxclientes ',
        ]);

            //roles


         Permission::create([
            'name' => 'Visualizar roles de usuarios',
            'slug' => 'rolescontroller.index',
            'description' => 'Visualiza los roles asignados a usuarios existentes ',

         ]);
    }
}
