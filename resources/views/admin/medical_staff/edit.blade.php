<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/admin.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>تعديل الطبيب</title>
</head>
<body>
    <div class="content-header">
        <h2>تعديل الطبيب</h2>
        <p>قم بتعديل بيانات الطبيب</p>
    </div>

    <div class="content-card">
        <form id="doctor-form" action="{{ route('medical_staff.update', $staff->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- الاسم -->
            <div class="form-group">
                <label for="name">اسم الطبيب</label>
                <input type="text" id="name" name="name" class="form-control" required value="{{ $staff->name }}">
            </div>

            <!-- التخصص -->
            <div class="form-group">
                <label for="specialty">التخصص</label>
                <input type="text" id="specialty" name="specialty" class="form-control" required value="{{ $staff->specialty }}">
            </div>

            <!-- الصورة -->
            <div class="form-group">
                <label for="photo">صورة الطبيب</label>
                <div class="file-upload-wrapper">
                    <input type="file" id="photo" name="photo" class="form-control" accept="image/*" onchange="previewImage(event)">
                    <label for="photo" class="file-upload-label">
                        <i class="fas fa-upload"></i> اختر صورة
                    </label>
                </div>
                <small class="text-muted">يفضل صورة بخلفية بيضاء (400x400 بكسل)</small>
                @if($staff->image)
                    <div class="current-image mt-2">
                        <p>الصورة الحالية:</p>
                        @if(str_starts_with($staff->image, 'iVBOR'))
                            <img src="data:image/png;base64,{{ $staff->image }}" alt="الصورة الحالية" class="thumbnail">
                        @else
                            <img src="{{ asset('storage/' . $staff->image) }}" alt="الصورة الحالية" class="thumbnail">
                        @endif
                    </div>
                @endif
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
                <textarea id="bio" name="bio" class="form-control" rows="6">{{ $staff->bio }}</textarea>
                <small class="text-muted">يمكنك استخدام تنسيق نصي بسيط</small>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> حفظ التعديلات
                </button>
                <a href="{{ route('medical_staff.index') }}" class="btn btn-secondary">
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
            document.getElementById('photo').value = '';
            document.getElementById('preview').src = '#';
            document.getElementById('image-preview').style.display = 'none';
        }
    </script>
</body>
</html>