    <div class="table-responsive-sm">
        <br/>
        <h2 class="card-title">Listado de Reservas</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Localizador</th>
                    <th scope="col">F. Entrada</th>
                    <th scope="col">F. Salida</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Tipo Hab.</th>
                    <th scope="col">No.Hab.</th>
                    <th scope="col">Pax</th>
                    <th scope="col">€</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @isset($bookings)
                    @foreach ($bookings as $booking)
                    <tr>                        
                        <th scope="row"><a href="{{ route('bookings.show', $booking->id)}}">{{ $booking->reference }}</a> </th>
                        <td>{{ Carbon\Carbon::parse($booking->start_date)->format('d/m/Y') }}</td>                            
                        <td>{{ Carbon\Carbon::parse($booking->end_date)->format('d/m/Y') }}</td>                            
                        <td>Alberto Ortega</td>
                        <td>Triple</td>
                        <td>{{ $booking->room_number }}</td>
                        <td>{{ $booking->pax }}</td>
                        <td>{{ $booking->booking_amount }}</td>
                        <td>{{ $booking->status_booking->name }}</td>
                    </tr>
                    @endforeach
                @endisset
            </tbody>
        </table>
    </div>            
        <!--
<tr class="table-active">...</tr>

<tr class="table-primary">...</tr>
<tr class="table-secondary">...</tr>
<tr class="table-success">...</tr>
<tr class="table-danger">...</tr>
<tr class="table-warning">...</tr>
<tr class="table-info">...</tr>
<tr class="table-light">...</tr>
<tr class="table-dark">...</tr>

<tr>
  <td class="table-active">...</td>

  <td class="table-primary">...</td>
  <td class="table-secondary">...</td>
  <td class="table-success">...</td>
  <td class="table-danger">...</td>
  <td class="table-warning">...</td>
  <td class="table-info">...</td>
  <td class="table-light">...</td>
  <td class="table-dark">...</td>
</tr>
        -->