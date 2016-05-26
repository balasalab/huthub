<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Log;
use View;
use Auth;
use Redirect;
use Validator;
use Exception;
use App\Model\Property;
use App\Model\PropertyRooms;

class PropertyController extends Controller
{
    function add(Request $request){
    	try {
    		if(!Auth::check()){
    			throw new Exception("Authentication failed.", 1);
    		}
    		Log::info(__CLASS__.'::'.__FUNCTION__.'() ==>');
    		$messages = [
    		    'name.required' => 'Please provide the property name. (attr : :attribute)',
    		    'type_id.required' => 'Please provide the property type. (attr : :attribute)',
    		    'address.required' => 'Please provide the property address. (attr : :attribute)',
    		    'city.required' => 'Please provide the property located city name. (attr : :attribute)',
    		    'pincode.required' => 'Please provide the property locatde pincode. (attr : :attribute)',
    		    'state.required' => 'Please provide the property located state. (attr : :attribute)',
    		    'country.required' => 'Please provide the property located country. (attr : :attribute)',
    		    'contact.required' => 'Please provide the property contact details. (attr : :attribute)',
    		];

			$validator = Validator::make($request->all(), [
                'name' => 'required|max:50',
                'type_id' => 'required|integer',
                'address' => 'required|max:100',
                'city' => 'required|max:50',
                'pincode' => 'required|max:20',
                'state' => 'required|max:100',
                'country' => 'required|max:50',
                'contact' => 'required|max:100',
		    ], $messages);
			if ($validator->fails()) {
		        throw new Exception($validator->errors()->all()[0], 1); 
		    }
		    $user = Auth::user();
			$property = new Property();
			$property->property_name = $request->name;
			$property->user_id = $user->id;
			$property->property_type_id = $request->type_id;
			$property->property_address = $request->address;
			$property->property_city = $request->city;
			$property->property_pincode = $request->pincode;
			$property->property_state = $request->state;
			$property->property_country = $request->country;
			$property->property_contact = $request->contact;
			$property->latitude = $request->latitude;
			$property->longitude = $request->longitude;
			$isPropertyAdded = $property->save();
			if(!$isPropertyAdded):
				throw new Exception("Property registration failed.", 1);
			endif;
			
    		Log::info(__CLASS__.'::'.__FUNCTION__.'() <==');
			return ['status'=>'success', 'data' => [ 'property_id' => $property->id ], 'message'=>'Property registration successfull.'];

    	} catch (Exception $e) {
    		Log::error("Message : ".$e->getMessage());
    		Log::error("Line : ".$e->getLine());
    		Log::error("File : ".$e->getFile());
    		return ['status'=>'error', 'message' => $e->getMessage()];
    	}
    }

    public function showAddRoom()
    {
        return View::make('themeone.dashboard.addRoom');
    }
    public function doAddRoom(Request $request)
    {
    	try {
    		$result = $this->addRoom($request);
    		if ($result['status']='success'):
    			throw new Exception("registration successfull", 1);
    		else:
    			throw new Exception($result['message'], 1);
    		endif;
    	} catch (Exception $e) {
    		return Redirect::to('add/property/room')
    		    ->with("message", $e->getMessage());
    	}
    }

    function addRoom(Request $request){
    	try {
    		Log::info(__CLASS__.'::'.__FUNCTION__.'() ==>');
    		$messages = [
    		    'property_id.required' => 'Please provide the property name. (attr : :attribute)',
    		    'room_type.required' => 'Please provide the property type. (attr : :attribute)',
    		    'price.required' => 'Please provide the property address. (attr : :attribute)',
    		];

			$validator = Validator::make($request->all(), [
                'property_id' => 'required|max:50',
                'room_type' => 'required|string',
                'price' => 'required|max:100',
		    ], $messages);
			if ($validator->fails()) {
		        throw new Exception($validator->errors()->all()[0], 1); 
		    }
			$pRoom = new PropertyRooms();
			$pRoom->property_id = $request->property_id;
			$pRoom->room_type = $request->room_type;
			$pRoom->price = $request->price;
			$isPropertyAdded = $pRoom->save();
			if(!$isPropertyAdded):
				throw new Exception("Failed to add room.", 1);
			endif;
			
    		Log::info(__CLASS__.'::'.__FUNCTION__.'() <==');
			return ['status'=>'success', 'data' => [ 'room_id' => $pRoom->id ], 'message'=>'Property  room added successfull.'];

    	} catch (Exception $e) {
    		Log::error("Message : ".$e->getMessage());
    		Log::error("Line : ".$e->getLine());
    		Log::error("File : ".$e->getFile());
    		return ['status'=>'error', 'message' => $e->getMessage()];
    	}
    }

    function getPropertyList($request){
    	$property = Property::with('rooms')->get();
    	if($property):
    		$data['count'] = count($property);
    		foreach ($property as $key => $value) {
    			$prop['id'] = $value['property_id'];
    			$prop['name'] = $value['property_name'];
    			$prop['address'] = $value['property_address'];
    			$prop['city'] = $value['property_city'];
    			$prop['pincode'] = $value['property_pincode'];
    			$prop['state'] = $value['property_state'];
    			$prop['country'] = $value['property_country'];
    			$prop['contact'] = $value['property_contact'];
    			foreach ($value['rooms'] as $rk => $rv) {
    				$prop['rooms'][$rk]['room_type'] = ($rv['room_type']);
    				$prop['rooms'][$rk]['price'] = ($rv['price']);
    				$prop['rooms'][$rk]['beds'] = ($rv['beds']);
    			}

    			$data['properties'][] = $prop;
    		}
    	else:
    		$data['count'] = 0;
    		$data['properties'] = null;
    	endif;
    	return $data;
    }
    function listApi(Request $request){
    	try {
    		Log::info(__CLASS__.'::'.__FUNCTION__.'() ==>');
			$data = $this->getPropertyList($request);
    		Log::info(__CLASS__.'::'.__FUNCTION__.'() <==');
			return ['status'=>'success', 'data' => $data];

    	} catch (Exception $e) {
    		Log::error("Message : ".$e->getMessage());
    		Log::error("Line : ".$e->getLine());
    		Log::error("File : ".$e->getFile());
    		return ['status'=>'error', 'message' => $e->getMessage()];
    	}
    }
    function listView(Request $request){
    	$data = $this->getPropertyList($request);
    	return View::make('themeone.public.listing')->with('data', $data);
    }

    function adminProperties(){
    	Log::info(__CLASS__.'::'.__FUNCTION__.'() ==>');
    	try {
    		if(Auth::check()):
    			$userId = Auth::user()->id;
	    		$data = Property::where('user_id', $userId)->get();
	    		return View::make('themeone.dashboard.properties')->with('data', $data);
	    	else:
	    		throw new Exception("Authentication failed.", 1);
	    	endif;
	    		
    	} catch (Exception $e) {
    		Log::error("Message : ".$e->getMessage());
    		Log::error("Line : ".$e->getLine());
    		Log::error("File : ".$e->getFile());
    		return Redirect::to('login');
    	}
    }
}
