@extends('template.main')

@section('title','FutureRoom roomCategories')

@section('container')
    <div class="card-1" style="margin: 50px 100px 50px">
        <h1 class="judul-kategori"> {{ $room_categories -> name}} </h1>
        <div class="card-group">
          @foreach($room_categories->room_lists as $showRoom)
          <div class="col-lg-3">
            <div class="card" style="margin-bottom: 50px">
                <img src= {{ $showRoom -> photo }} class="card-img-top" height="450px" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $showRoom -> title }}</h5>
                <a href="{{  url('/RoomCategory/'.$showRoom->room_categoryID) }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Lihat Ruangan</a>
                </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
@endsection

