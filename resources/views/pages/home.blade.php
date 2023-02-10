@extends('layouts.main-layout')

@section('content')
    
    <h1>CONTENT</h1>
    <div class="card-body">
        <h1>I miei progetti</h1>
        @guest
        @else    
        <a href="{{ route('admin.project.create') }}">CREATE NEW TASK</a>
        @endguest
        <ul>
            @foreach ($projects as $project)

            <a href="{{ route('project.show', $project) }}">
                <li>{{ $project -> name }}</li>
                <img src="{{ asset('storage/' . $project -> main_image) }}" alt="">
            </a>
            @guest
            @else
                <a href="{{ route('admin.project.delete', $project) }}">X</a>
                <a href="{{ route('admin.project.edit', $project) }}">
                    EDIT
                </a>
            @endguest

            @endforeach
        </ul>


    </div>
@endsection