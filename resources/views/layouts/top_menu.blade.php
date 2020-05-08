@foreach ($categories as $category)


@if ($category->children->where('published', 1)->count())

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="{{url("/blog/category/$category->slug")}}" id="navbarDropdownMenuLink"
        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{$category->title}} <span class="caret"></span>
    </a>
    <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
        @include('layouts.top_menu', ['categories' => $category->children])

    </ul>
    @else


    <a href="{{url("/blog/category/$category->slug")}}" class='nav-link'>{{$category->title}}</a>
    @endif
</li>
@endforeach
