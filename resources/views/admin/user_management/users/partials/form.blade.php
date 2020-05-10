@if($errors -> any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors -> all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="mt-3">
    <label class="m-0" for="">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name"
   value="
    @if(old('name'))
        {{old('name')}}
    @else
        {{$user->name ?? ''}}
    @endif"
           required autocomplete="off">
</div>

<div class="mt-3">
    <label class="m-0" for="">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email"
           value="
    @if(old('email'))
           {{old('email')}}
           @else
           {{$user->email ?? ''}}
           @endif"
           required autocomplete="off">
</div>

<div class="mt-3">
    <label class="m-0" for="">Password</label>
    <input type="password" class="form-control" name="password">
</div>

<div class="mt-3">
    <label class="m-0" for="">Confirm the password</label>
    <input type="password" class="form-control" name="password_confirmation">
</div>


{{-- <div class="col-md-3">

    <input type="file" name="image" class="form-control">

</div>
<div class="col-md-3">

    <button type="submit" class="btn btn-success">Upload</button>

</div> --}}
<hr/>
<input class="btn btn-success" type="submit" value="Save">
