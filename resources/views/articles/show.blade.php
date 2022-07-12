@extends('layout.navbar')

@section("body")
  {{-- {{$myposts}} --}}

    <div class="card border-dark mb-3" style="max-width: 18rem" >
        <div class ="card-body">
          <h5 class="card-title">{{$data["title"]}}</h5>
          <p class="card-text">{{$data["description"]}}</p>
          <p class="card-text">{{$data["number"]}}</p>

          <a href="/articles" class="btn btn-outline-dark ">Back</a>
        </div>
      </div>
@endsection