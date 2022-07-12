@extends('layout.navbar')

@section("body")

 


    <div class="container">
        <form action="/articles"   method="Post">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Title</label>
              <input type="text" class="form-control" 
              name="title" 
              value={{old('title')}}>
              <label class="text-danger">{{$errors->first('title')}}  </label>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Description</label>
              <input type="text" class="form-control" name="description" value={{old('description')}}>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Number</label>
                <input type="text" 
                class="form-control" 
                name="number" 
                value={{old('number')}}>
                <label class="text-danger">{{$errors->first('number')}}  </label>
              </div>
            
            <button type="submit" class="btn btn-outline-dark ">Submit</button>
          </form>

    </div>

@endsection