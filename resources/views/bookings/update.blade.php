@extends('layout')
@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  
        <br/>
        <form method="POST" action="{{ route('bookings.update', $booking->id) }}" >
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Datos de Contacto</h2>
                </div>
                <div class="card-body">
                    <div class="form-group col-auto">
                        <label>Nombre</label>    
                        <input type="text" class="form-control" id="name" name="name" required> 
                    </div>
                    <div class="form-group col-auto">
                        <label>e-mail</label>
                        <input type="mail" class="form-control" id="mail" name="mail" required>
                    </div>
                    <div class="form-group col-auto">
                        <label>Teléfono</label>    
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-gruop col-12">
                        <h4>Datos de la Reserva</h4>
                        <table class="table table-sm">                            
                            <tbody>
                                <tr><td>Localizador:</td><td>{{ $booking->reference }}</td></tr>
                                <tr><td>Fecha Entrada:</td><td>{{ Carbon\Carbon::parse($booking->start_date)->format('d/m/Y') }}</td></tr>
                                <tr><td>Fecha Salida:</td><td>{{ Carbon\Carbon::parse($booking->end_date)->format('d/m/Y') }}</td></tr>
                                <tr><td>Número Huéspedes:</td><td>{{ $booking->pax }}</td></tr>
                                <tr><td>Número de Habitación:</td><td>{{ $booking->room_number }}</td></tr>
                                <tr><td>Importe Total:</td><td><strong>{{ number_format($booking->booking_amount,2) }} €</strong></td></tr>
                            </tbody>
                        </table>                        
                    </div>                    
                    <div class="form-group col-auto">                
                        <div class="row">
                            <div class="col-8">                                
                                <button type="submit" class="btn btn-success col-12">Reservar</button>                                
                            </div>
                            <div class="col-4">
                                <a class="btn btn-danger col-12" href="{{ route('bookings.index') }}" role="button">Cancelar</a>
                            </div>
                        </div>                
                    </div>
                </div>
            </div>
        </form>
        <br/>
        <div class="table-responsive-sm">
            <h3 class="card-title">Habitaciones Disponibles</h3>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="row">#</th>
                        <th scope="col">Tipo Habitación</th>
                        <th scope="col">No. Habitación</th>
                        <th scope="col">Máx.No.Húespedes</th>
                        <th scope="col">Coste</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @isset($rooms)
                        @foreach ($rooms as $room)
                        <tr>
                            <th scope="row">{{ $room->id }}</th>
                            <th scope="row">{{ $room->sDescription }}</th>
                            <td>{{ $room->room_number }}</td>
                            <td>{{ $room->sPaxMax }}</td>
                            <td>{{ $room->dAmount }} €/{{ $room->sPeriod }}</td></td>
                            <td><a class="btn btn-success btn-sm" href="#">Seleccionar</a></td>
                        </tr>
                        @endforeach
                    @endisset
                </tbody>
            </table>
        </div>         
    </div>
@endsection