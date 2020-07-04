<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array(
            'name'      => 'Luis Miguel',
            'lastname'  => 'Gamboa Rodriguez',
            'identification'  => '4287453',
            'telefono'  => '4242233',
            'codigo_t' => '0412',
            'tipo_c' => 'V',
            'email'     => 'admin@admin.com',
            'role'     => 'Admin',
            'email_verified_at' => now(),
            'password'  => bcrypt('admin1234'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
        ));

        \DB::table('users')->insert(array(
            'name'      => 'Pedro Andres',
            'lastname'  => 'Serrano Kvlar',
            'identification'  => '2237453',
            'codigo_t' => '0412',
            'telefono'  => '5642233',
            'tipo_c' => 'E',
            'role'     => 'Auditor',
            'email'     => 'auditor@auditor.com',
            'email_verified_at' => now(),
            'password'  => bcrypt('auditor123'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
        ));
        
  
    }
}
