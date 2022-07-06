<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\postResource;

use App\Models\Post;

class postController extends Controller
{
    // i write trait  apiResponseTrait
 use apiResponseTrait;
  public function index(){
    //  $posts =Post::all();
    $posts =  postResource::collection($posts =Post::all());
   return $this->apiResponse($posts,'ok',200 );
    }

     public function show($id){
         $post =Post::find($id);
        $post = Post::find($id);
        //if i had a data , when i return response transmate $post into array with resource to control in fields of post
        if($post)
        {
           return $this->apiResponse( new postResource($post) ,'ok' ,200);
        }
       
           return $this->apiResponse(null,' this post not Found' ,401);
    }

}
