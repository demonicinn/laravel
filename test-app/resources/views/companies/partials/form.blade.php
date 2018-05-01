<div class="mb-3">
    {!! Form::label('name','Company Name', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('name', '<span class="invalid-feedback">:message</span>') !!}
</div>

<div class="mb-3">
    {!! Form::label('street','Street', ['class' => 'control-label']) !!}
    {!! Form::text('street', null, ['class' => 'form-control' . ($errors->has('street') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('street', '<span class="invalid-feedback">:message</span>') !!}
</div>

<div class="mb-3">
    {!! Form::label('postcode','Postcode', ['class' => 'control-label']) !!}
    {!! Form::text('postcode', null, ['class' => 'form-control' . ($errors->has('postcode') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('postcode', '<span class="invalid-feedback">:message</span>') !!}
</div>

<div class="mb-3">
    {!! Form::label('city','City', ['class' => 'control-label']) !!}
    {!! Form::text('city', null, ['class' => 'form-control' . ($errors->has('city') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('city', '<span class="invalid-feedback">:message</span>') !!}
</div>

<div class="mb-3">
    {!! Form::label('number','Phone Number', ['class' => 'control-label']) !!}
    {!! Form::number('number', null, ['class' => 'form-control' . ($errors->has('number') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('number', '<span class="invalid-feedback">:message</span>') !!}
</div>

<div class="mb-3">
    {!! Form::label('country','Country', ['class' => 'control-label']) !!} <span class="text-muted">(2 Letter Country Code)</span>
    {!! Form::text('country', null, ['class' => 'form-control' . ($errors->has('country') ? ' is-invalid' : '') , 'maxlength' => 2]) !!}
    {!! $errors->first('country', '<span class="invalid-feedback">:message</span>') !!}
</div>