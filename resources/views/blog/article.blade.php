@extends('layouts.app')

@section('title',$article->meta_title)
@section('meta_keyword',$article->meta_keyword)

@section('meta_description',$article->meta_description)


@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>{{  $article->title }}</h1>
            <p>{!! $article->description !!} </p>

        </div>
    </div>

    <div>
        @guest

        @else
        @foreach($article->comments as $comment)
        <div class="card my-2">

            <div class="card-header">
                <p class="p-0 m-0">Id: {{ $comment->id }}</p>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>{{ $comment->comment }}</p>
                    <footer class="blockquote-footer"><cite title="Source Title">From user:
                            {{ Auth::user()->name }}</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
        @endforeach
    </div>

    @endguest


    @guest


    <div class="alert alert-danger" role="alert">
        <a href="{{ route('register') }}">Please login to post comment</a>
    </div>


    @else
    <div class="row">
        <div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
            {!! Form::open(['route' => ['comments.store', $article->id], 'method' => 'POST']) !!}



            <div class="col-12 p-0">
                {!! Form::label('comment', "Post a comment:") !!}
                {!! Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) !!}

                {!! Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' =>
                'margin-top:15px;']) !!}
            </div>


            {!! Form::close() !!}
        </div>

        @endguest


    </div>
    @endsection
