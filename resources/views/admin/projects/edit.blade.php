<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل مشروع: {{ $project->title }} | لوحة التحكم</title>

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
                {{-- Sidebar Toggle Button (mobile) --}}
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

                {{-- Logo --}}
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                        </svg>
                    </div>
                    <span class="text-xl font-bold text-gray-900 whitespace-nowrap">لوحة الإدارة</span>
                </a>
            </div>

            {{-- Left side: User dropdown --}}
            <div class="flex items-center gap-3">
                {{-- View Site Link --}}
                <a href="/" target="_blank" class="hidden sm:flex items-center gap-1.5 text-sm text-gray-500 hover:text-blue-600 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                    الموقع
                </a>

                {{-- User Avatar + Dropdown --}}
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

                {{-- Dropdown Menu --}}
                <div id="user-dropdown" class="z-50 hidden my-4 min-w-48 text-base list-none bg-white divide-y divide-gray-100 rounded-xl shadow-lg border border-gray-100">
                    <div class="px-4 py-3">
                        <p class="text-sm font-semibold text-gray-900">مشرف النظام</p>
                        <p class="text-xs text-gray-500 truncate">admin@smira.com</p>
                    </div>
                    <ul class="py-2">
                        <li>
                            <a href="/" target="_blank" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                                معاينة الموقع
                            </a>
                        </li>
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

        {{-- Navigation --}}
        <nav class="flex-1">
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3 px-2">القائمة</p>
            <ul class="space-y-1">
                <li>
                    <a href="{{ route('admin.dashboard') }}"
                       class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900 transition-colors">
                        <svg class="w-5 h-5 text-gray-400 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                        </svg>
                        <span>لوحة التحكم</span>
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

        {{-- Bottom logout --}}
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

        {{-- Breadcrumb navigation --}}
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
                        <span class="text-sm font-medium text-gray-500 mr-1 md:mr-2">تعديل وإدارة مشروع</span>
                    </div>
                </li>
            </ol>
        </nav>

        {{-- Page Header --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">{{ $project->title }}</h1>
                <p class="text-sm text-gray-500 mt-0.5">تعديل البيانات الأساسية وإدارة صور المعرض التفصيلي لهذا المشروع</p>
            </div>
            <div class="flex items-center gap-3">
                <a
                    href="{{ route('projects.show', $project) }}"
                    target="_blank"
                    class="inline-flex items-center gap-1.5 px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-xl hover:bg-gray-50 transition-colors shadow-sm"
                >
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    عرض الصفحة العامة
                </a>
                <a
                    href="{{ route('admin.dashboard') }}"
                    class="inline-flex items-center gap-1.5 px-4 py-2 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-xl transition-colors shadow-sm"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    العودة للرئيسية
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

        {{-- Main Two-Column Layout --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

            {{-- Column 1: Edit Project Details Form (7 cols) --}}
            <div class="lg:col-span-7 bg-white rounded-2xl border border-gray-200 p-6 shadow-sm space-y-6">
                <div class="border-b border-gray-100 pb-4">
                    <h2 class="text-lg font-bold text-gray-900">البيانات الأساسية للمشروع</h2>
                    <p class="text-xs text-gray-400 mt-0.5">قم بتعديل العنوان، التصنيف، الوصف، والصورة الرئيسية الظاهرة في اللاندينج بيج</p>
                </div>

                <form
                    action="{{ route('admin.projects.update', $project->id) }}"
                    method="POST"
                    enctype="multipart/form-data"
                    class="space-y-4"
                >
                    @csrf

                    {{-- Title --}}
                    <div>
                        <label for="f_title" class="block mb-1.5 text-xs font-semibold text-gray-700">عنوان المشروع <span class="text-red-500">*</span></label>
                        <input
                            type="text"
                            id="f_title"
                            name="title"
                            value="{{ old('title', $project->title) }}"
                            required
                            placeholder="مثال: برنامج الإحصاء الطبي"
                            class="w-full px-4 py-2.5 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-right"
                        >
                    </div>

                    {{-- Category + Year --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="f_category" class="block mb-1.5 text-xs font-semibold text-gray-700">التصنيف <span class="text-red-500">*</span></label>
                            <input
                                type="text"
                                id="f_category"
                                name="category"
                                value="{{ old('category', $project->category) }}"
                                required
                                placeholder="مثال: أنظمة طبية"
                                class="w-full px-4 py-2.5 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-right"
                            >
                        </div>
                        <div>
                            <label for="f_year" class="block mb-1.5 text-xs font-semibold text-gray-700">سنة الإنجاز <span class="text-red-500">*</span></label>
                            <input
                                type="text"
                                id="f_year"
                                name="year"
                                value="{{ old('year', $project->year) }}"
                                required
                                placeholder="مثال: ٢٠٢٥ م"
                                class="w-full px-4 py-2.5 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-right"
                            >
                        </div>
                    </div>

                    {{-- Current Image Preview & Upload --}}
                    <div>
                        <label class="block mb-1.5 text-xs font-semibold text-gray-700">صورة المشروع الرئيسية الحالية</label>
                        <div class="mb-3">
                            <img
                                src="{{ asset($project->image) }}"
                                alt="{{ $project->title }}"
                                class="w-full max-h-60 rounded-xl object-cover border border-gray-200 shadow-sm"
                                onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22200%22><rect width=%22400%22 height=%22200%22 fill=%22%23e5e7eb%22/></svg>'"
                            >
                        </div>

                        <label for="f_image" class="block mb-1.5 text-xs font-semibold text-gray-700">تغيير الصورة الرئيسية</label>
                        <input
                            type="file"
                            id="f_image"
                            name="image"
                            accept="image/jpeg,image/png,image/jpg,image/gif,image/webp"
                            class="w-full text-sm text-gray-500 bg-gray-50 border border-gray-300 rounded-xl cursor-pointer file:ml-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 p-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >
                        <p class="mt-1 text-xs text-gray-400">اتركه فارغاً للاحتفاظ بالصورة الحالية.</p>
                    </div>

                    {{-- Description --}}
                    <div>
                        <label for="f_description" class="block mb-1.5 text-xs font-semibold text-gray-700">وصف المشروع الأساسي <span class="text-red-500">*</span></label>
                        <textarea
                            id="f_description"
                            name="description"
                            rows="5"
                            required
                            placeholder="اكتب وصفاً مفصلاً للمشروع..."
                            class="w-full px-4 py-2.5 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-right resize-none"
                        >{{ old('description', $project->description) }}</textarea>
                    </div>

                    {{-- Buttons --}}
                    <div class="flex items-center gap-3 pt-4 border-t border-gray-100">
                        <button
                            type="submit"
                            class="px-6 py-3 text-sm font-semibold text-white bg-blue-600 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 transition-colors shadow-sm"
                        >حفظ التغييرات</button>
                        <a
                            href="{{ route('admin.dashboard') }}"
                            class="px-5 py-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-xl hover:bg-gray-50 transition-colors"
                        >إلغاء</a>
                    </div>
                </form>
            </div>

            {{-- Column 2: Manage Project Images (5 cols) --}}
            <div class="lg:col-span-5 flex flex-col gap-6">

                {{-- Add Image Card --}}
                <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm space-y-4">
                    <div class="border-b border-gray-100 pb-3 flex items-center justify-between">
                        <div>
                            <h2 class="text-base font-bold text-gray-900">إضافة صورة للمعرض</h2>
                            <p class="text-xs text-gray-400 mt-0.5">أضف صورة توضيحية لصفحة تفاصيل المشروع</p>
                        </div>
                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>

                    <form
                        action="{{ route('admin.projects.images.store', $project->id) }}"
                        method="POST"
                        enctype="multipart/form-data"
                        class="space-y-3.5"
                    >
                        @csrf

                        <div>
                            <label class="block mb-1.5 text-xs font-semibold text-gray-700">الصورة <span class="text-red-500">*</span></label>
                            <input
                                type="file"
                                name="image"
                                required
                                accept="image/jpeg,image/png,image/jpg,image/gif,image/webp"
                                class="w-full text-xs text-gray-500 bg-gray-50 border border-gray-300 rounded-xl cursor-pointer file:ml-3 file:py-1.5 file:px-3 file:rounded file:border-0 file:text-xs file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 p-2 focus:outline-none"
                            >
                        </div>

                        <div>
                            <label class="block mb-1.5 text-xs font-semibold text-gray-700">عنوان الصورة (اختياري)</label>
                            <input
                                type="text"
                                name="title"
                                placeholder="مثال: واجهة النظام الإحصائي"
                                class="w-full px-3 py-2 text-sm bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-right"
                            >
                        </div>

                        <div>
                            <label class="block mb-1.5 text-xs font-semibold text-gray-700">وصف الصورة (اختياري)</label>
                            <textarea
                                name="description"
                                rows="3"
                                placeholder="اشرح ما تعرضه هذه الصورة كإحصاءات أو تفاصيل..."
                                class="w-full px-3 py-2 text-sm bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-right resize-none"
                            ></textarea>
                        </div>

                        <button
                            type="submit"
                            class="w-full py-2.5 text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 rounded-xl transition-colors shadow-sm"
                        >رفع الصورة وإضافتها للمعرض</button>
                    </form>
                </div>

                {{-- Gallery List Card --}}
                <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm space-y-4">
                    <div class="border-b border-gray-100 pb-3 flex items-center justify-between">
                        <div>
                            <h2 class="text-base font-bold text-gray-900">صور المعرض الحالي ({{ $project->images->count() }})</h2>
                            <p class="text-xs text-gray-400 mt-0.5">الصور التي تظهر حالياً في صفحة التفاصيل العامة</p>
                        </div>
                    </div>

                    @if($project->images->isNotEmpty())
                        <div class="grid grid-cols-1 gap-4 max-h-[460px] overflow-y-auto pr-1">
                            @foreach($project->images as $img)
                                <div class="flex gap-3 bg-gray-50 p-3 rounded-xl border border-gray-100 relative group">
                                    <div class="w-24 h-18 shrink-0 overflow-hidden rounded-lg border border-gray-200">
                                        <img src="{{ asset($img->image) }}" class="w-full h-full object-cover" alt="">
                                    </div>
                                    <div class="flex-1 overflow-hidden space-y-1">
                                        <p class="text-xs font-semibold text-gray-800 truncate">{{ $img->title ?? 'صورة بدون عنوان' }}</p>
                                        <p class="text-[10px] text-gray-500 line-clamp-2 leading-relaxed">{{ $img->description ?? 'لا يوجد وصف مضاف.' }}</p>
                                    </div>

                                    <form
                                        action="{{ route('admin.projects.images.destroy', $img->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('هل أنت متأكد من حذف هذه الصورة؟')"
                                        class="absolute top-2 left-2"
                                    >
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            type="submit"
                                            class="w-6 h-6 bg-red-100 hover:bg-red-200 text-red-600 rounded-full flex items-center justify-center transition-colors shadow-sm"
                                            title="حذف الصورة"
                                        >
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-8">
                            <svg class="w-10 h-10 text-gray-300 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <p class="text-xs text-gray-400 font-medium">لم يتم رفع أي صور تفاصيل بعد لهذا المشروع</p>
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
