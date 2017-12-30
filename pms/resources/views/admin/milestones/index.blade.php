@extends('layouts.app')
@section('title', 'Milestones')
@section('content')
<div class="row">		
	<div class="col-md-12">       
		<div class="card">
			<div class="card-heading">
				<h5>@yield('title')
					<a href="{{route('milestones.add')}}" class="btn btn-round btn-success space-preview pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
				</h5>
			</div>
			<div class="card-body">
				<table class="table table-hover">
					<thead>
						<tr><th>#</th><th>Title</th><th>Date</th><th>Action</th></tr>
					</thead>
					<tbody>
						@foreach($data as $k => $row)
						<tr>
							<th>{{ ($data->currentpage()-1) * $data->perpage() + $k + 1 }}</th>
							<td>{{ $row->title }}</td>
							<td>{{ date('jS F Y',strtotime($row->created_at)) }}</td>
							<td>
								@if($row->status==1)
								<a href="" title="Active" class="success"><i class="fa fa-check"></i></a>
								@else
								<a href="" title="In-active" class="success"><i class="fa fa-times"></i></a>
								@endif
								&nbsp;&nbsp;
								<a href="{{url('milestones/edit/'.base64_encode($row->id.'/'.time()))}}" title="Edit" class="warning"><i class="fa fa-pencil-square-o"></i></a>&nbsp;&nbsp;
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
</div>
@endsection

@section('style')
<style>
	tr a.warning {
    color: #304ffe;
}
</style>
@endsection