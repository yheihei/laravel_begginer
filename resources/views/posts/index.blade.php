<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Posts</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="container">
    <h1>Blog Posts</h1>
    <ul>
      {{--
      @foreach ($posts as $post)
      <li><a href="">{{ $post->title }}</a></li>
      @endforeach
      --}}
      @forelse ($posts as $post)
      {{-- <li><a href="{{ url('/posts', $post->id) }}">{{ $post->title }}</a></li> --}}
      <li><a href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a></li>
      @empty
      <li>No posts yet</li>
      @endforelse
    </ul>
  </div>
</body>
</html>