@extends('app')

@section('head')
    Message
@endsection('head')

@section('content')
<p class="text-center lead mt-5"> Messages From Contact Form </p>
@foreach ($messages as $message)
<ul class="list-group container mt-5">
    <li class="list-group-item"><strong>Name:</strong> {{$message->name}}</li>
    <li class="list-group-item"><strong>Email:</strong> {{$message->email}}</li>
    <li class="list-group-item"><strong>Message:</strong> {{$message->message}}</li>
  </ul>
@endforeach
@endsection('content')