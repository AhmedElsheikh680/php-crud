@extends('layouts.app')
@section('content')
@section('title') Edit @endsection

<form method="post" action="{{route('posts.update', $post['id'])}}">

            @csrf
            @method('patch')
            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input name='title'  type="text" value="{{ $post['title'] }}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>

                    <textarea name="description"  class="form-control"> {{ $post->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Post Creator</label>
                    <select name="user_id"  class="form-control">

                        <option value="1">{{ $post->user ? $post->user->name : 'Not Found'}}</option>
                        <option value="2">{{ $post->user ? $post->user->name : 'Not Found'}}</option>
                        <option value="3">{{ $post->user ? $post->user->name : 'Not Found'}}</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Update</button>

            </form>

@endsection
