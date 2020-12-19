@extends('cars.layout')
@section('content')

<div class="container-fluid">
<h1>{{$car->name}}</h1>
<p>{{$car->company}}</p>
<a href="{{$car->id}}/edit">edit</a>
</div>

@endsection