


@extends('layout.main')

@section('container')
@endsection
<div class="carousel-item active ">
  <img src="{{ url('image/'. $image3) }}" style=" height: 100%; width: 100%;">
  <div class="carousel-caption mt-0" style="justify-content: center;  "> 
    <h1 class="mb-0" style="font-size: min(11vw, 150px); font-family: 'Mulish', sans-serif; text-align: center" >KALIMANTAN</h1>
    <p class="text-nowrap" style="font-size: min(4vw, 31px); font-family: 'Mulish', sans-serif;">Sungai Kunyit Laut (Kalimantan Barat)</p>
    <button type="button" class="btn btn-light px-4 py-3" style="font-size: 16; border-radius: 20px; font-weight: bold; font-family: 'Mulish', sans-serif;"> 
      <a href="/" class="text-decoration-none text-dark text-center">Hotel</a> 
    </button>
    <button type="button" class="btn btn-light px-3 py-3" style="font-size: 16; border-radius: 20px; font-weight: bold; font-family: 'Mulish', sans-serif;"> 
      <a href="/destinationCategory" class="text-decoration-none text-dark text-center">Wisata</a> 
    </button>
  </div>
</div>

