@extends('master')
@section('title','Главная')
@section('content')
<div class="starter-template">
    <h1>Все товары</h1>

    <div class="row">
        @foreach ($products as $product)

        @include('card',compact('product'))

        @endforeach
    </div>


    {{-- <form method="GET" action="">
        <div class="filters row">
            <div class="col-sm-6 col-md-3">
                <label for="price_from">Цена от <input type="text" name="price_from" id="price_from" size="6" value="">
                </label>
                <label for="price_to">до <input type="text" name="price_to" id="price_to" size="6" value="">
                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="hit">
                    <input type="checkbox" name="hit" id="hit"> Хит </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="new">
                    <input type="checkbox" name="new" id="new"> Новинка </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="recommend">
                    <input type="checkbox" name="recommend" id="recommend"> Рекомендуем </label>
            </div>
            <div class="col-sm-6 col-md-3">
                <button type="submit" class="btn btn-primary">Фильтр</button>
                <a href="" class="btn btn-warning">Сброс</a>
            </div>
        </div>
    </form> --}}
    {{-- <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div class="labels">


                </div>
                <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg" alt="iPhone X 64GB">
                <div class="caption">
                    <h3>iPhone X 64GB</h3>
                    <p>71990 ₽</p>
                    <p>
                        <form action="/basket/add/1" method="POST">
                            <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                            <a href="{{ url('/mobiles/iphone_x_64') }}" class="btn btn-default"
    role="button">Подробнее</a>


    <input type="hidden" name="_token" value="1sJI5bXJPYVulgUGV24f8pQDVbRNsDAzZPHLwBLI">
    </form>
    </p>
</div>
</div>
</div>
</div> --}}
{{-- <nav>
        <ul class="pagination">
            <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li>
            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
            <li class="page-item"><a class="page-link" href="?&amp;page=2">2</a></li>
            <li class="page-item">
                <a class="page-link" href="?&amp;page=2" rel="next" aria-label="pagination.next">&rsaquo;</a>
            </li>
        </ul>
    </nav> --}}

</div>

@endsection
