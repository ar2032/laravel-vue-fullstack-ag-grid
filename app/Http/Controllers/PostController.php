<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
    public function home() {
        $posts = Post::paginate(4);

        return view('home', compact('posts'));
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

//whereRaw(array('$text'=>array('$search'=> $search_text)))->get();;
// ['searchs'=>$searchs]