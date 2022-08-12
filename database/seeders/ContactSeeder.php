<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contacts')->insert([
            [
                'id' =>  1, 
                'name' => 'Alberto Ortega', 
                'mail' => 'ortegasanz@gmail.com', 
                'phone' => '+34.623.184.720', 
                'created_at' => Carbon::now()
            ],
            [
                'id' =>  2, 
                'name' => 'Layla Solsona', 
                'mail' => 'layla.solsona@chappsolutions.com', 
                'phone' => '+34 828 68 90 05', 
                'created_at' => Carbon::now()
            ],
        ]);        
    }

}
