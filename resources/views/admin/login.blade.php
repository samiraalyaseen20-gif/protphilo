<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول | لوحة التحكم - المهندسة سميرة علي</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800;900&family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Cairo', 'Outfit', sans-serif;
            background-color: #f8f7ff;
            color: #0f172a;
            overflow-x: hidden;
        }

        .login-bg {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 50% 30%, rgba(124, 58, 237, 0.08) 0%, rgba(255, 77, 128, 0.04) 45%, transparent 75%);
            z-index: -2;
        }
    </style>
</head>
<body class="selection:bg-primary/20 selection:text-primary flex items-center justify-center min-h-screen relative p-4">

    <!-- Background Decoration -->
    <div class="login-bg"></div>

    <!-- Login Card Container -->
    <div class="w-full max-w-md reveal-init reveal-active">
        
        <!-- Logo/Header -->
        <div class="text-center mb-8 space-y-3">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-3xl bg-gradient-to-tr from-primary to-secondary text-white shadow-xl glow-purple mb-2">
                <span class="material-symbols-outlined text-3xl font-black">admin_panel_settings</span>
            </div>
            <h1 class="text-3xl font-black text-on-background font-display tracking-tight">لوحة التحكم</h1>
            <p class="text-sm text-on-surface">يرجى تسجيل الدخول للوصول إلى إدارة المشاريع</p>
        </div>

        <!-- Glassmorphism Form Card -->
        <div class="bg-white/80 backdrop-blur-md rounded-[2.5rem] border border-primary/10 shadow-2xl p-8 space-y-6">
            
            @if ($errors->any())
                <div class="bg-red-50 border-r-4 border-red-500 text-red-700 p-4 rounded-xl text-xs space-y-1">
                    @foreach ($errors->all() as $error)
                        <div class="flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-sm">error</span>
                            <span>{{ $error }}</span>
                        </div>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Email Input -->
                <div class="space-y-1.5">
                    <label for="email" class="text-xs font-bold text-on-surface block mr-1">البريد الإلكتروني</label>
                    <div class="relative">
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                            placeholder="admin@example.com"
                            class="w-full px-5 py-3.5 pr-12 rounded-2xl border border-primary/15 bg-white/50 focus:bg-white focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all text-sm font-sans">
                        <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-on-surface/50 text-xl">mail</span>
                    </div>
                </div>

                <!-- Password Input -->
                <div class="space-y-1.5">
                    <label for="password" class="text-xs font-bold text-on-surface block mr-1">كلمة المرور</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" required
                            placeholder="••••••••"
                            class="w-full px-5 py-3.5 pr-12 rounded-2xl border border-primary/15 bg-white/50 focus:bg-white focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all text-sm font-sans">
                        <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-on-surface/50 text-xl">lock</span>
                    </div>
                </div>

                <!-- Remember Me checkbox -->
                <div class="flex items-center gap-2 mr-1">
                    <input type="checkbox" id="remember" name="remember" class="w-4 h-4 rounded text-primary focus:ring-primary/20 border-primary/15">
                    <label for="remember" class="text-xs text-on-surface font-semibold select-none cursor-pointer">تذكرني على هذا الجهاز</label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full py-4 rounded-2xl bg-gradient-to-r from-primary to-secondary text-white font-bold shadow-lg shadow-primary/20 hover:shadow-xl hover:scale-[1.02] transition-all text-sm flex items-center justify-center gap-2 mt-4 cursor-pointer">
                    <span>دخول</span>
                    <span class="material-symbols-outlined text-sm font-bold">login</span>
                </button>
            </form>
        </div>

        <!-- Footer link back to home -->
        <div class="text-center mt-6">
            <a href="/" class="inline-flex items-center gap-1.5 text-xs font-bold text-primary hover:text-secondary transition-colors">
                <span class="material-symbols-outlined text-sm">arrow_right_alt</span>
                الرجوع للرئيسية
            </a>
        </div>
    </div>

</body>
</html>
