@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
    @slot('title') Category list @endslot
    @slot('parent') Home @endslot
    @slot('active') Category @endslot
    @endcomponent


    <hr class="my-3">
    <div>


        <a class="btn btn-primary" href="{{route('admin.category.create')}}" role="button"> <i
                class="fa fa-plus-square-o mr-2"></i>Create a category</a>

    </div>



    <table class="mt-3 table table-striped ">
        <thead>
            <th>Names</th>
            <th>Publication</th>
            <th class="text-right">Action</th>
        </thead>
        <tbody>
            @forelse ($categories as $category)
            <tr>
                <td>{{$category->title}}</td>
                <td>{{$category->published}}</td>
                <td>
                    <a href="{{route('admin.category.edit', ['id'=>$category->id])}}"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center">
                    <h2>No data</h2>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
