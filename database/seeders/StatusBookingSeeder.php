<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class StatusBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('status_bookings')->insert([
            ['id' =>  0, 'name' => 's/d',        'back_color' => '', 'fore_color' => '', 'created_at' => Carbon::now()],
            ['id' =>  1, 'name' => 'Pdte. Datos Contacto',  'back_color' => '', 'fore_color' => '', 'created_at' => Carbon::now()],
            ['id' =>  2, 'name' => 'Confirmada', 'back_color' => '', 'fore_color' => '', 'created_at' => Carbon::now()],
            ['id' =>  3, 'name' => 'Anulada',    'back_color' => '', 'fore_color' => '', 'created_at' => Carbon::now()],
            ['id' =>  4, 'name' => 'Cancelada',  'back_color' => '', 'fore_color' => '', 'created_at' => Carbon::now()],
            ['id' =>  5, 'name' => 'Finalizada', 'back_color' => '', 'fore_color' => '', 'created_at' => Carbon::now()],
        ]);          
    }
}
