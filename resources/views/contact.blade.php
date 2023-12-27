@extends('layouts.app')

@section('title', 'About Page')

@section('content')

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-12">
      <form method="post" action="send">
        @csrf
        <div class="row">
          <div class="col">
            <input type="text" class="form-control mb-3" placeholder="Enter First Name" name="f_name">
          </div>
          <div class="col">
            <input type="text" class="form-control mb-3" placeholder="Enter First Name" name="l_name">
          </div>
        </div>
        <input type="text" class="form-control mb-3" placeholder="Enter Subject" name="sub">
        <textarea class="form-control mb-3" rows="5" name="msg"></textarea>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

@endsection