@extends('layouts.app')

@section('content')
<form action="{{ route('update_blog_path', ['blog' => $blog->id ])}}" method="POST" enctype="multipart/form-data">

@csrf

@method('PUT')

<div class="form-group">
  <label for="title">Title</label>
  <input class="form-control" type="text" name="title" value="{{$blog->title}}">
</div>

<div class="form-group">
  <label for="content">Content</label>
  <textarea class="form-control" name="content" rows="10" class="10">
    {{$blog->content}}
  </textarea>
</div>

<div class="form-group">
  <input class="form-control"  type="file" name="files" value="{{$blog->image}}" >
</div>

<div class="form-group">
<button type="submit" class="btn btn-outline-primary">Edit Post</button>
</div>

</form>


@endsection
