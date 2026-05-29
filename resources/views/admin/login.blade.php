<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول | لوحة التحكم</title>
    
    <!-- Cairo Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- ✅ Flowbite CSS (مكتبة جاهزة عبر CDN) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <style>
        body { font-family: 'Cairo', sans-serif; }
    </style>
</head>

<body class="bg-gray-50 dark:bg-gray-900">

  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto min-h-screen lg:py-0">

      <!-- Logo -->
      <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white gap-2">
          <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v12a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm3 1v10h8V5H6z" clip-rule="evenodd"/>
          </svg>
          <span>سميرة علي ياسين</span>
      </a>

      <!-- ✅ Flowbite Card -->
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white text-right">
                  تسجيل الدخول إلى لوحة التحكم
              </h1>

              <!-- Flowbite Alert for errors -->
              @if ($errors->any())
                  <div id="alert-error" class="flex items-start p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                      <svg class="shrink-0 w-4 h-4 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                      </svg>
                      <div class="ms-3 text-sm font-medium text-right">
                          @foreach ($errors->all() as $error)
                              <div>{{ $error }}</div>
                          @endforeach
                      </div>
                  </div>
              @endif

              <form class="space-y-4 md:space-y-6 text-right" action="{{ route('login') }}" method="POST">
                  @csrf

                  <!-- ✅ Flowbite Input: Email -->
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">البريد الإلكتروني</label>
                      <input type="email" name="email" id="email" value="{{ old('email') }}"
                          class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="name@company.com" required>
                  </div>

                  <!-- ✅ Flowbite Input: Password -->
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">كلمة المرور</label>
                      <input type="password" name="password" id="password"
                          placeholder="••••••••"
                          class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          required>
                  </div>

                  <!-- ✅ Flowbite Checkbox -->
                  <div class="flex items-center gap-2 justify-end">
                      <label for="remember" class="text-sm text-gray-500 dark:text-gray-300">تذكرني</label>
                      <input id="remember" name="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                  </div>

                  <!-- ✅ Flowbite Primary Button -->
                  <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      تسجيل الدخول
                  </button>

              </form>

              <p class="text-sm font-light text-gray-500 dark:text-gray-400 text-center">
                  <a href="/" class="font-medium text-blue-600 hover:underline dark:text-blue-500">← العودة إلى الموقع</a>
              </p>
          </div>
      </div>
  </div>

  <!-- ✅ Flowbite JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
