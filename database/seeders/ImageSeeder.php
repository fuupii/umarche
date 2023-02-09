<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'owner_id' => 1,
                'filename' => 'sample.1jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample.2jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample.3jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample.4jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample.5jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample.6jpg',
                'title' => null
            ]]);
    }
}
