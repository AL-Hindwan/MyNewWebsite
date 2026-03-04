<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('/css/swip.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/aos.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #D7E5F6 0%, #A8DADC 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
        }
        .logo {
            height: 5rem;
            width: 5rem;
            margin-bottom: 1rem;
        }
        .card {
            background-color: white;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1), 0 0 20px rgba(60, 154, 255, 0.1);
            border: 1px solid #e5e7eb;
            width: 100%;
            max-width: 28rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15), 0 0 30px rgba(60, 154, 255, 0.2);
        }
        .header {
            text-align: center;
            margin-bottom: 2rem;
        }
        .title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            text-align: center;
            color: #3C9AFF;
        }
        .error {
            margin-bottom: 1rem;
            color: #dc2626;
        }
        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }
        .input {
            width: 90%;
            padding: 0.5rem 0.75rem 0.5rem 2rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            outline: none;
            font-size: 0.875rem;
            transition: border-color 0.2s, box-shadow 0.2s;
            background-color: white;
        }
        .input:focus {
            border-color: #3C9AFF;
            box-shadow: 0 0 0 2px rgba(60, 154, 255, 0.2);
        }
        .icon {
            position: absolute;
            left: 0.5rem;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            font-size: 0.875rem;
        }
        .input:focus + .icon {
            color: #3C9AFF;
        }
        .label {
            display: block;
            margin-bottom: 0.25rem;
            color: #374151;
            font-size: 0.875rem;
            font-weight: 500;
        }
        .remember {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
        }
        .checkbox {
            margin-right: 0.5rem;
        }
        .link {
            color: #3C9AFF;
            text-decoration: none;
        }
        .link:hover {
            text-decoration: underline;
        }
        .button {
            width: 100%;
            background-color: #3C9AFF;
            color: white;
            padding: 0.5rem;
            border-radius: 0.5rem;
            border: none;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #2a7bc1;
        }
        .back {
            margin-top: 1rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="card" data-aos="fade-up" data-aos-duration="1500">
        <div class="header">
            <img src="{{ asset('/images/logo.png') }}" alt="Logo" class="logo" data-aos="fade-down" data-aos-duration="1000">
            <h2 class="title">Login to Dashboard</h2>
        </div>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="form-group">
                <label for="email" class="label">Email</label>
                <div style="position: relative;">
                    <input type="email" name="email" id="email" class="input" required>
                    <i class="fas fa-envelope icon"></i>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="label">Password</label>
                <div style="position: relative;">
                    <input type="password" name="password" id="password" class="input" required>
                    <i class="fas fa-lock icon"></i>
                </div>
            </div>
            <div class="remember">
                <label>
                    <input type="checkbox" name="remember" class="checkbox">
                    <span style="color: #374151;">Remember Me</span>
                </label>
                <a href="#" class="link">Forgot Password?</a>
            </div>
            <button type="submit" class="button">Login</button>
        </form>
        <div class="back">
            <a href="{{ url('/') }}" class="link">Back to Home</a>
        </div>
    </div>

    <script src="{{asset('/js/aos.js')}}"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>