<div class="mb-3">
    {!! Form::label('firstname','First Name', ['class' => 'control-label']) !!}
    {!! Form::text('firstname', null, ['class' => 'form-control' . ($errors->has('firstname') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('firstname', '<span class="invalid-feedback">:message</span>') !!}
</div>

<div class="mb-3">
    {!! Form::label('lastname','Last Name', ['class' => 'control-label']) !!}
    {!! Form::text('lastname', null, ['class' => 'form-control' . ($errors->has('lastname') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('lastname', '<span class="invalid-feedback">:message</span>') !!}
</div>

<div class="mb-3">
    {!! Form::label('email','Email', ['class' => 'control-label']) !!}
    {!! Form::email('email', null, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('email', '<span class="invalid-feedback">:message</span>') !!}
</div>

<div class="mb-3">
    {!! Form::label('company_id','Company Name', ['class' => 'control-label']) !!}
    @if(Request::segment(2)=='create')
		{!! Form::select('company_id', $companies, ['class' => 'form-control' . ($errors->has('company_id') ? ' is-invalid' : '') ]) !!}
	@else
		{!! Form::select('company_id', $companies, ($employee)?$employee->company_id:null, ['class' => 'form-control' . ($errors->has('company_id') ? ' is-invalid' : '') ]) !!}
	@endif
    {!! $errors->first('company_id', '<span class="invalid-feedback">:message</span>') !!}
</div>