<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = [
            ['id' =>1, 'title' => 'Learn PHP', 'posted_by' =>'AHmed', 'created_at' => '2022-02-11 10:00:00'],
            ['id' =>2, 'title' => 'Learn Java', 'posted_by' =>'Ali', 'created_at' => '2022-08-51 07:00:00']
        ];
       //dd($posts);

      return view('posts.index', [
          'posts' => $posts
      ]);
    }

    public function create() {
        return view('posts.create');
    }
    public function store() {
        $requestData = request()->all();
        // dd($requestData);
        return redirect()->route('posts.index');
        //return to_route('posts.index');
    }

    public function show($postId) {
        $posts = [
            ['id' =>1, 'title' => 'Learn PHP', 'posted_by' =>'AHmed', 'created_at' => '2022-02-11 10:00:00'],
            ['id' =>2, 'title' => 'Learn Java', 'posted_by' =>'Ali', 'created_at' => '2022-08-51 07:00:00']
        ];
        return view('posts.show',[
            'posts' =>$posts,
            'postId' => $postId
        ]);
        
    }


    public function edit($postId) {
        $posts = [
            ['id' =>1, 'title' => 'Learn PHP', 'posted_by' =>'AHmed', 'created_at' => '2022-02-11 10:00:00'],
            ['id' =>2, 'title' => 'Learn Java', 'posted_by' =>'Ali', 'created_at' => '2022-08-51 07:00:00']
        ];
        return view('posts.edit', [
            'posts' =>$posts,
            'postId' => $postId
        ]);

    }


}
