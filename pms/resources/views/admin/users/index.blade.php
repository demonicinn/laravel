@extends('layouts.app')
@section('title', 'Users')
@section('content')
<div class="row">		
	<div class="col-md-12">       
		<div class="card">
			<div class="card-heading">
				<h5>@yield('title')
					
					<div class="pull-right">
						<div class="card-body">
							<div class="btn-group">
								<button type="button" class="btn btn-success">{{ ($filter)? $filter:'All' }}</button>
								<button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="sr-only">Select</span>
								</button>
								<div class="dropdown-menu pull-right">
									<a class="dropdown-item {{ (!Request::segment(2))? 'active':'' }}" href="{{route('users')}}">All</a>
									<a class="dropdown-item {{ (Request::segment(2)=='admin')? 'active':'' }}" href="{{ url('users?filter=admin') }}">Admin</a>
									<a class="dropdown-item {{ (Request::segment(2)=='employee')? 'active':'' }}" href="{{ url('users?filter=employee') }}">Employee</a>
									<a class="dropdown-item {{ (Request::segment(2)=='client')? 'active':'' }}" href="{{ url('users?filter=client') }}">Client</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="{{route('users.add')}}">Add</a>
								</div>
							</div>
						</div>
					</div>
				</h5>
			</div>
			<div class="card-body">
				<table class="table table-hover">
					<thead>
						<tr><th>#</th><th>Name</th><th>Role</th><th>Designation</th><th>Email</th><th>Created</th><th>Action</th></tr>
					</thead>
					<tbody>
						@foreach($data as $k => $row)
						<tr>
							<th>{{ ($data->currentpage()-1) * $data->perpage() + $k + 1 }}</th>
							<td>{{ $row->fname.' '.$row->lname }}</td>
							<td>{{ $row->role }}</td>
							<td>{{ $row->designation }}</td>
							<td>{{ $row->email }}</td>
							<td>{{ date('jS F Y',strtotime($row->created_at)) }}</td>
							<td>
								@if(Auth::user()->id!=$row->id)
									@if($row->status==1)
									<a href="" title="Active" class="success"><i class="fa fa-check"></i></a>
									@else
									<a href="" title="In-active" class="success"><i class="fa fa-times"></i></a>
									@endif
									&nbsp;&nbsp;
									<a href="{{url('users/edit/'.base64_encode($row->id.'/'.time()))}}" title="Edit" class="warning"><i class="fa fa-pencil-square-o"></i></a>
									&nbsp;&nbsp;
									<a href="" title="Delete" class="danger"><i class="fa fa-trash-o"></i></a>
								@endif
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		
		<div class="filter">
			Showing {{($data->currentpage()-1)*$data->perpage()+1}} to {{$data->currentpage()*$data->perpage()}}
			of  {{$data->total()}} entries
			
			@if($filter)
			{!! $data->appends(['filter' => $filter])->links() !!}
			@else
			{{ $data->links() }}
			@endif		
		</div>
		
	</div>
</div>
@endsection

