@extends('app')

@section('main')

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">Employees</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="{{ route('employees.create') }}" class="btn btn-primary"><span data-feather="plus"></span> Create</a>
            </div>
        </div>
    </div>

    @include('employees.partials.table',['data' => $employees])

@stop