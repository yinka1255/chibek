<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Session;
use Redirect;
use App\User;
use App\Admin;
use App\Vendor;
use App\Customer;
use App\Donation;
use App\Location;
use App\Card;
use App\Feed;
use App\State;
use App\GeneratedCard;
use App\UsedCard;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Mail;

class UsersController extends Controller{

    public function index(){
        $feeds = Feed::orderBy("id", "DESC")->get();
        foreach($feeds as $key => $feed){
            $feeds[$key]['amount'] = Donation::where("feed_id", $feed->id)->sum('amount');
        }
        return view('home')->with(["feeds"=>$feeds]);
    }

    public function faq(){
        return view('faq');
    }

    public function register(){
        $states = State::all();

        //$states = Location::select('state', 'id')->orderBy("state", "asc")->distinct("state")->get();

        return view('register')->with(["states"=>$states]);
    }

    public function customerRegister(){
        $states = State::all();
        //$states = Location::select('state', 'id')->orderBy("state", "asc")->distinct("state")->get();

        return view('customer_register')->with(["states"=>$states]);
    }

    public function customerSave(Request $request){

        $user = new User;

        $amount = $request->input("amount");

        $feed_id = $request->input("feed_id");

        $check = User::where("username", $request->input("email"))->first();

        if(empty($check)){
            $user->username = $request->input("email");

            $user->password = bcrypt($request->input("password"));

            $user->status = 1;

            $user->type = 3;

            if($user->save()){

                $customer = new Customer;

                $customer->user_id = $user->id;

                $customer->email = $request->input("email");

                $customer->name = $request->input("name");

                $customer->phone = $request->input("phone");

                $customer->save();

                $this->registerDonation($customer->id, $amount, $feed_id);
                //Session::flash('success', 'Thank you for the act of kindness. The patients cant thank you enough');
                //return back();
            }     
        }else{
            $customer = Customer::where("user_id", $check->id)->first();
            $this->registerDonation($customer->id, $amount, $feed_id);
        }
    }

    public function registerDonation($customer_id, $amount, $feed_id){

        $donation = new Donation;

        $donation->customer_id = $customer_id;
        $donation->amount = $amount;
        $donation->feed_id = $feed_id;

        $donation->save();
        Session::flash('success', 'Thank you for the act of kindness. The patients cant thank you enough');
        return back();
    
    }

    public function visitorSendMail(Request $request){

        
        $email = $request->input('email');

        $name = $request->input('name');

        $body = $request->input('message');

        $sender = 'info@cashluck.com.ng';
        
        
 
        $data = [
        'email'=> $email,
        'body'=> $body,
        'name'=> $name,
        'date'=>date('Y-m-d')
        
        
        ];
 
        Mail::send('visitor-mail', $data, function($message) use($data){
            
            $message->from("adeniranadeyinka101@gmail.com", 'Visitor - '.$data['name']);
            $message->SMTPDebug = 4; 
            $message->to('adeniranadeyinka101@gmail.com');
            $message->subject('Visitors mail');
        
        });
        
        Session::flash('success', 'Thank you. We will get back to you shortly');
        return back();
    }    

    
    public function logout(){

    	Auth::logout();
        
        return redirect('/');
    }
    
    
    
}
