<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StatusRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('status_rooms')->insert([
            ['id' =>  1, 'name' => 'Libre',         'back_color' => '', 'fore_color' => '', 'created_at' => Carbon::now()],
            ['id' =>  2, 'name' => 'Ocupada',       'back_color' => '', 'fore_color' => '', 'created_at' => Carbon::now()],
            ['id' =>  3, 'name' => 'Mantenimiento', 'back_color' => '', 'fore_color' => '', 'created_at' => Carbon::now()],
        ]);        
    }
}
