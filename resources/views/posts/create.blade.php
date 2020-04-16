@extends('layouts.default')

@section('title', 'New Post')

@section('content')
<h1>
  <a href="{{ action('PostsController@index') }}" class="header-menu">Back</a>
  New Post
</h1>
<form action="{{ url('/posts') }}" method="post">
  {{ csrf_field() }}
  <p>
    <input type="text" name="title" placeholder="enter title">
  </p>
  <p>
    <textarea name="body" placeholder="enter body"></textarea>
  </p>
  <p>
    <input type="submit" value="Add">
  </p>
</form>
@endsection
