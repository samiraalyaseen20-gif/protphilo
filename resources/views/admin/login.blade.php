<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول | لوحة التحكم - المهندسة سميرة علي</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Cairo', 'Outfit', sans-serif;
            background-color: #fafafa; /* shadcn neutral bg */
            color: #09090b; /* shadcn zinc-950 foreground */
        }
    </style>
</head>
<body class="selection:bg-zinc-100 selection:text-zinc-900 flex items-center justify-center min-h-screen p-4 bg-zinc-50/50">

    <!-- Login Container -->
    <div class="w-full max-w-[400px] space-y-6">
        
        <!-- Header Link -->
        <div class="text-center">
            <a href="/" class="inline-flex items-center gap-1.5 text-xs text-zinc-500 hover:text-zinc-900 transition-colors font-medium">
                ← العودة إلى الموقع الرئيسي
            </a>
        </div>

        <!-- shadcn Card -->
        <div class="bg-white rounded-xl border border-zinc-200 shadow-sm p-8 space-y-6">
            
            <!-- Card Header -->
            <div class="space-y-1.5 text-right">
                <h1 class="text-2xl font-semibold tracking-tight text-zinc-950">تسجيل الدخول</h1>
                <p class="text-xs text-zinc-500">أدخل بريدك الإلكتروني وكلمة المرور للوصول إلى لوحة التحكم</p>
            </div>

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="bg-red-50/80 border border-red-200 text-red-700 p-3 rounded-lg text-xs space-y-1">
                    @foreach ($errors->all() as $error)
                        <div class="flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span>
                            <span>{{ $error }}</span>
                        </div>
                    @endforeach
                </div>
            @endif

            <!-- Form -->
            <form action="{{ route('login') }}" method="POST" class="space-y-4 text-right">
                @csrf

                <!-- Email -->
                <div class="space-y-1.5">
                    <label for="email" class="text-xs font-medium text-zinc-700">البريد الإلكتروني</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                        placeholder="name@example.com"
                        class="flex h-9 w-full rounded-md border border-zinc-200 bg-transparent px-3 py-1 text-xs shadow-sm transition-colors file:border-0 file:bg-transparent file:text-xs file:font-medium placeholder:text-zinc-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-zinc-950 disabled:cursor-not-allowed disabled:opacity-50 font-sans">
                </div>

                <!-- Password -->
                <div class="space-y-1.5">
                    <div class="flex items-center justify-between">
                        <label for="password" class="text-xs font-medium text-zinc-700">كلمة المرور</label>
                    </div>
                    <input type="password" id="password" name="password" required
                        placeholder="••••••••"
                        class="flex h-9 w-full rounded-md border border-zinc-200 bg-transparent px-3 py-1 text-xs shadow-sm transition-colors file:border-0 file:bg-transparent file:text-xs file:font-medium placeholder:text-zinc-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-zinc-950 disabled:cursor-not-allowed disabled:opacity-50 font-sans">
                </div>

                <!-- Remember Me -->
                <div class="flex items-center gap-2 mr-0.5">
                    <input type="checkbox" id="remember" name="remember" 
                        class="h-4 w-4 rounded border-zinc-300 text-zinc-900 focus:ring-zinc-950 focus:ring-offset-0">
                    <label for="remember" class="text-xs font-medium text-zinc-500 select-none cursor-pointer">تذكرني على هذا الجهاز</label>
                </div>

                <!-- Submit Button (shadcn primary button style) -->
                <button type="submit" 
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-xs font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-zinc-950 disabled:pointer-events-none disabled:opacity-50 bg-zinc-900 text-zinc-50 shadow hover:bg-zinc-900/90 h-9 w-full cursor-pointer mt-2">
                    دخول
                </button>
            </form>
        </div>

    </div>

</body>
</html>
