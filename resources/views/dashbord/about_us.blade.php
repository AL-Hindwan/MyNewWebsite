<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة صفحة من نحن - عيادة الشفاء</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="admin-container">
        <!-- شريط التنقل العلوي -->
        <nav class="admin-nav">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="شعار العيادة">
                <h1>إدارة المحتوى</h1>
            </div>
            <div class="user-actions">
                <span class="username">مدير النظام</span>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" id="logout-btn" style="background: none; border: none; color: inherit; cursor: pointer;">
                        <i class="fas fa-sign-out-alt"></i> تسجيل الخروج
                    </button>
                </form>
            </div>
        </nav>

        <!-- القائمة الجانبية -->
        <aside class="admin-sidebar">
            <ul>
                <li><a href="{{ route('homedash') }}"><i class="fas fa-tachometer-alt"></i> لوحة التحكم</a></li>
                <li><a href="{{ route('servicesdash') }}"><i class="fas fa-procedures"></i> الخدمات</a></li>
                <li><a href="{{ route('doctordash') }}"><i class="fas fa-user-md"></i> الأطباء</a></li>
                <li><a href="{{ route('newsdash') }}"><i class="far fa-newspaper"></i> الأخبار</a></li>
                <li class="active"><a href="{{ route('about_us.dashboard') }}"><i class="fas fa-info-circle"></i> من نحن</a></li>
            </ul>
        </aside>

        <!-- المحتوى الرئيسي -->
        <main class="admin-content">
            <div class="content-header">
                <h2>إدارة صفحة من نحن</h2>
                <p>يمكنك تحديث محتوى صفحة من نحن للموقع</p>
            </div>

            @if(session('success'))
            <div id="success-alert" class="alert alert-success">
                <span id="alert-message">{{ session('success') }}</span>
                <button class="close-alert">&times;</button>
            </div>
            @endif

            <div class="content-card">
                <div class="card-header">
                    <h3 class="card-title">تعديل صفحة من نحن</h3>
                </div>

                <form action="{{ route('about_us.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="content">المحتوى النصي</label>
                        <textarea name="content" id="content" class="form-control" rows="10" required>{{ $aboutUs ? $aboutUs->content : '' }}</textarea>
                        <small class="text-muted">يمكنك استخدام HTML لتنسيق المحتوى</small>
                    </div>

                    <div class="form-group">
                        <label for="image">الصورة (اختياري)</label>
                        <input type="file" name="image" id="image" class="form-control" accept="image/*">
                        <small class="text-muted">الحجم الموصى به: 1200x800 بكسل</small>
                        @if($aboutUs && $aboutUs->image)
                            <div class="current-image mt-2">
                                <p>الصورة الحالية:</p>
                                @if(str_starts_with($aboutUs->image, 'iVBOR'))
                                    <img src="data:image/png;base64,{{ $aboutUs->image }}" alt="صورة من نحن" class="thumbnail">
                                @else
                                    <img src="{{ asset('storage/' . $aboutUs->image) }}" alt="صورة من نحن" class="thumbnail">
                                @endif
                            </div>
                        @endif
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> حفظ التغييرات
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script src="{{ asset('js/admin.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // إغلاق التنبيهات
            document.querySelectorAll('.close-alert').forEach(button => {
                button.addEventListener('click', function() {
                    this.closest('.alert').style.display = 'none';
                });
            });

            // عرض رسالة نجاح
            function showAlert(message) {
                const alert = document.getElementById('success-alert');
                document.getElementById('alert-message').textContent = message;
                alert.style.display = 'flex';
                setTimeout(() => {
                    alert.style.display = 'none';
                }, 3000);
            }
        });
    </script>
</body>
</html>