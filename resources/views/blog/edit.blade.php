@extends('layout.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header text-center">
                        <h4>Create a new post
                            <a href="{{ url('posts') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                        @endif
                        <form action="{{ url('posts/'.$post->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="title">Title</label>
                                <input id="title" type="text" class="form-control" value="{!! $post->title !!}" name="title">
                            </div>

                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="3">{!! $post->description !!}</textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="status">Status</label>
                                <input id="status" type="checkbox" value="{!! $post->status ==1 ?'checked':'' !!} " name="status"> 1=Show, 0=Hide
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
