<hr>
<h2>Delete this Grade:</h2>

{!! Form::open([
    'action' => ['GradeController@destroy', $grade->id],
    'method' => 'delete',
    'class' => 'delete-object'

]) !!}

<button type="submit" class="btn btn-danger">DELETE this Grade?</button>

{!! Form::close() !!}