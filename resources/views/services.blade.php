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
        <div class="item" data-aos="fade-up" data-aos-duration="1500">
           <img src="{{asset('/images/kid.png')}}" alt="" />
          <p>طب الأطفال</p>
          <ul type="circle">
            <li>الفحوصات الروتينية والنمو</li>
            <li>علاج الأمراض الموسمية وإلتهابات الأطفال</li>
            <li>التطعيمات الأساسية</li>
          </ul>
        </div>

        <div class="item" data-aos="fade-up" data-aos-duration="1500">
          <img src="{{asset('/images/kid.png')}}" alt="" />
          <p>طب الأطفال</p>
          <ul type="circle">
            <li>الفحوصات الروتينية والنمو</li>
            <li>علاج الأمراض الموسمية وإلتهابات الأطفال</li>
            <li>التطعيمات الأساسية</li>
          </ul>
        </div>

        <div class="item" data-aos="fade-up" data-aos-duration="1500">
   <img src="{{asset('/images/kid.png')}}" alt="" />
          <p>طب الأطفال</p>
          <ul type="circle">
            <li>الفحوصات الروتينية والنمو</li>
            <li>علاج الأمراض الموسمية وإلتهابات الأطفال</li>
            <li>التطعيمات الأساسية</li>
          </ul>
        </div>
        <div class="item" data-aos="fade-up" data-aos-duration="1500">
           <img src="{{asset('/images/kid.png')}}" alt="" />
          <p>طب الأطفال</p>
          <ul type="circle">
            <li>الفحوصات الروتينية والنمو</li>
            <li>علاج الأمراض الموسمية وإلتهابات الأطفال</li>
            <li>التطعيمات الأساسية</li>
          </ul>
        </div>
        <div class="item" data-aos="fade-up" data-aos-duration="1500">
            <img src="{{asset('/images/kid.png')}}" alt="" />
          <p>طب الأطفال</p>
          <ul type="circle">
            <li>الفحوصات الروتينية والنمو</li>
            <li>علاج الأمراض الموسمية وإلتهابات الأطفال</li>
            <li>التطعيمات الأساسية</li>
          </ul>
        </div>
        <div class="item" data-aos="fade-up" data-aos-duration="1500">
           <img src="{{asset('/images/kid.png')}}" alt="" />
          <p>طب الأطفال</p>
          <ul type="circle">
            <li>الفحوصات الروتينية والنمو</li>
            <li>علاج الأمراض الموسمية وإلتهابات الأطفال</li>
            <li>التطعيمات الأساسية</li>
          </ul>
        </div>
      </div>
    </main>
  @include('compnant.footer')

         <script src="{{asset('/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('/js/swiper-element-bundle.min.js')}}"></script>
    <script src="{{asset('/js/aos.js')}}"></script>
     

    <script src="{{asset('/js/main.js')}}"></script>
  </body>
</html>
