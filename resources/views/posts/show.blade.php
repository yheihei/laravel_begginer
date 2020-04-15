@extends('layouts.default')

@section('title', $post->title)

@section('content')
<h1>
  <a href="{{ action('PostsController@index') }}" class="header-menu">Back</a>
  {{ $post->title }}
</h1>
<p>{!! nl2br(e($post->body)) !!}</p> <!--  !!をつけると 中身をエスケープしない  -->
@endsection
