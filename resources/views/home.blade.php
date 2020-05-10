@extends('layouts.app')

@section('content')


<div class="container">
    <h2 class="text-center">Recent Posts</h2>
    <h6 class="mb-2">All categories</h6>
    @forelse ( $categories as $category)
    <h6 class="my-4">Category: {{$category->title}}</h6>
    @empty
    <tr>
        <td colspan="3" class="text-center">
            <h2>No data</h2>
        </td>
    </tr>
    @endforelse
    @forelse ($articles as $article)
    <div class="card mb-3">
        <div class="card-body">

            <h2 class="card-title mb-3">{{$article->title}}</h2>

            <p class="mb-3 card-text card-subtitle text-muted text-truncate">{!!$article->description_short!!}</p>
            <a href="{{route('article', $article->slug)}}" class="btn btn-primary">Read more</a>
        </div>
    </div>
    @empty


    <div class="alert alert-warning" role="alert">
        No posts
    </div>
    @endforelse


</div>
@endsection
