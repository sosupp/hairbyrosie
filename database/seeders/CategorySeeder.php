<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'admin_id' => 1,
                'name' => 'Wig Caps',
                'slug' => 'wig-caps',
            ],
            [
                'admin_id' => 1,
                'name' => 'Human Hairs',
                'slug' => 'human-hairs',
            ],
        ]);
    }
}
