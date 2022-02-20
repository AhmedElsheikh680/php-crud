@extends('layouts.app')
@section('content')
@section('title') Show @endsection

        <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted By</th>
                    <th scope="col">Created At</th>
                   
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    @if($post['id'] == $postId)
                    <tr>
                        <td>{{ $post['id']}}</td>
                        <td>{{ $post['title']}}</td>
                        <td>{{ $post['posted_by']}}</td>
                        <td>{{ $post['created_at']}}</td>
                    </tr>
                    @endif
                    @endforeach
                <tr><td>

                <!-- @foreach ($posts as $post) 
                @if($post['id'] == $post)
                <tr>
                            <th scope="row">{{ $post['id'] }}</th>
                            <td>{{ $post['title']}}</td>
                            <td>{{ $post['posted_by']}}</td>
                            <td>{{$post['created_at'] }}</td>
                            <td><a href="{{route('posts.show',$post['id'])}}" class="btn btn-info">View</a></td>
                            <td><a href="#" class="btn btn-primary">Edit</a></td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endif
                    @endforeach -->


                </tbody>
            </table>


@endsection