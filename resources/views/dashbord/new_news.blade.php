<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/admin.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>إضافة خبر جديد</title>
</head>
<body>
    <!-- داخل main class="admin-content" -->
<div class="content-header">
    <h2>إضافة خبر جديد</h2>
    <p>املأ النموذج لإضافة خبر جديد إلى الموقع</p>
</div>

<div class="content-card">
    <form id="news-form">
        <div class="form-group">
            <label for="news-title">عنوان الخبر</label>
            <input type="text" id="news-title" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="news-image">صورة الخبر</label>
            <input type="file" id="news-image" class="form-control" accept="image/*">
            <small class="text-muted">الحجم الموصى به: 1200x800 بكسل</small>
            <div class="image-preview mt-2" id="news-image-preview" style="display:none;">
                <img id="news-preview" src="#" alt="معاينة صورة الخبر" class="thumbnail">
            </div>
        </div>
        
        <div class="form-group">
            <label for="news-summary">ملخص الخبر</label>
            <textarea id="news-summary" class="form-control" rows="3" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="news-content">محتوى الخبر</label>
            <textarea id="news-content" class="form-control" rows="10"></textarea>
            <small class="text-muted">يمكنك استخدام HTML لتنسيق المحتوى</small>
        </div>
        
     
        
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> حفظ الخبر
            </button>
            <a href="{{ route('newsdash') }}" class="btn btn-secondary">
                <i class="fas fa-times"></i> إلغاء
            </a>
        </div>
    </form>
</div>

<script>
// سكريبت لمعاينة الصورة
document.getElementById('news-image').addEventListener('change', function(e) {
    const preview = document.getElementById('news-preview');
    const previewContainer = document.getElementById('news-image-preview');
    
    if (this.files && this.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            preview.src = e.target.result;
            previewContainer.style.display = 'block';
        }
        
        reader.readAsDataURL(this.files[0]);
    }
});
</script>
</body>
</html>