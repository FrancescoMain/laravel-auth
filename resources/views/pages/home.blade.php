@extends('layouts.main-layout')

@section('content')
    
    <h1>CONTENT</h1>
    <div class="card-body">
        <h1>I miei progetti</h1>
        <ul>
            @foreach ($projects as $project)

            <a href="{{ route('project.show', $project) }}">
                <li>{{ $project -> name }}</li>
            </a>
            @guest
            @else
                <a href="{{ route('admin.project.delete', $project) }}">X</a>
            @endguest

            @endforeach
        </ul>


    </div>
@endsection