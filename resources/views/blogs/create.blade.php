@extends('layouts.app')

@section('content')
<form action="{{ route('store_blog_path')}}" method="POST" enctype="multipart/form-data">

@csrf
<div class="form-group">
  <label for="title">Title</label>
  <input class="form-control" type="text" name="title" >
</div>

<div class="form-group">
  <label for="content">Content</label>
  <textarea class="form-control" name="content" rows="10" class="10"></textarea>
</div>

<div class="form-group">
  <input class="form-control"  type="file" name="files" value="" >
</div>

<div class="form-group">
<button type="submit" class="btn btn-outline-primary">Add Post</button>
</div>

</form>


@endsection
