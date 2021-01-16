<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="stylesheet.css">
    </head>

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
                    <li><a class="dropdown-item" href="{{ url('/roomCategories/Bedroom') }}">Bedroom</a></li>
                    <li><a class="dropdown-item" href="{{ url('/roomCategories/LivingRoom') }}">Living Room</a></li>
                    <li><a class="dropdown-item" href="{{ url('/roomCategories/Bathroom') }}">Bathroom</a></li>
                    <li><a class="dropdown-item" href="{{ url('/roomCategories/Kitchen') }}">Kitchen</a></li>
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
