@extends('base')

@section('title', 'Acceuil du blog')


@section('content')
    <h1 class="text-5xl text-red-600">Mon blog</h1>
    @foreach ($posts as $post)
        <article class="flex flex-col">
            <h2>{{ $post->title }}</h2>

            <p>{{ $post->content }}</p>

            <p>
                <a href="{{ route('blog.show', ['slug' => $post->slug, 'post' => $post->id]) }}">Link</a>
            </p>
        </article>
    @endforeach

    {{ $posts->links() }}
@endsection
