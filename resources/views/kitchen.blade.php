@extends('template.main')

@section('title','FutureRoom roomDesigns')

@section('container')


<div class="container">
    <div class="d-flex justify-content-between">
        <h1 class="room-category"> Kitchen </h1>
        <h4> <span style="font-weight: 700"> showing total of: </span> {{$total}} kitchens </h4>
        </div>
        <div class="col">
            @foreach ($kitchen as $kitchenDesign)
            <div class="card mb-5">
                <img src="{{ $kitchenDesign->photo }}" class="card-img-top" style="height: 600px">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 35px">{{ $kitchenDesign->room_name }}</h5>
                    <p> Made by: <a href="#" style="text-decoration: none; color: #222222"> <span style="font-weight: 600;"> {{$kitchenDesign->designer }} </span> </a> </p>
                    <p class="card-text">{{ $kitchenDesign->description }}</p>
                    <div class=" bg-transparent">
                        <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Learn More</button> 
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>

@endsection