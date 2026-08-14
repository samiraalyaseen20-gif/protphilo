<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة السيرة الذاتية | لوحة التحكم</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <!-- Flowbite CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <style>
        body, input, textarea, select, button { font-family: 'Cairo', sans-serif; }
        .material-symbols-outlined { font-family: 'Material Symbols Outlined' !important; }
        
        .brand-gradient {
            background: linear-gradient(135deg, #ff3366 0%, #e11d48 100%);
        }

        #logo-sidebar {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        @media (min-width: 1024px) {
            #main-content {
                padding-right: 17.5rem;
            }
            #logo-sidebar {
                transform: translateX(0) !important;
            }
        }
    </style>
</head>

<body class="bg-slate-50/70 antialiased min-h-screen text-slate-800">

    {{-- Mobile Sidebar Overlay Backdrop --}}
    <div id="sidebar-overlay" class="fixed inset-0 bg-slate-900/60 backdrop-blur-xs z-40 opacity-0 pointer-events-none transition-opacity duration-300 lg:hidden" onclick="closeSidebar()"></div>

    {{-- =================== TOP NAVBAR =================== --}}
    <header class="fixed top-0 z-30 w-full bg-white/90 backdrop-blur-md border-b border-slate-200/80">
        <div class="px-4 py-3 lg:px-6">
            <div class="flex items-center justify-between">

                {{-- Right: Mobile Hamburger + Logo --}}
                <div class="flex items-center gap-3">
                    <button
                        id="sidebar-toggle"
                        type="button"
                        onclick="toggleSidebar()"
                        class="inline-flex items-center p-2 text-slate-600 rounded-xl lg:hidden hover:bg-slate-100 focus:outline-none active:scale-95 transition-all"
                        aria-label="القائمة"
                    >
                        <span class="material-symbols-outlined text-2xl">menu</span>
                    </button>

                    <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2.5">
                        <div class="w-9 h-9 brand-gradient rounded-xl flex items-center justify-center text-white shadow-md shadow-rose-500/20">
                            <span class="material-symbols-outlined text-xl font-bold">dashboard</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-base font-black text-slate-900 leading-tight">لوحة الإدارة</span>
                            <span class="text-[10px] text-slate-400 font-semibold">السيرة الذاتية والخبرات</span>
                        </div>
                    </a>
                </div>

                {{-- Left: Website link + User Dropdown --}}
                <div class="flex items-center gap-3">
                    <a href="/" target="_blank" class="hidden sm:inline-flex items-center gap-1.5 px-3.5 py-1.5 text-xs font-bold text-slate-600 bg-slate-100 hover:bg-rose-50 hover:text-rose-600 rounded-xl transition-all">
                        <span class="material-symbols-outlined text-base">open_in_new</span>
                        معاينة الموقع
                    </a>

                    <button
                        type="button"
                        id="user-menu-btn"
                        data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom-end"
                        class="flex items-center gap-2 p-1 rounded-full hover:bg-slate-100 transition-all focus:outline-none"
                    >
                        <div class="w-9 h-9 rounded-full brand-gradient flex items-center justify-center text-white font-black text-sm shadow-sm">
                            س
                        </div>
                        <span class="material-symbols-outlined text-slate-400 text-sm hidden sm:block">expand_more</span>
                    </button>

                    <div id="user-dropdown" class="z-50 hidden my-2 min-w-48 text-right bg-white divide-y divide-slate-100 rounded-2xl shadow-xl border border-slate-100">
                        <div class="px-4 py-3">
                            <p class="text-xs font-bold text-slate-900">مشرف النظام</p>
                            <p class="text-[11px] text-slate-400 truncate">Samiraalyaseen20@gmail.com</p>
                        </div>
                        <ul class="py-1 text-xs font-semibold text-slate-700">
                            <li>
                                <a href="/" target="_blank" class="flex items-center gap-2 px-4 py-2.5 hover:bg-slate-50">
                                    <span class="material-symbols-outlined text-base text-slate-400">home</span>
                                    زيارة الموقع العام
                                </a>
                            </li>
                            <li>
                                <form action="{{ route('admin.logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="w-full flex items-center gap-2 px-4 py-2.5 text-rose-600 hover:bg-rose-50 font-bold">
                                        <span class="material-symbols-outlined text-base text-rose-500">logout</span>
                                        تسجيل الخروج
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </header>

    {{-- =================== SIDEBAR DRAWER =================== --}}
    <aside
        id="logo-sidebar"
        class="fixed top-0 right-0 z-40 w-68 h-screen pt-16 bg-white border-l border-slate-200/80 shadow-2xl lg:shadow-none translate-x-full lg:translate-x-0"
        aria-label="Sidebar"
    >
        <div class="h-full flex flex-col justify-between px-4 py-6 overflow-y-auto">
            
            <nav class="space-y-6">
                <div>
                    <p class="text-[11px] font-black text-slate-400 uppercase tracking-widest px-3 mb-3">القائمة الرئيسية</p>
                    <ul class="space-y-1.5">
                        <li>
                            <a href="{{ route('admin.dashboard') }}"
                               class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-bold text-slate-600 hover:bg-slate-100 hover:text-slate-900 transition-all">
                                <span class="material-symbols-outlined text-xl text-slate-400">folder_special</span>
                                <span>إدارة المشاريع</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.resume.edit') }}"
                               class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-bold bg-rose-50 text-rose-600 border border-rose-100 shadow-xs">
                                <span class="material-symbols-outlined text-xl">badge</span>
                                <span>السيرة الذاتية والخبرات</span>
                            </a>
                        </li>
                        <li>
                            <a href="/" target="_blank"
                               class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-bold text-slate-600 hover:bg-slate-100 hover:text-slate-900 transition-all">
                                <span class="material-symbols-outlined text-xl text-slate-400">visibility</span>
                                <span>معاينة الموقع العام</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="pt-4 border-t border-slate-100">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="flex items-center justify-center gap-2 w-full px-4 py-3 rounded-2xl text-xs font-bold text-rose-600 bg-rose-50/60 hover:bg-rose-100/80 transition-all">
                        <span class="material-symbols-outlined text-lg">logout</span>
                        تسجيل الخروج
                    </button>
                </form>
            </div>

        </div>
    </aside>

    {{-- =================== MAIN CONTENT AREA =================== --}}
    <main id="main-content" class="pt-20 pb-16 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            {{-- Header Title --}}
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 bg-white p-5 sm:p-6 rounded-3xl border border-slate-200/80 shadow-xs">
                <div>
                    <div class="flex items-center gap-2 mb-1">
                        <span class="w-2.5 h-2.5 rounded-full brand-gradient"></span>
                        <h1 class="text-xl sm:text-2xl font-black text-slate-900">إدارة السيرة الذاتية والخبرات</h1>
                    </div>
                    <p class="text-xs text-slate-500 font-semibold">تعديل معلومات الشهادة الأكاديمية والمهارات وتفاصيل المسيرة المهنية بالتايم لاين</p>
                </div>
                
                <a href="/" target="_blank" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 text-xs font-bold text-slate-700 bg-slate-100 hover:bg-slate-200 rounded-2xl transition-all shadow-xs">
                    <span class="material-symbols-outlined text-base">visibility</span>
                    معاينة النتيجة المباشرة
                </a>
            </div>

            {{-- Alerts --}}
            @if (session('success'))
                <div id="success-alert" class="flex items-center gap-3 p-4 text-emerald-800 bg-emerald-50 border border-emerald-200/80 rounded-2xl shadow-xs" role="alert">
                    <span class="material-symbols-outlined text-emerald-600 text-xl">check_circle</span>
                    <p class="text-xs font-bold flex-1">{{ session('success') }}</p>
                    <button type="button" onclick="document.getElementById('success-alert').remove()" class="text-emerald-500 hover:text-emerald-700">
                        <span class="material-symbols-outlined text-lg">close</span>
                    </button>
                </div>
            @endif

            @if ($errors->any())
                <div class="flex items-start gap-3 p-4 text-rose-800 bg-rose-50 border border-rose-200/80 rounded-2xl shadow-xs" role="alert">
                    <span class="material-symbols-outlined text-rose-600 text-xl mt-0.5">error</span>
                    <ul class="text-xs font-bold space-y-1 flex-1">
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Main Two-Column Grid --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

                {{-- Column 1: Academic Settings & Skills (5 cols) --}}
                <div class="lg:col-span-5 bg-white rounded-3xl border border-slate-200/80 p-6 shadow-xs space-y-6 self-start">
                    <div class="border-b border-slate-100 pb-4 flex items-center justify-between">
                        <div>
                            <h2 class="text-sm font-black text-slate-900">الشهادة والمهارات البرمجية</h2>
                            <p class="text-[11px] text-slate-400 font-semibold mt-0.5">البيانات الظاهرة في أعلى الواجهة الرئيسية</p>
                        </div>
                        <span class="material-symbols-outlined text-rose-500 text-xl">school</span>
                    </div>

                    <form action="{{ route('admin.resume.settings.update') }}" method="POST" class="space-y-4 text-right">
                        @csrf

                        <div>
                            <label for="degree" class="block mb-1 text-xs font-bold text-slate-700">المسمى الأكاديمي / الشهادة <span class="text-rose-500">*</span></label>
                            <input
                                type="text"
                                name="degree"
                                id="degree"
                                value="{{ old('degree', $settings->degree) }}"
                                required
                                placeholder="مثال: بكلوريوس هندسة أجهزة طبية"
                                class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold"
                            >
                        </div>

                        <div>
                            <label for="university" class="block mb-1 text-xs font-bold text-slate-700">الكلية / الجامعة <span class="text-rose-500">*</span></label>
                            <input
                                type="text"
                                name="university"
                                id="university"
                                value="{{ old('university', $settings->university) }}"
                                required
                                placeholder="مثال: كلية الحسين الجامعة"
                                class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold"
                            >
                        </div>

                        <div>
                            <label for="graduation_year" class="block mb-1 text-xs font-bold text-slate-700">سنة التخرج <span class="text-rose-500">*</span></label>
                            <input
                                type="text"
                                name="graduation_year"
                                id="graduation_year"
                                value="{{ old('graduation_year', $settings->graduation_year) }}"
                                required
                                placeholder="مثال: ٢٠٢١ - ٢٠٢٢ م"
                                class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold"
                            >
                        </div>

                        <div>
                            <label for="languages" class="block mb-1 text-xs font-bold text-slate-700">اللغات المكتسبة (سطر جديد لكل لغة)</label>
                            <textarea
                                name="languages"
                                id="languages"
                                rows="3"
                                placeholder="اكتب كل لغة في سطر مستقل..."
                                class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold resize-none"
                            >{{ old('languages', $settings->languages) }}</textarea>
                        </div>

                        <div>
                            <label for="skills" class="block mb-1 text-xs font-bold text-slate-700">المهارات البرمجية (سطر جديد لكل مهارة)</label>
                            <textarea
                                name="skills"
                                id="skills"
                                rows="5"
                                placeholder="اكتب كل مهارة في سطر مستقل..."
                                class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold resize-none"
                            >{{ old('skills', $settings->skills) }}</textarea>
                        </div>

                        <div class="pt-3 border-t border-slate-100">
                            <button
                                type="submit"
                                class="w-full py-3 text-xs font-black text-white brand-gradient rounded-xl hover:opacity-90 transition-all shadow-md shadow-rose-500/20"
                            >حفظ البيانات والأكاديميا</button>
                        </div>
                    </form>
                </div>

                {{-- Column 2: Timeline Experiences (7 cols) --}}
                <div class="lg:col-span-7 space-y-6">

                    {{-- Add Experience Card --}}
                    <div class="bg-white rounded-3xl border border-slate-200/80 p-6 shadow-xs space-y-4">
                        <div class="border-b border-slate-100 pb-3 flex items-center justify-between">
                            <div>
                                <h2 class="text-sm font-black text-slate-900">إضافة خبرة مهنية جديدة</h2>
                                <p class="text-[11px] text-slate-400 font-semibold mt-0.5">إدراج محطة وظيفية جديدة في التايم لاين الزمني</p>
                            </div>
                            <span class="material-symbols-outlined text-rose-500 text-xl">work_history</span>
                        </div>

                        <form action="{{ route('admin.resume.experiences.store') }}" method="POST" class="space-y-4 text-right">
                            @csrf

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="exp_year_range" class="block mb-1 text-xs font-bold text-slate-700">الفترة الزمنية <span class="text-rose-500">*</span></label>
                                    <input
                                        type="text"
                                        name="year_range"
                                        id="exp_year_range"
                                        required
                                        placeholder="مثال: ٢٠٢٥ - حتى الآن"
                                        class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold"
                                    >
                                </div>
                                <div>
                                    <label for="exp_title" class="block mb-1 text-xs font-bold text-slate-700">المسمى الوظيفي <span class="text-rose-500">*</span></label>
                                    <input
                                        type="text"
                                        name="title"
                                        id="exp_title"
                                        required
                                        placeholder="مثال: مسؤولة الإحصاء الطبي"
                                        class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold"
                                    >
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="exp_company" class="block mb-1 text-xs font-bold text-slate-700">جهة العمل / المؤسسة <span class="text-rose-500">*</span></label>
                                    <input
                                        type="text"
                                        name="company"
                                        id="exp_company"
                                        required
                                        placeholder="مثال: مركز السيدة زينب للعيون"
                                        class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold"
                                    >
                                </div>
                                <div>
                                    <label for="exp_icon" class="block mb-1 text-xs font-bold text-slate-700">الأيقونة <span class="text-rose-500">*</span></label>
                                    <select
                                        name="icon"
                                        id="exp_icon"
                                        required
                                        class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold"
                                    >
                                        <option value="medical_services">طبي (medical_services)</option>
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
                                    <label for="exp_sort" class="block mb-1 text-xs font-bold text-slate-700">ترتيب العرض (رقمي)</label>
                                    <input
                                        type="number"
                                        name="sort_order"
                                        id="exp_sort"
                                        value="0"
                                        class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold"
                                    >
                                </div>
                            </div>

                            <div>
                                <label for="exp_responsibilities" class="block mb-1 text-xs font-bold text-slate-700">المهام والمسؤوليات (سطر جديد لكل مهمة) <span class="text-rose-500">*</span></label>
                                <textarea
                                    name="responsibilities"
                                    id="exp_responsibilities"
                                    rows="4"
                                    required
                                    placeholder="اكتب كل نقطة/مسؤولية وظيفية في سطر مستقل..."
                                    class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold resize-none"
                                ></textarea>
                            </div>

                            <button
                                type="submit"
                                class="w-full py-3 text-xs font-black text-white brand-gradient rounded-xl hover:opacity-90 transition-all shadow-md shadow-rose-500/20"
                            >إدراج الخبرة بالتايم لاين</button>
                        </form>
                    </div>

                    {{-- Experiences List Card --}}
                    <div class="bg-white rounded-3xl border border-slate-200/80 p-6 shadow-xs space-y-4">
                        <div class="border-b border-slate-100 pb-3 flex items-center justify-between">
                            <div>
                                <h2 class="text-sm font-black text-slate-900">الخبرات المضافة بالتايم لاين ({{ $experiences->count() }})</h2>
                                <p class="text-[11px] text-slate-400 font-semibold mt-0.5">مرتبة حسب التسلسل المهني والمحددات</p>
                            </div>
                        </div>

                        @if($experiences->isNotEmpty())
                            <div class="space-y-3.5 max-h-[600px] overflow-y-auto pr-1">
                                @foreach($experiences as $exp)
                                    <div class="bg-slate-50/80 p-4 rounded-2xl border border-slate-200/80 flex flex-col sm:flex-row justify-between gap-4 text-right">
                                        <div class="space-y-2 flex-1">
                                            <div class="flex items-center gap-2 flex-wrap">
                                                <span class="px-2 py-0.5 bg-rose-100 text-rose-700 text-[10px] font-bold rounded-md">ترتيب: {{ $exp->sort_order }}</span>
                                                <span class="px-2 py-0.5 bg-slate-200 text-slate-700 text-[10px] font-bold rounded-md">{{ $exp->year_range }}</span>
                                                <span class="text-[10px] font-bold text-slate-400 flex items-center gap-1">
                                                    <span class="material-symbols-outlined text-xs">{{ $exp->icon == 'clinical_suite' ? 'medical_services' : $exp->icon }}</span>
                                                    {{ $exp->icon }}
                                                </span>
                                            </div>
                                            <h3 class="text-xs font-black text-slate-900 leading-snug">{{ $exp->title }}</h3>
                                            <p class="text-[11px] text-rose-600 font-bold">{{ $exp->company }}</p>
                                            <ul class="list-disc pr-4 text-[10px] text-slate-600 space-y-1 leading-relaxed">
                                                @foreach($exp->responsibilities_list as $item)
                                                    <li>{{ $item }}</li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        <div class="flex sm:flex-col justify-end gap-2 shrink-0 border-t sm:border-t-0 pt-2 sm:pt-0 border-slate-200/60">
                                            <button
                                                type="button"
                                                data-modal-target="edit-exp-modal-{{ $exp->id }}"
                                                data-modal-toggle="edit-exp-modal-{{ $exp->id }}"
                                                class="px-3 py-1.5 bg-white text-slate-700 hover:text-rose-600 rounded-xl transition-all border border-slate-200 font-bold text-xs flex items-center justify-center gap-1 shadow-xs"
                                            >
                                                <span class="material-symbols-outlined text-sm">edit</span>
                                                تعديل
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
                                                    class="p-1.5 bg-white text-slate-400 hover:text-rose-600 rounded-xl transition-all border border-slate-200 flex items-center justify-center shadow-xs"
                                                    title="حذف الخبرة"
                                                >
                                                    <span class="material-symbols-outlined text-base">delete</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                    {{-- EDIT MODAL --}}
                                    <div id="edit-exp-modal-{{ $exp->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full h-full bg-slate-900/60 backdrop-blur-xs p-4">
                                        <div class="relative w-full max-w-lg max-h-full">
                                            <div class="relative bg-white rounded-3xl shadow-2xl border border-slate-100 overflow-hidden text-right">
                                                <div class="flex items-center justify-between p-4 border-b border-slate-100">
                                                    <h3 class="text-sm font-black text-slate-900">تعديل الخبرة المهنية</h3>
                                                    <button type="button" class="text-slate-400 hover:text-slate-700 rounded-xl p-1" data-modal-hide="edit-exp-modal-{{ $exp->id }}">
                                                        <span class="material-symbols-outlined text-xl">close</span>
                                                    </button>
                                                </div>

                                                <form action="{{ route('admin.resume.experiences.update', $exp->id) }}" method="POST" class="p-4 space-y-4">
                                                    @csrf
                                                    <div class="grid grid-cols-2 gap-4">
                                                        <div>
                                                            <label class="block mb-1 text-xs font-bold text-slate-700">الفترة <span class="text-rose-500">*</span></label>
                                                            <input type="text" name="year_range" value="{{ old('year_range', $exp->year_range) }}" required class="w-full px-3 py-2 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold">
                                                        </div>
                                                        <div>
                                                            <label class="block mb-1 text-xs font-bold text-slate-700">المسمى الوظيفي <span class="text-rose-500">*</span></label>
                                                            <input type="text" name="title" value="{{ old('title', $exp->title) }}" required class="w-full px-3 py-2 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold">
                                                        </div>
                                                    </div>

                                                    <div class="grid grid-cols-2 gap-4">
                                                        <div>
                                                            <label class="block mb-1 text-xs font-bold text-slate-700">جهة العمل <span class="text-rose-500">*</span></label>
                                                            <input type="text" name="company" value="{{ old('company', $exp->company) }}" required class="w-full px-3 py-2 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold">
                                                        </div>
                                                        <div>
                                                            <label class="block mb-1 text-xs font-bold text-slate-700">الأيقونة <span class="text-rose-500">*</span></label>
                                                            <select name="icon" required class="w-full px-3 py-2 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold">
                                                                <option value="medical_services" {{ $exp->icon == 'medical_services' || $exp->icon == 'clinical_suite' ? 'selected' : '' }}>طبي (medical_services)</option>
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
                                                            <label class="block mb-1 text-xs font-bold text-slate-700">ترتيب العرض</label>
                                                            <input type="number" name="sort_order" value="{{ old('sort_order', $exp->sort_order) }}" class="w-full px-3 py-2 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold">
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <label class="block mb-1 text-xs font-bold text-slate-700">المهام والمسؤوليات <span class="text-rose-500">*</span></label>
                                                        <textarea name="responsibilities" rows="5" required class="w-full px-3 py-2 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold resize-none">{{ old('responsibilities', $exp->responsibilities) }}</textarea>
                                                    </div>

                                                    <div class="flex items-center gap-3 pt-3 border-t border-slate-100">
                                                        <button type="submit" class="px-5 py-2.5 text-xs font-black text-white brand-gradient rounded-xl hover:opacity-90 transition-all shadow-md shadow-rose-500/20">حفظ التغييرات</button>
                                                        <button type="button" class="px-4 py-2.5 text-xs font-bold text-slate-600 bg-slate-100 rounded-xl hover:bg-slate-200" data-modal-hide="edit-exp-modal-{{ $exp->id }}">إلغاء</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-12 text-slate-400">
                                <span class="material-symbols-outlined text-4xl mb-2">work_off</span>
                                <p class="font-bold text-xs">لم يتم إضافة أي خبرات مهنية بالتايم لاين بعد</p>
                            </div>
                        @endif
                    </div>

                </div>

            </div>

        </div>
    </main>

    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <script>
        const sidebar = document.getElementById('logo-sidebar');
        const overlay = document.getElementById('sidebar-overlay');

        function toggleSidebar() {
            if (sidebar.classList.contains('translate-x-full')) {
                openSidebar();
            } else {
                closeSidebar();
            }
        }

        function openSidebar() {
            sidebar.classList.remove('translate-x-full');
            sidebar.classList.add('translate-x-0');
            overlay.classList.remove('opacity-0', 'pointer-events-none');
            overlay.classList.add('opacity-100', 'pointer-events-auto');
            document.body.style.overflow = 'hidden';
        }

        function closeSidebar() {
            sidebar.classList.remove('translate-x-0');
            sidebar.classList.add('translate-x-full');
            overlay.classList.remove('opacity-100', 'pointer-events-auto');
            overlay.classList.add('opacity-0', 'pointer-events-none');
            document.body.style.overflow = '';
        }
    </script>

</body>
</html>
