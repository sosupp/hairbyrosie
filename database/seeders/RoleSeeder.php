<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([

            [
                'admin_id' => 1,
                'name' => 'Owner',
                'slug' => 'owner',
            ],
            [
                'admin_id' => 1,
                'name' => 'Admin',
                'slug' => 'admin',
            ],
            [
                'admin_id' => 1,
                'name' => 'User',
                'slug' => 'user',
            ],
            [
                'admin_id' => 1,
                'name' => 'Contributor',
                'slug' => 'contributor',
            ],


        ]);
    }
}
