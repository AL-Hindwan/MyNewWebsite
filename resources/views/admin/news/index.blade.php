<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الأخبار - عيادة الشفاء</title>
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
                <li class="active"><a href="{{ route('news.index') }}"><i class="far fa-newspaper"></i> الأخبار</a></li>
            </ul>
        </aside>

        <!-- المحتوى الرئيسي -->
        <main class="admin-content">
            <div class="content-header">
                <h2>إدارة الأخبار والتحديثات</h2>
                <p>يمكنك إضافة أخبار العيادة وتحديثاتها للمرضى والزوار</p>
            </div>

            <div id="success-alert" class="alert alert-success" style="display:none;">
                <span id="alert-message"></span>
                <button class="close-alert">&times;</button>
            </div>

            <div class="content-card">
                <div class="card-header">
                    <h3 class="card-title">آخر الأخبار</h3>
                    <a href="{{ route('new_news') }}" class="btn">
                        <i class="fas fa-plus"></i> إضافة خبر جديد
                    </a>
                </div>

                <div class="content-table">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>الصورة</th>
                                <th>عنوان الخبر</th>
                                <th>التاريخ</th>
                                <th></th>
                                <th></th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($news as $newsItem)
                            <tr>
                                <td>{{ $newsItem->id }}</td>
                                <td>
                                    @if($newsItem->image && is_array($newsItem->image) && count($newsItem->image) > 0)
                                        @if(str_starts_with($newsItem->image[0], 'iVBOR'))
                                            <img src="data:image/png;base64,{{ $newsItem->image[0] }}" alt="{{ $newsItem->title }}" class="thumbnail">
                                        @else
                                            <img src="{{ asset('storage/' . $newsItem->image[0]) }}" alt="{{ $newsItem->title }}" class="thumbnail">
                                        @endif
                                    @elseif($newsItem->image && !is_array($newsItem->image))
                                        @if(str_starts_with($newsItem->image, 'iVBOR'))
                                            <img src="data:image/png;base64,{{ $newsItem->image }}" alt="{{ $newsItem->title }}" class="thumbnail">
                                        @else
                                            <img src="{{ asset('storage/' . $newsItem->image) }}" alt="{{ $newsItem->title }}" class="thumbnail">
                                        @endif
                                    @else
                                        <img src="{{ asset('images/news.jpg') }}" alt="صورة افتراضية" class="thumbnail">
                                    @endif
                                </td>
                                <td>{{ $newsItem->title }}</td>
                                <td>{{ $newsItem->published_at ? $newsItem->published_at->format('Y/m/d') : 'غير محدد' }}</td>
                                <td>{{ Str::limit($newsItem->summary, 30) }}</td>
                                <td>{{ Str::limit($newsItem->content, 30) }}</td>
                                <td>
                                    <a href="{{ route('news.edit', $newsItem->id) }}" class="btn-edit"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('details', $newsItem->id) }}" class="btn-preview"><i class="fas fa-eye"></i></a>
                                    <form action="{{ route('news.destroy', $newsItem->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete" onclick="return confirm('هل أنت متأكد من حذف هذا الخبر؟')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


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

            // تأكيد قبل الحذف
            document.querySelectorAll('.btn-delete').forEach(button => {
                button.addEventListener('click', function(e) {
                    if (confirm('هل أنت متأكد من حذف هذا الخبر؟')) {
                        const row = this.closest('tr');
                        row.style.opacity = '0';
                        setTimeout(() => {
                            row.remove();
                            showAlert('تم حذف الخبر بنجاح');
                        }, 300);
                    }
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