@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <h1>Treni in partenza oggi</h1>

                @if ($trainsToday->count() > 0)
                    <ul>
                        @foreach ($trainsToday as $train)
                            <li>Compagnia: {{ $train->Compagnia }}</li>
                            <li>Codice treno: {{ $train->Codice_treno }}</li>
                            <li>Stazione di partenza: {{ $train->stazione_partenza }}</li>
                            <li>Stazione di arrivo: {{ $train->stazione_arrivo }}</li>
                            <li>Data partenza: {{ $train->data_partenza }}</li>
                            <li>Orario partenza: {{ $train->orario_partenza }}</li>
                            <br>
                        @endforeach
                    </ul>
                @else
                    <p>Nessun treno in partenza oggi.</p>
                @endif

                <h1>Tutti i treni</h1>

                @if ($allTrains->count() > 0)
                    <ul class="">
                        @foreach ($allTrains as $train)
                            <li>Compagnia: {{ $train->Compagnia }}</li>
                            <li>Codice treno: {{ $train->Codice_treno }}</li>
                            <li>Stazione di partenza: {{ $train->stazione_partenza }}</li>
                            <li>Stazione di arrivo: {{ $train->stazione_arrivo }}</li>
                            <li>Data partenza: {{ $train->data_partenza }}</li>
                            <li>Orario partenza: {{ $train->orario_partenza }}</li>
                            <br>
                        @endforeach
                    </ul>
                @else
                    <p>Nessun treno disponibile.</p>
                @endif
            </div>
        </div>
    </div>

</div>
@endsection