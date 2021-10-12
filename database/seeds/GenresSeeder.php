<?php

use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            ['name' => 'Drama'],
            ['name' => 'Kids'],
            ['name' => 'TV Show']
        ];

        foreach ($genres as $genre)
        DB::table('genres')->insert($genre);
    }
}
