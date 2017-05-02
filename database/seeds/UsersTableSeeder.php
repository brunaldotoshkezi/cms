<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Factory::create();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        DB::table('users')->insert(
            [
                [
                    'name'=>'Cim Bederri',
                    'slug'=>'cim-bederri',
                    'email'=>'cimbederri@gmail.com',
                    'password'=>bcrypt('admin123'),
                    'bio'=>$faker->text(rand(250,300))
                ],[
                    'name'=>'Dengje Bederri',
                    'slug'=>'dengje-bederri',
                    'email'=>'dengjebederri@gmail.com',
                    'password'=>bcrypt('admin123'),
                    'bio'=>$faker->text(rand(250,300))
                ],[
                    'name'=>'Cim dengje',
                    'slug'=>'cim-dengje',
                    'email'=>'cimdengje@gmail.com',
                    'password'=>bcrypt('admin123'),
                    'bio'=>$faker->text(rand(250,300))
                ]
            ]
        );
    }
}
