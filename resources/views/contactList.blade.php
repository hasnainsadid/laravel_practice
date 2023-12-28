@extends('layouts.app')
@section('title', 'All Contacts')
@section('content')
<table class="table table-striped my-3 text-center">
  <h3 class="text-center m-4">All Messages</h3>
  @if (session('msg'))
  <div class="alert alert-success">{{session('msg')}}</div>
  @endif
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Subject</th>
    <th>Message</th>
    <th>Action</th>
  </tr>
  @foreach ($messages as $message)
    <tr>
      <td>{{$message->f_name}}</td>
      <td>{{$message->l_name}}</td>
      <td>{{$message->sub}}</td>
      <td>{{$message->msg}}</td>
      <td>
        <a class="btn btn-info" href="/contact/edit/{{$message->id}}">Edit</a>
        <a class="btn btn-danger" href="/contact/delete/{{$message->id}}">Delete</a>
      </td>
    </tr>
  @endforeach
</table>
@endsection