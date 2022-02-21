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

                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->user ? $post->user->name : 'Not Found'}}</td>
                        <td>{{ $post->created_at}}</td>
                        <!-- <td>{{ $post['id']}}</td>
                        <td>{{ $post['title']}}</td>
                        <td>{{ $post['posted_by']}}</td>
                        <td>{{ $post['created_at']}}</td> -->
                    </tr>

                <tr><td>



                </tbody>
            </table>


@endsection
