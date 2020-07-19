<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = post::paginate(3);
        $data = [
            'posts' => $posts
        ];
        return view('index', $data);

    }
    public function create()
    {
        $categories = Category::all();
        $data = [
            'categories' => $categories
        ];
        return view('create', $data);
    }
    public function login()
    {
        return view('login');
    }
    public function store(Request $request){

        $detail = $request->input('detail');
        $category_id = $request->input('category_id');
        $post = new Post();
        $post->user_id = 1;
        $post->status = 0;
        $post->detail = $detail;
        $post->category_id = $category_id;
        $post->save();

        return redirect('/');
    }

    public function delete($id){
        if($id == ""){

            return redirect('/');
        }

        $post = Post::find($id);
        $post->delete();

        return redirect('/');
    }


}
