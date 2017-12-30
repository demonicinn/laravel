<?php
	
	namespace App\Http\Controllers;
	
	use App\Skills;
	use App\User;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Input;
	use Redirect;
	
	class SkillsController extends Controller {
		
		/*----- construct -----*/
		public function __construct() {
			$this->data = Skills::orderBy('id', 'desc')->paginate($this->paginatioPage());
		}
		
		/*----- index -----*/
    public function index() {
			return view('admin.skills.index', array('data'=>$this->data));
		}
		
		/*----- add -----*/
		public function add() {
			return view('admin.skills.index', array('data'=>$this->data));
		}
		
		/*----- edit -----*/
		public function edit($ids) {
			$id = $this->decodeID($ids);
			$dataID = Skills::where('id', $id)->first();
			return view('admin.skills.index', array('data'=>$this->data, 'dataID'=>$dataID, 'ids'=>$ids));
		}
		
		/*----- addSkills -----*/
		public function addSkills(Request $request) {
			$this->validate($request, [
			'name' => 'required|string|max:100',
			]);
		
			$skills = new Skills;
			$skills->uid = $this->auth('id');
			$skills->name = Input::get('name');
			$skills->status = Input::get('status');
			$skills->save();
			$insertId = $skills->id;
			if($insertId){
				$this->logs($skills->getTable(), $insertId, '1', '1');
				$this->notifications('1', '1');
				return Redirect::to('skills/edit/'.$this->encodeID($insertId));
			} else {
				$this->logs($skills->getTable(), '0', '1', '0');
				$this->notifications('1', '0');
				return Redirect::back();
			}
		}
		
		
		/*----- update -----*/
		public function update(Request $request) {
			$this->validate($request, [
			'name' => 'required|string|max:100',
			]);
			
			$skills = new Skills;
			$skills->exists = true;
			$skills->id = $this->decodeID(Input::get('id'));
			$skills->name = Input::get('name');
			$skills->status = Input::get('status');
			$skills->save();
			$insertId = $skills->id;
			if($insertId){
				$this->logs($skills->getTable(), $insertId, '3', '1');
				$this->notifications('3', '1');
				return Redirect::back();
			} else {
				$this->logs($skills->getTable(), '0', '3', '0');
				$this->notifications('3', '0');
				return Redirect::back();
			}
		}
		
	}
	