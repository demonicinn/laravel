<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;
use App\Logs;
use App\Notifications;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
		
		/*----- decode url -----*/
		public function decodeID($id){
			$id = base64_decode($id);
			$id = explode('/', $id);
			return $id[0];
		}
		public function decodeID1($id){
			$id = base64_decode($id);
			$id = explode('/', $id);
			return $id[1];
		}
		
		/*----- encode url -----*/
		public function encodeID($id){
			$id = $id.'/'.time();
			return base64_encode($id);
		}
		
		/*----- active user -----*/
		public function auth($var){
			return Auth::user()->$var;
		}
		
		/*----- create log -----*/
		public function logs($table, $tableID, $action, $message){
			$logs = new Logs;
			$logs->uid = $this->auth('id');
			$logs->table = $table;
			$logs->tableID = $tableID;
			$logs->action = $action;
			$logs->message = $message;
			$logs->save();
			return $insertId = $logs->id;
		}
		
		/*----- paginatio per Page -----*/
		public function paginatioPage(){
			$page = 10;
			return $page;
		}
		
		
		/*-----  notifications -----*/
		public function notifications($action, $status){
			$data = Notifications::where('status', $status)->where('action', $action)->first();
			if($data){
				$slug = $data->slug;
				return flash($data->message)->$slug();
			} else {
				return flash('Sorry! Please try again.')->error();
			}
		}
		
		
		
}
