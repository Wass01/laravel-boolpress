@extends('layouts.app')

@section('content')
<div class="col-md-4 container">
  <div class="card">
    <div class="card-header">{{ $post->title }}</div>

    <div class="card-body">
      <p>Title: {{$post->title}}</p>
      <p>Description: {{$post->content}}</p>
    </div>
  </div>
</div>
@endsection
