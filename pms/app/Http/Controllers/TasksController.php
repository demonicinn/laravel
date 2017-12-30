<?php
	
	namespace App\Http\Controllers;
	
	use App\Projects_tasks;
	use App\Projects;
	use App\Progress;
	use App\Projects_tasks_reply;
	use App\Upload;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Input;
	use Redirect;
	
	class TasksController extends Controller
	{
		
		/*----- construct -----*/
		public function __construct() {
			$this->projects = Projects::where('progress', '2')->where('status', '1')->orderBy('id', 'desc')->get();
			$this->pid = '';
			$this->progress = Progress::all();
		}
		
		/*----- index -----*/
		public function index() {
			return view('admin/tasks/index', array('projects'=>$this->projects, 'pid'=>$this->pid));
		}
		
		/*----- add -----*/
		public function add($ids) {
			$this->pid = $this->decodeID($ids);
			return view('admin/tasks/index', array('projects'=>$this->projects, 'pid'=>$this->pid, 'pids'=>$ids, 'progress'=>$this->progress));
		}
		
		/*----- edit -----*/
		public function edit($ids) {
			$tasks = new Projects_tasks;
			$this->tid = $this->decodeID($ids);
			$this->pid = $this->decodeID1($ids);
			$dataID = Projects_tasks::where('id', $this->tid)->first();
			$dataFiles = Upload::where('tableId', $this->tid)->where('table', $tasks->getTable())->get();			
			return view('admin/tasks/index', array('projects'=>$this->projects, 'pid'=>$this->pid, 'pids'=>$ids, 'progress'=>$this->progress, 'dataID'=>$dataID, 'dataFiles'=>$dataFiles));
		}
		
		/*----- lists -----*/
		public function lists($ids) {
			$this->pid = $this->decodeID($ids);
			$filter = '';
			$query = Projects_tasks::query();
			$query->leftjoin('progress as b','b.id', '=', 'progress')
			->orderBy('id', 'desc')
			->where('pid', $this->pid);
			if(isset($_GET['filter'])){
				$filter = $_GET['filter'];
				$progressID = Progress::where('slug', $filter)->first();
				$query->where('progress', $progressID->id);			
			}
			$query->select([
			'projects_tasks.*',
			'b.name as progress', 'b.colour',
			]);			
			$data = $query->paginate($this->paginatioPage());
			return view('admin/tasks/index', array('projects'=>$this->projects, 'pid'=>$this->pid, 'data'=>$data, 'progress'=>$this->progress, 'filter'=>$filter, 'ids'=>$ids));
		}
		
		/*----- view -----*/
		public function view($ids) {
			$tasks = new Projects_tasks;
			$this->tid = $this->decodeID($ids);
			$this->pid = $this->decodeID1($ids);
			$dataT = Projects_tasks::where('pid', $this->pid)->orderBy('id', 'desc')->get();
			$dataID = Projects_tasks::where('id', $this->tid)->first();
			$dataFiles = Upload::where('tableId', $this->tid)->where('table', $tasks->getTable())->get();
			return view('admin/tasks/index', array('projects'=>$this->projects, 'pid'=>$this->pid, 'tid'=>$this->tid, 'pids'=>$ids, 'progress'=>$this->progress, 'dataID'=>$dataID, 'dataFiles'=>$dataFiles, 'dataT'=>$dataT));
		}
		
		/*----- reply -----*/
		public function reply($ids) {
			$reply = new Projects_tasks_reply;
			$this->tid = $this->decodeID($ids);
			$this->pid = $this->decodeID1($ids);
			$dataT = Projects_tasks::where('pid', $this->pid)->orderBy('id', 'desc')->get();
			$dataID = Projects_tasks::where('id', $this->tid)->first();
			
			$dataReply = $reply->query()
			->join('users as b','b.id', '=', 'uid')
			->orderBy('id', 'desc')
			->where('tid', $this->tid)
			->get([
			'projects_tasks_reply.*', 'b.fname', 'b.lname'
			]);
			$dataFiles = Upload::where('taskID', $this->tid)->where('table', $reply->getTable())->get();
			return view('admin/tasks/index', array('projects'=>$this->projects, 'pid'=>$this->pid, 'tid'=>$this->tid, 'pids'=>$ids, 'dataID'=>$dataID, 'dataT'=>$dataT, 'dataReply'=>$dataReply, 'dataFiles'=>$dataFiles));
		}
		
		
		/*----- insert -----*/
		public function insert(Request $request) {
			$this->validate($request, [
			'title' => 'required|string|max:255',
			]);			
			$tasks = new Projects_tasks;
			$tasks->uid = $this->auth('id');
			$tasks->pid = $this->decodeID(Input::get('pid'));
			$tasks->title = Input::get('title');
			$tasks->description = Input::get('description');
			$tasks->progress = Input::get('progress');
			$tasks->type = Input::get('type');
			$tasks->priority = (Input::get('priority'))?Input::get('priority'):'0';
			$tasks->status = Input::get('status');
			$tasks->save();
			$insertId = $tasks->id;
			if($insertId){
				$files = Input::get('files');
				if($files){
					foreach($files as $file){
						$upload = new Upload;
						$upload->uid = $this->auth('id');
						$upload->tableId = $insertId;
						$upload->table = $tasks->getTable();
						$upload->name = $file;
						$upload->save();
					}
				}
				$this->logs($tasks->getTable(), $insertId, '1', '1');
				$this->notifications('1', '1');
				return Redirect::to('tasks/edit/'.$this->encodeID($insertId.'/'.$this->decodeID(Input::get('pid'))));
			} else {
				$this->logs($tasks->getTable(), '0', '1', '0');
				$this->notifications('1', '0');
				return Redirect::back();
			}
		}
		
		
		/*---- update project ----*/
		public function update(Request $request) {
			$this->validate($request, [
			'title' => 'required|string|max:255',
			]);			
			$tasks = new Projects_tasks;
			$tasks->exists = true;
			$tasks->id = $this->decodeID(Input::get('id'));
			$tasks->uid = $this->auth('id');
			$tasks->title = Input::get('title');
			$tasks->description = Input::get('description');
			$tasks->progress = Input::get('progress');
			$tasks->type = Input::get('type');
			$tasks->priority = (Input::get('priority'))?Input::get('priority'):'0';
			$tasks->status = Input::get('status');
			$tasks->save();
			$insertId = $tasks->id;
			
			if($insertId){
				$files = Input::get('files');
				if($files){
					foreach($files as $file){
						$data = Upload::where('name', $file)->first();
						if(!$data){
							$upload = new Upload;
							$upload->uid = $this->auth('id');
							$upload->tableId = $insertId;
							$upload->table = $tasks->getTable();
							$upload->name = $file;
							$upload->save();
						}
					}
				}				
				$this->logs($tasks->getTable(), $insertId, '3', '1');
				$this->notifications('3', '1');
				return Redirect::back();
			} else {
				$this->logs($tasks->getTable(), '0', '3', '0');
				$this->notifications('3', '0');
				return Redirect::back();
			}
		}

		/*----- reply Insert-----*/
		public function replyInsert(Request $request) {
			$this->validate($request, [
			'message' => 'required|string|min:1',
			]);
			$reply = new Projects_tasks_reply;
			$reply->uid = $this->auth('id');
			$reply->tid = $this->decodeID(Input::get('id'));
			$reply->message = Input::get('message');
			$reply->files = (Input::get('files'))?'1':'0';
			$reply->save();
			$insertId = $reply->id;
			if($insertId){
				$files = Input::get('files');
				if($files){
					foreach($files as $file){
						$upload = new Upload;
						$upload->uid = $this->auth('id');
						$upload->tableId = $insertId;
						$upload->taskID = $this->decodeID(Input::get('id'));
						$upload->table = $reply->getTable();
						$upload->name = $file;
						$upload->save();
					}
				}
				$this->logs($reply->getTable(), $insertId, '1', '1');
				$this->notifications('7', '1');
				return Redirect::back();
			} else {
				$this->logs($reply->getTable(), '0', '1', '0');
				$this->notifications('7', '0');
				return Redirect::back();
			}
		}
		
		
		
	}
