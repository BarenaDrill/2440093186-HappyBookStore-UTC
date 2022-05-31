@extends('layouts.main')

@section('container')
<div class="container-fluid d-flex justify-content-evenly p-3">
   <div>
         <h5 class="card-title">Contact</h5>
         <table class="table table-borderless">
            
            <tbody>
               <tr>
                  <td>
                     <h4>Store Address : </h4>
                     Jalan Pembangunan Baru Raya, <br>
                     Kompleks Pertokoan Emerald Blok III/12 <br>
                     Bintaro, Tangerang Selatan <br>
                     Indonesia 
                  </td>
               </tr>
               <tr>
                  <td>
                     <h4>Open Daily:</h4>
                     08:00 - 20:00
                  </td>
               </tr>
               <tr>
                  <td>
                     <h4>Contact:</h4>
                     Phone: 021-08899776655 <br>
                     Email : happybookstore@happy.com
                  </td>
               </tr>
            </tbody>
         </table>
         
   </div>
   @include('partials.sidebar')

</div>
@endsection