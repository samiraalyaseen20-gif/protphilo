<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }} | سميرة علي ياسين</title>
    <meta name="description" content="{{ Str::limit($project->description, 160) }}">

    <!-- نفس خطوط وأنماط Landing Page -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800;900&family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Cairo', 'Outfit', sans-serif;
            background-color: #ffffff;
            color: #0f172a;
            overflow-x: hidden;
        }

        /* Lightbox */
        .lightbox-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.92);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }
        .lightbox-overlay.active {
            opacity: 1;
            pointer-events: all;
        }
        .lightbox-img {
            max-width: 90vw;
            max-height: 85vh;
            border-radius: 1rem;
            object-fit: contain;
            box-shadow: 0 25px 60px rgba(0,0,0,0.5);
        }
        .lightbox-close {
            position: absolute;
            top: 1.25rem;
            left: 1.25rem;
            color: white;
            background: rgba(255,255,255,0.15);
            border-radius: 50%;
            width: 2.5rem;
            height: 2.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 1.25rem;
            transition: background 0.2s;
        }
        .lightbox-close:hover { background: rgba(255,255,255,0.25); }

        /* Image card hover */
        .project-img-card { cursor: pointer; }
        .project-img-card img {
            transition: transform 0.4s ease;
        }
        .project-img-card:hover img { transform: scale(1.04); }
    </style>
</head>
<body class="selection:bg-primary/20 selection:text-primary">

    <!-- Navbar (نفس Landing Page) -->
    <nav class="fixed top-0 w-full z-50 glass-nav">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-black text-primary font-display tracking-tight flex items-center gap-2">
                <span class="w-3 h-3 rounded-full bg-secondary glow-pink"></span>
                سميرة علي ياسين
            </a>
            <a href="/#projects" class="flex items-center gap-1.5 text-sm font-bold text-on-surface hover:text-primary transition-colors">
                <span class="material-symbols-outlined text-base">arrow_right_alt</span>
                معرض الأعمال
            </a>
        </div>
    </nav>

    <main class="relative pt-28 pb-24">
        <div class="max-w-5xl mx-auto px-6 space-y-20">

            <!-- ====== HERO: Project Header ====== -->
            <section class="space-y-8">

                <!-- Breadcrumb -->
                <nav class="flex items-center gap-2 text-xs text-on-surface/60">
                    <a href="/" class="hover:text-primary transition-colors">الرئيسية</a>
                    <span class="material-symbols-outlined text-sm">arrow_left</span>
                    <a href="/#projects" class="hover:text-primary transition-colors">معرض الأعمال</a>
                    <span class="material-symbols-outlined text-sm">arrow_left</span>
                    <span class="text-on-background font-medium truncate max-w-xs">{{ $project->title }}</span>
                </nav>

                <!-- Category Badge + Year -->
                <div class="flex flex-wrap items-center gap-3">
                    <span class="inline-block px-4 py-1.5 rounded-full bg-primary/10 text-primary text-xs font-bold glow-purple">
                        {{ $project->category }}
                    </span>
                    <span class="inline-flex items-center gap-1 text-xs text-on-surface/60">
                        <span class="material-symbols-outlined text-sm">calendar_today</span>
                        {{ $project->year }}
                    </span>
                </div>

                <!-- Title -->
                <h1 class="text-4xl lg:text-5xl font-black text-on-background font-display leading-tight">
                    {{ $project->title }}
                </h1>

                <!-- Description -->
                <p class="text-base text-on-surface leading-relaxed max-w-3xl">
                    {{ $project->description }}
                </p>

                <!-- Main Project Image -->
                <div class="project-img-card rounded-[2rem] overflow-hidden aspect-video bg-surface shadow-xl border border-primary/5"
                     onclick="openLightbox('{{ asset($project->image) }}', '{{ addslashes($project->title) }}')">
                    <img
                        src="{{ asset($project->image) }}"
                        alt="{{ $project->title }}"
                        class="w-full h-full object-cover"
                        onerror="this.parentElement.style.display='none'"
                    >
                </div>

            </section>

            <!-- ====== PROJECT IMAGES GALLERY ====== -->
            @if($project->images->isNotEmpty())
            <section class="space-y-12">

                <div class="text-center space-y-2">
                    <div class="inline-block px-4 py-1.5 rounded-full bg-primary/10 text-primary text-[10px] font-black uppercase tracking-[0.3em]">
                        معرض المشروع
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-black text-on-background font-display">
                        تفاصيل وصور المشروع
                    </h2>
                </div>

                <div class="space-y-16">
                    @foreach($project->images as $index => $img)
                        @php $isEven = $index % 2 === 0; @endphp
                        <div class="grid lg:grid-cols-2 gap-10 items-center {{ $isEven ? '' : 'lg:[direction:ltr]' }} reveal-init">

                            <!-- Image -->
                            <div class="project-img-card rounded-[2rem] overflow-hidden shadow-lg border border-primary/5 bg-surface"
                                 onclick="openLightbox('{{ asset($img->image) }}', '{{ addslashes($img->title ?? '') }}')">
                                <img
                                    src="{{ asset($img->image) }}"
                                    alt="{{ $img->title ?? $project->title }}"
                                    class="w-full object-cover aspect-video"
                                    onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22300%22%3E%3Crect width=%22400%22 height=%22300%22 fill=%22%23f1f5f9%22/%3E%3C/svg%3E'"
                                >
                            </div>

                            <!-- Text -->
                            <div class="space-y-4 {{ $isEven ? 'text-right' : 'text-right lg:[direction:rtl]' }}">
                                <div class="flex items-center gap-2 text-primary">
                                    <span class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-sm font-black">{{ $index + 1 }}</span>
                                    <div class="h-px flex-1 bg-primary/10"></div>
                                </div>
                                @if($img->title)
                                    <h3 class="text-2xl font-black text-on-background leading-snug">
                                        {{ $img->title }}
                                    </h3>
                                @endif
                                @if($img->description)
                                    <p class="text-sm text-on-surface leading-relaxed">
                                        {{ $img->description }}
                                    </p>
                                @endif
                                <button
                                    onclick="openLightbox('{{ asset($img->image) }}', '{{ addslashes($img->title ?? '') }}')"
                                    class="inline-flex items-center gap-2 text-xs font-bold text-primary hover:underline"
                                >
                                    <span class="material-symbols-outlined text-sm">zoom_in</span>
                                    عرض الصورة بالحجم الكامل
                                </button>
                            </div>

                        </div>
                    @endforeach
                </div>
            </section>
            @endif

            <!-- ====== Back + Contact CTA ====== -->
            <section class="glass-panel glowing-card rounded-[2rem] p-10 text-center space-y-6">
                <h2 class="text-2xl font-black text-on-background">هل تريد مشروعاً مشابهاً؟</h2>
                <p class="text-sm text-on-surface max-w-md mx-auto">
                    تواصل مع المهندسة سميرة علي ياسين لتطوير حل برمجي متكامل يناسب احتياجاتك.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="/#contact" class="px-8 py-3.5 rounded-full bg-secondary text-white font-bold shadow-lg shadow-secondary/30 hover:scale-105 transition-all text-sm flex items-center gap-2">
                        تواصل معي
                        <span class="material-symbols-outlined text-sm">arrow_left_alt</span>
                    </a>
                    <a href="/#projects" class="px-8 py-3.5 rounded-full bg-primary/10 text-primary font-bold hover:bg-primary/20 transition-all text-sm flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm">arrow_right_alt</span>
                        مشاريع أخرى
                    </a>
                </div>
            </section>

        </div>
    </main>

    <!-- Footer -->
    <footer class="py-8 bg-white border-t border-primary/5 text-center text-xs text-on-surface/60">
        <div class="max-w-7xl mx-auto px-6 flex flex-col sm:flex-row justify-between items-center gap-4">
            <div>جميع الحقوق محفوظة للمهندسة سميرة علي ياسين &copy; ٢٠٢٦.</div>
            <a href="/#projects" class="hover:text-primary transition-colors">العودة إلى معرض الأعمال</a>
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

        // Reveal on scroll (same as landing page)
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('reveal-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.reveal-init').forEach(el => observer.observe(el));
    </script>

</body>
</html>
