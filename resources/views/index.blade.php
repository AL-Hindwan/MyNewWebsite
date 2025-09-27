<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{asset('/css/swip.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/output.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/style.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/swiper-bundle.min.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/aos.css')}}" />
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     

   
    </head>
    <body>
   @include('compnant.header')

        <main>

            
        


        
            <div class="flex gap-[70px] justify-center items-center w-full;">
                <img src="{{asset('/images/62363.png')}}" alt="" class="h-[500px]" />
                <img
                    src="{{asset('/images/logo.png')}}"
                    alt=""
                    class="h-[499px] w-[499px] opacity-10"
                />
                <p
                    class="text-[#3C9AFF] text-[55px] font-bold"
                    style="
                        position: absolute;
                        right: 130px;
                        font-family: Tienne;
                    "
                >
                    نرعاك بثقة, نداويك بعناية
                </p>
                <div  id="hidden">
                 <p
                    style="
                      
                        font-family: Tienne;
                        font-size: 55px;
                        font-weight: bold;
                        color: red;
                    ">ندفنك بأبشع الطرق</p>
                </div>
               

             
            </div>
            <div id="line"></div>

            <h2 class="heads " id="who-us">من نحن</h2>

            <div id="con1" data-aos="fade-up" data-aos-duration="1500">
                <div id="who">
                    <img src="{{asset('/images/who.jpg')}}" alt="" id="who_img" />
                    <p>
                        عيادة الشفاء الطبية هي مركز صحي حديث يهدف إلى توفير
                        رعاية طبية متكاملة وفق أعلى المعايير، وبأيدي كادر طبي
                        متميز. نلتزم بتقديم تجربة علاجية مريحة وآمنة، في بيئة
                        ترحب بالجميع وتضع صحة المريض في المقام الأول. نعمل على
                        تعزيز الثقة بين الطبيب والمراجع، ونسعى لبناء علاقة صحية
                        مستمرة تقوم على الاحترام والاهتمام.
                    </p>
                </div>
            </div>

           


            <h2 class="heads" id="servies">الخدمات والتخصصات</h2>

            <div class="container">
                <div class="item" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{asset('/images/kid.png')}}" alt="" />
                    <p>طب الأطفال</p>
                    <ul type="circle">
                        <li>الفحوصات الروتينية والنمو</li>
                        <li>علاج الأمراض الموسمية وإلتهابات الأطفال</li>
                        <li>التطعيمات الأساسية</li>
                    </ul>
                </div>

                <div class="item" data-aos="fade-up" data-aos-duration="2000">
                <img src="{{asset('/images/kid.png')}}" alt="" />
                    <p>طب الأطفال</p>
                    <ul type="circle">
                        <li>الفحوصات الروتينية والنمو</li>
                        <li>علاج الأمراض الموسمية وإلتهابات الأطفال</li>
                        <li>التطعيمات الأساسية</li>
                    </ul>
                </div>
                <div class="item" data-aos="fade-up" data-aos-duration="3000">
             <img src="{{asset('/images/kid.png')}}" alt="" />
                    <p>طب الأطفال</p>
                    <ul type="circle">
                        <li>الفحوصات الروتينية والنمو</li>
                        <li>علاج الأمراض الموسمية وإلتهابات الأطفال</li>
                        <li>التطعيمات الأساسية</li>
                    </ul>
                </div>
            
            </div>

            <div class="center-container">
                <a href="{{route('services')}}" class="see_details">رؤية المزيد</a>
                
                
            </div>
                

            <h2 class="heads" id="staff">الكادر الطبي</h2>

            <div class="container">
                <div
                    class="doctor"
                    data-aos="zoom-in-left"
                    data-aos-duration="1000"
                >
                    <img src="{{asset('/images/doctor.jpg')}}" alt="" />
                    <p>د. عادل مطهر</p>
                    <dl type="circle">
                        <dd>أخصائي العظام والمفاصل</dd>
                        <li>علاج الانزلاقات والغضاريف</li>
                        <li>إصابات الملاعب والآلام المزمنة</li>
                    </dl>
                </div>
                <div
                    class="doctor"
                    data-aos="zoom-out-down"
                    data-aos-duration="1000"
                >
        <img src="{{asset('/images/doctor.jpg')}}" alt="" />
                    <p>د. عادل مطهر</p>
                    <dl type="circle">
                        <dd>أخصائي العظام والمفاصل</dd>
                        <li>علاج الانزلاقات والغضاريف</li>
                        <li>إصابات الملاعب والآلام المزمنة</li>
                    </dl>
                </div>
                <div
                    class="doctor"
                    data-aos="zoom-in-right"
                    data-aos-duration="1000"
                >
                      <img src="{{asset('/images/doctor.jpg')}}" alt="" />
                    <p>د. عادل مطهر</p>
                    <dl type="circle">
                        <dd>أخصائي العظام والمفاصل</dd>
                        <li>علاج الانزلاقات والغضاريف</li>
                        <li>إصابات الملاعب والآلام المزمنة</li>
                    </dl>
                </div>
            </div>

            <div class="center-container">
                          <a href="{{route('MedicalStaff')}}" class="see_details">رؤية المزيد</a>

            </div>

            <h2 class="heads" id="news">اخر الأخبار</h2>

            <div class="container">
                <div class="news" data-aos="zoom-in" data-aos-duration="1500">
                     <img src="{{asset('/images/news.jpg')}}" alt="" />
                    <h3>افتتاح قسم الأشعة الجديد</h3>
                    <p>
                        تم تدشين قسم الأشعة الجديد بأحدث الأجهزة لتوفير خدمة
                        دقيقة وسريعة للمراجعين.
                    </p>
                    <span>10 يوليو 2025</span>
                    <a href="">التفاصيل</a>
                </div>
                

                <div class="news" data-aos="zoom-in" data-aos-duration="1500">
                       <img src="{{asset('/images/news.jpg')}}" alt="" />
                    <h3>افتتاح قسم الأشعة الجديد</h3>
                    <p>
                        تم تدشين قسم الأشعة الجديد بأحدث الأجهزة لتوفير خدمة
                        دقيقة وسريعة للمراجعين.
                    </p>
                    <span>10 يوليو 2025</span>
                    <a href="">التفاصيل</a>
                </div>

                <div class="news" data-aos="zoom-in" data-aos-duration="1500">
                       <img src="{{asset('/images/news.jpg')}}" alt="" />
                    <h3>افتتاح قسم الأشعة الجديد</h3>
                    <p>
                        تم تدشين قسم الأشعة الجديد بأحدث الأجهزة لتوفير خدمة
                        دقيقة وسريعة للمراجعين.
                    </p>
                    <span>10 يوليو 2025</span>
                    <a href="">التفاصيل</a>
                </div>
            </div>

            <div class="center-container">
                         <a href="{{route('news')}}" class="see_details">رؤية المزيد</a>

            </div>

            <h2 class="heads" id="contact">تواصل معنا</h2>

            <div class="media">
                <a href=""><img src="{{asset('/images/whatsapp.png')}}" alt="" /></a>
                <a href=""><img src="{{asset('/images/facebook.png')}}" alt="" /></a>
                <a href=""><img src="{{asset('/images/insta.png')}}" alt="" /></a>
            </div>
            <div class="center-container">
                <div class="contact_container">
                    <p>نحن هنا لخدمتك والإجابة على استفساراتك بكل سرور</p>
                    <img src="{{asset('/images/contact.png')}}" alt="" />

                    <form action="">
                        <input
                            type="text"
                            placeholder="الاسم"
                            required
                            data-aos="fade-up"
                            data-aos-duration="1500"
                        />
                        <input
                            type="email"
                            placeholder="البريد الإلكتروني"
                            required
                            data-aos="fade-up"
                            data-aos-duration="1500"
                        />
                        <input
                            type="tel"
                            placeholder="رقم الهاتف"
                            required
                            data-aos="fade-up"
                            data-aos-duration="1500"
                        />
                        <textarea
                            placeholder="رسالتك"
                            data-aos="fade-up"
                            data-aos-duration="1500"
                        ></textarea>
                        <button class="send_message">إرسال</button>
                    </form>
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
