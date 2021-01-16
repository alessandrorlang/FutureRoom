@extends('template.main')

@section('title','FutureRoom Homepage')

@section('container')

<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel"  data-bs-interval="2500">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    @foreach($homepageData as $homes)
    <div class="carousel-item @if($loop->first) active @endif">
      <img src="{{ $homes->photo }}" class="h-100 w-100" alt="FutureRoom Banner Promo">
      <div class="carousel-caption d-none d-md-block text-dark bg-white">
        <h5 style="font-weight: 700; font-size: 25px;">{{ $homes->title }}</h5>
        <p>{{ $homes->description }}</p>
      </div>
    </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

<div class="container marketing">
{{-- <h2 style="text-align: center; font-weight: 700; color: #222222"> Our Core values </h2> <br> --}}
  <div class="row">
    <div class="col-lg-3">
      <svg class="bd-placeholder-img rounded-circle" width="180" height="180" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <image href="images\homepage-values\values-2.png" width="180" height="180"> 
        <title> Safe and Trusted Mobile App </title>
        <rect width="100%" height="100%" fill="#777"></rect>
      </svg>
     
    </div>
    <div class="col-lg-3">
      <svg class="bd-placeholder-img rounded-circle" width="180" height="180" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <image href="images\homepage-values\values-1.png" width="180" height="180"> 
        <title> 100% Customer Satisfaction</title>
        <rect width="100%" height="100%" fill="#777"></rect>
      </svg>
      
    </div>
    <div class="col-lg-3">
      <svg class="bd-placeholder-img rounded-circle" width="180" height="180" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <image href="images\homepage-values\values-3.jpg" width="180" height="180"> 
        <title> Friendly and Trusted Partners </title>
        <rect width="100%" height="100%" fill="#777"></rect>
      </svg>
    </div>

    <div class="col-lg-3">
      <svg class="bd-placeholder-img rounded-circle" width="180" height="180" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <image href="images\homepage-values\values-4.png" width="180" height="180"> 
        <title> 1 Year full service warranty </title>
        <rect width="100%" height="100%" fill="#777"></rect>
      </svg>
    </div>
    
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading" style="font-weight: 600"> FutureRoom is your truly home design partner. <span class="text-muted"> Relax, it's free to download! </span> </h2>
      <p class="lead">FutureRoom merupakan aplikasi berbasis smartphone untuk memenuhi kebutuhan desain interior ataupun masalah teknis pada rumah atau tempat kediaman para customer. Tekan <a href="https://www.figma.com/file/LeTVM6eEAk4yTCYAx1G6sS/Prototype-FutureRoom?node-id=0%3A1"> disini </a>
        untuk melihat tampilan prototype aplikasi FutureRoom. </p>
    </div>
    <div class="col-md-5">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded-3" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <image href="images\homepage-featurette\featurette-1.jpg">
      </svg>
    </div>
  </div>
  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading" style="font-weight: 600" >Experienced designers and servicemen. <span class="text-muted">Top class quality at your service.</span></h2>
      <p class="lead">FutureRoom bekerja sama dengan para mitra berpengalaman serta berkualitas untuk mewujudkan ruangan impian anda. Saat ini kami sudah mempunyai lebih dari 700 mitra
        yang tersebar di seluruh Indonesia. Tunggu apalagi? unduh dan gunakan aplikasi FutureRoom sekarang!
      </p>
    </div>
    <div class="col-md-5 order-md-1">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded-3" width="100%" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          <image href="images\homepage-featurette\featurette-2.jpg" height="100%">
        </svg>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading"  style="font-weight: 600"> Are you a freelance interior designer? <span class="text-muted"> Join us now and take all the benefits with you.</span></h2>
      <p class="lead">Kami hanya mengambil 5% dari setiap proyek yang akan dikerjakan dengan mitra kami. Daftar sekarang!</p>
      <button class="btn btn-outline-success" type="submit">Register now</button>
    </div>
    <div class="col-md-5">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded-3" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <image href="images\homepage-featurette\featurette-3.jpg" height="350px" width="100%">
      </svg>
    </div>
  </div>

</div>


  @endsection