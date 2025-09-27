<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة محتوى العيادة</title>
    <link rel="stylesheet" href="{{asset('/css/admin.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
       
</head>
<body>
    <div class="admin-container">
        <!-- شريط التنقل -->
        <nav class="admin-nav">
            <div class="logo">
                <img src="{{asset('/images/logo.png')}}" alt="شعار العيادة">
                <h1>إدارة المحتوى</h1>
            </div>
        </nav>

        <!-- القائمة الجانبية -->
        <aside class="admin-sidebar">
            <ul>
                <li class="active"><a href="{{ route('homedash') }}"><i class="icon-dashboard fas fa-tachometer-alt"></i> لوحة التحكم</a></li>
              
                <li><a href="{{ route('servicesdash') }}"><i class="icon-services fas fa-procedures"></i> الخدمات</a></li>
                <li><a href="{{ route('doctordash') }}"><i class="icon-doctors fas fa-user-md"></i> الأطباء</a></li>
                <li><a href="{{ route('newsdash') }}"><i class="icon-news far fa-newspaper"></i> الأخبار</a></li>
              
            </ul>
        </aside>

        <!-- المحتوى الرئيسي -->
        <main class="admin-content">
            <div class="content-header">
                <h2>لوحة التحكم</h2>
                <p>مرحباً بك في نظام إدارة محتوى عيادة الشفاء الطبية</p>
            </div>

            <!-- إحصائيات سريعة -->
            <div class="quick-stats">
                <div class="stat-card">
                    <h3>5</h3>
                    <p>صفحات</p>
                </div>
                <div class="stat-card">
                    <h3>8</h3>
                    <p>خدمات</p>
                </div>
                <div class="stat-card">
                    <h3>6</h3>
                    <p>أطباء</p>
                </div>
                <div class="stat-card">
                    <h3>12</h3>
                    <p>أخبار</p>
                </div>
            </div>

            <!-- قسم إدارة الصفحات -->
            <section class="content-section">
                <div class="section-header">
                    <h3>آخر التعديلات</h3>
                    <a href="#" class="btn">إضافة جديد</a>
                </div>
                
                <div class="content-table">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>العنوان</th>
                                <th>النوع</th>
                                <th>آخر تعديل</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>الصفحة الرئيسية</td>
                                <td>صفحة</td>
                                <td>2023/10/15</td>
                                <td>
                                    <button class="btn-edit"><i class="icon-edit"></i></button>
                                    <button class="btn-preview"><i class="icon-eye"></i></button>
                                </td>
                            </tr>
                            <!-- صفوف أخرى -->
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

    <script src="{{asset('/js/admin.js')}}"></script>
</body>
</html>