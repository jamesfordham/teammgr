@extends('layouts.master')

@section('title', 'Create New Grade/team')

@section('content')

    <div class="page-header">
        <h1>Add new Team (grade)</h1>
    </div>

    {!! Form::model($grade, ['action' => 'GradeController@store']) !!}

    @include('grades.partials.object_form')

    <button class="btn btn-primary" type="submit">Create new Team</button>
    {!! Form::close() !!}

@endsection