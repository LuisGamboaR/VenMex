<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        //Usuarios
        Permission::create(['name' => 'usuarios.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'usuarios.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'usuarios.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'usuarios.destroy', 'guard_name' => 'web']);

         //Productos
         Permission::create(['name' => 'productos.index', 'guard_name' => 'web']);
         Permission::create(['name' => 'productos.edit', 'guard_name' => 'web']);
         Permission::create(['name' => 'productos.update', 'guard_name' => 'web']);
         Permission::create(['name' => 'productos.create', 'guard_name' => 'web']);
         Permission::create(['name' => 'productos.destroy', 'guard_name' => 'web']);

          //Utileria
        Permission::create(['name' => 'utilerias.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'utilerias.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'utilerias.update', 'guard_name' => 'web']);
        Permission::create(['name' => 'utilerias.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'utilerias.destroy', 'guard_name' => 'web']);

           //Clientes
           Permission::create(['name' => 'clientes.index', 'guard_name' => 'web']);
           Permission::create(['name' => 'clientes.edit', 'guard_name' => 'web']);
           Permission::create(['name' => 'clientes.create', 'guard_name' => 'web']);
           Permission::create(['name' => 'clientes.destroy', 'guard_name' => 'web']);

                //´Proveedores
                Permission::create(['name' => 'proveedores.index', 'guard_name' => 'web']);
                Permission::create(['name' => 'proveedores.edit', 'guard_name' => 'web']);
                Permission::create(['name' => 'proveedores.create', 'guard_name' => 'web']);
                Permission::create(['name' => 'proveedores.destroy', 'guard_name' => 'web']);

                     //Comidas
           Permission::create(['name' => 'comidas.index', 'guard_name' => 'web']);
           Permission::create(['name' => 'comidas.edit', 'guard_name' => 'web']);
           Permission::create(['name' => 'comidas.create', 'guard_name' => 'web']);
           Permission::create(['name' => 'comidas.destroy', 'guard_name' => 'web']);

                //Eventos
                Permission::create(['name' => 'eventos.index', 'guard_name' => 'web']);
                Permission::create(['name' => 'eventos.edit', 'guard_name' => 'web']);
                Permission::create(['name' => 'eventos.create', 'guard_name' => 'web']);
                Permission::create(['name' => 'eventos.destroy', 'guard_name' => 'web']);


           $admin = Role::create(['name' => 'Admin']);
   
           $admin->givePermissionTo([
               'usuarios.index',
               'usuarios.edit',
               'usuarios.create',
               'usuarios.destroy',
               
               'clientes.index',
               'clientes.edit',
               'clientes.create',
               'clientes.destroy',
   
   
               'productos.index',
               'productos.edit',
               'productos.create',
               'productos.destroy',

               
               'utilerias.index',
               'utilerias.edit',
               'utilerias.create',
               'utilerias.destroy',

               'comidas.index',
               'comidas.edit',
               'comidas.create',
               'comidas.destroy',

               'proveedores.index',
               'proveedores.edit',
               'proveedores.create',
               'proveedores.destroy',

               'eventos.index',
               'eventos.edit',
               'eventos.create',
               'eventos.destroy',
   
           ]);


           $auditor = Role::create(['name' => 'Auditor']);
   
           $auditor->givePermissionTo([
               'usuarios.index',

               'clientes.index',

   
   
               'productos.index',

               
               'utilerias.index',


               'comidas.index',


               'proveedores.index',


               'eventos.index',
    

           ]);

           $user = User::find(1); 
           $user->assignRole('Admin');

           $user2 = User::find(2); 
           $user2->assignRole('Auditor');
   
    }
}
