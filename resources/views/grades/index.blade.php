@extends('layouts.master')

@section('title', 'All Grades')

@section('content')

    <div class="page-header">
        <h1>All Men's Grades</h1>
    </div>

    <div class="list-group">
        @foreach ($objects as $grade)
            <a href="{{ url('grades', [$grade->id]) }}" class="list-group-item">
                <h2 class="list-group-item-heading">{{ $grade->clubgrade }}</h2>
            </a>
        @endforeach
    </div>

@endsection