@extends('layouts.main')

@section('container')

<div class="container-fluid d-flex justify-content-evenly p-3">
   <div>
      <h5>Book List</h5>
      <table class="table table-sm">
         <thead>
         <tr>
            <th scope="col" width="60%">Title</th>
            <th scope="col" width="40%">Author</th>
         </tr>
         </thead>
         <tbody>
   
            @forelse ($books as $book)
               <tr>
                  <td><a href="/details/{{ $book->id }}" class="text-decoration-none text-reset">{{ $book->title }}</a></td>
                  <td>{{ $details[$book->id-1]->author }}</td>
               </tr>
            @empty 
               <tr class="text-dark">
                  <td>No Data.. </td> 
               </tr>
            @endforelse
   
                  
         </tbody>
      </table>
      {{ $books->links() }}
      
   </div>
   
   @include('partials.sidebar')  
</div>
   
@endsection