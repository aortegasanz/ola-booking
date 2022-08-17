<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Models\Booking;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\Contact;

use Carbon\Carbon;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bookings = Booking::all();
        //dd ($bookings);
        return view('dashboard', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $room_id = $request->input('room_id');
        $params = $request->input('params');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $pax = $request->input('pax');
        $reference = 'RS'.Carbon::now()->format('ymdhis');
        $room_type_id = Room::find($room_id)->room_type_id;
        $diff_days = date_diff(Carbon::createFromFormat('Y-m-d', $start_date) , Carbon::createFromFormat('Y-m-d', $end_date));
        $booking_amount = RoomType::find($room_type_id)->amount * intval($diff_days->d);
        $booking = Booking::create([
            'reference'         => $reference, /* generar código autocalculado */
            'start_date'        => $start_date,
            'end_date'          => $end_date,
            'pax'               => $pax,
            'room_number'       => Room::find($room_id)->room_number,
            'booking_amount'    => $booking_amount,
            'status_booking_id' => 1, /* 1: Pendiente Datos de Contacto */
            'contact_id'        => 0,
            'room_type_id'      => $room_type_id,
            'room_id'           => $room_id,
        ]);
        return view('bookings.update', compact('booking'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $booking = Booking::find($id);
        return view('bookings.show', compact('booking'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $params = $request;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mail' => 'required|email',
            'phone' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('bookings')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            /* Guardamos los datos del contacto */
            $contact = Contact::create([
                'name'  => $params->input('name'),
                'mail'  => $params->input('mail'),
                'phone' => $params->input('phone'),
            ]);
            /* Actualizamos el contacto a la reserva y ponemos status de reserva ok */
            $booking = Booking::find($id);            
            $booking->contact_id = $contact->id;
            $booking->status_booking_id = 2;        
            $booking->save();
            /* Marcamos la habitación como reservada */
            $room = Room::find($booking->room_id);
            $room->status_room_id = 2;
            $room->save(); 
            return view('bookings.show', compact('booking'));
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Search Avalaible Rooms
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request) 
    {
        $params = $request;
        //dd($params);
        $validator = Validator::make($request->all(), [
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'pax' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return redirect('bookings/create')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            $rooms = [];
            /* Verificar que la reserva sea para fechas posteriores al dia de hoy, no se puede reservar para el dia ni dias anteriories */
            if (($request->input('start_date') <= Carbon::now()->format('Y-m-d')) || ($request->input('end_date') <= Carbon::now()->format('Y-m-d')))
            {
                    return view('bookings.create', compact('rooms'), compact('params'))->withErrors(['errors' => 'Start Date or End Date is less or equal than today.']);
            }    
            /* Verificar que la fecha final no sea inferior a la inicial */
            if ($request->input('start_date') > $request->input('end_date')) 
            {
                return view('bookings.create', compact('rooms'), compact('params'))->withErrors(['errors' => 'Start Date is later than End Date']);
            } 
            /* Obtenemos las habitaciones libres */
            $rooms = DB::table('rooms')
                ->join('room_types', 'room_types.id', '=', 'rooms.room_type_id')
                ->select('rooms.*', 'room_types.paxmax as sPaxMax', 'room_types.amount as dAmount', 'room_types.period as sPeriod', 'room_types.description as sDescription')
                ->where('room_types.paxmax', '>=', $request->input('pax'))
                ->where('rooms.status_room_id', '=', 1)  /* 1: Libre | 2: Ocupada | 3: Mantenimiento */
                ->get();
            return view('bookings.create', compact('rooms'), compact('params'));
        }
    }

}
