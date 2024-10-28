@vite('resources/scss/home.scss')

@extends('layouts.app')

@section('page-title', 'Passengers')

@section('main-content')

    <body>
        <div class="container-fluid py-5">
            <h2 class="text-center mb-4">Elenco Passeggeri</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Numero di cellulare</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($passengers as $passengerItem)
                        <tr>
                            <td>{{ $passengerItem->id }}</td>
                            <td>{{ $passengerItem->name }}</td>
                            <td>{{ $passengerItem->email }}</td>
                            <td>{{ $passengerItem->phone_number }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>

@endsection
