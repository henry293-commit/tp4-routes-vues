@extends('layout')

@section('title', 'Liste des packages')

@section('content')
<div class="container mt-4">
    <h2 class="text-primary text-center mb-4">Liste des packages Laravel</h2>
    <ul class="list-group">
        @foreach ($packages as $package)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $package['title'] }}
            <span class="badge bg-primary">{{ $package['slug'] }}</span>
        </li>
        @endforeach
    </ul>
</div>
@endsection
