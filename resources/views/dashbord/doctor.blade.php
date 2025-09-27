<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الأطباء - عيادة الشفاء</title>
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
                <a href="#" id="logout-btn">
                    <i class="fas fa-sign-out-alt"></i> تسجيل الخروج
                </a>
            </div>
        </nav>

        <!-- القائمة الجانبية -->
        <aside class="admin-sidebar">
            <ul>
                <li><a href="{{ route('homedash') }}"><i class="fas fa-tachometer-alt"></i> لوحة التحكم</a></li>
                <li><a href="{{ route('servicesdash') }}"><i class="fas fa-procedures"></i> الخدمات</a></li>
                <li class="active"><a href="{{ route('doctordash') }}"><i class="fas fa-user-md"></i> الأطباء</a></li>
                <li><a href="{{ route('newsdash') }}"><i class="far fa-newspaper"></i> الأخبار</a></li>
            </ul>
        </aside>

        <!-- المحتوى الرئيسي -->
        <main class="admin-content">
            <div class="content-header">
                <h2>إدارة الكادر الطبي</h2>
                <p>قائمة بأطباء العيادة والمعلومات الخاصة بهم</p>
            </div>

            <div id="success-alert" class="alert alert-success" style="display:none;">
                <span id="alert-message"></span>
                <button class="close-alert">&times;</button>
            </div>

            <div class="content-card">
                <div class="card-header">
                    <h3 class="card-title">قائمة الأطباء</h3>
                    <a href="{{ route('addDoctor') }}" class="btn">
                        <i class="fas fa-plus"></i> إضافة طبيب جديد
                    </a>
                </div>
                
                <div class="content-table">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>الصورة</th>
                                <th>اسم الطبيب</th>
                                <th>التخصص</th>
                                <th></th>
                                <th></th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- طبيب 1 -->
                            <tr>
                                <td>1</td>
                                <td><img src="{{ asset('images/doctor1.jpg') }}" alt="د. عادل مطهر" class="thumbnail"></td>
                                <td>د. عادل مطهر</td>
                                <td>أخصائي العظام والمفاصل</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="edit-doctor.html" class="btn-edit"><i class="fas fa-edit"></i></a>
                                    <a href="doctor-profile.html" class="btn-preview"><i class="fas fa-eye"></i></a>
                                    <button class="btn-delete" data-id="1"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                         
                            
                       
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
                    if (confirm('هل أنت متأكد من حذف هذا الطبيب؟')) {
                        const row = this.closest('tr');
                        row.style.opacity = '0';
                        setTimeout(() => {
                            row.remove();
                            showAlert('تم حذف الطبيب بنجاح');
                        }, 300);
                    }
                });
            });

            // زر تسجيل الخروج
            document.getElementById('logout-btn').addEventListener('click', function(e) {
                e.preventDefault();
                if(confirm('هل أنت متأكد من تسجيل الخروج؟')) {
                    window.location.href = 'login.html';
                }
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