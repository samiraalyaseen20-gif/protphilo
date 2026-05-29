<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم | إدارة المشاريع - المهندسة سميرة علي</title>
    
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
        }
        .dashboard-bg {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 400px;
            background: radial-gradient(circle at 50% 0%, rgba(124, 58, 237, 0.06) 0%, rgba(255, 77, 128, 0.02) 50%, transparent 100%);
            z-index: -2;
        }
    </style>
</head>
<body class="selection:bg-primary/20 selection:text-primary min-h-screen relative pb-20">

    <div class="dashboard-bg"></div>

    <!-- Admin Header -->
    <nav class="bg-white/80 backdrop-blur-md border-b border-primary/5 sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            
            <!-- Right side: Title & User -->
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-2xl bg-gradient-to-tr from-primary to-secondary text-white flex items-center justify-center shadow-md font-black font-display tracking-tight text-lg">
                    سم
                </div>
                <div>
                    <h2 class="text-sm font-black text-on-background">لوحة التحكم</h2>
                    <p class="text-[10px] text-on-surface/80 flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-ping"></span>
                        المهندسة سميرة علي ياسين
                    </p>
                </div>
            </div>

            <!-- Left side: Back to site & Logout -->
            <div class="flex items-center gap-3">
                <a href="/" target="_blank" class="px-4 py-2 rounded-xl bg-primary/10 text-primary text-xs font-bold hover:bg-primary/20 transition-all flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-sm">open_in_new</span>
                    <span>عرض الموقع</span>
                </a>
                
                <form action="{{ route('admin.logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="px-4 py-2 rounded-xl bg-red-50 text-red-600 text-xs font-bold hover:bg-red-100 transition-all flex items-center gap-1.5 cursor-pointer">
                        <span class="material-symbols-outlined text-sm">logout</span>
                        <span>تسجيل خروج</span>
                    </button>
                </form>
            </div>

        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="max-w-7xl mx-auto px-6 py-10">
        
        <!-- Welcome banner & actions -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6 mb-10">
            <div>
                <h1 class="text-3xl font-black text-on-background font-display tracking-tight">إدارة معرض المشاريع</h1>
                <p class="text-xs text-on-surface mt-1">تعديل، إضافة، أو حذف المشاريع البرمجية والأنظمة المعروضة في الصفحة الرئيسية</p>
            </div>
            
            <button onclick="openAddModal()" class="px-6 py-3.5 rounded-2xl bg-gradient-to-r from-primary to-secondary text-white font-bold shadow-lg shadow-primary/25 hover:shadow-xl hover:scale-[1.02] transition-all text-xs flex items-center gap-2 cursor-pointer">
                <span class="material-symbols-outlined text-sm font-bold">add</span>
                <span>إضافة مشروع جديد</span>
            </button>
        </div>

        <!-- System Notifications -->
        @if (session('success'))
            <div class="mb-8 p-4 bg-emerald-50 border-r-4 border-emerald-500 rounded-xl flex items-center justify-between text-emerald-800 text-xs animate-fade-in shadow-sm">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-base">check_circle</span>
                    <span class="font-bold">{{ session('success') }}</span>
                </div>
                <button onclick="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-700">
                    <span class="material-symbols-outlined text-sm">close</span>
                </button>
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-8 p-4 bg-red-50 border-r-4 border-red-500 rounded-xl text-red-800 text-xs space-y-1 shadow-sm">
                <div class="flex items-center gap-1.5 font-bold mb-1">
                    <span class="material-symbols-outlined text-base text-red-600">error</span>
                    <span>حدث خطأ في البيانات المدخلة:</span>
                </div>
                @foreach ($errors->all() as $error)
                    <div class="mr-6">• {{ $error }}</div>
                @endforeach
            </div>
        @endif

        <!-- Projects Grid -->
        @if ($projects->isEmpty())
            <div class="bg-white rounded-3xl border border-primary/5 p-16 text-center space-y-4 shadow-sm">
                <span class="material-symbols-outlined text-5xl text-on-surface/30">inventory_2</span>
                <h3 class="text-lg font-black text-on-background">لا توجد مشاريع مضافة حالياً</h3>
                <p class="text-xs text-on-surface max-w-sm mx-auto">قم بإضافة المشاريع حتى تظهر هنا وفي الصفحة الرئيسية للزوار.</p>
                <button onclick="openAddModal()" class="px-5 py-3 rounded-xl bg-primary text-white text-xs font-bold shadow-md hover:bg-primary-hover transition-all inline-flex items-center gap-1.5 cursor-pointer">
                    <span class="material-symbols-outlined text-sm">add</span>
                    إضافة أول مشروع
                </button>
            </div>
        @else
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($projects as $project)
                    <div class="bg-white border border-primary/10 rounded-[2rem] overflow-hidden flex flex-col justify-between shadow-md hover:shadow-lg hover:border-primary/20 transition-all">
                        
                        <!-- Image Container -->
                        <div class="relative overflow-hidden aspect-video bg-slate-100">
                            <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                            <span class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm border border-primary/5 text-primary text-[10px] font-extrabold px-3 py-1 rounded-full shadow-sm">
                                {{ $project->year }}
                            </span>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6 space-y-3 flex-grow">
                            <span class="inline-block px-3 py-1 rounded-full bg-primary/10 text-primary text-[10px] font-black uppercase tracking-wider">
                                {{ $project->category }}
                            </span>
                            <h3 class="text-lg font-black text-on-background leading-snug line-clamp-1">
                                {{ $project->title }}
                            </h3>
                            <p class="text-xs text-on-surface leading-relaxed line-clamp-3">
                                {{ $project->description }}
                            </p>
                        </div>

                        <!-- Card Footer Controls -->
                        <div class="p-6 pt-0 border-t border-primary/5 flex justify-between gap-4">
                            <!-- Edit Button -->
                            <button onclick="openEditModal(this)" 
                                data-id="{{ $project->id }}"
                                data-title="{{ $project->title }}"
                                data-category="{{ $project->category }}"
                                data-year="{{ $project->year }}"
                                data-description="{{ $project->description }}"
                                class="flex-1 py-2.5 rounded-xl border border-primary/15 text-primary hover:bg-primary/5 text-xs font-bold flex items-center justify-center gap-1 transition-all cursor-pointer">
                                <span class="material-symbols-outlined text-xs">edit</span>
                                <span>تعديل</span>
                            </button>

                            <!-- Delete Button -->
                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="flex-1" onsubmit="return confirm('هل أنت متأكد من رغبتك في حذف هذا المشروع نهائياً؟');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-full py-2.5 rounded-xl border border-red-150 text-red-600 hover:bg-red-50 text-xs font-bold flex items-center justify-center gap-1 transition-all cursor-pointer">
                                    <span class="material-symbols-outlined text-xs">delete</span>
                                    <span>حذف</span>
                                </button>
                            </form>
                        </div>

                    </div>
                @endforeach
            </div>
        @endif

    </main>

    <!-- Create/Edit Project Modal Overlay -->
    <div id="projectModal" class="fixed inset-0 z-50 overflow-y-auto flex items-center justify-center p-4 bg-slate-900/50 backdrop-blur-sm hidden">
        
        <!-- Modal Card Container -->
        <div class="bg-white rounded-[2.5rem] border border-primary/10 max-w-xl w-full p-8 shadow-2xl relative animate-fade-in text-right">
            
            <!-- Close Button -->
            <button onclick="closeModal()" class="absolute top-6 left-6 text-on-surface/50 hover:text-on-surface bg-slate-100 hover:bg-slate-200 p-2 rounded-full transition-colors cursor-pointer">
                <span class="material-symbols-outlined text-sm font-black">close</span>
            </button>

            <!-- Modal Header -->
            <div class="mb-6">
                <h2 id="modalTitle" class="text-2xl font-black text-on-background font-display tracking-tight">إضافة مشروع جديد</h2>
                <p class="text-xs text-on-surface mt-1">تعبئة الحقول بالأسفل لإتمام العملية.</p>
            </div>

            <!-- Modal Form -->
            <form id="projectForm" action="" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div id="methodOverride"></div> <!-- Will hold @method('PUT') dynamically -->

                <!-- Title -->
                <div class="space-y-1">
                    <label for="form_title" class="text-xs font-bold text-on-surface block mr-1">عنوان المشروع</label>
                    <input type="text" id="form_title" name="title" required placeholder="مثال: برنامج الإحصاء الطبي"
                        class="w-full px-4 py-3 rounded-xl border border-primary/15 bg-white/50 focus:bg-white focus:border-primary outline-none transition-all text-xs">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <!-- Category -->
                    <div class="space-y-1">
                        <label for="form_category" class="text-xs font-bold text-on-surface block mr-1">التصنيف</label>
                        <input type="text" id="form_category" name="category" required placeholder="مثال: أنظمة إحصائية طبية"
                            class="w-full px-4 py-3 rounded-xl border border-primary/15 bg-white/50 focus:bg-white focus:border-primary outline-none transition-all text-xs">
                    </div>
                    <!-- Year -->
                    <div class="space-y-1">
                        <label for="form_year" class="text-xs font-bold text-on-surface block mr-1">سنة الإنجاز</label>
                        <input type="text" id="form_year" name="year" required placeholder="مثال: ٢٠٢٥ م"
                            class="w-full px-4 py-3 rounded-xl border border-primary/15 bg-white/50 focus:bg-white focus:border-primary outline-none transition-all text-xs">
                    </div>
                </div>

                <!-- Image -->
                <div class="space-y-1">
                    <label for="form_image" class="text-xs font-bold text-on-surface block mr-1">صورة المشروع</label>
                    <input type="file" id="form_image" name="image" accept="image/*"
                        class="w-full px-4 py-2.5 rounded-xl border border-primary/15 bg-white/50 focus:bg-white focus:border-primary outline-none transition-all text-xs file:bg-primary/10 file:text-primary file:border-0 file:rounded-lg file:px-3 file:py-1 file:mr-2 file:text-[10px] file:font-black">
                    <p id="imageNote" class="text-[10px] text-on-surface/70 mt-1 mr-1 hidden">اتركه فارغاً للاحتفاظ بالصورة الحالية في حال لم ترغب بتغييرها.</p>
                </div>

                <!-- Description -->
                <div class="space-y-1">
                    <label for="form_description" class="text-xs font-bold text-on-surface block mr-1">تفاصيل المشروع</label>
                    <textarea id="form_description" name="description" rows="4" required placeholder="اكتب تفاصيل ووصف هذا المشروع..."
                        class="w-full px-4 py-3 rounded-xl border border-primary/15 bg-white/50 focus:bg-white focus:border-primary outline-none transition-all text-xs resize-none"></textarea>
                </div>

                <!-- Action buttons -->
                <div class="flex justify-end gap-3 pt-4 border-t border-primary/5">
                    <button type="button" onclick="closeModal()" class="px-5 py-3 rounded-xl border border-primary/10 text-on-surface/80 hover:bg-slate-50 text-xs font-bold transition-all cursor-pointer">
                        إلغاء
                    </button>
                    <button type="submit" class="px-6 py-3 rounded-xl bg-gradient-to-r from-primary to-secondary text-white font-bold shadow-md hover:shadow-lg transition-all text-xs cursor-pointer">
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
            // Setup form for creating
            form.action = "{{ route('admin.projects.store') }}";
            methodOverride.innerHTML = '';
            
            // Clear inputs
            document.getElementById('form_title').value = '';
            document.getElementById('form_category').value = '';
            document.getElementById('form_year').value = '';
            document.getElementById('form_description').value = '';
            imageInput.value = '';
            imageInput.required = true;

            // Header labels
            modalTitle.innerText = "إضافة مشروع جديد";
            imageNote.classList.add('hidden');

            // Show modal
            modal.classList.remove('hidden');
        }

        function openEditModal(button) {
            const id = button.getAttribute('data-id');
            const title = button.getAttribute('data-title');
            const category = button.getAttribute('data-category');
            const year = button.getAttribute('data-year');
            const description = button.getAttribute('data-description');

            // Setup form for updating
            // Note: Since standard forms don't support PUT with multipart data uploads out of the box in some setups, we route to a POST endpoint with update route.
            form.action = `/admin/projects/${id}/update`;
            methodOverride.innerHTML = ''; // We process update via POST in the controller for max upload reliability on Windows/IIS setups.
            
            // Fill inputs
            document.getElementById('form_title').value = title;
            document.getElementById('form_category').value = category;
            document.getElementById('form_year').value = year;
            document.getElementById('form_description').value = description;
            imageInput.value = '';
            imageInput.required = false;

            // Header labels
            modalTitle.innerText = "تعديل المشروع";
            imageNote.classList.remove('hidden');

            // Show modal
            modal.classList.remove('hidden');
        }

        function closeModal() {
            modal.classList.add('hidden');
        }

        // Close on background click
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal();
            }
        });
    </script>

</body>
</html>
