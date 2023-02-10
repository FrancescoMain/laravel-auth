@extends('layouts.main-layout')

@section('content')
    
    <div class="card-body">
        <h1 class="title">I MIEI PROGETTI</h1>
        @guest
        @else    
        <div class="container">
            <div class="row">
                <div class="col justify-content-center d-flex">
                    <a class="button-29" href="{{ route('admin.project.create') }}">CREATE NEW TASK</a>
                </div>
            </div>
        </div>
        @endguest
        <ul class="d-flex">
            @foreach ($projects as $project)
            <a href="{{ route('project.show', $project) }}">

                    <li>
                        {{ $project -> name }}
                        <img src="{{ asset('storage/' . $project -> main_image) }}" alt="">
                    </li>

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