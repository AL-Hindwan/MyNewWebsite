<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>servies</title>
     <link rel="stylesheet" href="{{asset('/css/swip.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/output.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/style.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/swiper-bundle.min.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/aos.css')}}" />
  </head>
  <body>
    @include('compnant.header')

    <main>
      <h2 class="heads" id="b">الخدمات والتخصصات</h2>

      <div class="container">
        @foreach($services as $service)
        <div class="item" data-aos="fade-up" data-aos-duration="1500">
           <img src="{{ $service->icon ? 'data:image/jpeg;base64,' . $service->icon : asset('/images/kid.png') }}" alt="" />
          <p>{{ $service->title }}</p>
          <ul type="circle">
            <li>{{ $service->description }}</li>
            @if($service->details)
            <li>{{ $service->details }}</li>
            @endif
          </ul>
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
