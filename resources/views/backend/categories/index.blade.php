@extends('master')
  @section('title', 'All categories')
  @section('content')
<div class="container col-md-8 col-md-offset-2 mt-4 whoos">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2> All categories </h2> </div>
        @if (session('status'))
        <div class="alert success">
          {{ session('status') }}
        </div>
        @endif

        @if ($allCategories->isEmpty())
        <p> There is no category.</p>
        @else
        <table class="table">
          <tbody>

            @foreach($allCategories as $category)
            <tr>
              <td>{!! $category->name !!}</td>
            </tr>
             @endforeach
          </tbody>
          </table>
          @endif
        </div>
      </div>
@endsection
