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
        
        
        
            function run(): void
            {
                foreach($this->customers as $customer)
                {
                    customer::create([
                        "firstname"=>$customer['firstname'],
                        "lastname"=>$customer['lastname']
                    ]);
                }
            }
    }
}
