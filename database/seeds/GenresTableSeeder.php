<?php

use App\Models\Category;
use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(\App\Models\Genre::class, 100)->create();
    }
}
