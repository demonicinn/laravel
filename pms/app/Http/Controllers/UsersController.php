<?php
	
	namespace App\Http\Controllers;
	
	use App\User;
	use App\Roles;
	use App\Designation;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Input;
	use Redirect;
	
	class UsersController extends Controller
	{
		/**
			* Create a new controller instance.
			*
			* @return void
		*/
    public function __construct() {
			$this->roles = Roles::all();
			$this->designation = Designation::all();
		}
		
    /**
			* Show the application dashboard.
			*
			* @return \Illuminate\Http\Response
		*/
		
    public function index() {
			$filter = '';
			
			$data = User::query()
			->leftjoin('users_role as b','b.id', '=', 'users.role')
			->leftjoin('users_designation as c','c.id', '=', 'users.designation')
			->orderBy('users.id', 'desc')
			->select([
			'users.*',
			'b.name as role',
			'c.name as designation'
			])
			->paginate($this->paginatioPage());
			
			if(isset($_GET['filter'])){
				$filter = $_GET['filter'];
				if($filter=='admin'){
					$role = '1';
				} else if($filter=='employee'){
					$role = '2';
				} else if($filter=='client'){
					$role = '3';
				}
				if($role){
					$data = User::query()
					->leftjoin('users_role as b','b.id', '=', 'users.role')
					->leftjoin('users_designation as c','c.id', '=', 'users.designation')
					->orderBy('users.id', 'desc')
					->where('users.role', $role)
					->select([
					'users.*',
					'b.name as role',
					'c.name as designation'
					])
					->paginate($this->paginatioPage());
				} else {
					flash('Sorry! You entered wrong url.')->error();
					return Redirect::back();
				}
			}
			return view('admin.users.index', array('data'=>$data, 'filter'=>$filter));
		}
		
		public function add() {
			return view('admin.users.add', array('roles'=>$this->roles, 'designation'=>$this->designation));
		}
		
		public function edit($ids) {
			$id = $this->decodeID($ids);
			if($this->auth('id')!=$id){
				$dataID = User::where('id', $id)->first();
				return view('admin.users.edit', array('dataID'=>$dataID, 'ids'=>$ids, 'roles'=>$this->roles, 'designation'=>$this->designation));
			} else {
				flash("Sorry! You hav't Permission.")->error();
				return Redirect::back();
			}
		}
		
		
		/*----- register users -----*/
		public function register(Request $request) {
			$this->validate($request, [
			'fname' => 'required|string|max:255',
			'lname' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:6|confirmed',
			]);
			
			$user = new User;
			$user->fname = Input::get('fname');
			$user->lname = Input::get('lname');
			$user->role = Input::get('role');
			$user->designation = (Input::get('designation')) ? Input::get('designation') : '0';
			$user->email = Input::get('email');
			$user->password = bcrypt(Input::get('password'));
			$user->status = Input::get('status');
			$user->save();
			$insertId = $user->id;
			if($insertId){
				$this->logs($user->getTable(), $insertId, '1', '1');
				$this->notifications('1', '1');
				return Redirect::to('users/edit/'.$this->encodeID($insertId));
			} else {
				$this->logs($user->getTable(), '0', '1', '0');
				$this->notifications('1', '0');
				return Redirect::back();
			}			
		}
		
		
		/*----- update users -----*/
		public function update(Request $request) {
			$this->validate($request, [
			'fname' => 'required|string|max:255',
			'lname' => 'required|string|max:255',
			]);
			
			$user = new User;
			$user->exists = true;
			$user->id = $this->decodeID(Input::get('id'));
			$user->fname = Input::get('fname');
			$user->lname = Input::get('lname');
			$user->role = Input::get('role');
			$user->designation = (Input::get('designation')) ? Input::get('designation') : '0';
			$user->status = Input::get('status');
			$user->save();
			$insertId = $user->id;
			if($insertId){
				$this->logs($user->getTable(), $insertId, '3', '1');
				$this->notifications('3', '1');
				return Redirect::back();
			} else {
				$this->logs($user->getTable(), '0', '3', '0');
				$this->notifications('3', '0');
				return Redirect::back();
			}			
		}
		
		/*----- password users -----*/
		public function password(Request $request) {
			$this->validate($request, [
      'password' => 'required|string|min:6|confirmed',
			]);
			
			$user = new User;
			$user->exists = true;
			$user->id = $this->decodeID(Input::get('id'));
			$user->password = bcrypt(Input::get('password'));
			$user->save();
			$insertId = $user->id;
			if($insertId){
				$this->logs($user->getTable(), $insertId, '5', '1');
				$this->notifications('5', '1');
				return Redirect::back();
			} else {
				$this->logs($user->getTable(), '0', '5', '0');
				$this->notifications('5', '0');
				return Redirect::back();
			}
		}
		
		
	}
