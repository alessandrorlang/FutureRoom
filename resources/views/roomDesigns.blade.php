@extends('template.main')

@section('title','FutureRoom roomDesigns')

@section('container')

<div class="container">
    <div class="d-flex justify-content-between">
        <h1 class="room-category"> Bedroom </h1>
            <div class="lihat-semua"> 
                {{-- <a href="{{ url('/roomCategories/'.$room_categories->category_) }}" class="text-blue" style="text-decoration: none; font-size: 20px; font-weight: 600;">See more </a> --}}
                {{-- <a href="{{ url('/roomCategories/'.$room_lists->room_categoryID) }}" 
                    class="color-primary font-weight-normal"> {{ $room_lists->room_categories->category_name }}</a>  --}}
            </div>
        </div>
        <div class="col">
            @foreach ($bedroom as $bedDesign)
            <div class="card mb-5">
                <img src="{{ $bedDesign->photo }}" class="card-img-top" style="height: 600px">
                <div class="card-body"> 
                    <h5 class="card-title" style="font-size: 35px">{{ $bedDesign->room_name }}</h5>
                    <p> Made by: <a href="#" style="text-decoration: none; color: #222222"> <span style="font-weight: 600;"> {{$bedDesign->designer }} </span> </a> </p>
                    <p class="card-text">{{ $bedDesign->description }}</p>
                    <div class=" bg-transparent">
                        <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Learn More</button> 
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>

<div class="container">
    <div class="d-flex justify-content-between">
        <h1 class="room-category"> Living Room </h1>
            <div class="lihat-semua"> 
                <a href="{{ url('/RoomCategory/LivingRoom') }}" class="text-blue" style="text-decoration: none; font-size: 20px; font-weight: 600;">See more </a> 
            </div>
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

<div class="container">
    <div class="d-flex justify-content-between">
        <h1 class="room-category"> Bathroom </h1>
            <div class="lihat-semua"> 
                <a href="{{ url('/RoomCategory/Bathroom') }}" class="text-blue" style="text-decoration: none; font-size: 20px; font-weight: 600;">See more </a> 
            </div>
        </div>
        <div class="col">
            @foreach ($bathroom as $bathDesign)
            <div class="card mb-5">
                <img src="{{ $bathDesign->photo }}" class="card-img-top" style="height: 600px">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 35px">{{ $bathDesign->room_name }}</h5>
                    <p> Made by: <a href="#" style="text-decoration: none; color: #222222"> <span style="font-weight: 600;"> {{$bathDesign->designer }} </span> </a> </p>
                    <p class="card-text">{{ $bathDesign->description }}</p>
                    <div class=" bg-transparent">
                        <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Learn More</button> 
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>

<div class="container">
    <div class="d-flex justify-content-between">
        <h1 class="room-category"> Kitchen </h1>
            <div class="lihat-semua"> 
                <a href="{{ url('/RoomCategory/Kitchen') }}" class="text-blue" style="text-decoration: none; font-size: 20px; font-weight: 600;">See more </a> 
            </div>
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