{{-- collego il file home.scss per l'estetica di home.blade.php --}}
@vite('resources/scss/home.scss')

@extends('layouts.app')

@section('page-title', 'Trains')

@section('main-content')

    <body>
        <div class="container-fluid py-5">
            <h2 class="text-center mb-4">Elenco Treni</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Azienda</th>
                        <th>Stazione di Partenza</th>
                        <th>Stazione di Arrivo</th>
                        <th>Orario di Partenza</th>
                        <th>Orario di Arrivo</th>
                        <th>Codice Treno</th>
                        <th>Numero Carrozze</th>
                        <th>In Orario</th>
                        <th>Cancellato</th>
                        <th>Data di Partenza</th>
                        <th>Data di Arrivo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $trainItem)
                        <tr>
                            <td>{{ $trainItem->id }}</td>
                            <td>{{ $trainItem->azienda }}</td>
                            <td>{{ $trainItem->stazione_partenza }}</td>
                            <td>{{ $trainItem->stazione_arrivo }}</td>
                            <td>{{ $trainItem->orario_partenza }}</td>
                            <td>{{ $trainItem->orario_arrivo }}</td>
                            <td>{{ $trainItem->codice_treno }}</td>
                            <td>{{ $trainItem->numero_carrozze }}</td>
                            <td>{{ $trainItem->in_orario ? 'Sì' : 'No' }}</td>
                            <td>{{ $trainItem->cancellato ? 'Sì' : 'No' }}</td>
                            <td>{{ $trainItem->data_partenza }}</td>
                            <td>{{ $trainItem->data_arrivo }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>

@endsection
