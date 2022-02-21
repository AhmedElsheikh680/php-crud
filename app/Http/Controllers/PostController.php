<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index() {
    //     $posts = [
    //         ['id' =>1, 'title' => 'Learn PHP', 'posted_by' =>'AHmed', 'created_at' => '2022-02-11 10:00:00'],
    //         ['id' =>2, 'title' => 'Learn Java', 'posted_by' =>'Ali', 'created_at' => '2022-08-51 07:00:00']
    //     ];
    //    dd($posts);
    $posts = Post::all();
    $posts = post::paginate(5);
      return view('posts.index', compact('posts'));
    }

    public function create() {
        $users = User::all();

        return view('posts.create', [
            'users' =>$users
        ]);
    }
    public function store() {
        $requestData = request()->all();
        Post::create($requestData);
        // Post::create([
        //     'title' =>$requestData['title'],
        //     'description' => $requestData['description'],
        //     'user_id' => $requestData['post_creator']
        // ]);
        // dd($requestData);
        return redirect()->route('posts.index');
        //return to_route('posts.index');
    }

    public function show($postId) {
        // $posts = [
        //     ['id' =>1, 'title' => 'Learn PHP', 'posted_by' =>'AHmed', 'created_at' => '2022-02-11 10:00:00'],
        //     ['id' =>2, 'title' => 'Learn Java', 'posted_by' =>'Ali', 'created_at' => '2022-08-51 07:00:00']
        // ];
        $post = Post::find($postId);
        // $postOtherSyntax = Post::where('id', $postId)->first();
        return view('posts.show',[
            'post' =>$post,

        ]);

    }


    public function edit($postId) {
        // $posts = [
        //     ['id' =>1, 'title' => 'Learn PHP', 'posted_by' =>'AHmed', 'created_at' => '2022-02-11 10:00:00'],
        //     ['id' =>2, 'title' => 'Learn Java', 'posted_by' =>'Ali', 'created_at' => '2022-08-51 07:00:00']
        // ];
        $edit = Post::find($postId);
        // $users = Post::all();
        return view('posts.edit', [
                'post'=>$edit,
                // 'users' =>$users
        ]);

    }

    public function update(Request $request, $id){
        Post::find($id)->update($request->all());
        return redirect()->route('posts.index');
    }

    public function destroy(Request $request, $id) {
        Post::find($id)->delete($request->all());

        return redirect()->route('posts.index');
    }


}
