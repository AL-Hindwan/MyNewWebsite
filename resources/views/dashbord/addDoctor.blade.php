<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/admin.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>إضافة طبيب جديد</title>
</head>
<body>
    <div class="content-header">
        <h2>إضافة طبيب جديد</h2>
        <p>املأ البيانات الأساسية للطبيب</p>
    </div>

    <div class="content-card">
        <form id="doctor-form">
            <!-- الاسم -->
            <div class="form-group">
                <label for="doctor-name">اسم الطبيب</label>
                <input type="text" id="doctor-name" class="form-control" required placeholder="أدخل اسم الطبيب بالكامل">
            </div>
            
            <!-- التخصص -->
            <div class="form-group">
                <label for="specialty">التخصص</label>
                <input type="text" id="specialty" class="form-control" required placeholder="تخصص الطبيب (مثال: جراحة العظام)">
            </div>
            
            <!-- الصورة -->
            <div class="form-group">
                <label for="doctor-image">صورة الطبيب</label>
                <div class="file-upload-wrapper">
                    <input type="file" id="doctor-image" class="form-control" accept="image/*" onchange="previewImage(event)">
                    <label for="doctor-image" class="file-upload-label">
                        <i class="fas fa-upload"></i> اختر صورة
                    </label>
                </div>
                <small class="text-muted">يفضل صورة بخلفية بيضاء (400x400 بكسل)</small>
                <div class="image-preview mt-2" id="image-preview" style="display:none;">
                    <img id="preview" src="#" alt="معاينة الصورة" class="thumbnail">
                    <button type="button" class="btn-remove-image" onclick="removeImage()">
                        <i class="fas fa-times"></i> إزالة
                    </button>
                </div>
            </div>
            
            <!-- النبذة -->
            <div class="form-group">
                <label for="bio">نبذة تعريفية</label>
                <textarea id="bio" class="form-control" rows="6" placeholder="معلومات عن الطبيب، المؤهلات، الخبرات..."></textarea>
                <small class="text-muted">يمكنك استخدام تنسيق نصي بسيط</small>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> حفظ الطبيب
                </button>
                <a href="{{ route('doctordash') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i> إلغاء
                </a>
            </div>
        </form>
    </div>

    <script>
        // معاينة الصورة
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('preview');
            const previewContainer = document.getElementById('image-preview');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    previewContainer.style.display = 'block';
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        // إزالة الصورة
        function removeImage() {
            document.getElementById('doctor-image').value = '';
            document.getElementById('preview').src = '#';
            document.getElementById('image-preview').style.display = 'none';
        }

        // إرسال النموذج
        document.getElementById('doctor-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('تم حفظ بيانات الطبيب بنجاح!');
            // يمكنك إضافة كود AJAX هنا للإرسال
        });
    </script>

   
</body>
</html>