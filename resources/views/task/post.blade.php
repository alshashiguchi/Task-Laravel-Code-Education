@extends('template')

@section('title')

Blog Laravel - Posts

@stop

@section('classHeader')
class="intro-header" style="background-image: url('img/post-bg.jpg')"
@stop

@section('titlePageMain1')

Posts

@stop

@section('titlePageMain2')

Blog Curso Laravel-Express

@stop

@section('content')

@foreach ($posts as $post)
   <h2>{{ $post[0] }}</h2>
   <p>{{ $post[1] }}</p>    
@endforeach

@stop