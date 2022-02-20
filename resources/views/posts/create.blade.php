@extends('layouts.app')
@section('content')
@section('title') Create @endsection
            <form method="POST" action="{{route('posts.store') }}">
            @csrf    
            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>

                    <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Post Creator</label>
                    <select name="post_creator" class="form-control">
                        <option value="1">Ahmed</option>
                        <option value="2">Mohamed</option>
                        <option value="3">Ali</option>
                    </select>
                </div>
              
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
 @endsection