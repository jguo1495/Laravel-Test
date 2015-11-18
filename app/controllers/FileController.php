<?php

class FileController extends BaseController {

	public function saveFile()
	{
	
	$file = Input::file('image');
    $destinationPath = public_path().'/upload-images/';	
	$filename = str_random(12). '_' . $file->getClientOriginalName();
	
	$uploadSuccess = $file->move($destinationPath, $filename);
	
	$message = $filename. " uoploaded successfully";
		
	// redirect
    Session::flash('message', $message );
    return Redirect::to('create');
	}

	
}
