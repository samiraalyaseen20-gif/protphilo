<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل مشروع: {{ $project->title }} | لوحة التحكم</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <!-- Flowbite CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <style>
        * { font-family: 'Cairo', sans-serif !important; }
        
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
                            <span class="text-[10px] text-slate-400 font-semibold">تعديل المشروع</span>
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

            {{-- Header Title & Breadcrumb Actions --}}
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 bg-white p-5 sm:p-6 rounded-3xl border border-slate-200/80 shadow-xs">
                <div>
                    <div class="flex items-center gap-2 mb-1">
                        <span class="w-2.5 h-2.5 rounded-full brand-gradient"></span>
                        <h1 class="text-xl sm:text-2xl font-black text-slate-900">{{ $project->title }}</h1>
                    </div>
                    <p class="text-xs text-slate-500 font-semibold">تعديل البيانات الأساسية وإدارة صور المعرض التفصيلي لهذا المشروع</p>
                </div>
                
                <div class="flex items-center gap-2.5 flex-wrap">
                    <a
                        href="{{ route('projects.show', $project) }}"
                        target="_blank"
                        class="px-4 py-2.5 text-xs font-bold text-slate-700 bg-slate-100 hover:bg-slate-200 rounded-2xl transition-all shadow-xs flex items-center gap-1.5"
                    >
                        <span class="material-symbols-outlined text-base">visibility</span>
                        عرض الصفحة العامة
                    </a>
                    <a
                        href="{{ route('admin.dashboard') }}"
                        class="px-4 py-2.5 text-xs font-black text-white brand-gradient rounded-2xl hover:opacity-90 transition-all shadow-md shadow-rose-500/20 flex items-center gap-1.5"
                    >
                        <span class="material-symbols-outlined text-base">arrow_forward</span>
                        العودة للمشاريع
                    </a>
                </div>
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

            {{-- Main Two-Column Layout --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

                {{-- Column 1: Edit Project Form (7 cols) --}}
                <div class="lg:col-span-7 bg-white rounded-3xl border border-slate-200/80 p-6 shadow-xs space-y-6">
                    <div class="border-b border-slate-100 pb-4">
                        <h2 class="text-sm font-black text-slate-900">البيانات الأساسية للمشروع</h2>
                        <p class="text-[11px] text-slate-400 font-semibold mt-0.5">العنوان والتصنيف والوصف وصورة العرض الرئيسية</p>
                    </div>

                    <form
                        action="{{ route('admin.projects.update', $project->id) }}"
                        method="POST"
                        enctype="multipart/form-data"
                        class="space-y-4 text-right"
                    >
                        @csrf

                        <div>
                            <label for="f_title" class="block mb-1 text-xs font-bold text-slate-700">عنوان المشروع <span class="text-rose-500">*</span></label>
                            <input
                                type="text"
                                id="f_title"
                                name="title"
                                value="{{ old('title', $project->title) }}"
                                required
                                placeholder="مثال: برنامج الإحصاء الطبي"
                                class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold"
                            >
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="f_category" class="block mb-1 text-xs font-bold text-slate-700">التصنيف <span class="text-rose-500">*</span></label>
                                <input
                                    type="text"
                                    id="f_category"
                                    name="category"
                                    value="{{ old('category', $project->category) }}"
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
                                    value="{{ old('year', $project->year) }}"
                                    required
                                    placeholder="مثال: ٢٠٢٥ م"
                                    class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold"
                                >
                            </div>
                        </div>

                        <div>
                            <label class="block mb-1 text-xs font-bold text-slate-700">الصورة الرئيسية الحالية</label>
                            <div class="mb-3">
                                <img
                                    src="{{ asset($project->image) }}"
                                    alt="{{ $project->title }}"
                                    class="w-full max-h-56 rounded-2xl object-cover border border-slate-200 shadow-xs"
                                    onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22200%22%3E%3Crect width=%22400%22 height=%22200%22 fill=%22%23f1f5f9%22/%3E%3C/svg%3E'"
                                >
                            </div>

                            <label for="f_image" class="block mb-1 text-xs font-bold text-slate-700">تغيير الصورة الرئيسية</label>
                            <input
                                type="file"
                                id="f_image"
                                name="image"
                                accept="image/jpeg,image/png,image/jpg,image/gif,image/webp"
                                class="w-full text-xs text-slate-500 bg-slate-50 border border-slate-200 rounded-xl cursor-pointer file:ml-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-rose-50 file:text-rose-600 hover:file:bg-rose-100 p-2 focus:outline-none"
                            >
                            <p class="mt-1 text-[10px] text-slate-400">اتركه فارغاً للاحتفاظ بالصورة الحالية.</p>
                        </div>

                        <div>
                            <label for="f_description" class="block mb-1 text-xs font-bold text-slate-700">وصف المشروع الأساسي <span class="text-rose-500">*</span></label>
                            <textarea
                                id="f_description"
                                name="description"
                                rows="5"
                                required
                                placeholder="اكتب وصفاً مفصلاً للمشروع..."
                                class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold resize-none"
                            >{{ old('description', $project->description) }}</textarea>
                        </div>

                        <div class="flex items-center gap-3 pt-3 border-t border-slate-100">
                            <button
                                type="submit"
                                class="px-6 py-3 text-xs font-black text-white brand-gradient rounded-xl hover:opacity-90 transition-all shadow-md shadow-rose-500/20"
                            >حفظ التغييرات</button>
                            <a
                                href="{{ route('admin.dashboard') }}"
                                class="px-5 py-3 text-xs font-bold text-slate-600 bg-slate-100 rounded-xl hover:bg-slate-200 transition-all"
                            >إلغاء</a>
                        </div>
                    </form>
                </div>

                {{-- Column 2: Gallery Images (5 cols) --}}
                <div class="lg:col-span-5 space-y-6">

                    {{-- Upload Gallery Image --}}
                    <div class="bg-white rounded-3xl border border-slate-200/80 p-6 shadow-xs space-y-4">
                        <div class="border-b border-slate-100 pb-3 flex items-center justify-between">
                            <div>
                                <h2 class="text-sm font-black text-slate-900">إضافة صورة للمعرض التفصيلي</h2>
                                <p class="text-[11px] text-slate-400 font-semibold mt-0.5">أضف لقطات الشاشة أو واجهات النظام الفعلي</p>
                            </div>
                            <span class="material-symbols-outlined text-rose-500 text-xl">add_photo_alternate</span>
                        </div>

                        <form
                            action="{{ route('admin.projects.images.store', $project->id) }}"
                            method="POST"
                            enctype="multipart/form-data"
                            class="space-y-3.5 text-right"
                        >
                            @csrf

                            <div>
                                <label class="block mb-1 text-xs font-bold text-slate-700">اختر الصورة <span class="text-rose-500">*</span></label>
                                <input
                                    type="file"
                                    name="image"
                                    required
                                    accept="image/jpeg,image/png,image/jpg,image/gif,image/webp"
                                    class="w-full text-xs text-slate-500 bg-slate-50 border border-slate-200 rounded-xl cursor-pointer file:ml-3 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-rose-50 file:text-rose-600 hover:file:bg-rose-100 p-2 focus:outline-none"
                                >
                            </div>

                            <div>
                                <label class="block mb-1 text-xs font-bold text-slate-700">عنوان الشاشة (اختياري)</label>
                                <input
                                    type="text"
                                    name="title"
                                    placeholder="مثال: واجهة النظام الإحصائي"
                                    class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold"
                                >
                            </div>

                            <div>
                                <label class="block mb-1 text-xs font-bold text-slate-700">وصف التفاصيل (اختياري)</label>
                                <textarea
                                    name="description"
                                    rows="3"
                                    placeholder="اشرح ما تعرضه هذه الصورة كإحصاءات أو تفاصيل..."
                                    class="w-full px-4 py-2.5 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 font-semibold resize-none"
                                ></textarea>
                            </div>

                            <button
                                type="submit"
                                class="w-full py-3 text-xs font-black text-white brand-gradient rounded-xl hover:opacity-90 transition-all shadow-md shadow-rose-500/20"
                            >رفع الصورة وإضافتها للمعرض</button>
                        </form>
                    </div>

                    {{-- Current Gallery List --}}
                    <div class="bg-white rounded-3xl border border-slate-200/80 p-6 shadow-xs space-y-4">
                        <div class="border-b border-slate-100 pb-3 flex items-center justify-between">
                            <div>
                                <h2 class="text-sm font-black text-slate-900">صور المعرض الحالي ({{ $project->images->count() }})</h2>
                                <p class="text-[11px] text-slate-400 font-semibold mt-0.5">الصور الظاهرة في صفحة التفاصيل العامة</p>
                            </div>
                        </div>

                        @if($project->images->isNotEmpty())
                            <div class="grid grid-cols-1 gap-3.5 max-h-[460px] overflow-y-auto pr-1">
                                @foreach($project->images as $img)
                                    <div class="flex gap-3 bg-slate-50/80 p-3 rounded-2xl border border-slate-200/80 relative text-right">
                                        <div class="w-24 h-18 shrink-0 overflow-hidden rounded-xl border border-slate-200">
                                            <img src="{{ asset($img->image) }}" class="w-full h-full object-cover" alt="">
                                        </div>
                                        <div class="flex-1 overflow-hidden space-y-1">
                                            <p class="text-xs font-black text-slate-900 truncate">{{ $img->title ?? 'صورة بدون عنوان' }}</p>
                                            <p class="text-[10px] text-slate-500 line-clamp-2 leading-relaxed">{{ $img->description ?? 'لا يوجد وصف مضاف.' }}</p>
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
                                                class="w-7 h-7 bg-white hover:bg-rose-50 text-slate-400 hover:text-rose-600 rounded-xl flex items-center justify-center transition-all border border-slate-200 shadow-xs"
                                                title="حذف الصورة"
                                            >
                                                <span class="material-symbols-outlined text-base">delete</span>
                                            </button>
                                        </form>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-12 text-slate-400">
                                <span class="material-symbols-outlined text-4xl mb-2">hide_image</span>
                                <p class="font-bold text-xs">لم يتم رفع أي صور تفاصيل بعد لهذا المشروع</p>
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
