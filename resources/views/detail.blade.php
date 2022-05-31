@extends('layouts.main')

@section('container')
<div class="container-fluid d-flex justify-content-evenly p-3">
   <div class="">
      <h5>Book Detail </h5>
      <table class="table table-borderless">
         
         <tbody>
            <tr>
               <td>
                  Title : {{ $book->title }}
               </td>
            </tr>
            <tr>
               <td>
                  Author : {{ $book->details->author }}
               </td>
            </tr>
            <tr>
               <td>
                  Publisher : {{ $book->details->publisher }}
               </td>
            </tr>
            <tr>
               <td>
                  Year : {{ $book->details->year }}
               </td>
            </tr>
            <tr>
               <td>
                  Description : 
               </td>
            </tr>
            <tr>
               <td>
                  {{ $book->details->description }}
               </td>
            </tr>
         </tbody>
      </table>
   </div>  
   @include('partials.sidebar')
    
</div>

@endsection