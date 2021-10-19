<?php

namespace App\Http\Controllers;

use App\External;
use App\Tweet;
use Dotenv\Result\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class APIController extends Controller
{

    public function getNames(){
//tweets
$tweets= Tweet::where('user_id',1)->get();
if($tweets){

    return response()->json([
        'success' => true,
        'tweets'   =>$tweets
    ]);


}
return response()->json([
    'success' => false,
    'tweets'   =>$tweets
]);

        //tweet
        /*$tweet= Tweet::first();
if($tweet){

    return response()->json([
        'success' => true,
        'userId'   =>$tweet->user_id,
        'id'       =>$tweet->id,
        'content'  =>$tweet->content
    ]);


}

     return response()->json([
    'success' => false,
    'userId'   =>null,
	'id'       =>null,
	'content'  =>null
]);*/



    }
    public function getDataFromExtrnalAPI(){

        $response= Http::get('https://jsonplaceholder.typicode.com/todos/1');
        $externalTask=new External();
        $externalTask->title = $response['title'];
        $externalTask->user_id= $response['userId'];
        $externalTask->completed= $response['completed'];
        $externalTask->save();
        return"Data Created successfully";
    }
}
