<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Session;
use Redirect;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use Google_Client; 
use Google_Service_Drive;
use Google_Service_YouTube;

class UsersController extends Controller{

    public $result = [];

    public function getComments(Request $request){

        $id = $request->input('url');

        if(strpos($id, "youtube.com") == false){
            Session::flash('error', 'Sorry! Only youtube urls are allowed');
            return back();
        }

        $firstPart = strtok( $id, '=' );
        $allTheRest = strtok( '' ); 
        
        $url      = $allTheRest; 
        $ytkey    = "AIzaSyDxP4Wa13mTs6Zto1C2w1XAsZrAiOygnZ8"; 
        //$nextPage = ""; 
        $data = [];
        $comment_count = $this->getCommentCount($url, $ytkey);
        $total_pages = $comment_count/100;
        
        for($i = 0; $i < 2; $i++){
            $nextPage = "";
            $str = @file_get_contents("https://www.googleapis.com/youtube/v3/commentThreads?key=" . "$ytkey" . "&textFormat=plainText&part=snippet&videoId=" . "$url" . "&pageToken=" . $nextPage );
            $json = json_decode($str, true); 
            $nextPage = $json['nextPageToken'];
            //array_push($data,$nextPage);
            $this->pushToTempArray($json);
            var_dump($this->result);
            
        }   
        //var_dump($this->result);
        
        //$this->writeCsv($json);
        
        //$this->downloadCsv($json);
        //var_dump($data);
        /*
        foreach ($data['items'] as $key=>$val) { 
            var_dump($val['snippet']['topLevelComment']['snippet']['textDisplay']);
        }
        */
        
        /*
        if($str !== false){
            $json = json_decode($str, true); 
            $this->writeCsv($json);
        }else{
            Session::flash('error', 'Sorry! Kindly ensure the youyube url is valid');
            return back();
        }
        
        */
        
    }

    public function pushToTempArray($json){
        foreach ($json['items'] as $key=>$val) { 
            $temp[$key] = [
                                $val['snippet']['topLevelComment']['snippet']['authorDisplayName'], 
                                $val['snippet']['topLevelComment']['snippet']['publishedAt'], 
                                '',
                                $val['snippet']['topLevelComment']['snippet']['textDisplay'],
                                '',
                            ];   
        }

        array_push($this->result,$temp);
        //$this->result = $temp;
    }

    public function getCommentCount($url, $ytkey){
        $str = @file_get_contents("https://www.googleapis.com/youtube/v3/videos?id=" . "$url" . "&key=" . "$ytkey"."&part=statistics");
        $json = json_decode($str, true);
        return $json['items'][0]['statistics']['commentCount'];
    }

    public function writeCsv($json){
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="sample.csv"');
        
        $user_CSV[0] = array('userName', 'Date', 'starRating', 'comment', 'link');   
        foreach ($json['items'] as $key=>$val) { 
            $user_CSV[$key] = [
                                $val['snippet']['topLevelComment']['snippet']['authorDisplayName'], 
                                $val['snippet']['topLevelComment']['snippet']['publishedAt'], 
                                '',
                                $val['snippet']['topLevelComment']['snippet']['textDisplay'],
                                '',
                            ];   
        }

        
    }
    public function downloadCsv(){
        $fp = fopen('php://output', 'wb');
        foreach ($this->user_CSV as $line) {
            fputcsv($fp, $line, ',');
        }
        fclose($fp);
    }
}
