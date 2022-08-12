<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bookings')->insert([
            [
                'id' =>  1, 
                'reference' => 'LOC20220816R301',
                'start_date' => '2022-08-16', 
                'end_date' => '2022-08-21', 
                'pax' => 3, 
                'room_number' => 'R301', 
                'booking_amount' => 200, 
                'status_booking_id' => 2,
                'contact_id' => 1,
                'room_type_id' => 3, 
                'room_id' => 16, 
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2, 
                'reference' => 'LOC20220817R205',
                'start_date' => '2022-08-17', 
                'end_date' => '2022-08-22', 
                'pax' => 2, 
                'room_number' => 'R205', 
                'booking_amount' => 150, 
                'status_booking_id' => 2,
                'contact_id' => 2,
                'room_type_id' => 2, 
                'room_id' => 15, 
                'created_at' => Carbon::now()
            ],            
        ]);

    }
}
