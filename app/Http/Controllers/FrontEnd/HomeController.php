<?php
namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\FrontEndModels\Country;
use App\Models\FrontEndModels\State;
use App\Models\FrontEndModels\City;
use App\Models\FrontEndModels\Customers;

class HomeController extends Controller
{
    public function __construct(){
        
        view()->composer('FrontEnd.HeaderAndFooter.navbar', function($view) {
            $country = Country::get();
            $view->with('countries',$country);
        });
    }

    public function index(){
        return view('FrontEnd.home');
    }

    public function states(Request $request){
        $input = $request->all();
        $country_id = $input['country_id'];
        $state = State::Where('country_id',$country_id)->pluck("name","id");
        return response()->json($state);
    }
    public function city(Request $request){
        $input = $request->all();
        $state_id = $input['state_id'];
        $city = City::Where('state_id',$state_id)->pluck("name","id");
        return response()->json($city);
    }

    public function registration(Request $request){
        $input = $request->all();
        $validation = Validator::make($input, [
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required',
            'phone' => 'required',
            'state' => 'required',
            'country' => 'required',
            'city' => 'required',
            'gender' => 'required',

        ]);
        if ( $validation->fails() ) {
            if($validation->messages()->first('name')){
                $error = array('success'=>false,'message'=>$validation->messages()->first('name'));
                return json_encode($error);
            }
            if($validation->messages()->first('email')){
                $error = array('success'=>false,'message'=>$validation->messages()->first('email'));
                return json_encode($error); 
            }
            if($validation->messages()->first('password')){
                $error = array('success'=>false,'message'=>$validation->messages()->first('password'));
                return json_encode($error); 
            }
            if($validation->messages()->first('phone')){
                $error = array('success'=>false,'message'=>$validation->messages()->first('phone'));
                return json_encode($error); 
            }
            if($validation->messages()->first('state')){
                $error = array('success'=>false,'message'=>$validation->messages()->first('state'));
                return json_encode($error); 
            }
            if($validation->messages()->first('country')){
                $error = array('success'=>false,'message'=>$validation->messages()->first('country'));
                return json_encode($error); 
            }
            if($validation->messages()->first('city')){
                $error = array('success'=>false,'message'=>$validation->messages()->first('city'));
                return json_encode($error); 
            }
            if($validation->messages()->first('gender')){
                $error = array('success'=>false,'message'=>$validation->messages()->first('gender'));
                return json_encode($error); 
            }
        }else{
            $input['password'] = bcrypt($input['password']);
            $register = Customers::create($input);
            if($register){
                $message = array('success'=>true,'message'=>'Registered Successfully!');
                return json_encode($message);
            }else{
                $message = array('success'=>false,'message'=>'Somthing went wrong!');
                return json_encode($message);
            }
        }
    }
}
