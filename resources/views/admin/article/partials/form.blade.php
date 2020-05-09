<label class="m-0" for="">Status</label>
<select class="form-control" name="published">
    @if (isset($article->id))
    <option value="0" @if ($article->published == 0) selected="" @endif>Not published</option>
    <option value="1" @if ($article->published == 1) selected="" @endif>Published</option>
    @else
    <option value="0">Not published</option>
    <option value="1">Published</option>
    @endif
</select>
<div class="mt-3">
    <label class="m-0" for="">Title</label>
    <input type="text" class="form-control" name="title" placeholder="News title" value="{{$article->title ?? ''}}"
        required autocomplete="off">
</div>

<div class="mt-3">
    <label class="m-0" for="">Slug (Unique)</label>
    <input class="form-control" type="text" name="slug" placeholder="Automatic generation"
        value="{{$article->slug ?? ''}}" readonly="">

</div>
<div class="mt-3">
    <label class="m-0" for="">Parent category</label>
    <select class="form-control" name="categories[]" multiple="">
        @include('admin.article.partials.categories', ['categories' => $categories])
    </select>
</div>
<div class="mt-3">
    <label class="m-0" for="">Short description</label>
    <textarea class="form-control" id="description_short"
        name="description_short">{{$article->description_short ?? ''}}</textarea>
</div>
{{-- <div class="col-md-3">

    <input type="file" name="image" class="form-control">

</div>
<div class="col-md-3">

    <button type="submit" class="btn btn-success">Upload</button>

</div> --}}
<div class="mt-3">
    <label class="m-0" f&&="">Full description</label>
    <textarea class="form-control" id="description" name="description">{{$article->description ?? ''}}</textarea>
</div>
<hr />
<div class="">
    <label class="m-0" for="">Meta title</label>
    <input type="text" class="form-control" name="meta_title" placeholder="Meta title"
        value="{{$article->meta_title ?? ''}}">
</div>
<div class="mt-3">
    <label class="m-0" for="">Meta description</label>
    <input type="text" class="form-control" name="meta_description" placeholder="Meta description"
        value="{{$article->meta_description ?? ''}}">
</div>
<div class="mt-3">
    <label class="m-0" for="">Keywords</label>
    <input type="text" class="form-control" name="meta_keyword" placeholder="Keywords, comma separated"
        value="{{$article->meta_keyword ?? ''}}">
</div>
<hr />
<input class="btn btn-success" type="submit" value="Save">
