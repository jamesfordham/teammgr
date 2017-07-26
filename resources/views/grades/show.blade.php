@extends('layouts.master')

@section('title', $grade->clubgrade)

@section('content')
    <h1>Selected Grade</h1>
    <div class="page-header">
        <a href="{{ action('GradeController@edit', $grade->id) }}" class="btn btn-info pull-right">Edit</a>
        <p><strong>Sydney Grade:</strong> {{ $grade->sydgrade }}</p>
        <p><strong>Club Grade:</strong>  {{ $grade->clubgrade }}</p>
    </div>


@include('grades.players.partials.display')

@endsection