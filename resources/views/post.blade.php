
@extends('layouts.main')

@section('container')
<article class="mb-5">
    <h2>
        {{ $post->title }}
    </h2>
    <p>By. Cahyadi Bayu Saputro in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
</article>

<a href="/posts"> Back to Post</a>
@endsection