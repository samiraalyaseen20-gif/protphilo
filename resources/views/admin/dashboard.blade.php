<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم | إدارة المشاريع - المهندسة سميرة علي</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
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
<body class="selection:bg-zinc-100 selection:text-zinc-900 min-h-screen">

    <div class="flex min-h-screen">

        <!-- Sidebar (Desktop) -->
        <aside class="hidden md:flex flex-col w-64 bg-white border-l border-zinc-200 sticky top-0 h-screen justify-between p-6">
            <div class="space-y-6">
                <!-- Sidebar Logo -->
                <div class="flex items-center gap-2 pb-4 border-b border-zinc-150">
                    <span class="w-2.5 h-2.5 rounded-full bg-zinc-900"></span>
                    <span class="font-semibold text-zinc-950 font-display">سميرة علي ياسين</span>
                </div>

                <!-- Sidebar Nav -->
                <nav class="space-y-1">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2 px-3 py-2 text-xs font-medium rounded-md bg-zinc-100 text-zinc-900 transition-colors">
                        <span class="material-symbols-outlined text-sm">dashboard</span>
                        <span>لوحة التحكم</span>
                    </a>
                    <a href="/" target="_blank" class="flex items-center gap-2 px-3 py-2 text-xs font-medium rounded-md text-zinc-600 hover:bg-zinc-50 hover:text-zinc-900 transition-colors">
                        <span class="material-symbols-outlined text-sm">open_in_new</span>
                        <span>معاينة الموقع</span>
                    </a>
                </nav>
            </div>

            <!-- Sidebar User / Logout -->
            <div class="pt-4 border-t border-zinc-150 flex flex-col gap-3">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-zinc-150 flex items-center justify-center text-xs font-bold text-zinc-700">
                        سم
                    </div>
                    <div class="min-w-0">
                        <h4 class="text-xs font-bold text-zinc-900 truncate">م. سميرة علي</h4>
                        <p class="text-[10px] text-zinc-400 truncate">المدير العام</p>
                    </div>
                </div>
                
                <form action="{{ route('admin.logout') }}" method="POST" class="w-full">
                    @csrf
                    <button type="submit" class="w-full py-1.5 px-3 rounded-md border border-zinc-200 text-red-600 hover:bg-red-50 text-[10px] font-bold transition-all flex items-center justify-center gap-1.5 cursor-pointer">
                        <span class="material-symbols-outlined text-xs">logout</span>
                        <span>تسجيل خروج</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Body -->
        <div class="flex-1 flex flex-col min-w-0">
            
            <!-- Mobile Header / Top Nav -->
            <header class="h-14 border-b border-zinc-200 bg-white flex items-center justify-between px-6 sticky top-0 z-30">
                <div class="flex items-center gap-3">
                    <!-- Mobile Hamburger (Visual only) -->
                    <button class="md:hidden p-1.5 text-zinc-500 hover:text-zinc-900 hover:bg-zinc-50 rounded-md">
                        <span class="material-symbols-outlined text-base">menu</span>
                    </button>
                    <!-- Breadcrumbs -->
                    <div class="flex items-center gap-1.5 text-xs text-zinc-500 font-medium">
                        <span>الرئيسية</span>
                        <span class="text-[10px] text-zinc-300">/</span>
                        <span class="text-zinc-900 font-semibold">لوحة التحكم</span>
                    </div>
                </div>

                <!-- Left controls (Mobile Logout) -->
                <div class="flex items-center gap-2">
                    <a href="/" target="_blank" class="md:hidden inline-flex items-center gap-1 text-xs text-zinc-600 font-medium hover:text-zinc-900">
                        <span class="material-symbols-outlined text-sm">open_in_new</span>
                    </a>
                    <form action="{{ route('admin.logout') }}" method="POST" class="inline md:hidden">
                        @csrf
                        <button type="submit" class="p-1.5 text-red-500 hover:bg-red-50 rounded-md cursor-pointer">
                            <span class="material-symbols-outlined text-base">logout</span>
                        </button>
                    </form>
                </div>
            </header>

            <!-- Inner Layout -->
            <main class="p-6 md:p-8 space-y-6 flex-grow max-w-7xl w-full mx-auto">
                
                <!-- Welcome Title & Main Action -->
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 border-b border-zinc-200 pb-5">
                    <div>
                        <h1 class="text-xl font-bold tracking-tight text-zinc-950">معرض الأعمال والمشاريع</h1>
                        <p class="text-xs text-zinc-500 mt-1">عرض، إضافة، وتعديل كافة المشاريع التقنية والأنظمة الطبية المعروضة في اللاندينج بيج</p>
                    </div>

                    <button onclick="openAddModal()" 
                        class="inline-flex items-center justify-center gap-1.5 whitespace-nowrap rounded-md text-xs font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-zinc-950 disabled:pointer-events-none disabled:opacity-50 bg-zinc-900 text-zinc-50 shadow hover:bg-zinc-900/90 h-9 px-4 py-2 cursor-pointer">
                        <span class="material-symbols-outlined text-sm font-bold">add</span>
                        إضافة مشروع
                    </button>
                </div>

                <!-- Toast Notifications -->
                @if (session('success'))
                    <div class="p-3 bg-zinc-900 border border-zinc-800 text-zinc-50 rounded-lg flex items-center justify-between text-xs shadow-md animate-fade-in">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-base text-zinc-400">check_circle</span>
                            <span>{{ session('success') }}</span>
                        </div>
                        <button onclick="this.parentElement.remove()" class="text-zinc-400 hover:text-zinc-50">
                            <span class="material-symbols-outlined text-sm">close</span>
                        </button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="p-4 bg-red-50 border border-red-200 rounded-lg text-red-800 text-xs space-y-1">
                        <div class="flex items-center gap-1.5 font-bold mb-1">
                            <span class="material-symbols-outlined text-base text-red-600">error</span>
                            <span>الرجاء مراجعة الأخطاء التالية:</span>
                        </div>
                        @foreach ($errors->all() as $error)
                            <div class="mr-4">• {{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <!-- KPI Metric Grid (shadcn Cards style) -->
                <div class="grid sm:grid-cols-3 gap-4">
                    <!-- Metric 1 -->
                    <div class="rounded-xl border border-zinc-200 bg-white p-6 shadow-sm">
                        <div class="flex flex-row items-center justify-between space-y-0 pb-2">
                            <h3 class="text-xs font-medium tracking-tight text-zinc-500">إجمالي المشاريع</h3>
                            <span class="material-symbols-outlined text-sm text-zinc-400">inventory_2</span>
                        </div>
                        <div class="text-2xl font-bold tracking-tight text-zinc-950">{{ $projects->count() }}</div>
                        <p class="text-[10px] text-zinc-400 mt-1">مشاريع معروضة حالياً بالصفحة الرئيسية</p>
                    </div>
                    <!-- Metric 2 -->
                    <div class="rounded-xl border border-zinc-200 bg-white p-6 shadow-sm">
                        <div class="flex flex-row items-center justify-between space-y-0 pb-2">
                            <h3 class="text-xs font-medium tracking-tight text-zinc-500">التصنيفات</h3>
                            <span class="material-symbols-outlined text-sm text-zinc-400">category</span>
                        </div>
                        <div class="text-2xl font-bold tracking-tight text-zinc-950">{{ $projects->pluck('category')->unique()->count() }}</div>
                        <p class="text-[10px] text-zinc-400 mt-1">أقسام الأنظمة وتطبيقات الأعمال</p>
                    </div>
                    <!-- Metric 3 -->
                    <div class="rounded-xl border border-zinc-200 bg-white p-6 shadow-sm">
                        <div class="flex flex-row items-center justify-between space-y-0 pb-2">
                            <h3 class="text-xs font-medium tracking-tight text-zinc-500">حالة لوحة التحكم</h3>
                            <span class="material-symbols-outlined text-sm text-emerald-500 animate-pulse">circle</span>
                        </div>
                        <div class="text-2xl font-bold tracking-tight text-emerald-600">نشط</div>
                        <p class="text-[10px] text-zinc-400 mt-1">مزامنة تامة وتحديث فوري للمحتوى</p>
                    </div>
                </div>

                <!-- Projects shadcn Table -->
                <div class="rounded-xl border border-zinc-200 bg-white shadow-sm overflow-hidden">
                    <div class="p-6 border-b border-zinc-150">
                        <h3 class="text-xs font-bold text-zinc-900">سجل المشاريع المتاحة</h3>
                    </div>

                    @if ($projects->isEmpty())
                        <div class="p-16 text-center space-y-4">
                            <span class="material-symbols-outlined text-4xl text-zinc-300">folder_open</span>
                            <h3 class="text-sm font-semibold text-zinc-900">لا توجد مشاريع مضافة</h3>
                            <p class="text-xs text-zinc-400 max-w-sm mx-auto">لم تقم بإضافة أي مشاريع في قاعدة البيانات بعد. ابدأ بإضافة مشروعك الأول.</p>
                            <button onclick="openAddModal()" class="inline-flex items-center justify-center gap-1.5 whitespace-nowrap rounded-md text-xs font-medium bg-zinc-900 text-zinc-50 shadow hover:bg-zinc-900/90 h-8 px-4 cursor-pointer">
                                <span class="material-symbols-outlined text-xs">add</span>
                                إضافة مشروع
                            </button>
                        </div>
                    @else
                        <!-- Responsive wrapper -->
                        <div class="overflow-x-auto w-full">
                            <table class="w-full text-right text-xs">
                                <thead class="bg-zinc-50/75 border-b border-zinc-200 text-zinc-500 font-semibold">
                                    <tr>
                                        <th class="p-4 w-16">الصورة</th>
                                        <th class="p-4">العنوان</th>
                                        <th class="p-4">التصنيف</th>
                                        <th class="p-4">سنة الإنجاز</th>
                                        <th class="p-4 text-left">التحكم</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-zinc-200 text-zinc-900">
                                    @foreach ($projects as $project)
                                        <tr class="hover:bg-zinc-50/50 transition-colors">
                                            <td class="p-4">
                                                <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="w-12 h-9 rounded object-cover border border-zinc-200">
                                            </td>
                                            <td class="p-4 font-medium">
                                                <div class="font-bold text-zinc-950">{{ $project->title }}</div>
                                                <div class="text-[10px] text-zinc-400 mt-0.5 line-clamp-1 max-w-xs">{{ $project->description }}</div>
                                            </td>
                                            <td class="p-4">
                                                <span class="inline-flex items-center rounded-full border border-zinc-200 bg-zinc-50 px-2 py-0.5 text-[10px] font-medium text-zinc-600">
                                                    {{ $project->category }}
                                                </span>
                                            </td>
                                            <td class="p-4 font-medium text-zinc-600">
                                                {{ $project->year }}
                                            </td>
                                            <td class="p-4 text-left">
                                                <div class="inline-flex items-center gap-1">
                                                    <!-- Edit Icon Button -->
                                                    <button onclick="openEditModal(this)"
                                                        data-id="{{ $project->id }}"
                                                        data-title="{{ $project->title }}"
                                                        data-category="{{ $project->category }}"
                                                        data-year="{{ $project->year }}"
                                                        data-description="{{ $project->description }}"
                                                        class="inline-flex items-center justify-center rounded-md text-zinc-600 hover:text-zinc-950 hover:bg-zinc-100 w-8 h-8 border border-zinc-200 bg-white transition-colors cursor-pointer">
                                                        <span class="material-symbols-outlined text-sm">edit</span>
                                                    </button>

                                                    <!-- Delete Icon Button -->
                                                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="inline" onsubmit="return confirm('هل أنت متأكد من حذف هذا المشروع نهائياً؟');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="inline-flex items-center justify-center rounded-md text-red-500 hover:text-red-600 hover:bg-red-50 w-8 h-8 border border-zinc-200 bg-white transition-colors cursor-pointer">
                                                            <span class="material-symbols-outlined text-sm">delete</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>

            </main>
        </div>

    </div>

    <!-- Modal Form (shadcn Dialog style) -->
    <div id="projectModal" class="fixed inset-0 z-50 overflow-y-auto flex items-center justify-center p-4 bg-zinc-950/40 backdrop-blur-sm hidden">
        
        <!-- Dialog Content -->
        <div class="bg-white rounded-lg border border-zinc-200 max-w-lg w-full p-6 shadow-lg relative animate-fade-in text-right">
            
            <!-- Close Button -->
            <button onclick="closeModal()" class="absolute top-4 left-4 text-zinc-400 hover:text-zinc-900 rounded-md p-1 hover:bg-zinc-100 transition-colors cursor-pointer">
                <span class="material-symbols-outlined text-sm">close</span>
            </button>

            <!-- Dialog Header -->
            <div class="mb-4 space-y-1.5">
                <h2 id="modalTitle" class="text-lg font-semibold tracking-tight text-zinc-950">إضافة مشروع</h2>
                <p class="text-xs text-zinc-500">قم بتعبئة بيانات المشروع بالأسفل. الحقول المؤشرة مطلوبة.</p>
            </div>

            <!-- Form -->
            <form id="projectForm" action="" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div id="methodOverride"></div>

                <!-- Title -->
                <div class="space-y-1">
                    <label for="form_title" class="text-xs font-medium text-zinc-700">عنوان المشروع</label>
                    <input type="text" id="form_title" name="title" required placeholder="مثال: برنامج الأرشفة الطبية"
                        class="flex h-9 w-full rounded-md border border-zinc-200 bg-transparent px-3 py-1 text-xs shadow-sm transition-colors placeholder:text-zinc-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-zinc-950">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <!-- Category -->
                    <div class="space-y-1">
                        <label for="form_category" class="text-xs font-medium text-zinc-700">التصنيف</label>
                        <input type="text" id="form_category" name="category" required placeholder="مثال: أنظمة إحصائية طبية"
                            class="flex h-9 w-full rounded-md border border-zinc-200 bg-transparent px-3 py-1 text-xs shadow-sm transition-colors placeholder:text-zinc-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-zinc-950">
                    </div>
                    <!-- Year -->
                    <div class="space-y-1">
                        <label for="form_year" class="text-xs font-medium text-zinc-700">سنة الإنجاز</label>
                        <input type="text" id="form_year" name="year" required placeholder="مثال: ٢٠٢٥ م"
                            class="flex h-9 w-full rounded-md border border-zinc-200 bg-transparent px-3 py-1 text-xs shadow-sm transition-colors placeholder:text-zinc-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-zinc-950">
                    </div>
                </div>

                <!-- Image -->
                <div class="space-y-1">
                    <label for="form_image" class="text-xs font-medium text-zinc-700">صورة المشروع</label>
                    <input type="file" id="form_image" name="image" accept="image/*"
                        class="flex w-full rounded-md border border-zinc-200 bg-transparent px-3 py-1 text-xs shadow-sm file:border-0 file:bg-zinc-100 file:text-zinc-900 file:rounded file:px-2 file:py-0.5 file:mr-2 file:text-[10px] file:font-semibold">
                    <p id="imageNote" class="text-[10px] text-zinc-400 mt-1 hidden">اتركه فارغاً للاحتفاظ بالصورة الحالية في حال لم ترغب بتغييرها.</p>
                </div>

                <!-- Description -->
                <div class="space-y-1">
                    <label for="form_description" class="text-xs font-medium text-zinc-700">تفاصيل ووصف المشروع</label>
                    <textarea id="form_description" name="description" rows="4" required placeholder="اكتب تفاصيل ووصف هذا المشروع..."
                        class="flex w-full rounded-md border border-zinc-200 bg-transparent px-3 py-2 text-xs shadow-sm placeholder:text-zinc-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-zinc-950 resize-none"></textarea>
                </div>

                <!-- Action Footer -->
                <div class="flex justify-end gap-2 pt-4 border-t border-zinc-150">
                    <button type="button" onclick="closeModal()" 
                        class="inline-flex items-center justify-center rounded-md text-xs font-medium transition-colors border border-zinc-200 bg-white hover:bg-zinc-100 h-9 px-4 cursor-pointer">
                        إلغاء
                    </button>
                    <button type="submit" 
                        class="inline-flex items-center justify-center rounded-md text-xs font-medium transition-colors bg-zinc-900 text-zinc-50 shadow hover:bg-zinc-900/90 h-9 px-4 cursor-pointer">
                        حفظ التغييرات
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Javascript Modal Handlers -->
    <script>
        const modal = document.getElementById('projectModal');
        const form = document.getElementById('projectForm');
        const modalTitle = document.getElementById('modalTitle');
        const methodOverride = document.getElementById('methodOverride');
        const imageNote = document.getElementById('imageNote');
        const imageInput = document.getElementById('form_image');

        function openAddModal() {
            form.action = "{{ route('admin.projects.store') }}";
            methodOverride.innerHTML = '';
            
            document.getElementById('form_title').value = '';
            document.getElementById('form_category').value = '';
            document.getElementById('form_year').value = '';
            document.getElementById('form_description').value = '';
            imageInput.value = '';
            imageInput.required = true;

            modalTitle.innerText = "إضافة مشروع جديد";
            imageNote.classList.add('hidden');

            modal.classList.remove('hidden');
        }

        function openEditModal(button) {
            const id = button.getAttribute('data-id');
            const title = button.getAttribute('data-title');
            const category = button.getAttribute('data-category');
            const year = button.getAttribute('data-year');
            const description = button.getAttribute('data-description');

            form.action = `/admin/projects/${id}/update`;
            methodOverride.innerHTML = '';
            
            document.getElementById('form_title').value = title;
            document.getElementById('form_category').value = category;
            document.getElementById('form_year').value = year;
            document.getElementById('form_description').value = description;
            imageInput.value = '';
            imageInput.required = false;

            modalTitle.innerText = "تعديل المشروع";
            imageNote.classList.remove('hidden');

            modal.classList.remove('hidden');
        }

        function closeModal() {
            modal.classList.add('hidden');
        }

        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal();
            }
        });
    </script>

</body>
</html>
