@extends('layouts.app')
@section('title', 'Project Summary')
@section('content')
<div class="row">
	<div class="col-lg-8">
		<div class="card">
			<div class="card-heading">
				<h5><b>{{ $dataID->name }}</b>
					<div class="pull-right">
						<span class="btn btn-primary btn-round btn-xs">html</span>
						<span class="btn btn-primary btn-round btn-xs">css</span>
						<span class="btn btn-primary btn-round btn-xs">codeigniter</span>
					</div>
				</h5>
				<p class="text-center">Project Owner: John Deo | Start: 15/March/2017 | Due on: 15/Nov/2017</p>
			</div>
			
			<div class="card-body">
				<h5>Project Status</h5>
				<div class="progress">
					<div class="progress-bar progress-bar-striped progress-bar-animated progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
				</div> <!-- /progress -->
			</div>
		</div>
	</div>
	
	
	
	
	<div class="col-md-4">
		<div class="card">
			<div class="card-heading">
				<h5>Project Overview</h5>
			</div>
			<div class="card-body">
			{!! $dataID->description !!}
			</div>
		</div>
	</div>
</div>
@endsection

@section('style')
<style>

</style>
@endsection