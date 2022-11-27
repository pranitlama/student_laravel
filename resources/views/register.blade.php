@extends('layout.nav')
@section('content')
<div class="container  shadow p-3 mb-5 mt-5 bg-body rounded" style="width:500px;">
<form action="{{route('registeruser')}}" method="post">
    <h2 class="text-center">Register</h2>
    @csrf
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ">Name</label>
    <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name">
    @error('name')
    <div class="invalid-feedback">
    Name is required
      </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control @error('name') is-invalid @enderror" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('email')
    <div class="invalid-feedback">
        Email is required
    </div>
    @enderror
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control @error('name') is-invalid @enderror" name="password" id="exampleInputPassword1">
    @error('password')
    <div class="invalid-feedback">
    Password is required
      </div>
    @enderror
  </div>
  <div class="mb-3 form-check">
    <label class="form-check-label">Already have an Account?<a href="{{route('login')}}">Login</a></label>
  </div>
  <button type="submit" class="btn btn-primary form-control">Submit</button>
</form>
</div>

@endsection