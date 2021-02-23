@extends('masterLayout.master')
@section('head')
@endsection

@section('content')


<div class="container login-inner" style="margin-top: 120px;margin-bottom:25px">
  <form method="POST" action=" {{ route('auth.login') }}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
      @error('email')
      <div class="text text-danger">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input name="password" type="password" class="form-control" placeholder="Password">
      @error('password')
      <div class="text text-danger">
        {{ $message }}
      </div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary btn-login">Submit</button>
    @error('form')
    <div class="text text-danger">
      {{ $message }}
    </div>
    @enderror
  </form>
</div>







@endsection

@section('extr')

@endsection