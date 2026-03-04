<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>details</title>
     <link rel="stylesheet" href="{{asset('/css/swip.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/output.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/style.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/swiper-bundle.min.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/aos.css')}}" />
  </head>
  <body>
      @include('compnant.header')
    

    <main>
      <div class="details_container" id="details">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            @if($newsItem->image && is_array($newsItem->image) && count($newsItem->image) > 0)
              @foreach($newsItem->image as $image)
                <div class="swiper-slide">
                  <img src="data:image/jpeg;base64,{{ $image }}" alt="" />
                </div>
              @endforeach
            @else
              <div class="swiper-slide">
                <img src="{{ asset('/images/news.jpg') }}" alt="" />
              </div>
            @endif
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="line"></div>
        <h2>{{ $newsItem->title }}</h2>
        <p>
             {{ $newsItem->content }}
        </p>
        <p>
           {{ $newsItem->published_at ? $newsItem->published_at->format('d F Y') : 'N/A' }}
        </p>
      </div>
    </main>

     @include('compnant.footer')

         <script src="{{asset('/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('/js/swiper-element-bundle.min.js')}}"></script>
    <script src="{{asset('/js/aos.js')}}"></script>
     

    <script src="{{asset('/js/main.js')}}"></script>

  </body>
</html>
