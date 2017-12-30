<?php
	
	namespace App\Http\Controllers;
	
	use App\Upload;
	use Illuminate\Http\Request;
	use App\Http\Requests;
	use Illuminate\Support\Facades\File;
	use Illuminate\Support\Facades\Validator;
	
	class UploadController extends Controller {
	
		public function __construct() {
		}
		
		/*----add/upload files----*/
    public function index(Request $request) {
			$validator = Validator::make($request->all(),
				['file' => 'required|mimes:jpeg,jpg,png,pdf,txt,docx,csv|max:4096']			
			);
			if ($validator->fails())
			return array(
			'fail' => true,
			'errors' => $validator->getMessageBag()->toArray()
			);
			$image = $request->file('file')->getClientOriginalName();
			$extension = $request->file('file')->getClientOriginalExtension();
			$dir = 'images/files/';
			$image = explode('.', $image);
			$filename = str_slug($image[0], '-').'-'.date('Y-m-d').'-'.$this->auth('id').'-'.uniqid().'.'.$extension;
			$request->file('file')->move($dir, $filename);
			return $filename;
		}
		
		/*----remove files----*/
		public function removeFile(Request $request){
			$file = $request->all();
			$file = $file['filename'];
			$upload = new Upload;
			$data = Upload::where('name', $file)->first();
			if($data != null) {
				$data->delete();
				$this->logs($upload->getTable(), '0', '2', '1');
			}
			if(File::delete('images/files/'.$file))			
			return array(
			'success' => true
			);
    }
		
	}
