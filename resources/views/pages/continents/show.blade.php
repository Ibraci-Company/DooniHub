@extends('layouts.main')

@section('title', 'Continent: ' . $continent->name)

@section('content')
    <h1>{{ $continent->name }}</h1>
    <ul>
        <li>Code: {{ $continent->code }}</li>
        <li>Area: {{ $continent->area }}</li>
        <li>Latitude: {{ $continent->latitude }}</li>
        <li>Longitude: {{ $continent->longitude }}</li>
    </ul>
@endsection