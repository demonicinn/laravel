@extends('app')

@section('main')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">{{ $company->name }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="{{ route('companies.index') }}" class="btn btn-outline-secondary"><span data-feather="arrow-left"></span> Back</a>
                <a href="{{ route('companies.edit', $company) }}" class="btn btn-primary"><span data-feather="edit-2"></span> Edit</a>
            </div>
        </div>
    </div>

    <h3 class="mb-3">Address</h3>
    <p><strong>{{ $company->name }}</strong><br />{{ $company->street }}<br />{{ $company->postcode }}<br />{{ $company->city }}<br />{{ $company->country }}</p>
    <h3 class="mb-3">Employees</h3>
    @include('employees.partials.table', ['data' => $company->employees])

@stop