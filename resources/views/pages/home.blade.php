@extends('layouts.main-layout')

@section('content')
    
    <h1>CONTENT</h1>
    <div class="card-body">
        <h1>Homepage</h1>
        @guest
        <h2>non loggato</h2>
        @else
        <h2>loggato</h2>
        @endguest

    </div>
@endsection