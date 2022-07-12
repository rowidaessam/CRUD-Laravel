@extends('layout.navbar')


@section('posts')
    My Articles
   
@endsection

@section("body")
    <div class="container"> 
    <table class="table">
    <a class="btn btn-outline-dark"  href="/articles/create"> Add New Article </a><br><br>

    <thead class="table-dark">
       <tr>
        <th> Index</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Number</th>
        <th scope="col">Author</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        <th scope="col">Show</th>


      </tr>
    </thead>
    <tbody>

        @foreach ($data as $article => $details)
        {{-- @dd($details->user->name) --}}
        {{-- @if ($details->user->name)
            Hello test
        @endif --}}
        <tr> 
            <td>
                {{$loop->iteration}}
            </td>
            <td> 
                {{$details->title}}
            </td>
            <td> 
                {{$details->description}}
            </td>
            <td> 
                {{$details->number}}
            </td>
            <td> 
                {{$details->user->name}}
            </td>
            <td> 
                <a class="btn btn-warning" href="/articles/{{$details->id}}/edit"> Edit </a>
            </td>
            <td> 
                {{-- <a class="btn btn-danger" 
                href="/articles/{{$details->id}}"> 
                Delete 
                </a> --}}

                <form action="/articles/{{$details->id}}" method="post">
                    @method("DELETE")
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>

            </td>
            <td> 
                <a class="btn btn-info" href="articles/{{$details->id}}"> Show </a>
            </td>
        </tr>
            
        @endforeach

      
    </tbody>
    </div>
  </table>



@endsection

