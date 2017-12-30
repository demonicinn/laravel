		<div class="inbox-wrapper">
			<div class="inbox-content-header">
				<h5>Tasks
					<a href="{{ url('tasks/add/'.base64_encode($pid.'/'.time())) }}" class="btn btn-round btn-success space-preview pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
				</h5>
			</div>
			
			<div class="inbox-content">
				@if(count($data)>0)
				<div class="inbox-bar pull-right">
					<div class="inbox-tools">
						<div class="dropdown">
							<button class="btn btn-primary btn-round" type="button" id="message_options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							{{ ($filter)? $filter:'All' }} <i class="fa fa-caret-down" aria-hidden="true"></i>
							</button>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="message_options">
								<a class="dropdown-item {{ (!$filter)? 'active':'' }}" href="{{url('tasks/list/'.$ids)}}">All</a>
								@foreach($progress as $row)
									<a class="dropdown-item {{ ($filter==$row->slug)? 'active':'' }}" href="{{url('tasks/list/'.$ids.'?filter='.$row->slug)}}">{{ $row->name }}</a>
								@endforeach
							</div>
						</div>
					</div>
				</div>
				
				<table class="table table-inbox table-hover">
					<tbody>
						@foreach($data as $k => $row)
						<tr class="unread">
							<td>{{ ($data->currentpage()-1) * $data->perpage() + $k + 1 }}.</td>
							<td class="favorite inbox-small-cells" title="High Priority">@if($row->priority=='1') <i class="fa fa-star"></i> @endif </td>
							<td class="view-message"><a href="{{url('tasks/view/'.base64_encode($row->id.'/'.$pid.'/'.time()))}}">{{ $row->title }}</a></td>
							<td><span class="badge badge-{{ $row->colour }} space-preview">{{ $row->progress }}</span></td>
							<td class="view-message text-right">{{ date('jS F Y',strtotime($row->created_at)) }}</td>							
							<td>
								&nbsp;&nbsp;
								@if($row->status==1)
								<a href="javascript:void(0)" title="Active" class="success"><i class="fa fa-check"></i></a>
								@else
								<a href="javascript:void(0)" title="In-active" class="success"><i class="fa fa-times"></i></a>
								@endif
								&nbsp;&nbsp;
								<a href="{{url('tasks/edit/'.base64_encode($row->id.'/'.$pid.'/'.time()))}}" title="Edit" class="warning"><i class="fa fa-pencil-square-o"></i></a>&nbsp;&nbsp;
								<a href="" title="Delete" class="danger"><i class="fa fa-trash-o"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			
			
				<div class="inbox-bar">
					<p>Showing {{($data->currentpage()-1)*$data->perpage()+1}} to {{$data->currentpage()*$data->perpage()}}	of  {{$data->total()}} entries</p>
					<nav class="inbox-nav down-nav">
						@if($filter)
						{!! $data->appends(['filter' => $filter])->links() !!}
						@else
						{{ $data->links() }}
						@endif	
					</nav>
				</div>
				@else
					<div class="no-data-come"><div class="no-data">No Task Found</div></div>
				@endif
		
			</div>
		</div>


