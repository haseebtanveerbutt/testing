<?php

namespace App\Http\Controllers;
use App\rating;
use Illuminate\Http\Request;
use App\rate;
use App\User;

class ratingController extends Controller
{
    public function rate(){

        return view('firstFolder.rate');
    }
    
    public function saveRate(Request $request){
       
    //    $average = 'App\rate'::find(1)->User; 
    //    $average = 'App\User'::find('2')->rate;

        // foreach ($average as $key ) {
        //     echo "Rating_number:".$key['rating_number'];
        //     echo "user_id:".$key['user_id'];
        // }
        // dd();
        
        // $data=rate::where('user_id')->get();
        // $data = rate::select('user_id', 'rating_number')->get();
        
        // echo '<pre>';
        // print_r($data);
        // dd();
        // $totalRating = 0;
        
        // foreach($data as $index => $rObj){
        //     $totalRating += $rObj->rating_number;
        //     // $totalRating = $totalRating + $rObj->rating_number;
        // }
        // $totalRaters = $index + 1;
        // echo $totalRating;
        // echo '<br />';
        // echo $totalRaters;
        // echo '<br />';
        // echo ceil($totalRating / $totalRaters);
        
        // $countData = rate->rating_number->getCount();
        // $data = (array)$this->data;
        // froeach($data as $key){
        //    $sum=0;
        //    $a=0;
            // while ($data) {
                // $sum=$data['1']+$data['2']+$data['3'];
                // $a++;    
            // }
            // echo $sum;
            // dd();
            
            
            
        // }
        // $average = $data['rating_number']   
        // echo $data['students'];
    //    dd();
    //    foreach ($data as $key) {
    //         echo $key;
    //    }
        
        $data = new rate();
    //    echo $result=$data->rating_number;
    //    dd();
        $data->rating_number = $request->star;
        $data->save();

        $data = rate::select('rating_number')->get();
        $totalRating = 0;
        foreach($data as $index => $rObj){
            $totalRating += $rObj->rating_number;
            // $totalRating = $totalRating + $rObj->rating_number;
        }
        $totalRaters = $index + 1;
        // echo $totalRating;
        // echo '<br />';
        // echo $totalRaters;
        // echo '<br />';
        $averageRating = ceil($totalRating / $totalRaters);
    //    $Request->input('fname');
        //  return view('firstFolder.rate', ['totalRating' => $totalRating, 'totalRaters'=>$totalRaters] );
        return view('firstFolder.displayRate', ['averageRating'=> $averageRating] );

        }

    public function displayRate(Request $request){
        print_r($request->all());
        dd();
    }
}
