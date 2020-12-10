<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'Cactus',
                    'email' => 'admin@admin.com',
                    'password' => Hash::make('admin@admin.com') ,
                    'role_id' => 1,
                ],
                [
                    'name' => 'Zidane',
                    'email' => 'redacteur@redacteur.com',
                    'password' => Hash::make('redacteur@redacteur.com') ,
                    'role_id' => 2,
                ],
                [
                    'name' => 'Oussama',
                    'email' => 'membre@membre.com',
                    'password' => Hash::make('membre@membre.com') ,
                    'role_id' => 3,
                ],
                [
                    'name' => 'Kadri',
                    'email' => 'webmaster@webmaster.com',
                    'password' => Hash::make('webmaster@webmaster.com') ,
                    'role_id' => 4,
                ]
            ]
        );
    }
}
