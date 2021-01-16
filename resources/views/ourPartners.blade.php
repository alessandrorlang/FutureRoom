@extends('template.main')

@section('title','FutureRoom Homepage')

@section('container')

<style>
    h1{
        font-size: 150px;
        font-weight: 900;
        text-transform: uppercase;
        position: absolute;
        top: 25%;
        bottom: 25%;
        left: 20%;
        color: white;
        text-shadow: 4px 4px #0f2fbd;
    }
</style>
   

<div class="heading-partner">
    <img src="images\partners\partners-1.jpg" height="450px" width="100%" style="opacity: 0.9"> 
    <div class="text-heading-partner">
        <h1>Our Partners</h1>
    </div>
</div>

<div class="text-partner">
    Furniture Partners 
</div>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
        <div class="card">
            <img src="images\partners\partner-furnitures-1.jpg" style="height: 195px" class="card-img-top" alt="...">
        </div>
        </div>
        <div class="col">
        <div class="card">
            <img src="images\partners\partner-furnitures-2.png" style="height: 195px" class="card-img-top" alt="...">
        </div>
        </div>
        <div class="col">
        <div class="card">
            <img src="images\partners\partner-furnitures-3.png" style="height: 195px" class="card-img-top" alt="...">
        </div>
        </div>
    </div>
</div>

<div class="text-partner" style="margin-top: 200px;">
    Commercial Partners 
</div>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
        <div class="card">
            <img src="images\partners\partner-furnitures-4.png" style="height: 195px" class="card-img-top" alt="...">
        </div>
        </div>
        <div class="col">
        <div class="card">
            <img src="images\partners\partner-furnitures-5.png" style="height: 195px" class="card-img-top" alt="...">
        </div>
        </div>
        <div class="col">
        <div class="card    ">
            <img src="images\partners\partner-furnitures-6.jpg" style="height: 195px" class="card-img-top" alt="...">
        </div>
        </div>
    </div>
</div>

@endsection