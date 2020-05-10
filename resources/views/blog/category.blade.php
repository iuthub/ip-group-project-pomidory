  @extends('layouts.app')

  @section('title', $category->title . " ")

  @section('content')

  <div class="container">


      @forelse ($articles as $article)
      <div class="card">
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

      {{$articles->links()}}
  </div>

  @endsection
