@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
    @slot('title') Create a User @endslot
    @slot('parent') Main @endslot
    @slot('active') User @endslot
    @endcomponent

    <hr />

    <form class="form-horizontal" action="{{route('admin.user_management.user.store')}}" method="post">
        {{ csrf_field() }}

        {{-- Form include --}}
        @include('admin.user_management.users.partials.form')


        {{-- <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="row">



            <div class="col-md-6">

                <input type="file" name="image" class="form-control">

            </div>



            <div class="col-md-6">

                <button type="submit" class="btn btn-success">Upload</button>

            </div>



        </div>

    </form> --}}
    </form>
</div>

@endsection
