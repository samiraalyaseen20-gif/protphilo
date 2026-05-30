<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }} | المهندسة سميرة علي ياسين</title>
    <meta name="description" content="{{ Str::limit($project->description, 160) }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800;900&family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Cairo', 'Outfit', sans-serif;
            background-color: #ffffff;
            color: #0f172a;
            overflow-x: hidden;
        }

        .mutmiz-hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 850px;
            background: radial-gradient(circle at 50% 30%, rgba(124, 58, 237, 0.04) 0%, rgba(255, 77, 128, 0.02) 40%, transparent 70%);
            z-index: -2;
        }

        /* Lightbox */
        .lightbox-overlay {
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            opacity: 0;
            pointer-events: none;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .lightbox-overlay.active {
            opacity: 1;
            pointer-events: all;
        }
        .lightbox-img {
            max-width: 90vw;
            max-height: 85vh;
            border-radius: 1.5rem;
            object-fit: contain;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5);
            transform: scale(0.95);
            transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .lightbox-overlay.active .lightbox-img {
            transform: scale(1);
        }
        .lightbox-close {
            position: absolute;
            top: 1.5rem;
            left: 1.5rem;
            color: white;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            width: 3rem;
            height: 3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
        }
        .lightbox-close:hover { 
            background: rgba(255, 255, 255, 0.2); 
            transform: scale(1.05);
        }

        /* Glass Panel Styling */
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(124, 58, 237, 0.08);
        }
        .glowing-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .glowing-card:hover {
            box-shadow: 0 25px 50px -12px rgba(124, 58, 237, 0.12);
            border-color: rgba(124, 58, 237, 0.2);
        }

        /* Image hover zoom inside mockup */
        .mockup-zoom-parent {
            overflow: hidden;
            position: relative;
        }
        .mockup-zoom-parent img {
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .mockup-zoom-parent:hover img {
            transform: scale(1.04);
        }

        /* Responsive height for mockup container on mobile to keep proportions */
        @media (max-width: 640px) {
            .desktop-mockup-container {
                height: 210px !important;
            }
        }
    </style>
</head>
<body class="selection:bg-primary/20 selection:text-primary">

    <!-- Hero radial background helper -->
    <div class="mutmiz-hero-bg"></div>

    <!-- Navigation Bar -->
    <nav class="fixed top-0 w-full z-50 glass-nav">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-3 sm:py-4 flex justify-between items-center">
            <a href="/" class="text-xl sm:text-2xl font-black text-primary font-display tracking-tight flex items-center gap-1 sm:gap-2">
                <span class="w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-secondary glow-pink"></span>
                سميرة علي ياسين
            </a>
            <a href="/#projects" class="flex items-center gap-1.5 text-xs sm:text-sm font-bold text-on-surface hover:text-primary transition-all hover:-translate-x-1 duration-300">
                <span class="material-symbols-outlined text-sm sm:text-base">arrow_right_alt</span>
                العودة لمعرض الأعمال
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="relative pt-28 pb-24">
        <div class="max-w-7xl mx-auto px-6 space-y-32">

            <!-- ====== HERO: Project Split View ====== -->
            <section class="flex flex-col lg:grid lg:grid-cols-12 gap-12 items-center pt-8">
                
                <!-- Right Column: Project Info (6 Cols on desktop, 100% on mobile) -->
                <div class="lg:col-span-6 space-y-6 sm:space-y-8 text-right order-2 lg:order-1 w-full">
                    <!-- Breadcrumbs -->
                    <nav class="flex items-center gap-2 text-xs font-semibold text-on-surface/50">
                        <a href="/" class="hover:text-primary transition-colors">الرئيسية</a>
                        <span class="material-symbols-outlined text-[10px]">arrow_left</span>
                        <a href="/#projects" class="hover:text-primary transition-colors">معرض الأعمال</a>
                        <span class="material-symbols-outlined text-[10px]">arrow_left</span>
                        <span class="text-primary font-bold truncate max-w-[120px] sm:max-w-[200px]">{{ $project->title }}</span>
                    </nav>

                    <!-- Category Badge & Date Info -->
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="inline-block px-4 py-1.5 rounded-full bg-primary/10 text-primary text-xs font-bold glow-purple">
                            {{ $project->category }}
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-surface text-xs font-semibold text-on-surface/70 border border-primary/5">
                            <span class="material-symbols-outlined text-sm text-secondary">calendar_today</span>
                            {{ $project->year }}
                        </span>
                    </div>

                    <!-- Main Title -->
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-on-background font-display leading-tight">
                        {{ $project->title }}
                    </h1>

                    <!-- Main description block -->
                    <div class="glass-panel p-4 sm:p-6 rounded-2xl shadow-sm leading-relaxed text-on-surface text-sm sm:text-base">
                        {{ $project->description }}
                    </div>

                    <!-- Secondary Quick Info Stats Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="bg-surface/50 border border-primary/5 p-4 rounded-xl flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg text-lg">category</span>
                            <div>
                                <div class="text-[10px] text-on-surface/60">نوع النظام</div>
                                <div class="text-xs font-bold text-on-background">{{ $project->category }}</div>
                            </div>
                        </div>
                        <div class="bg-surface/50 border border-primary/5 p-4 rounded-xl flex items-center gap-3">
                            <span class="material-symbols-outlined text-secondary bg-secondary/10 p-2 rounded-lg text-lg">check_circle</span>
                            <div>
                                <div class="text-[10px] text-on-surface/60">سنة الإنجاز والتشغيل</div>
                                <div class="text-xs font-bold text-on-background font-display">{{ $project->year }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left Column: Main Image as Premium Mockup (6 Cols on desktop, 100% on mobile) -->
                <div class="lg:col-span-6 flex justify-center order-1 lg:order-2 w-full">
                    <div class="tilt-card max-w-[500px] w-full">
                        <div class="desktop-mockup-container float-slow-2 mockup-zoom-parent cursor-pointer w-full"
                             onclick="openLightbox('{{ asset($project->image) }}', '{{ addslashes($project->title) }}')">
                            <!-- Mockup header -->
                            <div class="desktop-header flex justify-between items-center bg-[#fdfcff] px-4 py-2 border-b border-primary/5">
                                <div class="flex items-center gap-1.5">
                                    <span class="window-dot bg-red-400"></span>
                                    <span class="window-dot bg-yellow-400"></span>
                                    <span class="window-dot bg-green-400"></span>
                                </div>
                                <span class="text-[10px] text-on-surface/50 font-mono">SamiraOS - {{ Str::slug($project->title) }}.exe</span>
                                <div class="w-12"></div>
                            </div>
                            <!-- Mockup body containing image -->
                            <div class="desktop-body bg-slate-50 flex items-center justify-center p-1">
                                <img
                                    src="{{ asset($project->image) }}"
                                    alt="{{ $project->title }}"
                                    class="w-full h-full object-cover rounded-b-xl"
                                    onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22260%22%3E%3Crect width=%22400%22 height=%22260%22 fill=%22%23f1f5f9%22/%3E%3C/svg%3E'"
                                >
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- ====== PROJECT IMAGES GALLERY ====== -->
            @if($project->images->isNotEmpty())
            <section class="space-y-16">

                <!-- Header -->
                <div class="text-center space-y-3">
                    <div class="inline-block px-4 py-1.5 rounded-full bg-primary/10 text-primary text-[10px] font-black uppercase tracking-[0.3em] glow-purple">
                        تفاصيل الأنظمة والشاشات
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-black text-on-background font-display">
                        العرض المرئي والتفصيلي للنظام
                    </h2>
                    <p class="text-xs text-on-surface max-w-md mx-auto leading-relaxed">
                        استعراض تفصيلي للمميزات الإحصائية والإدارية مع لقطات شاشات النظام الفعلي.
                    </p>
                </div>

                <!-- Gallery Items -->
                <div class="space-y-24">
                    @foreach($project->images as $index => $img)
                        @php 
                            $isEven = $index % 2 === 0; 
                            $themeClass = $isEven ? 'primary' : 'secondary';
                            $glowClass = $isEven ? 'glow-purple' : 'glow-pink';
                        @endphp
                        
                        <!-- Alternating flex/grid layout to stack perfectly on mobile and side-by-side on desktop -->
                        <div class="flex flex-col lg:grid lg:grid-cols-12 gap-12 items-center {{ $isEven ? '' : 'lg:[direction:ltr]' }} reveal-init w-full">

                            <!-- Image Column (6 Cols on desktop, 100% on mobile) -->
                            <div class="lg:col-span-6 w-full flex justify-center {{ $isEven ? '' : 'lg:[direction:rtl]' }}">
                                <div class="tilt-card w-full max-w-[480px]">
                                    <div class="desktop-mockup-container float-slow-1 mockup-zoom-parent cursor-pointer w-full"
                                         onclick="openLightbox('{{ asset($img->image) }}', '{{ addslashes($img->title ?? '') }}')">
                                        <!-- Mockup Header -->
                                        <div class="desktop-header flex justify-between items-center bg-[#fdfcff] px-4 py-2 border-b border-primary/5">
                                            <div class="flex items-center gap-1.5">
                                                <span class="window-dot bg-red-400"></span>
                                                <span class="window-dot bg-yellow-400"></span>
                                                <span class="window-dot bg-green-400"></span>
                                            </div>
                                            <span class="text-[9px] text-on-surface/40 font-mono">Screen_{{ $index+1 }}.png</span>
                                            <div class="w-10"></div>
                                        </div>
                                        <!-- Mockup Body -->
                                        <div class="desktop-body bg-slate-50 flex items-center justify-center p-1">
                                            <img
                                                src="{{ asset($img->image) }}"
                                                alt="{{ $img->title ?? $project->title }}"
                                                class="w-full h-full object-cover rounded-b-xl"
                                                onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22260%22%3E%3Crect width=%22400%22 height=%22260%22 fill=%22%23f1f5f9%22/%3E%3C/svg%3E'"
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Text Content Column (6 Cols on desktop, 100% on mobile) -->
                            <div class="lg:col-span-6 w-full space-y-6 {{ $isEven ? 'text-right' : 'text-right lg:[direction:rtl]' }}">
                                
                                <!-- Index Pill -->
                                <div class="inline-flex items-center gap-3">
                                    <span class="w-10 h-10 rounded-full bg-{{ $themeClass }}/10 text-{{ $themeClass }} flex items-center justify-center text-sm font-black {{ $glowClass }} font-mono">
                                        0{{ $index + 1 }}
                                    </span>
                                    <div class="h-0.5 w-16 bg-gradient-to-l from-{{ $themeClass }}/20 to-transparent"></div>
                                </div>

                                <!-- Image Title -->
                                @if($img->title)
                                    <h3 class="text-2xl font-black text-on-background leading-snug">
                                        {{ $img->title }}
                                    </h3>
                                @endif

                                <!-- Image Description Card -->
                                @if($img->description)
                                    <div class="glass-panel glowing-card p-4 sm:p-6 rounded-2xl shadow-sm text-sm text-on-surface leading-relaxed">
                                        {{ $img->description }}
                                    </div>
                                @endif

                                <!-- Zoom Trigger Link -->
                                <div>
                                    <button
                                        onclick="openLightbox('{{ asset($img->image) }}', '{{ addslashes($img->title ?? '') }}')"
                                        class="inline-flex items-center gap-2 text-xs font-bold text-{{ $themeClass }} hover:opacity-80 transition-all hover:translate-x-1"
                                    >
                                        <span class="material-symbols-outlined text-sm font-black">zoom_in</span>
                                        تكبير وعرض الشاشة
                                    </button>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </section>
            @endif

            <!-- ====== Violet Call to Action (Landing Page CTA) ====== -->
            <section class="reveal-init">
                <div class="hero-bottom-block rounded-[3rem] p-12 md:p-16 shadow-2xl relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-12 text-right">
                    
                    <!-- Left visual: Phone Mockup inside banner -->
                    <div class="relative w-64 flex justify-center">
                        <div class="phone-mockup-container float-slow-1 shadow-2xl border-4 border-white/20" style="height: 380px; width: 220px; border-radius: 30px;">
                            <div class="phone-notch" style="width: 80px; height: 14px;"></div>
                            <div class="phone-screen bg-[#f8f7ff] p-4 flex flex-col justify-center space-y-4">
                                <div class="bg-white p-3 rounded-xl border border-primary/5 shadow-sm space-y-2">
                                    <span class="text-[8px] font-black px-1.5 py-0.5 rounded bg-primary/10 text-primary">تمت أتمتة النظام</span>
                                    <div class="text-[10px] font-black text-right">إدارة الحجوزات الطبية</div>
                                    <div class="w-full bg-[#f3f4f6] h-1 rounded-full overflow-hidden">
                                        <div class="bg-primary h-full rounded-full" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right visual: Description and CTA button -->
                    <div class="md:w-[60%] space-y-6">
                        <h2 class="text-3xl md:text-4xl font-black text-white leading-tight font-display">
                            هل تبحث عن أنظمة إدارية وإحصائية مماثلة؟
                        </h2>
                        <p class="text-white/80 text-sm leading-relaxed max-w-lg mx-auto md:mr-0">
                            أصمم برمجيات طبية وقواعد بيانات متكاملة لتبسيط الحجوزات، العمليات الجراحية، وإدارة مخازن العدسات بدقة وسرعة فائقة.
                        </p>
                        <div class="pt-2 flex flex-wrap gap-4 justify-start">
                            <a href="/#contact" class="px-8 py-3.5 rounded-full bg-secondary text-white font-black text-xs shadow-2xl hover:scale-105 transition-all flex items-center gap-2">
                                تواصل معي الآن
                                <span class="material-symbols-outlined text-sm font-bold">arrow_left_alt</span>
                            </a>
                            <a href="/#projects" class="px-8 py-3.5 rounded-full bg-white/10 text-white font-bold hover:bg-white/20 transition-all text-xs flex items-center gap-2">
                                <span class="material-symbols-outlined text-sm">arrow_right_alt</span>
                                تصفح باقي الأعمال
                            </a>
                        </div>
                    </div>

                </div>
            </section>

        </div>
    </main>

    <!-- Footer Copyright -->
    <footer class="py-8 bg-white border-t border-primary/5 text-center text-xs text-on-surface/60">
        <div class="max-w-7xl mx-auto px-6 flex flex-col sm:flex-row justify-between items-center gap-4">
            <div>جميع الحقوق محفوظة للمهندسة سميرة علي ياسين &copy; ٢٠٢٦.</div>
            <a href="/#projects" class="hover:text-primary transition-colors flex items-center gap-1">
                معرض الأعمال
                <span class="material-symbols-outlined text-xs">arrow_left_alt</span>
            </a>
        </div>
    </footer>

    <!-- Lightbox -->
    <div id="lightbox" class="lightbox-overlay" onclick="closeLightbox(event)">
        <div class="lightbox-close" onclick="closeLightbox()">
            <span class="material-symbols-outlined text-white text-xl">close</span>
        </div>
        <img id="lightbox-img" class="lightbox-img" src="" alt="">
    </div>

    <script>
        function openLightbox(src, alt) {
            const lb = document.getElementById('lightbox');
            const img = document.getElementById('lightbox-img');
            img.src = src;
            img.alt = alt || '';
            lb.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox(e) {
            if (e && e.target !== document.getElementById('lightbox') && !e.target.closest('.lightbox-close')) return;
            document.getElementById('lightbox').classList.remove('active');
            document.body.style.overflow = '';
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeLightbox();
        });
    </script>

</body>
</html>
