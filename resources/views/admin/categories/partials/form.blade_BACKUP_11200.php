<label for="" class="mt-1">Status</label>

<select class="form-control" name="published">
    @if(isset($category->id))
    <option value="0" @if($category->published == 0) selected=""
        @endif>Not published
    </option>

    <option value="1" @if($category->published == 1) selected=""
        @endif> Published
    </option>
    @else
    <option value="0">
        Not published
    </option>

    <option value="1">
        Published
    </option>
    @endif
</select>

<label for="" class="mt-3">Name</label>
<input type="text" class="form-control " name="title" placeholder="Category header" value="{{$category->title ?? ""}}"
    required>

<<<<<<< HEAD
<label for="">Parent category</label>   
<select class="form-control" name = "parent_id">
=======
<label for="" class="mt-3">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Auto generation" value="{{$category->slug ?? ""}}"
    readonly="">

<label for="" class="mt-3">Parent category</label>
<select class="form-control" name="parent_id">
>>>>>>> 6fb2505440db95b9a36e7a28791da9d2c9e20ae8
    <option value="0">-- Without parent category --</option>
    @include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<hr />

<input class="btn btn-success" type="submit" value="Save">
