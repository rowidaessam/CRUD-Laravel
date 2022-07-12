@extends('layout.navbar')


@section('posts')
    My Posts
   
@endsection

@section("body")
    <div class="container"> 
    <table class="table">
    <a class="btn btn-outline-dark" href="/post/create"> Add New Post </a> <br><br>

    <thead class="table-dark">
      <tr>
        <th> Index</th>
        <th scope="col">title</th>
        <th scope="col">body</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        <th scope="col">Show</th>


      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post => $details)
        <tr> 
            <td>
                {{$loop->iteration}}
            </td>
            <td> 
                {{$details -> title}}
            </td>
            <td> 
                {{$details -> description}}
            </td>
            <td> 
                <a class="btn btn-warning" href="/posts/edit/{{$details->id}}"> Edit </a>
            </td>
            <td> 
                <a class="btn btn-danger" href="/posts/delete/{{$details->id}}"> Delete </a>
            </td>
            <td> 
                <a class ="btn btn-info" href="/post/show/{{$details->id}}"> Show </a>
            </td>
        </tr>
            
        @endforeach

      
    </tbody>
    </div>
  </table>



@endsection

