@extends('template.main')

@section('title','FutureRoom bedroom')

@section('container')


<div class="container">
    <div class="d-flex justify-content-between">
        <h1 class="room-category"> Bathroom </h1>
            <div class="lihat-semua"> 
                <a href="{{ url('/roomCategories/Bathroom') }}" class="text-blue" style="text-decoration: none; font-size: 20px; font-weight: 600;">See more </a> 
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

@endsection