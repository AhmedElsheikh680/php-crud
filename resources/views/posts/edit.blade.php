@extends('layouts.app')
@section('content')
@section('title') Edit @endsection

<form>
    @foreach($posts as $post)
    @if($post['id'] ==$postId)
            @csrf    
            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input  type="text" value="{{ $post['title'] }}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>

                    <textarea  class="form-control"> </textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Post Creator</label>
                    <select  class="form-control">
                        <option value="1">Ahmed</option>
                        <option value="2">Mohamed</option>
                        <option value="3">Ali</option>
                    </select>
                </div>
              
                <button type="submit" class="btn btn-success">Update</button>
    @endif
    @endforeach
            </form>

@endsection