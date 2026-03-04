<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تفاصيل الطبيب - {{ $staff->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .doctor-card {
            background: #3479C3;
            border-radius: 25px;
            color: white;
            padding: 3rem 2rem;
            margin: 2rem auto;
            max-width: 650px;
            box-shadow: 0 25px 50px rgba(52, 121, 195, 0.3);
            position: relative;
            overflow: hidden;
        }
        .doctor-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255,255,255,0.1) 0%, transparent 50%, rgba(255,255,255,0.1) 100%);
            pointer-events: none;
        }
        .doctor-image {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            border: 5px solid white;
            margin: 0 auto 1.5rem;
            display: block;
            object-fit: cover;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        .info-card {
            background: rgba(255,255,255,0.15);
            border-radius: 20px;
            padding: 2rem;
            margin: 1.5rem 0;
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255,255,255,0.2);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        .btn-edit {
            background: white;
            color: #3479C3;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            margin-left: 1rem;
        }
        .btn-edit:hover {
            background: #f8f9fa;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .btn-back {
            background: rgba(255,255,255,0.2);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            border: 2px solid rgba(255,255,255,0.3);
        }
        .btn-back:hover {
            background: rgba(255,255,255,0.3);
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="doctor-card">
        @if($staff->image)
            @if(str_starts_with($staff->image, 'iVBOR'))
                <img src="data:image/png;base64,{{ $staff->image }}" alt="{{ $staff->name }}" class="doctor-image">
            @else
                <img src="{{ asset('storage/' . $staff->image) }}" alt="{{ $staff->name }}" class="doctor-image">
            @endif
        @else
            <img src="{{ asset('images/doctor.jpg') }}" alt="صورة افتراضية" class="doctor-image">
        @endif

        <h1 class="text-4xl font-bold text-center mb-4">{{ $staff->name }}</h1>

        <div class="info-card">
            <div class="flex items-center mb-3">
                <i class="fas fa-stethoscope text-2xl ml-3"></i>
                <div>
                    <h3 class="text-xl font-semibold">التخصص</h3>
                    <p class="opacity-90">{{ $staff->specialty }}</p>
                </div>
            </div>
        </div>

        @if($staff->bio)
        <div class="info-card">
            <div class="flex items-start">
                <i class="fas fa-user-md text-2xl ml-3 mt-1"></i>
                <div>
                    <h3 class="text-xl font-semibold mb-2">نبذة تعريفية</h3>
                    <p class="opacity-90 leading-relaxed">{{ $staff->bio }}</p>
                </div>
            </div>
        </div>
        @endif

        <div class="text-center mt-8">
            <a href="{{ route('medical_staff.edit', $staff->id) }}" class="btn-edit">
                <i class="fas fa-edit ml-2"></i>تعديل البيانات
            </a>
            <a href="{{ route('medical_staff.index') }}" class="btn-back">
                <i class="fas fa-arrow-right ml-2"></i>العودة للقائمة
            </a>
        </div>
    </div>
</body>
</html>