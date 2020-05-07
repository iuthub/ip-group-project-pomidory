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


        <a class="btn btn-success" href="{{route('admin.category.create')}}" role="button"> <i
                class="fa fa-plus-square-o mr-2"></i>Create a category</a>

    </div>



    <table class="mt-3 table ">
        <thead class="thead-dark">
            <tr>
                <th>ID №</th>
                <th>Names</th>
                <th>Publication</th>
                <th class="text-right">Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($categories as $category)
            <tr>
                <th scope="row ">{{$category->id}}</th>
                <td>{{$category->title}}</td>
                <td>{{$category->published}}</td>

                <td class="text-right border-bottom ">
                    <form onsubmit="if(confirm('Do you want to delete?')){ return true }else{ return false }"
                        action="{{route('admin.category.destroy', $category)}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">

                        {{ csrf_field() }}
                        <a class="btn btn-default" href="{{route('admin.category.edit', $category)}}"><svg
                                fill='#ffc107' class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z"
                                    clip-rule="evenodd" />
                            </svg></a>

                        <button type="submit" class="btn"><svg fill='red' class="bi bi-trash-fill" width="1em"
                                height="1em" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z"
                                    clip-rule="evenodd" />
                            </svg></button>


                    </form>
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

        <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{$categories->links()}}
                    </ul>
                </td>
            </tr>
        </tfoot>

    </table>



</div>

@endsection
