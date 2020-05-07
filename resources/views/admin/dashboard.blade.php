@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
    <div class="alert alert-success col-12" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        <p>Welcome to Status Bar</p>
        <hr>

    </div>
    <div class="row">

        <div id="accordion" class="col-12">

            <div class="card mt-2">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="false" aria-controls="collapseOne">
                            Category <span class="badge badge-lg badge-success">{{$count_categories ?? ''}}</span>
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        @foreach ($categories as $category)
                        <a class="list-group-item" href="{{ route('admin.category.edit', $category) }}">
                            <h4 class="list-group-item-heading">{{ $category->title }}</h4>
                            <p class="list-group-item-text">
                                {{$category->articles()->count()}}
                            </p>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            Materials <span class="badge badge-lg badge-success">{{$count_article ?? ''}}</span>
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        @foreach ($articles as $article)
                        <a class="list-group-item" href="{{ route('admin.article.edit', $article) }}">
                            <h4 class="list-group-item-heading">{{ $article->title }}</h4>
                            <p class="list-group-item-text">
                                {{$article->categories()->pluck('title')->implode(', ')}}
                            </p>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            Visitors 0
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        soon
                    </div>
                </div>
            </div>


            <div class="card mt-2">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                            aria-expanded="false" aria-controls="collapseFour">
                            Today 0
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        soon
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <a class="btn btn-success my-3 btn-block" href="{{ route('admin.category.create')}} " role="button"><span
                    class="badge badge-dark mr-2">New</span>Create
                сategory</a>


            @foreach ($categories as $category)
            <a class="list-group-item" href="{{ route('admin.category.edit', $category) }}">
                <h4 class="list-group-item-heading">{{ $category->title }}</h4>
                <p class="list-group-item-text">
                    {{$category->articles()->count()}}
                </p>
            </a>
            @endforeach

        </div>
        <div class="col-sm-6">

            <a class="btn btn-success my-3 btn-block" href="{{ route('admin.article.create')}} " role="button"><span
                    class="badge badge-dark mr-2">New</span>Create
                material</a>

            @foreach ($articles as $article)
            <a class="list-group-item" href="{{ route('admin.article.edit', $article) }}">
                <h4 class="list-group-item-heading">{{ $article->title }}</h4>
                <p class="list-group-item-text">
                    {{$article->categories()->pluck('title')->implode(', ')}}
                </p>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
