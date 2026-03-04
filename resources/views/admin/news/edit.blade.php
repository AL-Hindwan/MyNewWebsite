<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/admin.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>تعديل الخبر</title>
</head>
<body>
    <!-- داخل main class="admin-content" -->
<div class="content-header">
    <h2>تعديل الخبر</h2>
    <p>قم بتعديل بيانات الخبر</p>
</div>

<div class="content-card">
    <form id="news-form" action="{{ route('news.update', $newsItem->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">عنوان الخبر</label>
            <input type="text" id="title" name="title" class="form-control" required value="{{ $newsItem->title }}">
        </div>

        <div class="form-group">
            <label for="images">صور الخبر</label>
            <input type="file" id="images" name="images[]" class="form-control" accept="image/*" multiple>
            <small class="text-muted">الحجم الموصى به: 1200x800 بكسل (يمكن اختيار عدة صور)</small>
            @if($newsItem->image && is_array($newsItem->image) && count($newsItem->image) > 0)
                <div class="current-images mt-2">
                    <p>الصور الحالية:</p>
                    <div class="d-flex flex-wrap">
                        @foreach($newsItem->image as $image)
                            @if(str_starts_with($image, 'iVBOR'))
                                <img src="data:image/png;base64,{{ $image }}" alt="الصورة الحالية" class="thumbnail me-2 mb-2">
                            @else
                                <img src="{{ asset('storage/' . $image) }}" alt="الصورة الحالية" class="thumbnail me-2 mb-2">
                            @endif
                        @endforeach
                    </div>
                </div>
            @elseif($newsItem->image && !is_array($newsItem->image))
                <div class="current-image mt-2">
                    <p>الصورة الحالية:</p>
                    @if(str_starts_with($newsItem->image, 'iVBOR'))
                        <img src="data:image/png;base64,{{ $newsItem->image }}" alt="الصورة الحالية" class="thumbnail">
                    @else
                        <img src="{{ asset('storage/' . $newsItem->image) }}" alt="الصورة الحالية" class="thumbnail">
                    @endif
                </div>
            @endif
            <div class="image-preview mt-2" id="news-images-preview" style="display:none;">
                <div id="images-container" class="d-flex flex-wrap"></div>
            </div>
        </div>

        <div class="form-group">
            <label for="summary">ملخص الخبر</label>
            <textarea id="summary" name="summary" class="form-control" rows="3" required>{{ $newsItem->summary }}</textarea>
        </div>

        <div class="form-group">
            <label for="content">محتوى الخبر</label>
            <textarea id="content" name="content" class="form-control" rows="10">{{ $newsItem->content }}</textarea>
            <small class="text-muted">يمكنك استخدام HTML لتنسيق المحتوى</small>
        </div>


        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> حفظ التعديلات
            </button>
            <a href="{{ route('news.index') }}" class="btn btn-secondary">
                <i class="fas fa-times"></i> إلغاء
            </a>
        </div>
    </form>
</div>

<script>
// سكريبت لمعاينة الصور
document.getElementById('images').addEventListener('change', function(e) {
    const container = document.getElementById('images-container');
    const previewContainer = document.getElementById('news-images-preview');

    // Clear previous previews
    container.innerHTML = '';

    if (this.files && this.files.length > 0) {
        previewContainer.style.display = 'block';

        Array.from(this.files).forEach((file, index) => {
            const reader = new FileReader();

            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.alt = `معاينة صورة ${index + 1}`;
                img.className = 'thumbnail me-2 mb-2';
                img.style.maxWidth = '150px';
                img.style.maxHeight = '150px';
                container.appendChild(img);
            }

            reader.readAsDataURL(file);
        });
    } else {
        previewContainer.style.display = 'none';
    }
});
</script>
</body>
</html>