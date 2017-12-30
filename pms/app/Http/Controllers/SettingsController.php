<?php
	
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	class SettingsController extends Controller
	{
		
    public function password()
    {      
			return view('admin.settings.password');
		}
		
		public function profileView() {      
			return view('admin.settings.profile-view');
		}
		
	}
