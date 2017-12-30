<?php
	
	namespace App\Http\Controllers;
	
	use App\Milestones;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Input;
	use Redirect;
	
	class MilestonesController extends Controller {
		
		/*----- construct -----*/
		public function __construct() {
			$this->data = Milestones::orderBy('id', 'desc')->paginate($this->paginatioPage());
		}
		
		/*----- index -----*/
    public function index() {
			return view('admin.milestones.index', array('data'=>$this->data));
		}
		
		/*----- add -----*/
		public function add() {
			return view('admin.milestones.add');
		}
		
		/*----- edit -----*/
		public function edit($ids) {
			$id = $this->decodeID($ids);
			$dataID = Milestones::where('id', $id)->first();
			return view('admin.milestones.edit', array('dataID'=>$dataID, 'ids'=>$ids));
		}
		
		/*----- insert -----*/
		public function insert(Request $request) {
		
			$data = new Milestones;
			$data->uid = $this->auth('id');
			$data->title = Input::get('title');
			$data->message = Input::get('message');
			$data->status = Input::get('status');
			$data->save();
			$insertId = $data->id;
			if($insertId){
				$this->logs($data->getTable(), $insertId, '1', '1');
				$this->notifications('1', '1');
				return Redirect::to('milestones/edit/'.$this->encodeID($insertId));
			} else {
				$this->logs($data->getTable(), '0', '1', '0');
				$this->notifications('1', '0');
				return Redirect::back();
			}
		}
		
		
		/*----- update -----*/
		public function update(Request $request) {
			
			$data = new Milestones;
			$data->exists = true;
			$data->id = $this->decodeID(Input::get('id'));
			$data->title = Input::get('title');
			$data->message = Input::get('message');
			$data->status = Input::get('status');
			$data->save();
			$insertId = $data->id;
			if($insertId){
				$this->logs($data->getTable(), $insertId, '3', '1');
				$this->notifications('3', '1');
				return Redirect::back();
			} else {
				$this->logs($data->getTable(), '0', '3', '0');
				$this->notifications('3', '0');
				return Redirect::back();
			}
		}
		
	}
	