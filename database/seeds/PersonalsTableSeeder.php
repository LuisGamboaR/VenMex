<?php

use Illuminate\Database\Seeder;

class PersonalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('personals')->insert(array(
          'oficio' => 'ASEO',
                'user_id' => '1',
            'created_at' => now()
        ));

        \DB::table('personals')->insert(array(
            'oficio' => 'MESONERO',
            'user_id' => '2',
            'created_at' => now()
        ));
    }
}
