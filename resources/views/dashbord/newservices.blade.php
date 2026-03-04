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
    <h2>{{ isset($service) ? 'تعديل الخدمة' : 'إضافة خدمة جديدة' }}</h2>
    <p>{{ isset($service) ? 'قم بتعديل بيانات الخدمة' : 'املأ النموذج لإضافة خدمة جديدة إلى الموقع' }}</p>
</div>

<div class="content-card">
    <form action="{{ isset($service) ? route('services.update', $service->id) : route('services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($service))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="title">اسم الخدمة</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ isset($service) ? $service->title : '' }}" required>
        </div>

        <div class="form-group">
            <label for="icon">صورة الخدمة</label>
            <input type="file" id="icon" name="icon" class="form-control" accept="image/*">
            <small class="text-muted">الحجم الموصى به: 800x600 بكسل</small>
            @if(isset($service) && $service->icon)
                <div class="image-preview mt-2">
                    <img src="{{ 'data:image/jpeg;base64,' . $service->icon }}" alt="الصورة الحالية" class="thumbnail">
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="description">وصف الخدمة</label>
            <textarea id="description" name="description" class="form-control" rows="5" required>{{ isset($service) ? $service->description : '' }}</textarea>
        </div>

        <div class="form-group">
            <label for="details">تفاصيل الخدمة</label>
            <textarea id="details" name="details" class="form-control" rows="8">{{ isset($service) ? $service->details : '' }}</textarea>
            <small class="text-muted">يمكنك استخدام HTML لتنسيق المحتوى</small>
        </div>


        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> {{ isset($service) ? 'تحديث الخدمة' : 'حفظ الخدمة' }}
            </button>
            <a href="{{ route('services.index') }}" class="btn btn-secondary">
                <i class="fas fa-times"></i> إلغاء
            </a>
        </div>
    </form>
</div>
</body>
</html>