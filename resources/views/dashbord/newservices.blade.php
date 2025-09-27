<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{asset('/css/admin.css')}}">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <!-- داخل main class="admin-content" -->
<div class="content-header">
    <h2>إضافة خدمة جديدة</h2>
    <p>املأ النموذج لإضافة خدمة جديدة إلى الموقع</p>
</div>

<div class="content-card">
    <form id="service-form">
        <div class="form-group">
            <label for="service-name">اسم الخدمة</label>
            <input type="text" id="service-name" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="service-image">صورة الخدمة</label>
            <input type="file" id="service-image" class="form-control" accept="image/*">
            <small class="text-muted">الحجم الموصى به: 800x600 بكسل</small>
            <div class="image-preview mt-2" id="image-preview" style="display:none;">
                <img id="preview" src="#" alt="معاينة الصورة" class="thumbnail">
            </div>
        </div>
        
        <div class="form-group">
            <label for="service-description">وصف الخدمة</label>
            <textarea id="service-description" class="form-control" rows="5" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="service-details">تفاصيل الخدمة</label>
            <textarea id="service-details" class="form-control" rows="8"></textarea>
            <small class="text-muted">يمكنك استخدام HTML لتنسيق المحتوى</small>
        </div>
        
        
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> حفظ الخدمة
            </button>
            <a href="{{ route('servicesdash') }}" class="btn btn-secondary">
                <i class="fas fa-times"></i> إلغاء
            </a>
        </div>
    </form>
</div>
</body>
</html>