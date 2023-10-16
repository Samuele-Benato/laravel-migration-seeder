@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">

        @forelse($trains as $train)
            <p>
                <strong>Azienda</strong>: {{ $train->azienda }} <br>
                <strong>Stazione partenza</strong>: {{ $train->stazione_partenza }} -
                <strong>Stazione arrivo</strong>: {{ $train->stazione_arrivo }}<br>
                <strong>Orario partenza</strong>: {{ $train->orario_partenza }} -
                <strong>Orario arrivo</strong>: {{ $train->orario_arrivo }}<br>
                <strong>Codice treno</strong>: {{ $train->codice_treno }}<br>
                <strong>Carrozza</strong>: {{ $train->numero_carrozze }}<br>
            </p>
            <hr>
        @empty
            <h2>Non ci sono risultati</h2>
        @endforelse
    </section>
@endsection
