<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم | إدارة المشاريع</title>

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
        }

        /* Fix sidebar hidden/show for RTL */
        #logo-sidebar.translate-x-full { transform: translateX(100%); }
        #logo-sidebar.-translate-x-full { transform: translateX(100%); }
        #logo-sidebar.translate-x-0   { transform: translateX(0); }

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
                       class="sidebar-link-active flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-semibold transition-colors">
                        <svg class="w-5 h-5 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20">
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

        {{-- Page Header --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">إدارة المشاريع</h1>
                <p class="text-sm text-gray-500 mt-0.5">تحكم بمحتوى معرض الأعمال الظاهر في الصفحة الرئيسية</p>
            </div>
            <button
                data-modal-target="project-modal"
                data-modal-toggle="project-modal"
                id="open-add-modal-btn"
                type="button"
                class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-semibold text-white bg-blue-600 rounded-xl hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none transition-colors shadow-sm whitespace-nowrap"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                إضافة مشروع
            </button>
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

        {{-- Stats Cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="bg-white rounded-xl border border-gray-200 p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">إجمالي المشاريع</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">{{ $projects->count() }}</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">التصنيفات</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">{{ $projects->pluck('category')->unique()->count() }}</p>
                    </div>
                    <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">حالة النظام</p>
                        <p class="text-xl font-bold text-green-600 mt-1">يعمل بشكل طبيعي</p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                        <span class="w-4 h-4 bg-green-500 rounded-full animate-pulse block"></span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Projects Table --}}
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="px-5 py-4 border-b border-gray-100">
                <h2 class="text-base font-semibold text-gray-900">قائمة المشاريع</h2>
                <p class="text-xs text-gray-400 mt-0.5">جميع المشاريع المضافة في معرض الأعمال</p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100">
                            <th class="px-5 py-3 text-right text-xs font-semibold text-gray-500 uppercase tracking-wider">الصورة</th>
                            <th class="px-5 py-3 text-right text-xs font-semibold text-gray-500 uppercase tracking-wider">المشروع</th>
                            <th class="px-5 py-3 text-right text-xs font-semibold text-gray-500 uppercase tracking-wider hidden md:table-cell">التصنيف</th>
                            <th class="px-5 py-3 text-right text-xs font-semibold text-gray-500 uppercase tracking-wider hidden sm:table-cell">السنة</th>
                            <th class="px-5 py-3 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @forelse ($projects as $project)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-5 py-4">
                                    <img
                                        src="{{ asset($project->image) }}"
                                        alt="{{ $project->title }}"
                                        class="w-16 h-12 rounded-lg object-cover border border-gray-100"
                                        onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2264%22 height=%2248%22><rect width=%2264%22 height=%2248%22 fill=%22%23e5e7eb%22/></svg>'"
                                    >
                                </td>
                                <td class="px-5 py-4">
                                    <p class="font-semibold text-gray-900 line-clamp-1">{{ $project->title }}</p>
                                    <p class="text-xs text-gray-400 mt-0.5 line-clamp-1 max-w-xs">{{ $project->description }}</p>
                                </td>
                                <td class="px-5 py-4 hidden md:table-cell">
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-blue-50 text-blue-700 border border-blue-100">
                                        {{ $project->category }}
                                    </span>
                                </td>
                                <td class="px-5 py-4 text-gray-500 text-sm hidden sm:table-cell">{{ $project->year }}</td>
                                <td class="px-5 py-4">
                                    <div class="flex items-center justify-center gap-3">
                                        <button
                                            type="button"
                                            onclick="openEditModal({
                                                id: {{ $project->id }},
                                                title: {{ json_encode($project->title) }},
                                                category: {{ json_encode($project->category) }},
                                                year: {{ json_encode($project->year) }},
                                                description: {{ json_encode($project->description) }}
                                            })"
                                            class="text-sm font-medium text-blue-600 hover:text-blue-800 hover:underline transition-colors"
                                        >تعديل</button>

                                        <span class="text-gray-200">|</span>

                                        <form
                                            action="{{ route('admin.projects.destroy', $project->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('هل أنت متأكد من حذف هذا المشروع؟')"
                                        >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-sm font-medium text-red-500 hover:text-red-700 hover:underline transition-colors">حذف</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-5 py-16 text-center">
                                    <div class="flex flex-col items-center gap-3">
                                        <div class="w-14 h-14 bg-gray-100 rounded-full flex items-center justify-center">
                                            <svg class="w-7 h-7 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                            </svg>
                                        </div>
                                        <p class="text-gray-400 font-medium">لا توجد مشاريع مضافة بعد</p>
                                        <p class="text-xs text-gray-300">اضغط "إضافة مشروع" للبدء</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

{{-- =================== MODAL: Add / Edit Project =================== --}}
<div
    id="project-modal"
    tabindex="-1"
    aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full h-full bg-black/40 backdrop-blur-sm"
>
    <div class="relative w-full max-w-2xl max-h-full p-4">
        <div class="relative bg-white rounded-2xl shadow-xl">

            {{-- Modal Header --}}
            <div class="flex items-center justify-between p-5 border-b border-gray-100">
                <h3 id="modal-title" class="text-lg font-bold text-gray-900">إضافة مشروع جديد</h3>
                <button
                    type="button"
                    data-modal-hide="project-modal"
                    class="p-2 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-lg transition-colors"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            {{-- Modal Body --}}
            <form
                id="project-form"
                action="{{ route('admin.projects.store') }}"
                method="POST"
                enctype="multipart/form-data"
                class="p-5 space-y-4"
            >
                @csrf
                <div id="method-field"></div>

                {{-- Title --}}
                <div>
                    <label for="f_title" class="block mb-1.5 text-sm font-medium text-gray-700">عنوان المشروع <span class="text-red-500">*</span></label>
                    <input
                        type="text"
                        id="f_title"
                        name="title"
                        required
                        placeholder="مثال: برنامج الإحصاء الطبي"
                        class="w-full px-4 py-2.5 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-right"
                    >
                </div>

                {{-- Category + Year --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="f_category" class="block mb-1.5 text-sm font-medium text-gray-700">التصنيف <span class="text-red-500">*</span></label>
                        <input
                            type="text"
                            id="f_category"
                            name="category"
                            required
                            placeholder="مثال: أنظمة طبية"
                            class="w-full px-4 py-2.5 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-right"
                        >
                    </div>
                    <div>
                        <label for="f_year" class="block mb-1.5 text-sm font-medium text-gray-700">سنة الإنجاز <span class="text-red-500">*</span></label>
                        <input
                            type="text"
                            id="f_year"
                            name="year"
                            required
                            placeholder="مثال: ٢٠٢٥ م"
                            class="w-full px-4 py-2.5 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-right"
                        >
                    </div>
                </div>

                {{-- Image --}}
                <div>
                    <label for="f_image" class="block mb-1.5 text-sm font-medium text-gray-700">
                        صورة المشروع <span id="image-required-mark" class="text-red-500">*</span>
                    </label>
                    <input
                        type="file"
                        id="f_image"
                        name="image"
                        accept="image/jpeg,image/png,image/jpg,image/gif,image/webp"
                        class="w-full text-sm text-gray-500 bg-gray-50 border border-gray-300 rounded-xl cursor-pointer file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 p-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                    <p id="image-hint" class="hidden mt-1.5 text-xs text-gray-400">اتركه فارغاً للاحتفاظ بالصورة الحالية.</p>
                </div>

                {{-- Description --}}
                <div>
                    <label for="f_description" class="block mb-1.5 text-sm font-medium text-gray-700">وصف المشروع <span class="text-red-500">*</span></label>
                    <textarea
                        id="f_description"
                        name="description"
                        rows="4"
                        required
                        placeholder="اكتب وصفاً مختصراً للمشروع..."
                        class="w-full px-4 py-2.5 text-sm bg-gray-50 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-right resize-none"
                    ></textarea>
                </div>

                {{-- Footer --}}
                <div class="flex items-center justify-end gap-3 pt-2 border-t border-gray-100">
                    <button
                        type="button"
                        data-modal-hide="project-modal"
                        class="px-5 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-xl hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-200 transition-colors"
                    >إلغاء</button>
                    <button
                        type="submit"
                        class="px-5 py-2.5 text-sm font-semibold text-white bg-blue-600 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 transition-colors"
                    >حفظ المشروع</button>
                </div>
            </form>

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

    // ===== Modal: Edit Project =====
    function openEditModal(project) {
        // Set form action to update route
        document.getElementById('project-form').action = `/admin/projects/${project.id}/update`;

        // No method-override needed (route is POST already)
        document.getElementById('method-field').innerHTML = '';

        // Fill fields
        document.getElementById('f_title').value       = project.title;
        document.getElementById('f_category').value    = project.category;
        document.getElementById('f_year').value        = project.year;
        document.getElementById('f_description').value = project.description;
        document.getElementById('f_image').value       = '';
        document.getElementById('f_image').required    = false;
        document.getElementById('image-required-mark').style.display = 'none';
        document.getElementById('image-hint').classList.remove('hidden');
        document.getElementById('modal-title').textContent = 'تعديل المشروع';

        // Open Flowbite modal
        const modalEl = document.getElementById('project-modal');
        modalEl.classList.remove('hidden');
        modalEl.setAttribute('aria-hidden', 'false');
    }

    // ===== Modal: Reset when opening Add modal =====
    document.getElementById('open-add-modal-btn').addEventListener('click', function () {
        document.getElementById('project-form').action = "{{ route('admin.projects.store') }}";
        document.getElementById('method-field').innerHTML = '';
        document.getElementById('project-form').reset();
        document.getElementById('f_image').required    = true;
        document.getElementById('image-required-mark').style.display = 'inline';
        document.getElementById('image-hint').classList.add('hidden');
        document.getElementById('modal-title').textContent = 'إضافة مشروع جديد';
    });
</script>

</body>
</html>
