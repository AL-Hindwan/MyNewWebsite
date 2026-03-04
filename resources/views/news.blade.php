<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>news</title>
    <link rel="stylesheet" href="{{asset('/css/swip.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/output.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/style.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/swiper-bundle.min.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/aos.css')}}" />
  </head>
  <body>
   @include('compnant.header')

    <main>
      <h2 class="heads">اخر الأخبار</h2>

      <div class="container2">
        @foreach($news as $item)
        <div class="news_shape" data-aos="fade-up" data-aos-duration="1000">
      <img src="{{ is_array($item->image) && count($item->image) > 0 ? 'data:image/jpeg;base64,' . $item->image[0] : asset('/images/news.jpg') }}" alt="" />
          <p class="title">{{ $item->title }}</p>
          <p class="text">
            {{ $item->summary ?: Str::limit($item->content, 100) }}
          </p>
          <p class="date">{{ $item->published_at ? $item->published_at->format('d F Y') : 'N/A' }}</p>
          <a href="{{ route('details', $item->id) }}"> التفاصيل</a>
        </div>
        @endforeach
      </div>
    </main>

     @include('compnant.footer')

         <script src="{{asset('/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('/js/swiper-element-bundle.min.js')}}"></script>
    <script src="{{asset('/js/aos.js')}}"></script>
     

    <script src="{{asset('/js/main.js')}}"></script>
  </body>
</html>
