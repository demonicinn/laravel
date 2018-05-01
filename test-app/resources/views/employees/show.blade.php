@extends('app')

@section('main')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">{{ $employee->firstname }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="{{ route('employees.index') }}" class="btn btn-outline-secondary"><span data-feather="arrow-left"></span> Back</a>
                <a href="{{ route('employees.edit', $employee) }}" class="btn btn-primary"><span data-feather="edit-2"></span> Edit</a>
            </div>
        </div>
    </div>

    <h3 class="mb-3">Details</h3>
    <p><strong>{{ $employee->firstname }}</strong><br />{{ $employee->lastname }}<br />{{ $employee->email }}<br />{{ $employee->company->name }}</p>

   
@stop