@extends('layouts.app')

@section('content')
 <h1>Welcome {{$user->name}}</h1>


 <table class="table">
     <thead>
     <tr>
         <th>Id</th>
         <th>Description</th>
         <th>Status</th>
         <th>Driver</th>
         <th>Created</th>
         <th>Updated</th>
     </tr>
     </thead>
     <tbody>

     @if ($washes)
         @foreach ($washes as $wash)
             <tr>
                 <th scope="row">{{$wash->id}}</th>
                 <td>{{$wash->Description}}</td>
                 <td><a href="edit/{{$wash->id}}">{{$wash->Status}}</a></td>
                 <td>{{$wash->Driverid  == NULL ? 'Driver not  assigned yet' :$wash->Driver->name}}</td>
                 <td>{{$wash->created_at}}</td>
                 <td>{{$wash->updated_at->diffForHumans()}}</td>
             </tr>
         @endforeach

     @endif

     </tbody>
 </table>

@endsection

