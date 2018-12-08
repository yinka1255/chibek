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
use App\Feed;
use App\Card;
use App\UsedCard;
use App\State;
use App\Location;
use App\GeneratedFeedSummary;
use App\GeneratedFeed;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Mail;

class FeedsController extends Controller{

    public function feeds(){
    
        $user = Auth::user();

        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();

        $feeds = Feed::orderBy("id", "DESC")->get();

        

        return view('admin/feeds')->with(["feeds"=>$feeds, "loggedInUser"=>$loggedInUser]);
    }  


    public function feedDetails($id){
    
        $user = Auth::user();

        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();

        $feed = Feed::where("id", $id)->first();

        return view('admin/feed_details')->with(["feed"=>$feed, "loggedInUser"=>$loggedInUser]);
    }  

    public function customerFeedDetails($title, $id){
    
        $feed = Feed::where("id", $id)->first();

        return view('details')->with(["feed"=>$feed, "feed_id"=>$id]);
    }  

    public function saveFeed(Request $request){
    
        if(!$request->hasFile('photo')){
            Session::flash('error', 'Sorry! You must upload a photo for this feed');
            return back();
        }
        
        $feed = new Feed;

        $feed->title = $request->input("title");

        $feed->body = $request->input("body");

        $image = $request->file('photo');

        $imageName  = time() . '.' . $image->getClientOriginalExtension();
        
        $path = public_path()."/images/feeds/";
        
        $image->move($path, $imageName);

        $feed->image = $imageName;

        if($feed->save()){
            Session::flash('success', 'Thank you, feed has been created successfully');
            return back();
        }else{
            Session::flash('error', 'Sorry! An error occured while trying to create feed');
            return back();
        }    
    }  

    public function editFeed(Request $request){
    
        $feed = Feed::where("id", $request->input("id"))->first();

        $feed->title = $request->input("title");

        $feed->body = $request->input("body");

        //$feed->state_id = $request->input("state");

        if($request->hasFile('photo')){
            $image = $request->file('photo');

            $imageName  = time() . '.' . $image->getClientOriginalExtension();
            
            $path = "images/feeds/";
            
            $image->move($path, $imageName);

            $admin->image = $imageName;
        }    

        
        if($feed->save()){
            Session::flash('success', 'Thank you, feed has been updated successfully');
            return back();
        }else{
            Session::flash('error', 'Sorry! An error occured while trying to update feed');
            return back();
        }    
    }  

    function mobileGetFeed($state){
        $feeds = Feed::join("states", "states.id", "=", "feeds.state_id")
                        ->select("feeds.*", "states.id as state_id", "states.name as state_name")
                        ->orderBy("id", "DESC")->get();

        return response()->json(['success' => true, 'feeds'=> $feeds],200);
    }
            

    public function saveDonation(Request $request){

            $user = new User;

            $user->username = $request->input("email");

            $user->password = bcrypt(time());

            $user->status = 1;

            $user->type = 3;

            if($user->save()){

                $customer = new Customer;

                $customer->user_id = $user->id;

                $customer->name = $request->input("name");

                $customer->email = $request->input("email");

                $customer->status = 1;
            
        
                if(!$customer->save()){
                    Session::flash('error', 'Sorry! An error occured while trying to log your kindness');
                    return back();
                }
            
                else{

                $donation = new Donation;

                $donation->feed_id = $request->input("feed_id");

                $donation->amount = $request->input("amount");

                $donation->customer_id = $customer->id;

                if($donation->save()){
                    Session::flash('success', 'Thank you, your act of kindness has been logged.');
                    return back();
                }else{
                    Session::flash('error', 'Sorry! An error occured while trying to log your kindness');
                    return back();
                }    
            }
        }
    }  
}
