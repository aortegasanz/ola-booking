<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Type 1 (Individual) */
        /* Type 2 (Doble) x 5*/
        /* Type 3 (Triple) x 4*/            
        /* Type 4 (Cuadríple) x 6*/

        DB::table('rooms')->insert([
            ['id' =>  1, 'name' => 'Room 101', 'description' => '', 'services' => '', 'room_number' => 'R101', 'room_type_id' => 1, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  2, 'name' => 'Room 102', 'description' => '', 'services' => '', 'room_number' => 'R102', 'room_type_id' => 1, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  3, 'name' => 'Room 103', 'description' => '', 'services' => '', 'room_number' => 'R103', 'room_type_id' => 1, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  4, 'name' => 'Room 104', 'description' => '', 'services' => '', 'room_number' => 'R104', 'room_type_id' => 1, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  5, 'name' => 'Room 105', 'description' => '', 'services' => '', 'room_number' => 'R105', 'room_type_id' => 1, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  6, 'name' => 'Room 106', 'description' => '', 'services' => '', 'room_number' => 'R106', 'room_type_id' => 1, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  7, 'name' => 'Room 107', 'description' => '', 'services' => '', 'room_number' => 'R107', 'room_type_id' => 1, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  8, 'name' => 'Room 108', 'description' => '', 'services' => '', 'room_number' => 'R108', 'room_type_id' => 1, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  9, 'name' => 'Room 109', 'description' => '', 'services' => '', 'room_number' => 'R109', 'room_type_id' => 1, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' => 10, 'name' => 'Room 110', 'description' => '', 'services' => '', 'room_number' => 'R110', 'room_type_id' => 1, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  11, 'name' => 'Room 201', 'description' => '', 'services' => '', 'room_number' => 'R201', 'room_type_id' => 2, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  12, 'name' => 'Room 202', 'description' => '', 'services' => '', 'room_number' => 'R202', 'room_type_id' => 2, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  13, 'name' => 'Room 203', 'description' => '', 'services' => '', 'room_number' => 'R203', 'room_type_id' => 2, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  14, 'name' => 'Room 204', 'description' => '', 'services' => '', 'room_number' => 'R204', 'room_type_id' => 2, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  15, 'name' => 'Room 205', 'description' => '', 'services' => '', 'room_number' => 'R205', 'room_type_id' => 2, 'status_room_id' => 2, 'created_at' => Carbon::now()],
            ['id' =>  16, 'name' => 'Room 301', 'description' => '', 'services' => '', 'room_number' => 'R301', 'room_type_id' => 3, 'status_room_id' => 2, 'created_at' => Carbon::now()],
            ['id' =>  17, 'name' => 'Room 302', 'description' => '', 'services' => '', 'room_number' => 'R302', 'room_type_id' => 3, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  18, 'name' => 'Room 303', 'description' => '', 'services' => '', 'room_number' => 'R303', 'room_type_id' => 3, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  19, 'name' => 'Room 304', 'description' => '', 'services' => '', 'room_number' => 'R304', 'room_type_id' => 3, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  20, 'name' => 'Room 401', 'description' => '', 'services' => '', 'room_number' => 'R401', 'room_type_id' => 4, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  21, 'name' => 'Room 402', 'description' => '', 'services' => '', 'room_number' => 'R402', 'room_type_id' => 4, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  22, 'name' => 'Room 403', 'description' => '', 'services' => '', 'room_number' => 'R403', 'room_type_id' => 4, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  23, 'name' => 'Room 404', 'description' => '', 'services' => '', 'room_number' => 'R404', 'room_type_id' => 4, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  24, 'name' => 'Room 405', 'description' => '', 'services' => '', 'room_number' => 'R405', 'room_type_id' => 4, 'status_room_id' => 1, 'created_at' => Carbon::now()],
            ['id' =>  25, 'name' => 'Room 406', 'description' => '', 'services' => '', 'room_number' => 'R405', 'room_type_id' => 4, 'status_room_id' => 1, 'created_at' => Carbon::now()],
        ]);
    }
}
