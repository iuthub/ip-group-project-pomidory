@extends('admin.layouts.app_admin')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Category 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Materials 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Visitors 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Today 0</span></p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <a class="btn btn-block btn-default" href="#">Create ategory</a>
        <a class="list-group-item" href="#">
          <h4 class="list-group-item-heading">First category</h4>
          <p class="list-group-item-text">
            The amount of materials
          </p>
        </a>
      </div>
      <div class="col-sm-6">
        <a class="btn btn-block btn-default" href="#">Craete material</a>
        <a class="list-group-item" href="#">
          <h4 class="list-group-item-heading">First material</h4>
          <p class="list-group-item-text">
            Category
          </p>
        </a>
      </div>
    </div>
  </div>
@endsection