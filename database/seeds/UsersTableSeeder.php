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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        DB::table('users')->insert(
            [
                [
                    'name'=>'Cim Bederri',
                    'email'=>'cimbederri@gmail.com',
                    'password'=>bcrypt('admin123')
                ],[
                    'name'=>'Dengje Bederri',
                    'email'=>'dengjebederri@gmail.com',
                    'password'=>bcrypt('admin123')
                ],[
                    'name'=>'Cim dengje',
                    'email'=>'cimdengje@gmail.com',
                    'password'=>bcrypt('admin123')
                ]
            ]
        );
    }
}
