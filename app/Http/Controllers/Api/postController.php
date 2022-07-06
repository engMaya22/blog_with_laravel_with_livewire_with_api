<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;

class postController extends Controller
{
    // i write trait  apiResponseTrait
 use apiResponseTrait;
  public function index(){
     $posts =Post::all();
   return $this->apiResponse($posts,'ok',200 );
    }

     public function show($id){
        $post =Post::find($id);
        //if i had a data
        if($post)
        return $this->apiResponse($post ,'ok' ,200);
        else
        return $this->apiResponse(null ,' this post not Found' ,401);
    }

}
