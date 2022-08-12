@extends('bookings.layout')
@section('content')
    <div class="container">
        <form method="POST" action="{{ route('bookings.search') }}" >
            @csrf
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Nueva Reserva</h2>
                </div>
                <div class="card-body">
                    <div class="form-gruop col-12">
                        <h1></h1>  
                    </div>
                    <div class="form-group col-auto">
                        <label>Fecha Entrada</label>    
                        <input type="date" class="form-control" id="start_date" name="star_date">
                    </div>
                    <div class="form-group col-auto">
                        <label>Fecha Salida</label>
                        <input type="date" class="form-control" id="end_date" name="end_date">
                    </div>
                    <div class="form-group col-auto">
                        <label>Número de Huéspedes</label>
                        <input type="number" class="form-control" id="pax" value="1" min="1" max="4" id="pax" name="pax">
                    </div>
                    <div class="form-group col-auto">                
                        <div class="row">
                            <div class="col-8">
                                <button type="submit" class="btn btn-primary col-12">Buscar</button>
                            </div>
                            <div class="col-4">
                                <a class="btn btn-secondary col-12" href="{{ route('bookings.index') }}" role="button">Volver</a>
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