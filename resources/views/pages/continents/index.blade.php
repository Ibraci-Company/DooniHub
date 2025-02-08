@extends('layouts.main')

@section('title', 'Continents')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Code</th>
                <th>Area</th>
                <th>Latitude</th>
                <th>Longitude</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($continents as $continent)
                <tr>
                    <td><a href="{{ route('continents.show', $continent->slug) }}">{{ $continent->name }}</a></td>
                    <td>{{ $continent->code }}</td>
                    <td>{{ $continent->area }}</td>
                    <td>{{ $continent->latitude }}</td>
                    <td>{{ $continent->longitude }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection