@extends('layouts/application')

@section('content')
  <h1>Welcome to the {{ $foo }} Website!</h1>
  
  <ul>
    @foreach($tasks as $task)
      <li>{{ $task }}</li>
    @endforeach
  </ul>
@endsection
