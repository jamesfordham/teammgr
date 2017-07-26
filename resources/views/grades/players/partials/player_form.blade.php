<div class="form-group">
    {!!  Form::label('fname', 'First Name') !!}
    {!!  Form::text('fname',null, ['class' => 'form-control']) !!}

    {!!  Form::label('lname', 'Last Name') !!}
    {!!  Form::text('lname',null, ['class' => 'form-control']) !!}

    {!!  Form::label('email', 'Email Address') !!}
    {!!  Form::text('email',null, ['class' => 'form-control']) !!}

    {!!  Form::label('phone', 'Phone Number') !!}
    {!!  Form::text('phone',null, ['class' => 'form-control']) !!}

    {!!  Form::label('position', 'Position (GK, Defender, Mid, Striker)') !!}
    {!!  Form::text('position',null, ['class' => 'form-control']) !!}

    {!!  Form::label('nswreg', 'Nsw Rego') !!}
    {!!  Form::text('nswreg',null, ['class' => 'form-control']) !!}

    {!!  Form::label('briarsreg', 'Briars Rego (1 for registered, 0 for unregistered)') !!}
    {!!  Form::text('briarsreg',null, ['class' => 'form-control']) !!}

    {!!  Form::label('year', 'Year 2017') !!}
    {!!  Form::date('year',null, ['class' => 'form-control']) !!}

    {!!  Form::label('avaliable', '1 = yes, 0 = no') !!}
    {!!  Form::text('avaliable',null, ['class' => 'form-control']) !!}

    {!!  Form::label('playernotes', 'Optional: Add your notes here') !!}
    {!!  Form::textarea('playernotes',null, ['class' => 'form-control']) !!}
</div>