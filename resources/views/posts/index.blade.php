@extends('layouts.app')
@section('content')
@section('title') Index @endsection
            <div class="text-center mt-5">
                <a  href="{{route('posts.create')}}" class="btn btn-primary">Create Post</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted By</th>
                    <th scope="col">Created At</th>
                    <th scope="col" colspan="3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post['id'] }}</th>
                            <td>{{ $post['title']}}</td>
                            <td>{{ $post['posted_by']}}</td>
                            <td>{{$post['created_at'] }}</td>
                            <td><a href="{{route('posts.show',$post['id'])}}" class="btn btn-info">View</a></td>
                            <td><a href="{{route('posts.edit',$post['id']) }}" class="btn btn-primary">Edit</a></td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                 
                </tbody>
            </table>

@endsection
 