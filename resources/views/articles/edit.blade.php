
  
@extends('layout.navbar')
@section("body")

  
    <form class="form-control" 
    action="/articles/{{$data->id}}" method="post">
        @csrf
        @method("put")
        <div class="mb-3">
            <label  class="form-label">Title</label>
            <input type="text" name="title" value="{{$data->title}}" class="form-control" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Description</label>
            <input type="text"  value="{{$data->description}}" name="description" class="form-control" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Number</label>
            <input type="text"  value="{{$data->number}}" name="number" class="form-control" >
        </div>
       
        <div class="mb-3 text-center">
            <input type="submit"class="btn btn-outline-dark ">
        </div>
    </form>
@endsection
