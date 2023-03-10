<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
   private $categories=[
    [
        "name"=>"Cronaca"
    ],
    [
        "name"=>"Sport"
    ],
    [
        "name"=>"Politica"
    ],
    [
        "name"=>"Salute"
    ],
   ];

    public function run(): void
    {
        foreach($this->categories as $category)
        {
            Category::create([
                "name"=>$category['name']
            ]);
        }
    }
}
