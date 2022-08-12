<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('room_types')->insert([
            ['id' =>  1, 'description' => 'Individual', 'paxmax' => 1, 'period' => 'dia', 'amount' => 20.00, 'created_at' => Carbon::now() ],
            ['id' =>  2, 'description' => 'Doble',      'paxmax' => 2, 'period' => 'dia', 'amount' => 30.00, 'created_at' => Carbon::now()],
            ['id' =>  3, 'description' => 'Triple',     'paxmax' => 3, 'period' => 'dia', 'amount' => 40.00, 'created_at' => Carbon::now()],
            ['id' =>  4, 'description' => 'Cuadrúple',  'paxmax' => 4, 'period' => 'dia', 'amount' => 50.00, 'created_at' => Carbon::now()],
        ]);
    }
}
