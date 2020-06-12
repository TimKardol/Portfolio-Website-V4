@extends('layouts.layout')

@section('content')
    @foreach($articles as $article)
        <div id="content" style="border-bottom: solid 1px #6d00ce">
            <div class="title">
                <h2><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h2>
            </div>
            {!! $article->excerpt !!}

            <div class="date">
                <h6>Posted on {{ $article->created_at }}</h6>
            </div>
        </div>
    @endforeach
@endsection
