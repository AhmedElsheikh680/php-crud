
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
                            <!-- <td>{{ $post['title']}}</td> -->
                            <td>{{ $post->title}}</td>
                            <td>{{ $post->user ? $post->user->name : 'Not Found'}}</td>
                            <td>{{$post['created_at'] }}</td>
                            <td><a href="{{route('posts.show',$post['id'])}}" class="btn btn-info">View</a></td>
                            <td><a href="{{route('posts.edit',$post['id']) }}" class="btn btn-primary">Edit</a></td>
                            <td>
                                    <form action="{{route('posts.delete', $post['id'])}}" method="post">
                                        @csrf
                                        @method('delete')
                                            <button type="submit" onclick="return confirm('Are You Sure You Want To Delete?');"  id="btnDelete"
                                            class="btn btn-danger btn-sm" >
                                                Delete
                                            </button>
                                    </form>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            <nav aria-label="...">
  <ul class="pagination justify-content-center">

    {{$posts->onEachSide(1)->links()}}


  </ul>

</nav>

@endsection
