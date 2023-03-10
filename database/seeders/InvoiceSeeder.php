<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run(): void
        {

            
                function run(): void
                {
                    foreach($this->invoice as $invoice)
                    {
                        invoice::create([
                            "code"=>$invoice['code'],
                            "total"=>$invoice['total'],
                            "payment"=>$invoice['payment']
                        ]);
                    }
                }
        }
    }
    