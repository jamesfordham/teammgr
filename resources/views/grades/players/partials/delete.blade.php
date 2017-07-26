{!! Form::open([
    'route' => ['grades.players.destroy', $grade->id, $player->id],
    'method' => 'delete',
    'class' => 'pull-left'
]) !!}

&nbsp;&nbsp;<button type = "submit" class="btn btn-danger btn-xs">Delete</button>

{!! Form::close() !!}