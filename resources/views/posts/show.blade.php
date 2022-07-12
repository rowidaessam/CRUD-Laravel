@extends('layout.navbar')

@section("body")

    <div class="card text-center border-dark mb-3" style="max-width: 18rem">
        <div class="card-body">
          <p class="card-title">{{$myposts["title"]}}</p>
          <p class="card-text">{{$myposts["description"]}}</p>
          <a href="/posts"class="btn btn-outline-dark">Back</a>
        </div>
      </div>
@endsection