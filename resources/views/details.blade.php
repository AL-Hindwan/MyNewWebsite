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
            <div class="swiper-slide">
                 <img src="{{asset('/images/news.jpg')}}" alt="" />
            </div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="line"></div>
        <h2>افتتاح قسم الأشعة الجديد</h2>
        <p>
         🏥 افتتاح قسم الأشعة والتصوير الطبي الحديث في عيادة الشفاء – صنعاء
📅 التاريخ: 10 يوليو 2025
📍 الموقع: صنعاء

تعلن عيادة الشفاء الطبية عن افتتاح قسم الأشعة والتصوير الطبي الحديث، ضمن جهودها المستمرة لتوسيع نطاق خدماتها وتحسين جودة الرعاية الصحية المقدمة للمرضى.

🔬 الأجهزة المتوفرة:
يضم القسم أحدث أجهزة التصوير الطبي، ومنها:

الأشعة السينية الرقمية (Digital X-Ray)

الموجات فوق الصوتية (Ultrasound)

أشعة الأسنان البانورامية

✅ مميزات القسم:
تقارير دقيقة وسريعة

خصوصية عالية للمرضى

ارتباط مباشر مع الطبيب المعالج ضمن نظام إلكتروني موحد

تجهيز وفق أعلى معايير السلامة والدقة

إشراف مباشر من فريق مؤهل من فنيي الأشعة المتخصصين

 :تصريح الإدارة الطبية
:قال الدكتور أحمد العزي، المدير الطبي للعيادة

"نهدف من خلال هذا التوسع إلى تقديم خدمات تشخيصية متقدمة تساعد في الكشف المبكر والدقيق عن مختلف الحالات المرضية، بما يسهم في تحسين نتائج العلاج وتقليل مدة التعافي."

🕘 أوقات العمل:
📆 من السبت إلى الخميس
🕗 من الساعة 8 صباحًا حتى 9 مساءً
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
