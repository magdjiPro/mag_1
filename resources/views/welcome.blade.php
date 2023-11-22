@extends('layouts.app')

@section('content')
    <div class="container mt-5 jumbotron bg-light text-center">
        <h1>Gestion Vote</h1>
        @yield('contenu')
        <button class="btn btn-info">Voter</button>
    </div>
@endsection
