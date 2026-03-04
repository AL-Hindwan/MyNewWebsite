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
            <div class="nav-actions">
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn-logout">تسجيل الخروج</button>
                </form>
            </div>
        </nav>

        <!-- القائمة الجانبية -->
        <aside class="admin-sidebar">
            <ul>
                <li class="active"><a href="{{ route('homedash') }}"><i class="icon-dashboard fas fa-tachometer-alt"></i> لوحة التحكم</a></li>

                <li><a href="{{ route('servicesdash') }}"><i class="icon-services fas fa-procedures"></i> الخدمات</a></li>
                <li><a href="{{ route('doctordash') }}"><i class="icon-doctors fas fa-user-md"></i> الأطباء</a></li>
                <li><a href="{{ route('newsdash') }}"><i class="icon-news far fa-newspaper"></i> الأخبار</a></li>
                <li><a href="{{ route('about_us.dashboard') }}"><i class="fas fa-info-circle"></i> من نحن</a></li>

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
                    <h3>{{ $pagesCount }}</h3>
                    <p>صفحات</p>
                </div>
                <div class="stat-card">
                    <h3>{{ $servicesCount }}</h3>
                    <p>خدمات</p>
                </div>
                <div class="stat-card">
                    <h3>{{ $doctorsCount }}</h3>
                    <p>أطباء</p>
                </div>
                <div class="stat-card">
                    <h3>{{ $newsCount }}</h3>
                    <p>أخبار</p>
                </div>
            </div>

            <!-- قسم إدارة الصفحات -->
            <section class="content-section">
                <div class="section-header">
                    <h3>آخر التعديلات</h3>
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
                            @foreach($recentItems as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item['title'] }}</td>
                                <td>{{ $item['type'] }}</td>
                                <td>{{ $item['updated_at'] ? $item['updated_at']->format('Y/m/d') : 'غير محدد' }}</td>
                                <td>
                                    <a href="{{ route($item['route'], $item['id']) }}" class="btn-edit" title="تعديل"><i class="fas fa-edit"></i></a>
                                    @if($item['type'] == 'خبر')
                                        <a href="{{ route('details', $item['id']) }}" class="btn-preview" title="عرض"><i class="fas fa-eye"></i></a>
                                    @elseif($item['type'] == 'طبيب')
                                        <a href="{{ route('medical_staff.show', $item['id']) }}" class="btn-preview" title="عرض"><i class="fas fa-eye"></i></a>
                                    @elseif($item['type'] == 'خدمة')
                                        <a href="{{ route('services.show', $item['id']) }}" class="btn-preview" title="عرض"><i class="fas fa-eye"></i></a>
                                    @else
                                        <button class="btn-preview" title="عرض" disabled><i class="fas fa-eye"></i></button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

    <script src="{{asset('/js/admin.js')}}"></script>
</body>
</html>