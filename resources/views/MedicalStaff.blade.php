<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MedicalFtaff</title>
  <link rel="stylesheet" href="{{asset('/css/swip.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/output.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/style.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/swiper-bundle.min.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/aos.css')}}" />
  </head>
  <body>
     @include('compnant.header')

    <main>
      <h2 class="heads">الكادر الطبي</h2>

      <div class="container">
        @foreach($medicalStaff as $staff)
        <div class="doctor" data-aos="zoom-in" data-aos-duration="1000">
          <img src="{{ $staff->image ? 'data:image/jpeg;base64,' . $staff->image : asset('/images/doctor.jpg') }}" alt="" />
          <p>{{ $staff->name }}</p>
          <dl type="circle">
            <dd>{{ $staff->specialty }}</dd>
            <li>{{ $staff->bio }}</li>
          </dl>
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
