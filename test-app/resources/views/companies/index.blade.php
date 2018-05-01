@extends('app')

@section('main')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">Companies</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="{{ route('companies.create') }}" class="btn btn-primary"><span data-feather="plus"></span> Create</a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-vcenter table-hover table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Company</th>
                <th>Street</th>
                <th>Postcode</th>
                <th>Phone Number</th>
                <th>City</th>
                <th>Country</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($companies as $company)
                <tr>
                    <td>{{ $company->id }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->street }}</td>
                    <td>{{ $company->postcode }}</td>
                    <td>{{ $company->number }}</td>
                    <td>{{ $company->city }}</td>
                    <td>{{ $company->country }}</td>
                    <td class="text-center">
                        <div class="btn-group btn-group-sm">
                            <a href="{{ route('companies.show', $company->id) }}" class="btn btn-primary"><span data-feather="eye"></span></a>
                            <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning"><span data-feather="edit-2"></span></a>
                            <a data-method="DELETE" data-confirm="Are you sure?" href="{{ route('companies.destroy', $company->id) }}" class="btn btn-danger"><span data-feather="x"></span></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop