<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Exception;
use Log;
use DB;
use Illuminate\Support\Facades\Input;
use View;
use Mail;
use Auth;
use Redirect;

use App\User;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ResponseController;

class UserController extends Controller
{

	public function showLogin()
	{
	    // show the form
	    return View::make('themeone.login');
	}

	public function doLogin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
		    'email'    => 'required|email', // make sure the email is an actual email
		    'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
		    return Redirect::to('login')
		        ->withErrors($validator) // send back all errors to the login form
		        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

		    // create our user data for the authentication
		    $userdata = array(
		        'email'     => Input::get('email'),
		        'password'  => Input::get('password')
		    );

		    // attempt to do the login
		    if (Auth::attempt($userdata)) {

		        // validation successful!
		        // redirect them to the secure section or whatever
		        // return Redirect::to('secure');
		        // for now we'll just echo success (even though echoing in a controller is bad)
		        // echo 'SUCCESS!';
		        return Redirect::to('dashboard'); // redirect the user to the login screen

		    } else {        

		        // validation not successful, send back to form 
		        return Redirect::to('login');

		    }

		}
	}
	public function doLogout()
	{
	    Auth::logout(); // log the user out of our application
	    return Redirect::to('login'); // redirect the user to the login screen
	}



	/**
	 * User register
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 *
	 * success code 200
	 */
	
	// user name, academy name, timeslots, images, email, phone, tags(Multiple), description, latitude and longitude.
    public function create(Request $request){
    	Log::info(__CLASS__.'::'.__FUNCTION__.'() ==>');
    	try {
		    DB::beginTransaction();
			$validator = Validator::make($request->all(), [
			        'username' => 'required|max:30',
                    'email' => 'required|email|max:50|unique:user',
                    'academy_name' => 'required|max:100',
                    'timeslots' => 'required|max:30',
                    'phone' => 'required|max:11',
                    'description' => 'required|max:500',
                    'latitude' => 'required|max:20',
                    'longitude' => 'required|max:20|regex:/^([-+]?\d{1,2}([.]\d+)?)$/',
                    'tags' => 'required|max:225',
			    ]);
			// var_dump($request->file('image')->move(__DIR__.'/../../../resources/assets/image'));exit();


			$file = array('image' => Input::file('image'));
			$rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
			$imageValidator = Validator::make($file, $rules);
			if ($imageValidator->fails()) {
				throw new Exception($imageValidator->errors()->all()[0], 1);
			}

			if ($validator->fails()) {
		        throw new Exception($validator->errors()->all()[0], 1); 
		    }
		    $user = new User();
	    	$user->username = $request->username;
	    	$user->academy_name = $request->academy_name;
	    	$user->timeslots = $request->timeslots;
	    	$user->email = $request->email;
	    	$user->phone = $request->phone;
	    	$user->description = $request->description;
	    	$user->latitude = $request->latitude;
	    	$user->longitude = $request->longitude;
	    	$userInsert = $user->save();
	    	if(!$userInsert):
	    		throw new Exception("User registration failed.", 1);
	    	endif;
	    	$userId = $user->id;
	    	$tag = new TagsController();
	    	$result = $tag->insertTag($userId, $request->tags);
	    	if(!$result):
	    		throw new Exception("Failed to insert tag key.", 1);
	    	endif;

	    	//image upload
	    	if ($request->file('image')->isValid()) {
	    	  $fileName = str_replace(' ', '', $request->academy_name).'_'.time().'_'.$request->file('image')->getClientOriginalName();
	    	  $fileUploadResult = $request->file('image')->move(__DIR__.'/../../../storage/app/images/academy', $fileName);
	    	  if($fileUploadResult)
	    	  {
					$image = new ImageController();
					$imageResult = $image->insertImage($userId, $fileName);
					if(!$imageResult):
						throw new Exception("Failed to insert image.", 1);
					endif;	    	  	
	    	  }
	    	}
	    	else {
	    	  	throw new Exception("Failed to upload image. Image not valid.", 1);
	    	}
	    	//image upload

	    	DB::commit();
			return ['status'=>'success', 'result' => $result ];
    	} catch (Exception $e) {
    		DB::rollBack();
    		Log::error("Message : ".$e->getMessage());
    		Log::error("Line : ".$e->getLine());
    		Log::error("File : ".$e->getFile());
    		return ['status'=>'error', 'message' => $e->getMessage()];
    	}
    }


	/**
	 * User signup
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 *
	 * success code 200
	 */
    public function signup(Request $request){
    	Log::info(__CLASS__.'::'.__FUNCTION__.'() ==>');
    	try {
		    DB::beginTransaction();
			$validator = Validator::make($request->all(), [
			        'username' => 'required|max:30',
                    'email' => 'required|email|max:225|unique:users',
                    'mobile' => 'required|max:11',
                    'password' => 'required|min:6',
			    ]);

			if ($validator->fails()) {
		        throw new Exception($validator->errors()->all()[0], 1); 
		    }
		    $user = new User();
	    	$user->name = $request->username;
	    	$user->email = $request->email;
	    	$user->contact = $request->mobile;
	    	$user->password = bcrypt($request->password);
	    	$userInsert = $user->save();
	    	if(!$userInsert):
	    		throw new Exception("User registration failed.", 1);
	    	endif;
	    	$userId = $user->id;
	    	DB::commit();
			return ['status'=>'success', 'result' => $userInsert ];
    	} catch (Exception $e) {
    		DB::rollBack();
    		Log::error("Message : ".$e->getMessage());
    		Log::error("Line : ".$e->getLine());
    		Log::error("File : ".$e->getFile());
    		return ['status'=>'error', 'message' => $e->getMessage()];
    	}
    }
    public function get(){
    	Log::info(__CLASS__.'::'.__FUNCTION__.'() ==>');
    	try {
    		$result = User::get();
    		return ['status'=>'success', 'data' => $result ];
    	} catch (Exception $e) {
    		DB::rollBack();
    		Log::error("Message : ".$e->getMessage());
    		Log::error("Line : ".$e->getLine());
    		Log::error("File : ".$e->getFile());
    		return ['status'=>'error', 'message' => $e->getMessage()];
    	}
    	Log::info(__CLASS__.'::'.__FUNCTION__.'() <==');
    }

    public function getMapJson()
    {
    	Log::info(__CLASS__.'::'.__FUNCTION__.'() ==>');
    	try {
    		$result = User::get();

    		$data = array();
    		$data['type']="FeatureCollection";
    		$features= array();

    		foreach ($result as $key => $value) {
    			$properties = array();
    			$properties["title"] = $value->academy_name;
    			$properties["id"] = $value->id;
    			$properties["url"] = url('/')."/academy/".$value->id;
    			$properties["marker-symbol"] = "start";
    			$properties["marker-color"]="#ff8888";
				$properties["marker-size"]="large";
    			$features[$key]["properties"] = $properties;

	    		$features[$key]["type"] = "Feature";
	    		$features[$key]["geometry"] = array("type"=>"Point", "coordinates"=>[$value->latitude,$value->longitude]);
    		}

    		$data['features']= $features;

    		return "eqfeed_callback(".json_encode($data).")";
    	} catch (Exception $e) {
    		DB::rollBack();
    		Log::error("Message : ".$e->getMessage());
    		Log::error("Line : ".$e->getLine());
    		Log::error("File : ".$e->getFile());
    		return ['status'=>'error', 'message' => $e->getMessage()];
    	}
    	Log::info(__CLASS__.'::'.__FUNCTION__.'() <==');
    }


    function view($id, Request $request) {
	    $data = User::where('id', '=', $id)->with('tags')->with('images')->first();
	    if($data){
		    if($request->input('blockmail')!=1){
			    $maildata['academy_name'] = $data->academy_name;
			    $maildata['description'] = $data->description;
			    Mail::send('emails.viewtrigger', $maildata, function ($message) {
			        $message->from('codeandfood@gmail.com', 'KleverKid WebPage');
			        $message->to('codeandfood@gmail.com')->subject('Someone views the page');
			    });
			}
	    	return View::make('pages.academy')->with('data', $data);
	    }
	    else{
	    	return View::make('errors.503');
	    }
	    exit();


    }
}
