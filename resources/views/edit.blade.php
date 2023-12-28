@extends('layouts.app')

@section('title', 'Edit Page')

@section('content')

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-12">
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif
      @if (session('msg'))
        <div class="alert alert-success">{{session('msg')}}</div>
      @endif
      <form method="post" action="/contact/update/{{$single['id']}}">
        @csrf
        <div class="row">
          <div class="col">
            <input type="text" class="form-control mb-3" placeholder="Enter First Name" name="f_name" value="{{old('f_name')? old('f_name') : $single['f_name']}}">
            @error('f_name')
              <div class="form-text alert alert-danger">{{$message}}</div>
            @enderror
          </div>
          <div class="col">
            <input type="text" class="form-control mb-3" placeholder="Enter Last Name" name="l_name" value="{{old('l_name')? old('l_name') : $single['l_name']}}">
          </div>
        </div>
        <input type="text" class="form-control mb-3" placeholder="Enter Subject" name="sub" value="{{$single['sub']}}">
        <textarea class="form-control mb-3" rows="5" name="msg">{{old('msg')? old('msg') : $single['msg']}}</textarea>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

@endsection