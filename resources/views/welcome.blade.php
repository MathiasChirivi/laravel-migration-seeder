@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="row g-4">
        <div class="col">
            <div>
                <h1>Treni in partenza oggi</h1>

                @if ($trainsToday->count() > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Compagnia</th>
                                <th>Codice treno</th>
                                <th>Stazione di partenza</th>
                                <th>Stazione di arrivo</th>
                                <th>Data partenza</th>
                                <th>Orario partenza</th>
                                <th>In Orario</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trainsToday as $train)
                                <tr>
                                    <td>{{ $train->Compagnia }}</td>
                                    <td>{{ $train->Codice_treno }}</td>
                                    <td>{{ $train->stazione_partenza }}</td>
                                    <td>{{ $train->stazione_arrivo }}</td>
                                    <td>{{ $train->data_partenza }}</td>
                                    <td>{{ $train->orario_partenza }}</td>
                                    @if ($train->in_orario == 1)
                                    <td>Il Treno è in orario</td>
                                    @else
                                    <td>Il Treno è in ritardo</td>                            
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>Nessun treno in partenza oggi.</p>
                @endif

                <h1>Tutti i treni</h1>

                @if ($allTrains->count() > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Compagnia</th>
                                <th>Codice treno</th>
                                <th>Stazione di partenza</th>
                                <th>Stazione di arrivo</th>
                                <th>Data partenza</th>
                                <th>Orario partenza</th>
                                <th>In Orario</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allTrains as $train)
                                <tr>
                                    <td>{{ $train->Compagnia }}</td>
                                    <td>{{ $train->Codice_treno }}</td>
                                    <td>{{ $train->stazione_partenza }}</td>
                                    <td>{{ $train->stazione_arrivo }}</td>
                                    <td>{{ $train->data_partenza }}</td>
                                    <td>{{ $train->orario_partenza }}</td>
                                    @if ($train->in_orario == 1)
                                        <td>Il Treno è in orario</td>
                                    @else
                                        <td>Il Treno è in ritardo</td>                            
                                    @endif
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>Nessun treno disponibile.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
