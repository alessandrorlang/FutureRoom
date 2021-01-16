@extends('template.main')

@section('title','FutureRoom Homepage')

@section('container')

<div class="container">
    <h1 style="text-align: center"> Meet the creators </h1>
    <span class="line"></span>
    <div class="row gx-2" style="margin-left: 200px;">
      <div class="col">
       {{-- <div class="p-3 border bg-light">
        <img src="images\Team\1.jpg" alt="FutureRoom Banner Promo"> 
        Custom column padding</div> --}}
        <div class="card" style="width: 18rem;">
          <a href="https://www.linkedin.com/in/martin-khoe-3472a1195/">
          <img src="images\Team\1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text" style="text-align: center">Martin Khoe - 2201769736</p>
          </div>
          </a>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <a href="https://www.linkedin.com/in/alessandro-airlangga-hariadi-5a0038196/">
          <img src="images\Team\2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text" style="text-align: center">Alessandro Airlangga Hariadi - 2201772932</p>
          </div>
          </a>
        </div>
      </div>
    </div>
    <div class="row gx-5" style="margin-top: 50px; margin-bottom: 100px">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <a href="https://www.linkedin.com/in/richie-martin-152330198/">
          <img src="images\Team\3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text" style="text-align: center">Richie Martin - 2201767415</p>
          </div>
          </a>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <a href="https://id.linkedin.com/in/sheline-kristanty-3004211b8/in-id">
            <img src="images\Team\5.jpg"  class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text" style="text-align: center">Sheline Kristanty - 2201750250</p>
          </div>
          </a>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <a href="https://www.linkedin.com/in/thomson-tan-680b521b8/">
          <img src="images\Team\4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text" style="text-align: center">Thomson Tan - 2201758543</p>
          </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  
  


@endsection