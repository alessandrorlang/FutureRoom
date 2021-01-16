@extends('template.main')

@section('title','FutureRoom Homepage')

@section('container')

<h1 style="text-align: center; font-weight: 600; font-size: 60px; color: #222; margin-top: 80px;"> Explore our brand new features! </h1>

<div class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach($mainFeaturesData as $mainFeatures)
        <div class="col">
        <div class="card">
            <img src="{{ $mainFeatures->photo }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $mainFeatures->title }}</h5>
            <p class="card-text">{{ $mainFeatures->description }}</p>
            <div class=" bg-transparent text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Learn More</button> 
            </div>
            
            </div>
        </div>
        </div>
        @endforeach
        
    </div>
</div>

@endsection