@extends('layouts.app')
@section('content')
    <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                    efficiently about what’s most interesting in this post’s contents.</p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
            </div>
        </div>

        <div class="row mb-2">

            @foreach ($posts as $post)
                <div class="col-md-6">

                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('thumbnails/'. $post->thumbnail) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $post->title }}</h5>
                          <div class="mb-1 text-body-secondary">{{ date('Y-m-d', strtotime($post->created_at)) }}</div>
                          <p class="card-text">{{ $post->description }}</p>
                          <a href="{{ route('posts/show', $post->id) }}" class="stretched-link">Continue reading</a>
                        </div>
                      </div>

                </div>
            @endforeach

        </div>

    </main>
@endsection
