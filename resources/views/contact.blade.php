@extends('layouts/application')

@section('title', 'Contact Us')

@section('content')
  <h1>Contact Us</h1>

  <form class="contact" action="index.html" method="post">
    <fieldset>
      <div class="">
        <label for="email"></label>
        <input type="text" name="email" value="" placeholder="Enter an email address">
      </div>
      
      <div class="">
        <label for="comments"></label>
        <textarea name="comments" rows="8" cols="80"></textarea>
      </div>
    </fieldset>
  </form>
@endsection
