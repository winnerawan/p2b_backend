@extends('template')

@section('dashboard')
<div class="row">
 <div class="col-lg-12">
  <table class="table table-bordered table-hover">
   <thead>
    <tr>
     <th>Email</th>
     <td>{{ $participant->email }}</td>
    </tr>
    
   </thead>
  </table>
 </div>
</div>
@endsection