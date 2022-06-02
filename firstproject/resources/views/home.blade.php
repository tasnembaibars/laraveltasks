@extends('master');

@section('main-content')

<h1>Welcome from Home Page</h1>

@foreach($names as $name)
<h2>{{$name}}</h2>
 @endforeach 
 
@endsection