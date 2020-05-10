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


    <div class="row">

        @foreach($article->comments as $comment)
        <div class="comment">
            <div class="author-info">
                <div class="comment-content">
                    {{ $comment->comment }}
                </div>

            </div>
            @endforeach
        </div>

        <div class="row">
            <div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
                {!! Form::open(['route' => ['comments.store', $article->id], 'method' => 'POST']) !!}

                <div class="row">

                    <div class="col-md-12">
                        {!! Form::label('comment', "Comment:") !!}
                        {!! Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) !!}

                        {!! Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' =>
                        'margin-top:15px;']) !!}
                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @endsection
