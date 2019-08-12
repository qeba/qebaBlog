@extends('layouts.app')

@section('content')

<div class="row">

  @foreach($blogs as $blog)
  <div class="col-md-6">
    <br>
    <br>
    <div class="card">
      <div class="card-header">
        <a href="{{ route('blog_path' , ['blog' => $blog->id])}}">
          {{ $blog->title }}</a>
      </div>

      <div class="card-body">
        <img src="{{asset($blog->image)}}"  alt="" class="card-img-top" > </img>
      <!---    {{ $blog->content }} -->
          <br>
          <br>
          <br>
          <span class="badge badge-primary">
            Posted at:
            {{ $blog->created_at->diffForHumans() }}
          </span>
          <br> </br>
          <a href="{{route('blog_path', ['blog' => $blog->id])}}" class="btn btn-outline-primary">View Post</a>

      </div>

    </div>

  </div>

       @endforeach

</div>


@endsection
