@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Posts
                        <a href="{{ url('posts/create') }}" class="btn btn-primary float-end">Add Post</a>
                    </div>
                    <div class="card-body">

                        <div class="uper">
                            @if(session()->get('status'))
                                <div class="alert alert-success">
                                    {{ session()->get('status') }}
                                </div><br />
                            @endif

                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Title</td>
                                        <td>Author</td>
                                        <td>Image</td>
                                        <td>Status</td>
                                        <td>Edit</td>
                                        <td >Delete</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $p)
                                        <tr>
                                            <td>{{$p->id}}</td>
                                            <td>{{$p->title}}</td>
                                            <td>{{$p->users->name}}</td>
                                            <td>
                                                <img src="{{ asset('uploads/blog/'.$p->image) }}" alt="image" width="50" height="50">
                                            </td>
                                            <td>{{$p->status}}</td>
                                            <td><a href="{{ route('posts.edit', $p->id)}}" class="btn btn-primary">Edit</a></td>
                                            <td>
                                                <form action="{{ route('posts.destroy', $p->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
