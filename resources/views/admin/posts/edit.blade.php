@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>New post</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form class="" action="{{route('admin.posts.update', ['post' => $post->id])}}" method="post">
          @csrf
          @method('PATCH')

          <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control @error('category') is-invalid @enderror" id="category" name="category_id">
              <option value="">Select</option>
              @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
              @endforeach

            </select>
            @error('title')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control @error('title') is-invalid @enderror" id="title" type="text" name="title" value="{{ old('title', $post->title) }}">
            @error('title')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="title">Content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" value="">{{ old('content', $post->content)}}</textarea>
            @error('content')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <button class="btn btn-primary" type="submit">Save</button>
        </form>
      </div>
    </div>
</div>
@endsection
