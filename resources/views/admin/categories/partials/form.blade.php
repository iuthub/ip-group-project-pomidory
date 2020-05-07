<label class="m-0 " for="">Status</label>
<select class="form-control" name="published">
    @if (isset($category->id))
    <option value="0" @if ($category->published == 0) selected="" @endif>Not published</option>
    <option value="1" @if ($category->published == 1) selected="" @endif>Published</option>
    @else
    <option value="0">Not published</option>
    <option value="1">Published</option>
    @endif
</select>

<div class="mt-3">
    <label for="" class="m-0 ">Name</label>
    <input type="text" class="form-control" name="title" placeholder="Category Title"
        value="{{$category->title  ?? ""}}" required>
</div>
<div class="mt-3">
    <label class="m-0" for="">Slug</label>
    <input class="form-control" type="text" name="slug" placeholder="Automatic generation"
        value="{{$category->slug  ?? ""}}" readonly="">
</div>

<div class="mt-3">
    <label class="m-0" for="">Parent category</label>
    <select class="form-control" name="parent_id">
        <option value="0">-- without parent category --</option>
        @include('admin.categories.partials.categories', ['categories' => $categories])
    </select>
</div>

<hr />

<input class="btn btn-success" type="submit" value="Save">
