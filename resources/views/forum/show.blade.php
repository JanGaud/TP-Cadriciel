<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
<p>Written by {{ $post->user->name }}</p>
<p>Category: {{ $post->category->title }}</p>
