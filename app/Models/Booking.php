<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'start_date',
        'end_date',
        'pax',
        'room_number',
        'booking_amount',
        'status_booking_id',
        'contact_id',
        'room_type_id',
        'room_id',
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function status_booking()
    {
        return $this->belongsTo(StatusBooking::class);
    }

}
