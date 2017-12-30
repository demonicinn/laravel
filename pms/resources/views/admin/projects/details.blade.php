@extends('layouts.app')
@section('title', 'Project Details')
@section('content')

<!---- Assigned to ---->
<section>
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-heading">
					<h5>Assigned</h5>
				</div>
				<div class="card-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Name</th><th>Designation</th><th>Date</th><th>Action</th>
							</tr>
						</thead>
						<tbody>
							@php ($userid = array())
							@foreach($assigned as $row)
							<tr class="{{ ($row->isDelete)?'delete':'' }}">
								@php ($userid[] = $row->assign)
								<td>{{ $row->fname.' '.$row->lname }}</td>
								<td>{{ $row->designation }}</td>
								<td>{{ date('jS F Y',strtotime($row->created_at)) }}</td>
								<td>
									<a href="" title="Trash" class="danger"><i class="fa fa-times"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-heading">
					<h5>Add Employee</h5>
				</div>
				<div class="card-body">
					<form data-toggle="validator" method="POST" action="{{ route('projects.assigned') }}">
						{{ csrf_field() }}
						<input type="hidden" name="id" value="{{ $ids }}" required>	
						<div class="form-group">
							<label>Assigned to</label>
							<select class="form-control" name="assign" required>
								<option value="">Select Employee</option>
								@foreach($users as $row)
									@if(in_array($row->id, $userid))
									@php ($disabled='disabled')
									@else
									@php ($disabled='')
									@endif
								<option value="{{ $row->id }}" {{ $disabled }}>{{ $row->fname.' '.$row->lname.' - '.$row->designation }}</option>
								@endforeach
							</select>
						</div>
						<button type="submit" class="btn btn-primary">Add</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


<!---- Skills ---->
<section>
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-heading">
					<h5>Skills</h5>
				</div>
				<div class="card-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th><th>Name</th><th>Date</th><th>Action</th>
							</tr>
						</thead>
						<tbody>
							@php ($skillid = array())
							@foreach($pskills as $k => $row)
							<tr class="{{ ($row->isDelete)?'delete':'' }}">
								@php ($skillid[] = $row->skill)
								<td>{{ $k+1 }}</td>
								<td>{{ $row->name }}</td>
								<td>{{ date('jS F Y',strtotime($row->created_at)) }}</td>
								<td>
									<a href="" title="Trash" class="danger"><i class="fa fa-times"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-heading">
					<h5>Add Skills</h5>
				</div>
				<div class="card-body">
					<form data-toggle="validator" method="POST" action="{{ route('projects.skills') }}">
						{{ csrf_field() }}
						<input type="hidden" name="id" value="{{ $ids }}" required>	
						<div class="form-group">
							<label>Skills</label>
							<select class="form-control" name="skill" required>
								<option value="">Select Skills</option>
								@foreach($skills as $row)
									@if(in_array($row->id, $skillid))
									@php ($disabled='disabled')
									@else
									@php ($disabled='')
									@endif
								<option value="{{ $row->id }}" {{ $disabled }}>{{ $row->name }}</option>
								@endforeach
							</select>
						</div>
						<button type="submit" class="btn btn-primary">Add</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<!------ credentials ------>
<section>
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-heading">
					<h5>Credentials</h5>
				</div>
				<div class="card-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th><th>Type</th><th>Host</th><th>Email</th><th>Password</th><th>Port</th><th>Date</th><th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($credentials as $k => $row)
							<tr class="{{ ($row->isDelete)?'delete':'' }}">
								<td>{{ $k+1 }}</td>
								<td>{{ $row->type }}</td>
								<td>{{ $row->host }}</td>
								<td>{{ $row->email }}</td>
								<td>{{ $row->password }}</td>
								<td>{{ $row->port }}</td>
								<td>{{ date('jS F Y',strtotime($row->created_at)) }}</td>
								<td>
									<a href="" title="Trash" class="danger"><i class="fa fa-times"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-heading">
					<h5>Add Credentials</h5>
				</div>
				<div class="card-body">
					<form data-toggle="validator" method="POST" action="{{ route('projects.credentials') }}">
						{{ csrf_field() }}
						<input type="hidden" name="id" value="{{ $ids }}" required>	
						<div class="form-group">
							<label>Type</label>
							<select id="type" class="form-control" name="type" required>
								<option value="">Select Type</option>
								<option value="FTP">FTP</option>
								<option value="SFTP">SFTP</option>
								<option value="C panel">C panel</option>
								<option value="Hosting Account">Hosting Account</option>
								<option value="Admin Login">Admin Login</option>
							</select>
						</div>
						
						<div class="form-group">
							<label>Host Name <em>*</em></label>
							<input type="text" class="form-control" name="host" value="{{ old('host') }}" required>
						</div>
						<div class="form-group">
							<label>Email/ Username <em>*</em></label>
							<input type="text" class="form-control" name="email" value="{{ old('email') }}" required>
						</div>
						<div class="form-group">
							<label>Password <em>*</em></label>
							<input type="text" class="form-control" name="password" value="{{ old('password') }}" required>
						</div>
						<div class="form-group" id="port">
							<label>Port <em>*</em></label>
							<input type="text" class="form-control" name="port" value="{{ old('port') }}">
						</div>
						
						<button type="submit" class="btn btn-primary">Add</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('style')
<style>
	section {
    margin-bottom: 30px;
	}
	.delete{
		text-decoration: line-through;
    color: red;
	}
</style>
@endsection

@section('script')
<script>
jQuery(function() {
	jQuery('#port').hide(); 
	jQuery('#type').change(function(){
		if(jQuery(this).val() == 'FTP' || jQuery(this).val() == 'SFTP') {
			jQuery('#port').show();
			jQuery('#port').find('input').attr('required', 'required');
		} else {
			jQuery('#port').hide();
			jQuery('#port').find('input').removeAttr('required');
		} 
	});
});
</script>
@endsection