@extends('layouts.app')
@section('title', 'Projects')
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
									<a class="dropdown-item {{ (!$filter)? 'active':'' }}" href="{{route('projects')}}">All</a>
									@foreach($progress as $row)
									<a class="dropdown-item {{ ($filter==$row->slug)? 'active':'' }}" href="{{url('projects?filter='.$row->slug)}}">{{ $row->name }}</a>
									@endforeach
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="{{route('projects.add')}}">Add</a>
								</div>
							</div>
						</div>
					</div>
				</h5>
			</div>
			<div class="card-body">
				<table class="table table-hover">
					<thead>
						<tr><th>#</th><th>Name</th><th>Price</th><th>Client</th><th>Getting</th><th>Progress</th><th>Date</th><th>Action</th></tr>
					</thead>
					<tbody>
						@foreach($data as $k => $row)
						<tr>
							<th>{{ ($data->currentpage()-1) * $data->perpage() + $k + 1 }}</th>
							<td><a href="{{url('projects/summary/'.base64_encode($row->id.'/'.time()))}}" title="Project Summary" class="warning">{{ $row->name }}</a></td>
							<td>{{ $row->price }}</td>
							<td>{{ $row->client }}</td>
							<td>{{ $row->getting }}</td>
							<td><span class="badge badge-{{ $row->colour }} space-preview">{{ $row->progress }}</span></td>
							<td>{{ date('jS F Y',strtotime($row->created_at)) }}</td>
							<td>
								@if($row->status==1)
								<a href="" title="Active" class="success"><i class="fa fa-check"></i></a>
								@else
								<a href="" title="In-active" class="success"><i class="fa fa-times"></i></a>
								@endif
								&nbsp;&nbsp;
								<a href="{{url('projects/edit/'.base64_encode($row->id.'/'.time()))}}" title="Edit" class="warning"><i class="fa fa-pencil-square-o"></i></a>&nbsp;&nbsp;
								<a href="{{url('projects/details/'.base64_encode($row->id.'/'.time()))}}" title="Details"><i class="fa fa-list"></i></a>&nbsp;&nbsp;
								<a href="" title="Delete" class="danger"><i class="fa fa-trash-o"></i></a>
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

@section('style')
<style>
	tr a.warning {
    color: #304ffe;
}
</style>
@endsection