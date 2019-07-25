@extends('master')
  @section('title', 'Blog')
  @section('content')
  <div class="container col-md-8 col-md-offset-2 mt-3">
    @if (session('status'))
      <div class="alert alert-success"> {{ session('status') }} </div>
    @endif

    @if ($posts->isEmpty())
    <p> There is no post.</p>
    @else


    @foreach ($posts as $post)
    <div class="panel panel-default titi mb-2">
      <div class="panel-heading header">
        <a href="{!! action('BigController@show', $post->slug) !!}">
        {!! $post->title !!}
      </div><hr>
      </a>
      <div class="panel-body moos"> {!! mb_substr($post->content,0,500) !!}... </div>
    </div>
    @endforeach

    @endif
  </div>
@endsection
