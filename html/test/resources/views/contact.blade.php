@extends('layout.app')

@section('title') Contact page @endsection

@section('content')
  <h1>Contact page</h1>

  @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form action="{{route('contact-form')}}" method="post">
    @csrf

    <div class="form-group">
      <label for="name">Enter your name</label>
      <input class="form-control" type="text" name="name" placeholder="Enter your name" id="name">
    </div>

    <div class="form-group">
      <label for="email">Enter your email</label>
      <input class="form-control" type="text" name="email" placeholder="Enter your email" id="email">
    </div>

    <div class="form-group">
      <label for="subject">Message subject</label>
      <input class="form-control" type="text" name="subject" placeholder="Message subject" id="subject">
    </div>

    <div class="form-group">
      <label for="message">Message</label>
      <textarea name="message" id="message" class="form-control" placeholder="Enter your message"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Send</button>
  </form>
@endsection
