@extends('cars.layout')
@section('content')

<div class="container-fluid">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Color</th>
                <th>Company</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)    
            <tr>
            <td><a href="cars/{{$car->id}}">{{$car->id}}</a></td>
                <td>{{$car->name}}</td>
                <td>{{$car->color}}</td>
                <td>{{$car->company}}</td>
                <td><img src="{{asset('storage/'. $car->image)}}" alt="image" height=72 width=128/></td>
                <td>
                    <div class="row">
                    <form action="/cars/{{$car->id}}" method="POST">
                        @method('delete')
                        @csrf
                        <button name="submit" id="submit" class="btn btn-danger">Delete</button>
                        <a type="button" class="btn btn-primary" href="/cars/{{$car->id}}/edit">Edit</a>
                    </form>
                    
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $cars->links() }}
    <a type="button" class="btn btn-primary" href="/cars/create">Add new car</a>
</div>

@endsection