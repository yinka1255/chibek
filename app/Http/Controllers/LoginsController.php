<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Vendor;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class LoginsController extends Controller
{

    /**
	 * Handles authentication attempt
	 *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function login(Request $request){

    	$username = $request->input('username');

        $password = $request->input('password');

    	if (Auth::attempt(['username' => $username, 'password' => $password])){

            $user = Auth::user();

            if($user->status == 2){
                Session::flash('error', 'Sorry! Your account has been deactivated');
                return back();
            }   

            if($user->type == 1){
                return redirect('admin/feeds');
            }    

            if($user->type == 2){
                return redirect('vendor/dashboard');
            }    

            if($user->type == 3){
                return redirect('customer/dashboard');
            }    
        }else{		
                Session::flash('error', 'Authentication failed. Kindly try again with valid details');
                return back();
        }

    }

    public function mobileLogin(Request $request){

    	$username = $request->input('email');

        $password = $request->input('password');
        
        $regId = $request->input('regId');

    	if (Auth::attempt(['username' => $username, 'password' => $password])){

            $user = Auth::user();
            if($user->status != 1){
                return response()->json(['error' => true, 'message' => 'Authentication failed. Your account has been deactivated'],200);
            }
            if($user->type != 3){
                return response()->json(['error' => true, 'message' => 'Authentication failed! You do not have a customer account'],200);
            } 

            $user->reg_id = $regId;

            $user->save();

            $customer = DB::table('customers')
                            ->join("states", "states.id", "=", "customers.state")
                            ->join('users','users.id','=','customers.user_id')
                            ->where('customers.user_id', $user->id)
                            ->select( 'users.*', 'users.id as userId','customers.*', "states.name as state_name")->first();

            
            return response()->json(['success' => true, 'message' => 'Authentication was successfull', 'customer'=> $customer],200);


        }else{		
            return response()->json(['error' => true, 'message' => 'Authentication failed'],200);
        }

    }

    public function mobileRegId(Request $request){

    	$username = $request->input('email');

        $regId = $request->input('regId');

        $user = User::where("username", $username)->first();

    	if (count($user) > 0){

            $user->reg_id = $regId;

            $user->save();
        }
    }

    public function logout(){
    	Auth::logout();
        return redirect('/');
    }
}
