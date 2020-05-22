@extends('layouts.app')

@section('content')
 <h1>Welcome {{$user->name}}</h1>


    <a href="{{route('Request')}}">Request a wash</a> <th></th>


 <table class="table">
     <thead>
     <tr>
         <th>Id</th>
         <th>Description</th>
         <th>Store</th>
         <th>Driver</th>
         <th>Status</th>
         <th>Created</th>
         <th>Updated</th>
         <th>Feedback</th>
     </tr>
     </thead>
     <tbody>

     @if ($washes)
         @foreach ($washes as $wash)
             <tr>
                 <th scope="row">{{$wash->id}}</th>
                 <td>{{$wash->Description}}</td>
                 <td>{{$wash->Store->name}}</td>

                 <td>{{$wash->Driverid  == NULL ? 'Driver not assigned yet' :$wash->Driver->name}}</td>

                 <td>{{$wash->Status}}</td>
                 <td>{{$wash->created_at}}</td>
                 <td>{{$wash->updated_at->diffForHumans()}}</td>
                 <td><a href="Create/{{$wash->id}}">Add your Feedback</a> </td>
             </tr>
         @endforeach

     @endif

     </tbody>
 </table>

@endsection

