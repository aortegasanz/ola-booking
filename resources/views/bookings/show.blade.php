@extends('layout')
@section('content')
    <div class="container">
        <br/>
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Datos de la Reserva</h2>
            </div>
            <div class="card-body">
                <div class="form-gruop col-12">
                    <h4>Datos de la Reserva</h4>
                    <table class="table table-sm">                            
                        <tbody>
                            <tr><td>Localizador:</td><td>{{ $booking->reference }}</td></tr>
                            <tr><td>Nombre:</td><td>{{ $booking->contact->name }}</td></tr>
                            <tr><td>e-Mail:</td><td>{{ $booking->contact->mail }}</td></tr>
                            <tr><td>Teléfono:</td><td>{{ $booking->contact->phone }}</td></tr>
                            <tr><td>Fecha Entrada:</td><td>{{ Carbon\Carbon::parse($booking->start_date)->format('d/m/Y') }}</td></tr>
                            <tr><td>Fecha Salida:</td><td>{{ Carbon\Carbon::parse($booking->end_date)->format('d/m/Y') }}</td></tr>
                            <tr><td>Número Huéspedes:</td><td>{{ $booking->pax }}</td></tr>
                            <tr><td>Número de Habitación:</td><td>{{ $booking->room_number }}</td></tr>
                            <tr><td>Importe Total:</td><td><strong>{{ number_format($booking->booking_amount,2) }} €</strong></td></tr>
                            <tr><td colspan="2">&nbsp;</td></tr>
                            <tr><td colspan="2"><a class="btn btn-primary col-12" href="{{ route('bookings.index') }}" role="button">Ir a Reservas</a></td></tr>
                        </tbody>
                    </table>                        
                </div>
            </div>                    
        </div>
    </div>
@endsection