@extends('layouts.app')
@section('title', 'All Contacts')
@section('content')
<table class="table table-striped m-3">
  <h3 class="text-center m-4">All Messages</h3>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Subject</th>
    <th>Message</th>
  </tr>
  @foreach ($messages as $message)
    <tr>
      <td>{{$message->f_name}}</td>
      <td>{{$message->l_name}}</td>
      <td>{{$message->sub}}</td>
      <td>{{$message->msg}}</td>
    </tr>
  @endforeach
</table>
@endsection