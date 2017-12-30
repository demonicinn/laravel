<?php
	
	namespace App\Http\Controllers;

	use App\Projects;
	use App\Upload;
	use App\User;
	use App\Skills;
	use App\Progress;
	use App\Projects_assigned;
	use App\Projects_skills;
	use App\Projects_credentials;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Input;
	use Redirect;
	
	class ProjectsController extends Controller
	{
		/*----- construct -----*/
		public function __construct() {
			$this->data  = Projects::query()
			->leftjoin('progress as b','b.id', '=', 'progress')
			->orderBy('id', 'desc')
			->select([
			'projects.*',
			'b.name as progress', 'b.colour',
			])
			->paginate($this->paginatioPage());
			$this->progress = Progress::all();
			$this->clients = User::where('role', '3')->get();
		}
		
    public function index() {
			$filter = '';
			if(isset($_GET['filter'])){
				$filter = $_GET['filter'];
				$progressID = Progress::where('slug', $filter)->first();
				if($progressID){
					$this->data  = Projects::query()
					->leftjoin('progress as b','b.id', '=', 'progress')
					->orderBy('id', 'desc')
					->where('progress', $progressID->id)
					->select([
					'projects.*',
					'b.name as progress', 'b.colour',
					])
					->paginate($this->paginatioPage());
				} else {
					$this->notifications('6', '0');
					return Redirect::back();
				}
			}			
			return view('admin.projects.index', array('data'=>$this->data, 'progress'=>$this->progress, 'filter'=>$filter));
		}
		
	
		public function add() {
			return view('admin.projects.add', array('progress'=>$this->progress, 'clients'=>$this->clients));
		}
		
		public function edit($ids) {
			$projects = new Projects;
			$id = $this->decodeID($ids);
			$dataID = Projects::where('id', $id)->first();
			$dataFiles = Upload::where('tableId', $id)->where('table', $projects->getTable())->get();
			return view('admin.projects.edit', array('data'=>$this->data, 'dataID'=>$dataID, 'dataFiles'=>$dataFiles, 'ids'=>$ids, 'progress'=>$this->progress, 'clients'=>$this->clients));
		}
		
		public function summary($ids) {
			$projects = new Projects;
			$id = $this->decodeID($ids);
			$dataID = Projects::where('id', $id)->first();
			$dataFiles = Upload::where('tableId', $id)->where('table', $projects->getTable())->get();
			return view('admin.projects.summary', array('data'=>$this->data, 'dataID'=>$dataID, 'dataFiles'=>$dataFiles, 'ids'=>$ids));
		}
		
		/*--------------
			details page
		---------------*/
		public function details($ids) {
			$projects = new Projects;
			$id = $this->decodeID($ids);
			$dataID = Projects::where('id', $id)->first();
			$dataFiles = Upload::where('tableId', $id)->where('table', $projects->getTable())->get();
			$skills = Skills::where('status', '1')->get();
			$credentials = Projects_credentials::where('pid', $id)->get();
			
			$users = User::query()
			->leftjoin('users_designation as b','users.designation', '=', 'b.id')
			->where('users.role', '2')
			->get([
			'users.id', 'users.fname', 'users.lname', 'b.name as designation'
			]);			
			
			$assigned = Projects_assigned::query()
			->leftjoin('users as b','b.id', '=', 'projects_assigned.assign')
			->leftjoin('users_designation as c','b.designation', '=', 'c.id')
			->where('projects_assigned.pid', $id)
			->orderBy('projects_assigned.id', 'desc')
			->get([
			'projects_assigned.*', 'b.fname', 'b.lname', 'c.name as designation'
			]);
			
			$pskills = Projects_skills::query()
			->leftjoin('skills as b','b.id', '=', 'projects_skills.skill')
			->where('projects_skills.pid', $id)
			->orderBy('projects_skills.id', 'desc')
			->get([
			'projects_skills.*', 'b.name'
			]);
			
			$datas = array(
			'data'=>$this->data, 
			'dataID'=>$dataID, 
			'dataFiles'=>$dataFiles, 
			'ids'=>$ids, 
			'users'=>$users, 
			'assigned'=>$assigned,
			'skills'=>$skills,
			'pskills'=>$pskills,
			'credentials'=>$credentials,
			);			
			return view('admin.projects.details', $datas);
		}
		
		
		
		
		/*------------
			add project 
		-------------*/
		public function insert(Request $request) {
			$this->validate($request, [
			'name' => 'required|string|max:255',
			]);			
			$projects = new Projects;
			$projects->uid = $this->auth('id');
			$projects->name = Input::get('name');
			$projects->price = Input::get('price');
			$projects->client = Input::get('client');
			$projects->getting = Input::get('getting');
			$projects->type = Input::get('type');
			$projects->description = Input::get('description');
			$projects->progress = Input::get('progress');
			$projects->status = Input::get('status');
			$projects->save();
			$insertId = $projects->id;			
			if($insertId){
				$files = Input::get('files');
				if($files){
					foreach($files as $file){
						$upload = new Upload;
						$upload->uid = $this->auth('id');
						$upload->tableId = $insertId;
						$upload->table = $projects->getTable();
						$upload->name = $file;
						$upload->save();
					}
				}
				$this->logs($projects->getTable(), $insertId, '1', '1');
				$this->notifications('1', '1');
				return Redirect::to('projects/edit/'.$this->encodeID($insertId));
			} else {
				$this->logs($projects->getTable(), '0', '1', '0');
				$this->notifications('1', '0');
				return Redirect::back();
			}
		}
		
		
		/*---- update project ----*/
		public function update(Request $request) {
			$this->validate($request, [
			'name' => 'required|string|max:255',
			]);
			
			$projects = new Projects;
			$projects->exists = true;
			$projects->id = $this->decodeID(Input::get('id'));
			$projects->uid = $this->auth('id');
			$projects->name = Input::get('name');
			$projects->price = Input::get('price');
			$projects->client = Input::get('client');
			$projects->getting = Input::get('getting');
			$projects->type = Input::get('type');
			$projects->description = Input::get('description');
			$projects->progress = Input::get('progress');
			$projects->status = Input::get('status');
			$projects->save();
			$insertId = $projects->id;
			
			if($insertId){
				$files = Input::get('files');
				if($files){
					foreach($files as $file){
						$data = Upload::where('name', $file)->first();
						if(!$data){
							$upload = new Upload;
							$upload->uid = $this->auth('id');
							$upload->tableId = $insertId;
							$upload->table = $projects->getTable();
							$upload->name = $file;
							$upload->save();
						}
					}
				}				
				$this->logs($projects->getTable(), $insertId, '3', '1');
				$this->notifications('3', '1');
				return Redirect::to('projects/edit/'.$this->encodeID($insertId));
			} else {
				$this->logs($projects->getTable(), '0', '3', '0');
				$this->notifications('3', '0');
				return Redirect::back();
			}
		}
		
		/*----Projects_assigned----*/
		public function assigned(Request $request) {
			$pid = $this->decodeID(Input::get('id'));
			$count = Projects_assigned::where('pid', $pid)->count();
			if($count<=5){
				$assigned = new Projects_assigned;
				$assigned->uid = $this->auth('id');
				$assigned->pid = $pid;
				$assigned->assign = Input::get('assign');
				$assigned->isDelete = '0';
				$assigned->save();
				$insertId = $assigned->id;			
				if($insertId){		
					$this->logs($assigned->getTable(), $insertId, '1', '1');
					$this->notifications('1', '1');
					return Redirect::back();
				} else {
					$this->logs($assigned->getTable(), '0', '1', '0');
					$this->notifications('1', '0');
					return Redirect::back();
				}
			} else {
				flash('Sorry! You already added many employees.')->error();
				return Redirect::back();
			}
		}
		
		/*----Projects_skills----*/
		public function skills(Request $request) {			
			$pid = $this->decodeID(Input::get('id'));
			$count = Projects_skills::where('pid', $pid)->count();
			if($count<=5){
				$assigned = new Projects_skills;
				$assigned->uid = $this->auth('id');
				$assigned->pid = $pid;
				$assigned->skill = Input::get('skill');
				$assigned->isDelete = '0';
				$assigned->save();
				$insertId = $assigned->id;			
				if($insertId){		
					$this->logs($assigned->getTable(), $insertId, '1', '1');
					$this->notifications('1', '1');
					return Redirect::back();
				} else {
					$this->logs($assigned->getTable(), '0', '1', '0');
					$this->notifications('1', '0');
					return Redirect::back();
				}
			} else {
				flash('Sorry! You already added many skills.')->error();
				return Redirect::back();
			}
		}
		
		
		/*----Projects_credentials----*/
		public function credentials(Request $request) {			
			$pid = $this->decodeID(Input::get('id'));
			$count = Projects_credentials::where('pid', $pid)->count();
			if($count<=10){
				$assigned = new Projects_credentials;
				$assigned->uid = $this->auth('id');
				$assigned->pid = $pid;
				$assigned->type = Input::get('type');
				$assigned->host = Input::get('host');
				$assigned->email = Input::get('email');
				$assigned->password = Input::get('password');
				$assigned->port = (Input::get('port')) ? Input::get('port') : '';
				$assigned->isDelete = '0';
				$assigned->save();
				$insertId = $assigned->id;			
				if($insertId){		
					$this->logs($assigned->getTable(), $insertId, '1', '1');
					$this->notifications('1', '1');
					return Redirect::back();
				} else {
					$this->logs($assigned->getTable(), '0', '1', '0');
					$this->notifications('1', '0');
					return Redirect::back();
				}
			} else {
				flash('Sorry! You already added many credentials.')->error();
				return Redirect::back();
			}
		}
		
	}
