<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead>
			<tr>
				<th>ID</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Company</th>
				<th>E-mail</th>
				<th class="text-center">Actions</th>
			</tr>
		</thead>
        <tbody>
			@foreach($data as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->firstname }}</td>
                <td>{{ $employee->lastname }}</td>
                <td>{{ $employee->company->name }}</td>
                <td>{{ $employee->email }}</td>
				<td class="text-center">
					<div class="btn-group btn-group-sm">
						<a href="{{ route('employees.show', $employee->id) }}" class="btn btn-primary"><span data-feather="eye"></span></a>
						<a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning"><span data-feather="edit-2"></span></a>
						<a data-method="DELETE" data-confirm="Are you sure?" href="{{ route('employees.destroy', $employee->id) }}" class="btn btn-danger"><span data-feather="x"></span></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>