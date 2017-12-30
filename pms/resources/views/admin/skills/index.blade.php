@extends('layouts.app')
@if(Request::segment(2)=='')
@section('title', 'Skills')
@elseif(Request::segment(2)=='add')
@section('title', 'Add Skills')
@elseif(Request::segment(2)=='edit')
@section('title', 'Edit Skills')
@endif
@section('content')
<div class="row">		
	<div class="col-md-8">       
		<div class="card">
			<div class="card-heading">
				<h5>@yield('title')
					@if(Request::segment(2)=='' || Request::segment(2)=='edit')
					<a href="{{route('skills.add')}}" class="btn btn-round btn-success space-preview pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
					@endif
				</h5>
			</div>
			<div class="card-body">
				<table class="table table-hover">
					<thead>
						<tr><th>#</th><th>Name</th><th>Date</th><th>Action</th></tr>
					</thead>
					<tbody>
						@foreach($data as $k => $row)
						<tr @if(Request::segment(2)=='edit') {{ ($row->id==$dataID->id)?'class=active-tr':'' }} @endif>
							<th>{{ ($data->currentpage()-1) * $data->perpage() + $k + 1 }}</th>
							<td>{{ $row->name }}</td>
							<td>{{ date('jS F Y',strtotime($row->created_at)) }}</td>
							<td>
								@if($row->status==1)
								<a href="" title="Active" class="success"><i class="fa fa-check"></i></a>&nbsp;&nbsp;
								@else
								<a href="" title="In-active" class="success"><i class="fa fa-times"></i></a>&nbsp;&nbsp;
								@endif
								<a href="{{url('skills/edit/'.base64_encode($row->id.'/'.time()))}}" title="Edit" class="warning"><i class="fa fa-pencil-square-o"></i></a>&nbsp;&nbsp;
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
			{{ $data->links() }}	
		</div>
	</div>
	@if(Request::segment(2)=='add')
	@include('admin/skills/add')
	@elseif(Request::segment(2)=='edit')
	@include('admin/skills/edit')	
	@endif
</div>
@endsection