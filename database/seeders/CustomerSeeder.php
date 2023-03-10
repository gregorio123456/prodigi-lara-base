<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $customer=[
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
        
            function run(): void
            {
                foreach($this->customer as $customer)
                {
                    customer::create([
                        "name"=>$customer['name']
                    ]);
                }
            }
    }
}
