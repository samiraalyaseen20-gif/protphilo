<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة السيرة الذاتية | لوحة التحكم</title>

    <!-- Cairo Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Flowbite CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <style>
        * { font-family: 'Cairo', sans-serif !important; }

        /* Fix Flowbite RTL sidebar position */
        #logo-sidebar {
            right: 0;
            left: auto;
            border-left: 1px solid #e5e7eb;
            border-right: none;
            transform: translateX(100%); /* hidden by default (mobile) */
            transition: transform 0.3s ease;
        }

        /* Show sidebar on desktop (640px+) */
        @media (min-width: 640px) {
            #logo-sidebar {
                transform: translateX(0) !important;
            }
        }

        /* Fix main content margin for RTL */
        @media (min-width: 640px) {
            #main-content { margin-right: 16rem; margin-left: 0; }
        }

        /* Sidebar link active style */
        .sidebar-link-active {
            background-color: #eff6ff;
            color: #1d4ed8;
        }

        /* Fix table direction */
        table { text-align: right; }
        th, td { text-align: right !important; }
    </style>
</head>

<body class="bg-gray-50 antialiased">

{{-- =================== TOP NAVBAR =================== --}}
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
    <div class="px-4 py-3 lg:px-6">
        <div class="flex items-center justify-between">

            {{-- Right side: Toggle + Logo --}}
            <div class="flex items-center gap-3">
                <button
                    id="sidebar-toggle"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="logo-sidebar"
                    aria-expanded="false"
                >
                    <span class="sr-only">فتح القائمة</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>

                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                        </svg>
                    </div>
                    <span class="text-xl font-bold text-gray-900 whitespace-nowrap">لوحة الإدارة</span>
                </a>
            </div>

            {{-- Left side --}}
            <div class="flex items-center gap-3">
                <a href="/" target="_blank" class="hidden sm:flex items-center gap-1.5 text-sm text-gray-500 hover:text-blue-600 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                    الموقع
                </a>

                <button
                    type="button"
                    id="user-menu-btn"
                    class="flex items-center gap-2 p-1 rounded-full hover:bg-gray-100 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-300"
                    data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom"
                >
                    <div class="w-9 h-9 rounded-full bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center text-white font-bold text-sm">م</div>
                    <svg class="w-4 h-4 text-gray-400 hidden sm:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div id="user-dropdown" class="z-50 hidden my-4 min-w-48 text-base list-none bg-white divide-y divide-gray-100 rounded-xl shadow-lg border border-gray-100">
                    <div class="px-4 py-3">
                        <p class="text-sm font-semibold text-gray-900">مشرف النظام</p>
                        <p class="text-xs text-gray-500 truncate">admin@smira.com</p>
                    </div>
                    <ul class="py-2">
                        <li>
                            <form action="{{ route('admin.logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full flex items-center gap-2 px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                    </svg>
                                    تسجيل الخروج
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</nav>

{{-- =================== SIDEBAR =================== --}}
<aside
    id="logo-sidebar"
    class="fixed top-0 z-40 w-64 h-screen pt-16 transition-transform duration-300 translate-x-full sm:translate-x-0 bg-white border-l border-gray-200"
    aria-label="Sidebar"
>
    <div class="h-full flex flex-col px-4 py-5 overflow-y-auto">
        <nav class="flex-1">
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3 px-2">القائمة</p>
            <ul class="space-y-1">
                <li>
                    <a href="{{ route('admin.dashboard') }}"
                       class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900 transition-colors">
                        <svg class="w-5 h-5 text-gray-400 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                        </svg>
                        <span>إدارة المشاريع</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.resume.edit') }}"
                       class="sidebar-link-active flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-semibold transition-colors">
                        <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span>السيرة الذاتية</span>
                    </a>
                </li>
                <li>
                    <a href="/" target="_blank"
                       class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900 transition-colors">
                        <svg class="w-5 h-5 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                        <span>معاينة الموقع</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="border-t border-gray-100 pt-4 mt-4">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="flex items-center gap-3 w-full px-3 py-2.5 rounded-lg text-sm font-medium text-red-600 hover:bg-red-50 transition-colors">
                    <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    تسجيل الخروج
                </button>
            </form>
        </div>
    </div>
</aside>

{{-- =================== MAIN CONTENT =================== --}}
<div id="main-content" class="pt-16 min-h-screen">
    <div class="p-5 space-y-6">

        {{-- Breadcrumbs --}}
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors">
                        <svg class="w-3.5 h-3.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                        </svg>
                        لوحة التحكم
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1 rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="text-sm font-medium text-gray-500 mr-1 md:mr-2">السيرة الذاتية</span>
                    </div>
                </li>
            </ol>
        </nav>

        {{-- Page Header --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">إدارة السيرة الذاتية</h1>
                <p class="text-sm text-gray-500 mt-0.5">تعديل الشهادة الأكاديمية، اللغات، المهارات البرمجية، وخبرات التايم لاين</p>
            </div>
            <div>
                <a href="/" target="_blank" class="inline-flex items-center gap-1.5 px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-xl hover:bg-gray-50 transition-colors shadow-sm">
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    معاينة الصفحة الرئيسية
                </a>
            </div>
        </div>

        {{-- Alerts --}}
        @if (session('success'))
            <div id="success-alert" class="flex items-center gap-3 p-4 text-green-800 bg-green-50 border border-green-200 rounded-xl" role="alert">
                <svg class="w-5 h-5 shrink-0 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <p class="text-sm font-medium flex-1">{{ session('success') }}</p>
                <button type="button" onclick="document.getElementById('success-alert').remove()" class="text-green-500 hover:text-green-700">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        @endif

        @if ($errors->any())
            <div class="flex items-start gap-3 p-4 text-red-800 bg-red-50 border border-red-200 rounded-xl" role="alert">
                <svg class="w-5 h-5 shrink-0 text-red-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                </svg>
                <ul class="text-sm font-medium space-y-1 flex-1">
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Main grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

            {{-- Column 1: Academic Settings & Skills (5 cols) --}}
            <div class="lg:col-span-5 bg-white rounded-2xl border border-gray-200 p-6 shadow-sm space-y-6 self-start">
                <div class="border-b border-gray-100 pb-4">
                    <h2 class="text-lg font-bold text-gray-900">الشهادة الأكاديمية والمهارات البرمجية</h2>
                    <p class="text-xs text-gray-400 mt-0.5">تعديل كروت الهيرو العلوي في بداية الموقع</p>
                </div>

                <form action="{{ route('admin.resume.settings.update') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label for="degree" class="block mb-1.5 text-xs font-semibold text-gray-700">المسمى الأكاديمي / الشهادة <span class="text-red-500">*</span></label>
                        <input
                            type="text"
                            name="degree"
                            id="degree"
                            value="{{ old('degree', $settings->degree) }}"
                            required
                            placeholder="مثال: بكلوريوس هندسة اجهزة طبية"
                            class="w-full px-4 py-2.5 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-right"
                        >
                    </div>

                    <div>
                        <label for="university" class="block mb-1.5 text-xs font-semibold text-gray-700">الكلية / الجامعة <span class="text-red-500">*</span></label>
                        <input
                            type="text"
                            name="university"
                            id="university"
                            value="{{ old('university', $settings->university) }}"
                            required
                            placeholder="مثال: كلية الحسين الجامعة"
                            class="w-full px-4 py-2.5 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-right"
                        >
                    </div>

                    <div>
                        <label for="graduation_year" class="block mb-1.5 text-xs font-semibold text-gray-700">سنة التخرج <span class="text-red-500">*</span></label>
                        <input
                            type="text"
                            name="graduation_year"
                            id="graduation_year"
                            value="{{ old('graduation_year', $settings->graduation_year) }}"
                            required
                            placeholder="مثال: ٢٠٢١ - ٢٠٢٢ م"
                            class="w-full px-4 py-2.5 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-right"
                        >
                    </div>

                    <div>
                        <label for="languages" class="block mb-1.5 text-xs font-semibold text-gray-700">اللغات المكتسبة (سطر جديد لكل لغة)</label>
                        <textarea
                            name="languages"
                            id="languages"
                            rows="3"
                            placeholder="اكتب كل لغة في سطر مستقل..."
                            class="w-full px-4 py-2.5 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-right resize-none"
                        >{{ old('languages', $settings->languages) }}</textarea>
                    </div>

                    <div>
                        <label for="skills" class="block mb-1.5 text-xs font-semibold text-gray-700">المهارات البرمجية (سطر جديد لكل مهارة)</label>
                        <textarea
                            name="skills"
                            id="skills"
                            rows="5"
                            placeholder="اكتب كل مهارة في سطر مستقل..."
                            class="w-full px-4 py-2.5 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-right resize-none"
                        >{{ old('skills', $settings->skills) }}</textarea>
                    </div>

                    <div class="pt-4 border-t border-gray-100">
                        <button
                            type="submit"
                            class="w-full py-3 text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 rounded-xl transition-colors shadow-sm"
                        >حفظ التغييرات</button>
                    </div>
                </form>
            </div>

            {{-- Column 2: Timeline Experiences (7 cols) --}}
            <div class="lg:col-span-7 flex flex-col gap-6">

                {{-- Add Experience Card --}}
                <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm space-y-4">
                    <div class="border-b border-gray-100 pb-3 flex items-center justify-between">
                        <div>
                            <h2 class="text-base font-bold text-gray-900">إضافة خبرة مهنية جديدة</h2>
                            <p class="text-xs text-gray-400 mt-0.5">إدراج وظيفة أو مسيرة مهنية جديدة في التايم لاين</p>
                        </div>
                    </div>

                    <form action="{{ route('admin.resume.experiences.store') }}" method="POST" class="space-y-4">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="exp_year_range" class="block mb-1.5 text-xs font-semibold text-gray-700">الفترة الزمنية <span class="text-red-500">*</span></label>
                                <input
                                    type="text"
                                    name="year_range"
                                    id="exp_year_range"
                                    required
                                    placeholder="مثال: ٢٠٢٥ - حتى الآن"
                                    class="w-full px-3 py-2 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-right"
                                >
                            </div>
                            <div>
                                <label for="exp_title" class="block mb-1.5 text-xs font-semibold text-gray-700">المسمى الوظيفي <span class="text-red-500">*</span></label>
                                <input
                                    type="text"
                                    name="title"
                                    id="exp_title"
                                    required
                                    placeholder="مثال: مهندس برمجيات"
                                    class="w-full px-3 py-2 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-right"
                                >
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="exp_company" class="block mb-1.5 text-xs font-semibold text-gray-700">جهة العمل / الشركة <span class="text-red-500">*</span></label>
                                <input
                                    type="text"
                                    name="company"
                                    id="exp_company"
                                    required
                                    placeholder="مثال: دائرة صحة كربلاء"
                                    class="w-full px-3 py-2 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-right"
                                >
                            </div>
                            <div>
                                <label for="exp_icon" class="block mb-1.5 text-xs font-semibold text-gray-700">الأيقونة المعبرة <span class="text-red-500">*</span></label>
                                <select
                                    name="icon"
                                    id="exp_icon"
                                    required
                                    class="w-full px-3 py-2 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-right"
                                >
                                    <option value="clinical_suite">طبي (clinical_suite)</option>
                                    <option value="computer">حاسوب وأنظمة (computer)</option>
                                    <option value="construction">هندسة وصيانة (construction)</option>
                                    <option value="palette">تصميم وكرافيك (palette)</option>
                                    <option value="school">تعليم وأكاديميا (school)</option>
                                    <option value="work" selected>عمل عام (work)</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="exp_sort" class="block mb-1.5 text-xs font-semibold text-gray-700">ترتيب العرض (رقمي)</label>
                                <input
                                    type="number"
                                    name="sort_order"
                                    id="exp_sort"
                                    value="0"
                                    class="w-full px-3 py-2 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-right"
                                >
                            </div>
                        </div>

                        <div>
                            <label for="exp_responsibilities" class="block mb-1.5 text-xs font-semibold text-gray-700">المهام والمسؤوليات (سطر جديد لكل مهمة) <span class="text-red-500">*</span></label>
                            <textarea
                                name="responsibilities"
                                id="exp_responsibilities"
                                rows="4"
                                required
                                placeholder="اكتب كل نقطة/مسؤولية وظيفية في سطر مستقل..."
                                class="w-full px-3 py-2 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-right resize-none"
                            ></textarea>
                        </div>

                        <button
                            type="submit"
                            class="w-full py-2.5 text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 rounded-xl transition-colors shadow-sm"
                        >إدراج الخبرة بالتايم لاين</button>
                    </form>
                </div>

                {{-- Experiences List Card --}}
                <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm space-y-4">
                    <div class="border-b border-gray-100 pb-3">
                        <h2 class="text-base font-bold text-gray-900">الخبرات الحالية بالتايم لاين ({{ $experiences->count() }})</h2>
                        <p class="text-xs text-gray-400 mt-0.5">الترتيب يبدأ من الأصغر رقماً إلى الأكبر</p>
                    </div>

                    @if($experiences->isNotEmpty())
                        <div class="space-y-4 max-h-[600px] overflow-y-auto pr-1">
                            @foreach($experiences as $exp)
                                <div class="bg-gray-50 p-4 rounded-xl border border-gray-200 flex flex-col sm:flex-row justify-between gap-4">
                                    <div class="space-y-2">
                                        <div class="flex items-center gap-2">
                                            <span class="px-2 py-0.5 bg-blue-100 text-blue-800 text-[10px] font-bold rounded">ترتيب: {{ $exp->sort_order }}</span>
                                            <span class="px-2 py-0.5 bg-gray-200 text-gray-800 text-[10px] font-bold rounded">{{ $exp->year_range }}</span>
                                            <span class="text-xs font-semibold text-gray-500">أيقونة: {{ $exp->icon }}</span>
                                        </div>
                                        <h3 class="text-sm font-bold text-gray-900">{{ $exp->title }}</h3>
                                        <p class="text-xs text-blue-600 font-semibold">{{ $exp->company }}</p>
                                        <ul class="list-disc pr-4 text-[10px] text-gray-600 space-y-1">
                                            @foreach($exp->responsibilities_list as $item)
                                                <li>{{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="flex sm:flex-col justify-end gap-2 shrink-0">
                                        <button
                                            type="button"
                                            data-modal-target="edit-exp-modal-{{ $exp->id }}"
                                            data-modal-toggle="edit-exp-modal-{{ $exp->id }}"
                                            class="inline-flex items-center justify-center w-8 h-8 bg-blue-50 text-blue-600 hover:bg-blue-100 rounded-lg transition-colors border border-blue-100"
                                            title="تعديل الخبرة"
                                        >
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                            </svg>
                                        </button>

                                        <form
                                            action="{{ route('admin.resume.experiences.destroy', $exp->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('هل أنت متأكد من حذف هذه الخبرة نهائياً من التايم لاين؟')"
                                        >
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                type="submit"
                                                class="inline-flex items-center justify-center w-8 h-8 bg-red-50 text-red-600 hover:bg-red-100 rounded-lg transition-colors border border-red-100"
                                                title="حذف الخبرة"
                                            >
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                {{-- =================== EDIT EXPERIENCE MODAL =================== --}}
                                <div id="edit-exp-modal-{{ $exp->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-lg max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-2xl shadow border border-gray-100">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 border-b rounded-t">
                                                <h3 class="text-base font-bold text-gray-900">تعديل الخبرة المهنية</h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 mr-auto inline-flex justify-center items-center" data-modal-hide="edit-exp-modal-{{ $exp->id }}">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">إغلاق المودال</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <form action="{{ route('admin.resume.experiences.update', $exp->id) }}" method="POST" class="p-4 space-y-4">
                                                @csrf
                                                <div class="grid grid-cols-2 gap-4">
                                                    <div>
                                                        <label class="block mb-1 text-xs font-semibold text-gray-700">الفترة الزمنية <span class="text-red-500">*</span></label>
                                                        <input type="text" name="year_range" value="{{ old('year_range', $exp->year_range) }}" required class="w-full px-3 py-2 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-right">
                                                    </div>
                                                    <div>
                                                        <label class="block mb-1 text-xs font-semibold text-gray-700">المسمى الوظيفي <span class="text-red-500">*</span></label>
                                                        <input type="text" name="title" value="{{ old('title', $exp->title) }}" required class="w-full px-3 py-2 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-right">
                                                    </div>
                                                </div>

                                                <div class="grid grid-cols-2 gap-4">
                                                    <div>
                                                        <label class="block mb-1 text-xs font-semibold text-gray-700">جهة العمل / الشركة <span class="text-red-500">*</span></label>
                                                        <input type="text" name="company" value="{{ old('company', $exp->company) }}" required class="w-full px-3 py-2 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-right">
                                                    </div>
                                                    <div>
                                                        <label class="block mb-1 text-xs font-semibold text-gray-700">الأيقونة <span class="text-red-500">*</span></label>
                                                        <select name="icon" required class="w-full px-3 py-2 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-right">
                                                            <option value="clinical_suite" {{ $exp->icon == 'clinical_suite' ? 'selected' : '' }}>طبي (clinical_suite)</option>
                                                            <option value="computer" {{ $exp->icon == 'computer' ? 'selected' : '' }}>حاسوب وأنظمة (computer)</option>
                                                            <option value="construction" {{ $exp->icon == 'construction' ? 'selected' : '' }}>هندسة وصيانة (construction)</option>
                                                            <option value="palette" {{ $exp->icon == 'palette' ? 'selected' : '' }}>تصميم وكرافيك (palette)</option>
                                                            <option value="school" {{ $exp->icon == 'school' ? 'selected' : '' }}>تعليم وأكاديميا (school)</option>
                                                            <option value="work" {{ $exp->icon == 'work' ? 'selected' : '' }}>عمل عام (work)</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="grid grid-cols-2 gap-4">
                                                    <div>
                                                        <label class="block mb-1 text-xs font-semibold text-gray-700">ترتيب العرض</label>
                                                        <input type="number" name="sort_order" value="{{ old('sort_order', $exp->sort_order) }}" class="w-full px-3 py-2 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-right">
                                                    </div>
                                                </div>

                                                <div>
                                                    <label class="block mb-1 text-xs font-semibold text-gray-700">المهام والمسؤوليات (سطر جديد لكل مهمة) <span class="text-red-500">*</span></label>
                                                    <textarea name="responsibilities" rows="5" required class="w-full px-3 py-2 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-right resize-none">{{ old('responsibilities', $exp->responsibilities) }}</textarea>
                                                </div>

                                                <div class="flex items-center gap-3 pt-3 border-t">
                                                    <button type="submit" class="px-5 py-2 text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 rounded-xl transition-colors shadow-sm">حفظ التغييرات</button>
                                                    <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-xl hover:bg-gray-50" data-modal-hide="edit-exp-modal-{{ $exp->id }}">إلغاء</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-8">
                            <svg class="w-10 h-10 text-gray-300 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-xs text-gray-400 font-medium">لم يتم إضافة أي خبرات مهنية بالتايم لاين بعد</p>
                        </div>
                    @endif
                </div>

            </div>

        </div>

    </div>
</div>

{{-- Mobile Overlay --}}
<div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-30 hidden sm:hidden" onclick="closeSidebar()"></div>

{{-- Flowbite JS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<script>
    // ===== Sidebar Toggle (RTL) =====
    const sidebar = document.getElementById('logo-sidebar');
    const overlay = document.getElementById('sidebar-overlay');
    const toggleBtn = document.getElementById('sidebar-toggle');

    function openSidebar() {
        sidebar.classList.remove('translate-x-full');
        sidebar.classList.add('translate-x-0');
        overlay.classList.remove('hidden');
    }

    function closeSidebar() {
        sidebar.classList.remove('translate-x-0');
        sidebar.classList.add('translate-x-full');
        overlay.classList.add('hidden');
    }

    toggleBtn.addEventListener('click', function () {
        if (sidebar.classList.contains('translate-x-full')) {
            openSidebar();
        } else {
            closeSidebar();
        }
    });
</script>

</body>
</html>
