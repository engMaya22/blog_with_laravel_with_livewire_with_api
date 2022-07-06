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
}
