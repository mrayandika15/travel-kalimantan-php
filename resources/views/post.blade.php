<body >
@extends('layout.main')

@section('container')

<div class="row g-5">
    <div class="col-md-8">
      
      <article class="blog-post">
        <h2 class="blog-post-title" style="font-family: 'Mulish', sans-serif;">{{ $data->destination_name }}</h2>
        <p class="blog-post-meta" style="font-family: 'Mulish', sans-serif;"> 
          Wisata 
          <a href="{{url('destinationByCategory/'.$data->destination_category_id)}}" class="text-decoration-none">
            {{$data->destination_category_name }}
            </a> 
              Kalimantan - <small> {{ $data->created_at->diffForHumans() }}</small></p>

        <div id="carouselExampleControls" class="carousel slide mb-3" data-bs-ride="carousel" style="font-family: 'Mulish', sans-serif;">
            <div class='carousel-inner'>
              <?php $i=0; foreach ($data->destination_image as $row): ?>
              <?php if ($i==0) {$set_ = 'active'; } else {$set_ = ''; } ?> 
              <div class='carousel-item <?php echo $set_; ?>'>
                    <img src='{{ url('storage/'.$row) }}' class='d-block w-100'>
              </div>
              <?php $i++; endforeach ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        
          <div style="font-family: 'Mulish', sans-serif;">  {{  $data->destination_description  }}</div>
        
      </article>

  
    </div>
  
    <div class="col-md-4" style="font-family: 'Mulish', sans-serif;">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 rounded " style="border: 1px solid black;
        border-bottom-left-radius: 25px;">
          <h4 class="text-decoration-none mb-3" style="font-family: 'Mulish', sans-serif">
            <a href="{{url($data->destination_location)}}" target="_blank" class="text-decoration-none text-black">
            <i class="bi bi-geo-alt"></i> Lihat Di Google Maps
              </a> 
            </h4>
          <p class="mb-0"><i class="bi bi-thermometer-sun"></i>{{  $data->destination_day_temp  }}&#8451;</p>
          <p class="mb-0"><i class="bi bi-thermometer-snow"></i>{{  $data->destination_night_temp  }}&#8451;</p>
          <p class="mb-0"><i class="bi bi-star-fill"></i>{{  $data->destination_rating  }}</p>
        </div>

        <div class="p-4 mb-3 rounded " style=" font-family: 'Mulish', sans-serif; border: 1px groove black;
        border-bottom-left-radius: 25px;">
          <h4 class=""><ins>Kategori Wisata</ins></h4>
          <ol class="list-unstyled mb-0 ">
            @foreach ($destination_category as $category)
              <li>
                <a href="{{url('destinationByCategory/'.$category->destination_category_id)}}" class="text-decoration-none text-black">
                  {{ $category->destination_category_name }}
                </a>
              </li>
            @endforeach
          </ol>
        </div>

        <div class="p-4" style="font-family: 'Mulish', sans-serif;">
          <h4 class=""><ins>Sosial Media</ins></h4>
          <ol class="list-unstyled ">
            <li><a href="#" class="text-decoration-none text-black">Instagram</a></li>
            <li><a href="#" class="text-decoration-none text-black">Twitter</a></li>
            <li><a href="#" class="text-decoration-none text-black">Facebook</a></li>
          </ol>
        </div>
        
      </div>
      
    </div>
    
    <style>
        .banner {
            background-size: cover;
            background-position: center;
            height: 180px;
            width: 100%;
            margin-top: -20px;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-direction: column;
            padding : 250px 0px 150px 0px ;
          

        }

        .header-banner{
            background-size: cover;
            background-position: center;
            height: 180px;
            width: 100%;
            margin-top: -20px;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            gap: 10px;
            
        }

    </style>

    <div class="banner">

    <div class="header-banner">
    <div class="sub-banner">
            <img src="{{ url('image/iklan2.png') }}" style=" height: 100%; width: 100%;">
        </div>

        <div class="sub-banner">
            <img src="{{ url('image/iklan3.png') }}" style=" height: 100%; width: 100%;">
        </div>

    </div>


    <div class="header-banner">
    <div class="sub-banner">
            <img src="{{ url('image/iklan5.jfif') }}" style=" height: 100%; width: 100%;">
        </div>

        <div class="sub-banner">
            <img src="{{ url('image/iklan10.jpg') }}" style=" height: 100%; width: 100%;">
        </div>

    </div>
  </div>
    
@endsection
</body>

