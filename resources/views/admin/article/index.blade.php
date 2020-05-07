@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
    @slot('title') News list @endslot
    @slot('parent') Home @endslot
    @slot('active') News @endslot
    @endcomponent





    <a class="btn btn-success" href="{{route('admin.article.create')}}" role="button"><i
            class="fa fa-plus-square-o mr-1"></i> Create News</a>

    <table class="mt-3 table table-striped ">
        <thead>
            <th>Name</th>
            <th>Publication</th>
            <th class="text-right">Action</th>
        </thead>
        <tbody>
            @forelse ($articles as $article)
            <tr>
                <td>{{$article->title}}</td>
                <td>{{$article->published}}</td>
                <td class="text-right">
                    <form onsubmit="if(confirm('Delete?')){ return true }else{ return false }"
                        action="{{route('admin.article.destroy', $article)}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}

                        <a class="btn btn-default" href="{{route('admin.article.edit', $article)}}"><i
                                class="fa fa-edit"></i></a>

                        <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center">
                    <h2>No data </h2>
                </td>
            </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{$articles->links()}}
                    </ul>
                </td>
            </tr>
        </tfoot>





    </table>
</div>

@endsection
