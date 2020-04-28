@extends('master')
@section('title','Продукт')

@section('content')
<div class="starter-template">
    <h2>{{ $product }}</h2>
    <h2>Мобильные телефоны</h2>
    <p>Цена: <b>71990 ₽</b></p>
    <img src="/storage/products/iphone_x.jpg">
    <p>Отличный продвинутый телефон с памятью на 64 gb</p>
</div>
@endsection
