<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
    public function home() {
        $posts = Post::paginate(4);
        
        return response()->json($posts);
        
    }
    public function search(Request $request){
        
        if(isset($_GET['query']) && isset($_GET['parame'])){
            $search_text=$_GET['query'];
            $col_text=$_GET['parame'];
            $searchs=Post::where("$col_text",'LIKE','%'.$search_text.'%')->paginate(4);
            $searchs->appends($request->all());
            return view('search',compact('searchs'));
        }
        else{
            return view('search',['searchs' =>[] ]);
        }
    }
}
// return new PostResource(Post::paginate(4));
// view('home', compact('posts'))
// ['posts' => $posts->toArray()]
//whereRaw(array('$text'=>array('$search'=> $search_text)))->get();;
// ['searchs'=>$searchs]