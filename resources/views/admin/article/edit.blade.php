@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
    @slot('title') Edit news @endslot
    @slot('parent') Home @endslot
    @slot('active') News @endslot
    @endcomponent

    <hr />

    <form class="form-horizontal" action="{{route('admin.article.update', $article)}}" method="post">
        <input type="hidden" name="_method" value="put">
        {{ csrf_field() }}

        {{-- Form include --}}
        @include('admin.article.partials.form')

        <input type="hidden" name="modified_by" value="{{Auth::id()}}">
    </form>
</div>

@endsection
