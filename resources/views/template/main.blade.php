<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        {{-- <link rel="stylesheet" href="stylesheet.css"> 
        
        Maaf pak, gatau kenapa kalo saya pake css eksternal di public malah ga kepanggil buat view tiap categoriesnya
        
        --}} 
    </head>



    <style>
        h1, h2, h3, p{
            font-family: Lato;
        }


        .container{
            margin-top: 100px;
            margin-bottom: 100px;
        }

        .container img {
            display: block;
            max-width: 100%;
            height: 300px;
        }

        .lihat-semua {
            font-size: 18px;
            margin-right: 5rem;
            margin-top: 1rem;
            font-family: sans-serif;
        }

        .text-partner{
            text-align: center; 
            margin-top: 75px; 
            text-transform: uppercase; 
            font-weight: 700; 
            font-size:50px;
            color: #222222
        }

        .carousel-item{
            height: 45rem;
        }

        .carousel-fade .carousel-item {
            opacity: 0.9;
            transition-duration: .5s;
            transition-property: opacity;
        }

        .carousel-fade .carousel-item.active,
        .carousel-fade .carousel-item-next.carousel-item-left,
        .carousel-fade .carousel-item-prev.carousel-item-right {
            opacity: 1;
        }

        .carousel-fade .active.carousel-item-left,
        .carousel-fade .active.carousel-item-right {
            opacity: 0;
        }

        .carousel-fade .carousel-item-next,
        .carousel-fade .carousel-item-prev,
        .carousel-fade .carousel-item.active,
        .carousel-fade .active.carousel-item-left,
        .carousel-fade .active.carousel-item-prev {
            transform: translateX(0);
            transform: translate3d(0, 0, 0);
        }

        nav{
            border-bottom:8px solid rgb(0, 50, 143);
            background-color: #012675;
        }

        .navbar-brand{
            margin: 0 125px 0 150px; 
            font-size: 35px; 
            font-weight: bold;
            font-family: Arial;
        }

        .nav-link{
            font-size: 20px;
            font-family: Lato;
            margin-right: 10px;
        }

        .nav-link-brand{
            margin-left: 75px;
        }

        .search-bar{
            margin-left: 100px;
        }

        .container h1{
            font-family: Gotham;
            font-weight: 700;
            font-size: 35px;
            margin-bottom: 20px;
            color: #222222;
        }

        .line{
            border-bottom: 10px dashed #1370da;
            display: block;
            margin: auto;
            margin-bottom: 50px;
            width: 6%;
        }

        footer{
            padding-top: 15px;
            padding-bottom: 25px;
        }

        .featurette-divider{
            margin-top: 8rem;
            margin-bottom: 8rem;
        }

        .row featurette{
            display: flex;
        }

        .marketing h2 {
            font-weight: 500;
        }

        .h2, h2 {
            font-size: calc(3rem + .9vw);
            margin-bottom: 50px;
        }

        .featurette-heading {
            font-weight: 500;
            line-height: 1.1;
            letter-spacing: -.05rem;
        }

        .text-heading-partner{
            font-size: 200px;
        }    
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark" style="padding: 25px">
    <a class="navbar-brand" href="{{ url('/') }}" style="color: white;"> FutureRoom </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Room Designs </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ url('/categories/bedroom') }}">Bedroom</a></li>
                    <li><a class="dropdown-item" href="{{ url('/categories/livingroom') }}">Living Room</a></li>
                    <li><a class="dropdown-item" href="{{ url('/categories/bathroom') }}">Bathroom</a></li>
                    <li><a class="dropdown-item" href="{{ url('/categories/kitchen') }}">Kitchen</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ url('/roomDesigns') }}">See all categories</a></li>
                  </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/mainFeatures') }}"  style="color:white"> Main Features </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/ourPartners') }}"  style="color: white"> Partners </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/aboutUs') }}"  style="color: white"> About Us </a>
            </li>
            <li class="nav-item">
                <a class="nav-link-brand" href="https://www.figma.com/file/LeTVM6eEAk4yTCYAx1G6sS/Prototype-FutureRoom?node-id=0%3A1">
                    <img src="images\appstore.svg" alt="">
                  </a>
            </li>
           
            <div class="search-bar">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search anything..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>    
            </div>
        </ul>
    </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

@yield('container')

</body>

{{-- <footer class="bg-dark text-white pt-2 pb-2">
    <div class="container text-center text-md-left">
        <a href="#">Back to top</a>
        <br>
      <p>All Rights Reserved ©2020 FutureRoom </p>
    </div>
  </footer> --}}

  <footer class="bg-dark text-white">
    <div class="container">
      <p class="float-end mb-2">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-5">All Rights Reserved ©2020 FutureRoom.</p>
    </div>
  </footer>


</html>
