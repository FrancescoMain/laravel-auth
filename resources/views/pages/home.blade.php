@extends('layouts.main-layout')

@section('content')
    
    <h1>CONTENT</h1>
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
        {{ session('status') }}
        </div>
        @endif

        {{ __('You are logged in!') }}
    </div>
@endsection