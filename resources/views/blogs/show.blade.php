@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-12">
    <br></br>
        <img src="{{asset($blog->image)}}"  alt="" class="card-img-top" > </img>
    <br>
    <br>
    <h3>{{$blog->title}}</h3>
    <hr>

    <p class="lead">
        {{$blog->content}}
    </p>
    <hr>
    <span class="badge badge-primary">

      Posted at:
      {{ $blog->created_at->diffForHumans() }}
    </span>
    <br>
    <a href="{{ route('edit_blog_path', ['blog' => $blog->id]) }}" class="btn btn-info">Edit</a>
    <a href="{{ route('blogs_path') }}" class="btn btn-warning">Back</a>

    <form action="{{ route('delete_blog_path', ['blog' => $blog->id]) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-outline-danger">Delete</button>

    </form>


  </div>






@endsection
