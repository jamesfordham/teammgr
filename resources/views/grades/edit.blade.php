@extends('layouts.master')

@section('title', 'Edit existing Grade/team')

@section('content')

    <div class="page-header">
        <h1>Edit existing Team (grade)</h1>
    </div>

    {!! Form::model($grade, ['action' => ['GradeController@update', $grade->id], 'method' => 'put']) !!}

    @include('grades.partials.object_form')

    <button class="btn btn-primary" type="submit">Update existing Team</button>
    {!! Form::close() !!}

    @include('grades.partials.object_delete')

@endsection