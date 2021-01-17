@extends('template.main')

@section('title','FutureRoom bedroom')

@section('container')


<div class="container">
    <div class="d-flex justify-content-between">
        <h1 class="room-category"> Living Room </h1>
        <h4> <span style="font-weight: 700"> showing total of: </span> {{$total}} living rooms </h4>
        </div>
        <div class="col">
            @foreach ($livingroom as $livingDesign)
            <div class="card mb-5">
                <img src="{{ $livingDesign->photo }}" class="card-img-top" style="height: 600px">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 35px">{{ $livingDesign->room_name }}</h5>
                    <p> Made by: <a href="#" style="text-decoration: none; color: #222222"> <span style="font-weight: 600;"> {{$livingDesign->designer }} </span> </a> </p>
                    <p class="card-text">{{ $livingDesign->description }}</p>
                    <div class=" bg-transparent">
                        <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Learn More</button> 
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>

@endsection