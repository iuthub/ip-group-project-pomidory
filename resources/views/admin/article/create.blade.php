@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
    @slot('title') Create News @endslot
    @slot('parent') Main @endslot
    @slot('active') News @endslot
    @endcomponent

    <hr />

    <form class="form-horizontal" action="{{route('admin.article.store')}}" method="post">
        {{ csrf_field() }}

        {{-- Form include --}}
        @include('admin.article.partials.form')


        <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="row">



                <div class="col-md-6">

                    <input type="file" name="image" class="form-control">

                </div>



                <div class="col-md-6">

                    <button type="submit" class="btn btn-success">Upload</button>

                </div>



            </div>

        </form>
        <input type="hidden" name="created_by" value="{{Auth::id()}}">
    </form>
</div>

@endsection
