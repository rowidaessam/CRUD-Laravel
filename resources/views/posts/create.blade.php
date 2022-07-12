@extends('layout.navbar')

@section("body")

    <div class="container">
        <form action="/post/store"  method="Post">
            @csrf  
            {{-- token --}}
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Title</label>
              <input type="text" class="form-control" name="title" >
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Description</label>
              <input type="text" class="form-control" name="description" >
            </div>
            
            <button type="submit" class="btn btn-outline-dark ">Submit</button>
          </form>

    </div>

@endsection