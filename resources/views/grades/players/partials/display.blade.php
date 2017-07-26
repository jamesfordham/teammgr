<div class="page-header">
    <h2>Player Roster</h2>
</div>

@include('grades.players.partials.create')
<hr>

<ul class="list-group">
    @foreach ($grade->player as $player)
    <li class="list-group-item">
        {{ $player->fname.' '.$player->lname }}
        <div><small>{{ $player->position }}</small></div>

        <div class="clearfix">
            <button class="edit-object btn btn-info btn-xs pull-left">Edit</button>
            @include('grades.players.partials.delete')
        </div>

@include('grades.players.partials.edit')

    </li>
</ul>
@endforeach