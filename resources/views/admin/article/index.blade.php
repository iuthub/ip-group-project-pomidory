@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
    @slot('title') Article list @endslot
    @slot('parent') Home @endslot
    @slot('active') News @endslot
    @endcomponent


    <hr class="my-3">
    <div>


        <a class="btn btn-primary" href="{{route('admin.article.create')}}" role="button"> <i
                class="fa fa-plus-square-o mr-2"></i>Create a News</a>

    </div>



    <table class="mt-3 table table-striped ">
        <thead>
            <th>Names</th>
            <th>Publication</th>
            <th class="text-right">Action</th>
        </thead>
        <tbody>
            @forelse ($articles as $article)
            <tr>
                <td>{{$article->title}}</td>
                <td>{{$article->published}}</td>
                <td class="text-right">
                <form onsubmit="if(confrim('Do you want to delete?')){return true}else{return false}"
                 action="{{route('admin.category.destroy'), $article}}" method="POST">
                 <input type="hidden" name="_method" value="DELETE">
                 {{csrf_field()}}

                 <a class="btn btn-default" href="{{route('admin.category.edit', [$article])}}"><i class="fa fa-edit"></i></a>

                 <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
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
    </table>
</div>

@endsection
