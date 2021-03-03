@extends('layout')

@section('content')
<h1>Clients</h1>

<ul>
   @foreach($clients as $client)
     <li>{{$client}}</li>
   @endforeach
</ul>
<hr>
   <form action="/clients" metode="POST">
       @csrf
    <div class="form-group">
         <input type="text" class="form-control" name="pseudo">
    </div> 
      <button  type="submit" class="btn btn-primary">Ajouter le client</button>
   </form>

@endsection
 