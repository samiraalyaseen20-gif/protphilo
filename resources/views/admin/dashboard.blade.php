<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم | إدارة المشاريع</title>

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
        .brand-text {
            color: #ff3366;
        }

        /* Sidebar Off-canvas transition for RTL */
        #logo-sidebar {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Fix main content padding on desktop */
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
    <header class="fixed top-0 z-50 w-full bg-white border-b border-slate-200 shadow-xs">
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
                            <span class="text-[10px] text-slate-400 font-semibold">المهندسة سميرة علي</span>
                        </div>
                    </a>
                </div>

                {{-- Left: Website link + User Dropdown --}}
                <div class="flex items-center gap-3">
                    <a href="/" target="_blank" class="hidden sm:inline-flex items-center gap-1.5 px-3.5 py-1.5 text-xs font-bold text-slate-600 bg-slate-100 hover:bg-rose-50 hover:text-rose-600 rounded-xl transition-all">
                        <span class="material-symbols-outlined text-base">open_in_new</span>
                        معاينة الموقع
                    </a>

                    {{-- Admin Profile Dropdown --}}
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

                    {{-- Dropdown Popup --}}
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
                               class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-bold bg-rose-50 text-rose-600 border border-rose-100 shadow-xs">
                                <span class="material-symbols-outlined text-xl">folder_special</span>
                                <span>إدارة المشاريع</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.resume.edit') }}"
                               class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-bold text-slate-600 hover:bg-slate-100 hover:text-slate-900 transition-all">
                                <span class="material-symbols-outlined text-xl text-slate-400">badge</span>
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

            {{-- Logout Button Footer --}}
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

            {{-- Header Title & Action Button --}}
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 bg-white p-5 sm:p-6 rounded-3xl border border-slate-200/80 shadow-xs">
                <div>
                    <div class="flex items-center gap-2 mb-1">
                        <span class="w-2.5 h-2.5 rounded-full brand-gradient"></span>
                        <h1 class="text-xl sm:text-2xl font-black text-slate-900">إدارة معرض المشاريع</h1>
                    </div>
                    <p class="text-xs text-slate-500 font-semibold">إضافة وتعديل المشاريع الظاهرة في الواجهة الرئيسية للموقع</p>
                </div>
                
                <button
                    data-modal-target="project-modal"
                    data-modal-toggle="project-modal"
                    id="open-add-modal-btn"
                    type="button"
                    class="inline-flex items-center justify-center gap-2 px-6 py-3 text-xs font-black text-white brand-gradient rounded-2xl hover:opacity-90 active:scale-95 transition-all shadow-md shadow-rose-500/20 whitespace-nowrap"
                >
                    <span class="material-symbols-outlined text-lg">add_circle</span>
                    إضافة مشروع جديد
                </button>
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

            {{-- Stat Cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="bg-white rounded-3xl border border-slate-200/80 p-5 shadow-xs flex items-center justify-between">
                    <div>
                        <p class="text-xs font-bold text-slate-400">إجمالي المشاريع</p>
                        <p class="text-2xl sm:text-3xl font-black text-slate-900 mt-1">{{ $projects->count() }}</p>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-rose-50 text-rose-600 flex items-center justify-center">
                        <span class="material-symbols-outlined text-2xl font-bold">folder</span>
                    </div>
                </div>

                <div class="bg-white rounded-3xl border border-slate-200/80 p-5 shadow-xs flex items-center justify-between">
                    <div>
                        <p class="text-xs font-bold text-slate-400">التصنيفات المعتمدة</p>
                        <p class="text-2xl sm:text-3xl font-black text-slate-900 mt-1">{{ $projects->pluck('category')->unique()->count() }}</p>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center">
                        <span class="material-symbols-outlined text-2xl font-bold">category</span>
                    </div>
                </div>

                <div class="bg-white rounded-3xl border border-slate-200/80 p-5 shadow-xs flex items-center justify-between">
                    <div>
                        <p class="text-xs font-bold text-slate-400">حالة النظام</p>
                        <p class="text-sm font-black text-emerald-600 mt-1.5 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            يعمل ومحدث
                        </p>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
                        <span class="material-symbols-outlined text-2xl font-bold">verified</span>
                    </div>
                </div>
            </div>

            {{-- Projects Content Container (Responsive: Table on Desktop, Cards on Mobile) --}}
            <div class="bg-white rounded-3xl border border-slate-200/80 shadow-xs overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between">
                    <div>
                        <h2 class="text-sm font-black text-slate-900">المشاريع المضافة ({{ $projects->count() }})</h2>
                        <p class="text-[11px] text-slate-400 font-semibold">انقر على تعديل لإدارة تفاصيل وصور كل مشروع</p>
                    </div>
                </div>

                {{-- Desktop Table View (Visible on md+) --}}
                <div class="hidden md:block overflow-x-auto">
                    <table class="w-full text-right text-xs">
                        <thead class="bg-slate-50 border-b border-slate-100 text-slate-400 font-bold uppercase">
                            <tr>
                                <th class="px-6 py-4">معاينة الصورة</th>
                                <th class="px-6 py-4">اسم المشروع والوصف</th>
                                <th class="px-6 py-4">التصنيف</th>
                                <th class="px-6 py-4">سنة الإنجاز</th>
                                <th class="px-6 py-4 text-center">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 font-medium text-slate-700">
                            @forelse ($projects as $project)
                                <tr class="hover:bg-slate-50/80 transition-all">
                                    <td class="px-6 py-4">
                                        <img
                                            src="{{ asset($project->image) }}"
                                            alt="{{ $project->title }}"
                                            class="w-16 h-12 rounded-xl object-cover border border-slate-200 shadow-xs"
                                            onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2264%22 height=%2248%22%3E%3Crect width=%2264%22 height=%2248%22 fill=%22%23f1f5f9%22/%3E%3C/svg%3E'"
                                        >
                                    </td>
                                    <td class="px-6 py-4 max-w-xs">
                                        <p class="font-black text-slate-900 text-sm leading-snug">{{ $project->title }}</p>
                                        <p class="text-[11px] text-slate-400 mt-1 line-clamp-1 leading-relaxed">{{ $project->description }}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="inline-block px-3 py-1 rounded-full bg-rose-50 text-rose-600 font-bold text-[10px] border border-rose-100">
                                            {{ $project->category }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 font-bold text-slate-600">{{ $project->year }}</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center justify-center gap-2">
                                            <a
                                                href="{{ route('admin.projects.edit', $project->id) }}"
                                                class="px-3.5 py-1.5 rounded-xl bg-slate-100 hover:bg-rose-50 text-slate-700 hover:text-rose-600 font-bold transition-all flex items-center gap-1"
                                            >
                                                <span class="material-symbols-outlined text-base">edit</span>
                                                تعديل
                                            </a>

                                            <form
                                                action="{{ route('admin.projects.destroy', $project->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('هل أنت متأكد من حذف هذا المشروع؟')"
                                            >
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="p-1.5 rounded-xl hover:bg-rose-50 text-slate-400 hover:text-rose-600 transition-all" title="حذف">
                                                    <span class="material-symbols-outlined text-lg">delete</span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-16 text-center text-slate-400">
                                        <span class="material-symbols-outlined text-4xl mb-2">folder_off</span>
                                        <p class="font-bold text-xs">لا توجد مشاريع مضافة حالياً</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Mobile Card List View (Visible on <md) --}}
                <div class="block md:hidden p-4 space-y-4">
                    @forelse ($projects as $project)
                        <div class="bg-slate-50/80 p-4 rounded-2xl border border-slate-200/80 space-y-3">
                            <div class="flex items-start gap-3">
                                <img
                                    src="{{ asset($project->image) }}"
                                    alt="{{ $project->title }}"
                                    class="w-20 h-16 rounded-xl object-cover border border-slate-200 shadow-xs shrink-0"
                                    onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2264%22 height=%2248%22%3E%3Crect width=%2264%22 height=%2248%22 fill=%22%23f1f5f9%22/%3E%3C/svg%3E'"
                                >
                                <div class="flex-1 min-w-0 space-y-1">
                                    <div class="flex items-center justify-between gap-2">
                                        <span class="px-2 py-0.5 rounded-md bg-rose-100/80 text-rose-700 font-bold text-[9px]">
                                            {{ $project->category }}
                                        </span>
                                        <span class="text-[10px] font-bold text-slate-400">{{ $project->year }}</span>
                                    </div>
                                    <h3 class="font-black text-slate-900 text-xs leading-snug truncate">{{ $project->title }}</h3>
                                    <p class="text-[10px] text-slate-500 line-clamp-2 leading-relaxed">{{ $project->description }}</p>
                                </div>
                            </div>

                            <div class="flex items-center justify-end gap-2 pt-2 border-t border-slate-200/60">
                                <a
                                    href="{{ route('admin.projects.edit', $project->id) }}"
                                    class="flex-1 py-2 rounded-xl bg-white border border-slate-200 text-slate-700 hover:text-rose-600 font-bold text-xs flex items-center justify-center gap-1 shadow-xs"
                                >
                                    <span class="material-symbols-outlined text-base">edit</span>
                                    تعديل التفاصيل والصور
                                </a>

                                <form
                                    action="{{ route('admin.projects.destroy', $project->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('هل أنت متأكد من حذف هذا المشروع؟')"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 rounded-xl bg-white border border-slate-200 text-slate-400 hover:text-rose-600 transition-all" title="حذف">
                                        <span class="material-symbols-outlined text-base">delete</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-12 text-slate-400">
                            <span class="material-symbols-outlined text-4xl mb-2">folder_off</span>
                            <p class="font-bold text-xs">لا توجد مشاريع مضافة حالياً</p>
                        </div>
                    @endforelse
                </div>

            </div>

        </div>
    </main>

    {{-- =================== MODAL: Add Project =================== --}}
    <div
        id="project-modal"
        tabindex="-1"
        aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full h-full bg-slate-900/60 backdrop-blur-xs p-4"
    >
        <div class="relative w-full max-w-xl max-h-full">
            <div class="relative bg-white rounded-3xl shadow-2xl border border-slate-100 overflow-hidden">

                {{-- Modal Header --}}
                <div class="flex items-center justify-between p-5 border-b border-slate-100">
                    <h3 id="modal-title" class="text-base font-black text-slate-900">إضافة مشروع جديد</h3>
                    <button
                        type="button"
                        data-modal-hide="project-modal"
                        class="p-1.5 text-slate-400 hover:text-slate-700 hover:bg-slate-100 rounded-xl transition-all"
                    >
                        <span class="material-symbols-outlined text-xl">close</span>
                    </button>
                </div>

                {{-- Modal Body --}}
                <form
                    id="project-form"
                    action="{{ route('admin.projects.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                    class="p-5 space-y-4 text-right"
                >
                    @csrf
                    <div id="method-field"></div>

                    {{-- Title --}}
                    <div>
                        <label for="f_title" class="block mb-1 text-xs font-bold text-slate-700">عنوان المشروع <span class="text-rose-500">*</span></label>
                        <input
                            type="text"
                            id="f_title"
                            name="title"
                            required
                            placeholder="مثال: برنامج الإحصاء الطبي"
                            class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold"
                        >
                    </div>

                    {{-- Category + Year --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="f_category" class="block mb-1 text-xs font-bold text-slate-700">التصنيف <span class="text-rose-500">*</span></label>
                            <input
                                type="text"
                                id="f_category"
                                name="category"
                                required
                                placeholder="مثال: أنظمة إحصائية طبية"
                                class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold"
                            >
                        </div>
                        <div>
                            <label for="f_year" class="block mb-1 text-xs font-bold text-slate-700">سنة الإنجاز <span class="text-rose-500">*</span></label>
                            <input
                                type="text"
                                id="f_year"
                                name="year"
                                required
                                placeholder="مثال: ٢٠٢٥ م"
                                class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold"
                            >
                        </div>
                    </div>

                    {{-- Image --}}
                    <div>
                        <label for="f_image" class="block mb-1 text-xs font-bold text-slate-700">
                            صورة المشروع الرئيسية <span id="image-required-mark" class="text-rose-500">*</span>
                        </label>
                        <input
                            type="file"
                            id="f_image"
                            name="image"
                            accept="image/jpeg,image/png,image/jpg,image/gif,image/webp"
                            class="w-full text-xs text-slate-500 bg-slate-50 border border-slate-200 rounded-xl cursor-pointer file:ml-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-rose-50 file:text-rose-600 hover:file:bg-rose-100 p-2 focus:outline-none"
                        >
                    </div>

                    {{-- Description --}}
                    <div>
                        <label for="f_description" class="block mb-1 text-xs font-bold text-slate-700">وصف المشروع <span class="text-rose-500">*</span></label>
                        <textarea
                            id="f_description"
                            name="description"
                            rows="4"
                            required
                            placeholder="اكتب وصفاً مختصراً للمشروع..."
                            class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold resize-none"
                        ></textarea>
                    </div>

                    {{-- Footer --}}
                    <div class="flex items-center justify-end gap-3 pt-3 border-t border-slate-100">
                        <button
                            type="button"
                            data-modal-hide="project-modal"
                            class="px-5 py-2.5 text-xs font-bold text-slate-600 bg-slate-100 rounded-xl hover:bg-slate-200 transition-all"
                        >إلغاء</button>
                        <button
                            type="submit"
                            class="px-6 py-2.5 text-xs font-black text-white brand-gradient rounded-xl hover:opacity-90 transition-all shadow-md shadow-rose-500/20"
                        >حفظ المشروع</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <script>
        // Off-canvas Sidebar drawer controls
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

        // Reset Add Modal
        document.getElementById('open-add-modal-btn').addEventListener('click', function () {
            document.getElementById('project-form').action = "{{ route('admin.projects.store') }}";
            document.getElementById('method-field').innerHTML = '';
            document.getElementById('project-form').reset();
            document.getElementById('f_image').required = true;
            document.getElementById('image-required-mark').style.display = 'inline';
            document.getElementById('modal-title').textContent = 'إضافة مشروع جديد';
        });
    </script>

</body>
</html>
