{!! Form::model($player, [
    'route' => ['grades.players.update', '$grade->id', $player->id],
    'method' => 'put',
    'class' => 'hide edit-object-form'
]) !!}

@include('grades.players.partials.player_form')

<button type = "submit" class="btn btn-info">Update the Player Profile</button>

{!! Form::close() !!}