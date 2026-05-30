<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مُتمِز | المهندسة سميرة علي ياسين - أجهزة طبية وأنظمة إدارية</title>
    
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

        .avatar-stack {
            display: flex;
            align-items: center;
        }
        .avatar-stack img {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            border: 2px solid #ffffff;
            margin-right: -10px;
        }
    </style>
</head>
<body class="selection:bg-primary/20 selection:text-primary">

    <!-- Hero radial background helper -->
    <div class="mutmiz-hero-bg"></div>

    <!-- Navigation Bar -->
    <nav class="fixed top-0 w-full z-50 glass-nav">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-center items-center">
            <div class="text-2xl font-black text-primary font-display tracking-tight flex items-center gap-2">
                <span class="w-3 h-3 rounded-full bg-secondary glow-pink"></span>
                سميرة علي ياسين
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="relative pt-28">

        <!-- Hero Section -->
        <section class="min-h-screen flex items-center overflow-hidden relative pb-16">
            <div class="max-w-7xl mx-auto px-6 w-full space-y-16">
                <div class="grid lg:grid-cols-12 gap-12 items-center">
                    
                    <!-- Right Column: Text (LTR left, RTL right) -->
                    <div class="lg:col-span-5 space-y-8 text-center lg:text-right">
                        <!-- Trustpilot Pill Badge -->
                        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[#f1f0ff] border border-primary/10 text-xs font-bold text-on-background">
                            <span class="material-symbols-outlined text-green-500 font-black text-sm">star_rate</span>
                            <span class="font-black text-primary">التقييم الأكاديمي والمهني</span>
                            <span class="text-on-surface">مميز جداً ★</span>
                        </div>
                        
                        <!-- Main Header -->
                        <h1 class="text-5xl lg:text-6xl font-black leading-tight text-on-background font-display tracking-tight">
                            أصمم وأطور <br>
                            <span class="text-primary glow-purple">الأنظمة الطبية الإدارية</span>
                        </h1>
                        
                        <!-- Description -->
                        <p class="text-lg text-on-surface leading-relaxed max-w-xl mx-auto lg:mr-0">
                            المهندسة سميرة علي ياسين ال ياسين. أقدم حلولاً برمجية متكاملة تركز على أتمتة الأنظمة الإدارية، والأرشفة الإلكترونية الشاملة للبيانات الطبية، وتطوير قواعد البيانات والبرمجيات الإحصائية لتقليل الأخطاء ودعم اتخاذ القرار.
                        </p>

                        <!-- Pink Button -->
                        <div class="flex justify-center lg:justify-start">
                            <a href="#contact" class="px-8 py-3.5 rounded-full bg-secondary text-white font-bold shadow-lg shadow-secondary/30 hover:scale-105 transition-all text-sm flex items-center gap-2">
                                تواصل معي 
                                <span class="material-symbols-outlined text-sm font-bold">arrow_left_alt</span>
                            </a>
                        </div>
                    </div>

                    <!-- Left Column: Structured Mockup Area without Overlapping -->
                    <div class="lg:col-span-7 flex flex-col items-center gap-6 w-full">
                        
                        <!-- Side-by-Side Flex wrapper for Phone and Desktop -->
                        <div class="flex flex-col md:flex-row items-center justify-center gap-8 w-full">
                            
                            <!-- 1. Desktop Window Mockup (Clinic booking management) -->
                            <div class="w-full max-w-[440px] flex justify-center">
                                <div class="desktop-mockup-container float-slow-2">
                                    <!-- Window header -->
                                    <div class="desktop-header flex justify-between items-center">
                                        <div class="flex items-center gap-1.5">
                                            <span class="window-dot bg-red-400"></span>
                                            <span class="window-dot bg-yellow-400"></span>
                                            <span class="window-dot bg-green-400"></span>
                                        </div>
                                        <span class="text-[10px] text-on-surface/50 font-mono">SamiraOS - ClinicManagement.exe</span>
                                        <div class="w-12"></div>
                                    </div>
                                    <!-- Window body -->
                                    <div class="desktop-body">
                                        <!-- Sidebar -->
                                        <div class="desktop-sidebar flex flex-col gap-3">
                                            <div class="text-[8px] font-black text-primary/70">قائمة النظام</div>
                                            <div class="flex items-center gap-1.5 text-[9px] font-bold text-primary"><span class="material-symbols-outlined text-[10px]">dashboard</span> لوحة التحكم</div>
                                            <div class="flex items-center gap-1.5 text-[9px] font-bold text-on-surface/70"><span class="material-symbols-outlined text-[10px]">task</span> حجوزات العين</div>
                                            <div class="flex items-center gap-1.5 text-[9px] font-bold text-on-surface/70"><span class="material-symbols-outlined text-[10px]">inventory</span> مخزن العدسات</div>
                                        </div>
                                        <!-- Main Area -->
                                        <div class="desktop-main space-y-4">
                                            <div class="flex justify-between items-center">
                                                <div class="text-[10px] font-black text-on-background">مؤشرات أداء مركز العيون</div>
                                                <span class="text-[8px] px-2 py-0.5 rounded bg-green-100 text-green-700 font-bold">● فعال حالياً</span>
                                            </div>
                                            <!-- Charts grid -->
                                            <div class="grid grid-cols-2 gap-3">
                                                <div class="bg-[#fcfbff] border border-primary/5 p-2 rounded-xl shadow-sm">
                                                    <div class="text-[8px] text-on-surface">ساعات تشغيل النظام</div>
                                                    <div class="text-[13px] font-black text-primary mt-0.5">64:52:00</div>
                                                </div>
                                                <div class="bg-[#fcfbff] border border-primary/5 p-2 rounded-xl shadow-sm">
                                                    <div class="text-[8px] text-on-surface">العمليات المنجزة</div>
                                                    <div class="text-[13px] font-black text-secondary mt-0.5">1,248 مريض</div>
                                                </div>
                                            </div>
                                            <!-- Server Sync status -->
                                            <div class="bg-[#fcfbff] border border-primary/5 p-2 rounded-xl shadow-sm space-y-1">
                                                <div class="flex justify-between text-[8px] font-bold">
                                                    <span>مزامنة إدخال بيانات المختبر</span>
                                                    <span class="text-primary">94%</span>
                                                </div>
                                                <div class="w-full bg-primary/10 h-1.5 rounded-full overflow-hidden">
                                                    <div class="bg-primary h-full rounded-full" style="width: 94%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2. Phone Mockup Frame (Mobile Appointment Booking App) -->
                            <div class="w-full max-w-[250px] flex justify-center">
                                <div class="phone-mockup-container float-slow-1">
                                    <div class="phone-notch"></div>
                                    <div class="phone-screen space-y-6">
                                        <div class="flex justify-between items-center text-[10px] text-on-surface">
                                            <div class="font-bold">أهلاً بكِ،<br><span class="text-[#0f172a] font-black text-[12px]">م. سميرة علي 👋</span></div>
                                            <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold">سميرة</div>
                                        </div>

                                        <!-- Mockup task element -->
                                        <div class="bg-white p-4 rounded-2xl border border-primary/5 shadow-md space-y-2">
                                            <div class="flex justify-between items-center">
                                                <span class="text-[9px] font-black px-2 py-0.5 rounded bg-primary/10 text-primary">مكتمل</span>
                                                <span class="text-[9px] text-on-surface">إحصائيات الأطباء</span>
                                            </div>
                                            <div class="text-[11px] font-black text-right">أرشفة بيانات المختبر</div>
                                            <div class="w-full bg-[#f3f4f6] h-1.5 rounded-full overflow-hidden">
                                                <div class="bg-primary h-full rounded-full" style="width: 72%"></div>
                                            </div>
                                        </div>

                                        <!-- Mockup task list -->
                                        <div class="space-y-2">
                                            <div class="text-[10px] font-bold text-on-surface text-right">أتمتة وحجوزات</div>
                                            
                                            <div class="bg-white px-3 py-2 rounded-xl border border-primary/5 flex items-center justify-between shadow-sm">
                                                <div class="flex items-center gap-2">
                                                    <span class="w-3 h-3 rounded-full bg-primary/20 flex items-center justify-center"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span></span>
                                                    <span class="text-[10px] font-bold">حجوزات حقن العين (إيليا)</span>
                                                </div>
                                                <span class="text-[9px] text-[#ff4d80]">48%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- 3. Subgrid for Floating Info cards (Clinic details) -->
                        <div class="w-full max-w-[700px] mt-2">
                            <!-- Card 2: Tasks List -->
                            <div class="mutmiz-card p-5 rounded-2xl shadow-md border border-primary/10 space-y-2 text-right">
                                <div class="flex justify-between items-center border-b border-primary/5 pb-1">
                                    <div class="text-xs font-black text-on-background">المهام المنجزة حالياً</div>
                                    <span class="text-[9px] text-primary font-bold">+ إضافة نظام</span>
                                </div>
                                <div class="space-y-1.5">
                                    <div class="flex items-center gap-2">
                                        <span class="w-2.5 h-2.5 rounded border border-primary/20 flex items-center justify-center"><span class="w-1.5 h-1.5 rounded-sm bg-primary"></span></span>
                                        <span class="text-[9px] text-on-surface">برنامج أتمتة نظام حقن العين بالكامل</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-2.5 h-2.5 rounded border border-primary/20 flex items-center justify-center"><span class="w-1.5 h-1.5 rounded-sm bg-primary"></span></span>
                                        <span class="text-[9px] text-on-surface">برنامج إدارة العمليات الجراحية</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-2.5 h-2.5 rounded border border-primary/20 flex items-center justify-center"><span class="w-1.5 h-1.5 rounded-sm bg-primary"></span></span>
                                        <span class="text-[9px] text-on-surface">برنامج إدارة الاحصائيات الاستشارية و المختبر </span>
                                    </div>
                                    
                                    <div class="flex items-center gap-2">
                                        <span class="w-2.5 h-2.5 rounded border border-primary/20 flex items-center justify-center"><span class="w-1.5 h-1.5 rounded-sm bg-primary"></span></span>
                                        <span class="text-[9px] text-on-surface">التقارير الإحصائية للأنظمة الطبية وأرشفتها</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </section>

        <!-- Professional Experience Section (Timeline replacing English resume) -->
        <section id="experience" class="py-32 relative bg-surface/30 text-right">
            <div class="max-w-4xl mx-auto px-6">
                <div class="text-center space-y-4 mb-24 reveal-init">
                    <div class="inline-block px-4 py-1.5 rounded-full bg-primary/10 text-primary text-[10px] font-black uppercase tracking-[0.3em] mb-4">الخبرات والمسيرة المهنية</div>
                    <h2 class="text-4xl lg:text-5xl font-black text-on-background font-display tracking-tight">مسيرتي المهنية والخبرات</h2>
                    <p class="text-xs text-on-surface max-w-md mx-auto">السيرة المهنية المفصلة للمهندسة سميرة علي ياسين في المؤسسات الطبية والدوائر الهندسية بكربلاء المقدسة.</p>
                </div>

                <!-- Vertical Timeline track -->
                <div class="timeline-track space-y-12">
                    
                    <!-- Experience 1 -->
                    <div class="relative flex flex-col md:flex-row items-center md:justify-between reveal-init">
                        <div class="w-full md:w-[45%] mb-6 md:mb-0"></div>
                        <div class="absolute left-1/2 -translate-x-1/2 md:flex hidden w-10 h-10 rounded-full bg-gradient-to-tr from-primary to-secondary items-center justify-center text-white glow-pink border-4 border-[#fff9fb] z-10">
                            <span class="material-symbols-outlined text-sm font-bold font-black">clinical_suite</span>
                        </div>
                        <div class="w-full md:w-[45%] glass-panel glowing-card p-8 rounded-3xl shadow-lg">
                            <div class="text-primary font-black text-xl mb-2">٢٠٢٥ - حتى الآن</div>
                            <h3 class="text-lg font-black text-on-surface mb-2">مسؤولة الاحصاء الطبي</h3>
                            <div class="text-xs text-primary font-bold mb-3">مركز السيدة زينب (ع) التخصصي للعيون</div>
                            <ul class="text-xs text-on-surface leading-relaxed space-y-2 list-disc pr-4">
                                <li>تصميم وتطوير أنظمة إحصائية لمتابعة أعداد مراجعي المرضى لكل طبيب.</li>
                                <li>إعداد تقارير تحليلية دورية لقياس حجم العمل ومؤشرات أداء الأطباء.</li>
                                <li>إنشاء نظام إحصائي للمختبر يسجل عدد المراجعين وأنواع التحاليل المنجزة.</li>
                                <li>تطوير نظام لإدارة العمليات الجراحية، ونظام محوسب لإدارة المخزن وصرف العدسات الطبية.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Experience 2 -->
                    <div class="relative flex flex-col md:flex-row-reverse items-center md:justify-between reveal-init">
                        <div class="w-full md:w-[45%] mb-6 md:mb-0"></div>
                        <div class="absolute left-1/2 -translate-x-1/2 md:flex hidden w-10 h-10 rounded-full bg-gradient-to-tr from-primary to-secondary items-center justify-center text-white glow-purple border-4 border-[#fff9fb] z-10">
                            <span class="material-symbols-outlined text-sm font-bold">computer</span>
                        </div>
                        <div class="w-full md:w-[45%] glass-panel glowing-card p-8 rounded-3xl shadow-lg">
                            <div class="text-secondary font-black text-xl mb-2">٢٠٢٤</div>
                            <h3 class="text-lg font-black text-on-surface mb-2">مسؤولة حاسبة الحجوزات ومطورة أنظمة إدارية</h3>
                            <div class="text-xs text-secondary font-bold mb-3">مركز السيدة زينب (ع) التخصصي للعيون</div>
                            <ul class="text-xs text-on-surface leading-relaxed space-y-2 list-disc pr-4">
                                <li>إدارة وتنظيم جدول مواعيد حقن العين لمرضى العيون واستكمال استمارات اللجان.</li>
                                <li>تطوير نظام إلكتروني لإدارة الحجوزات والبيانات الطبية لتقليل الأخطاء الإدارية وأتمتتها.</li>
                                <li>استخراج تقارير إحصائية شهرية وسنوية شاملة لحالات الحقن والمراجعات.</li>
                                <li>تمت الترقية للإشراف الكامل على وحدة الحقن وإدارة كادر العمل اليومي.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Experience 3 -->
                    <div class="relative flex flex-col md:flex-row items-center md:justify-between reveal-init">
                        <div class="w-full md:w-[45%] mb-6 md:mb-0"></div>
                        <div class="absolute left-1/2 -translate-x-1/2 md:flex hidden w-10 h-10 rounded-full bg-gradient-to-tr from-primary to-secondary items-center justify-center text-white glow-pink border-4 border-[#fff9fb] z-10">
                            <span class="material-symbols-outlined text-sm font-bold">construction</span>
                        </div>
                        <div class="w-full md:w-[45%] glass-panel glowing-card p-8 rounded-3xl shadow-lg">
                            <div class="text-primary font-black text-xl mb-2">٢٠٢٤</div>
                            <h3 class="text-lg font-black text-on-surface mb-2">مهندسة اجهزة طبية</h3>
                            <div class="text-xs text-primary font-bold mb-3">دائرة صحة كربلاء - قسم المشاريع والخدمات الهندسية</div>
                            <ul class="text-xs text-on-surface leading-relaxed space-y-2 list-disc pr-4">
                                <li>إعداد وصياغة الكتب والمخاطبات الرسمية الموجهة للدوائر الطبية والمؤسسات ذات العلاقة.</li>
                                <li>تنظيم كتب الاعتذار والموافقات الرسمية الخاصة بتجهيز الأجهزة والمعدات الطبية بكربلاء.</li>
                                <li>متابعة الموافقات الرسمية والمطابقة الفنية والتقنية للمواصفات القياسية.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Experience 4 -->
                    <div class="relative flex flex-col md:flex-row-reverse items-center md:justify-between reveal-init">
                        <div class="w-full md:w-[45%] mb-6 md:mb-0"></div>
                        <div class="absolute left-1/2 -translate-x-1/2 md:flex hidden w-10 h-10 rounded-full bg-gradient-to-tr from-primary to-secondary items-center justify-center text-white glow-purple border-4 border-[#fff9fb] z-10">
                            <span class="material-symbols-outlined text-sm font-bold">palette</span>
                        </div>
                        <div class="w-full md:w-[45%] glass-panel glowing-card p-8 rounded-3xl shadow-lg">
                            <div class="text-secondary font-black text-xl mb-2">٢٠٢٢ - ٢٠٢٤</div>
                            <h3 class="text-lg font-black text-on-surface mb-2">مصممة كرافيك</h3>
                            <div class="text-xs text-secondary font-bold mb-3">العتبة الحسينية المقدسة - قسم رعاية الطفولة (مركز الحوراء زينب)</div>
                            <ul class="text-xs text-on-surface leading-relaxed space-y-2 list-disc pr-4">
                                <li>تطوير الهوية البصرية للبرامج والأنشطة الثقافية وتصميم منشورات وكتب الشهداء.</li>
                                <li>إعداد وتجهيز المواد الدعائية والبصرية المطبوعة والرقمية للفعاليات والمهرجانات.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Academic Certificate Section -->
        <section id="about-us" class="py-32 relative text-right">
            <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
                <!-- Academic Card -->
                <div class="glass-panel glowing-card p-8 rounded-3xl shadow-xl border border-primary/10 reveal-init space-y-4 max-w-md mx-auto lg:mr-0">
                    <span class="material-symbols-outlined text-primary text-5xl">school</span>
                    <h3 class="text-2xl font-black text-on-background">الشهادة الأكاديمية</h3>
                    <div class="text-lg font-bold text-on-surface">بكلوريوس هندسة اجهزة طبية</div>
                    <p class="text-sm text-on-surface">كلية الحسين الجامعة</p>
                    <div class="text-sm font-bold text-primary">سنة التخرج: ٢٠٢١ - ٢٠٢٢ م</div>
                </div>

                <!-- Languages & Basic Info -->
                <div class="space-y-8 reveal-init">
                    <h2 class="text-4xl font-black text-on-background font-display leading-tight">المهارات واللغات والقدرات الفنية</h2>
                    
                    <div class="grid grid-cols-2 gap-8">
                        <div>
                            <h3 class="font-bold text-primary text-lg mb-3">اللغات</h3>
                            <ul class="text-xs text-on-surface space-y-2">
                                <li>● اللغة العربية (اللغة الأم)</li>
                                <li>● اللغة الإنجليزية (مستوى متقدم)</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-bold text-secondary text-lg mb-3">المهارات البرمجية</h3>
                            <ul class="text-xs text-on-surface space-y-2">
                                <li>● تطوير وبرمجة الأنظمة (HTML, CSS, C#)</li>
                                <li>● إدارة قواعد البيانات الطبية بدقة عالية</li>
                                <li>● توظيف تقنيات الذكاء الاصطناعي في الأرشفة</li>
                                <li>● إجادة كاملة لبرامج MS Office (Word, Excel, PPT)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Violet Card Call to Action -->
        <section class="py-32 text-right">
            <div class="max-w-6xl mx-auto px-6 reveal-init">
                <div class="hero-bottom-block rounded-[3rem] p-12 md:p-16 shadow-2xl relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-12">
                    
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
                        <h2 class="text-4xl font-black text-white leading-tight font-display">
                            جاهزة لتنظيم وتطوير منشأتكِ الطبية؟ <br>
                            لنبدأ العمل وبناء الأنظمة الإلكترونية
                        </h2>
                        <p class="text-white/80 text-sm leading-relaxed max-w-lg mx-auto md:mr-0">
                            أصمم برمجيات وقواعد بيانات طبية متكاملة لتبسيط الحجوزات والعمليات الجراحية وإصدار مؤشرات الأداء للأطباء بدقة برمجية تامة.
                        </p>
                        <div class="pt-2">
                            <a href="#contact" class="px-10 py-4 rounded-full bg-secondary text-white font-black text-base shadow-2xl hover:scale-105 hover:glow-pink inline-block transition-transform">
                                تواصل معي الآن >
                            </a>
                        </div>
                    </div>

                </div>
            </div>
     

        <!-- Projects Section -->
        <section id="projects" class="py-32">
            <div class="max-w-7xl mx-auto px-6 space-y-16">
                
                <!-- Title -->
                <div class="text-center space-y-2 reveal-init">
                    <h2 class="text-4xl lg:text-5xl font-black text-on-background font-display tracking-tight">
                        أبرز المشاريع <br>
                        من <span class="text-primary">أنظمتي البرمجية المنجزة</span>
                    </h2>
                </div>

                <!-- Projects grid -->
                <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto text-right">
                    
                    @if(isset($projects) && $projects->isNotEmpty())
                        @php
                            $ordinals = ['الأول', 'الثاني', 'الثالث', 'الرابع', 'الخامس', 'السادس', 'السابع', 'الثامن', 'التاسع', 'العاشر', 'الحادي عشر', 'الثاني عشر', 'الثالث عشر', 'الرابع عشر', 'الخامس عشر'];
                        @endphp
                        @foreach($projects as $project)
                            @php
                                $isOdd = $loop->iteration % 2 !== 0;
                                $themeClass = $isOdd ? 'primary' : 'secondary';
                                $glowClass = $isOdd ? 'glow-purple' : 'glow-pink';
                                $ordinalName = $ordinals[$loop->index] ?? $loop->iteration;
                            @endphp
                            <!-- Project Card {{ $loop->iteration }} -->
                            <a href="{{ route('projects.show', $project) }}"
                               class="mutmiz-card rounded-[2rem] overflow-hidden reveal-init flex flex-col justify-between hover:shadow-xl transition-shadow duration-300 group">
                                <div class="relative overflow-hidden aspect-video bg-surface">
                                    <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                </div>
                                <div class="p-8 space-y-4">
                                    <span class="inline-block px-3.5 py-1.5 rounded-full bg-{{ $themeClass }}/10 text-{{ $themeClass }} text-xs font-bold {{ $glowClass }}">{{ $project->category }}</span>
                                    <h3 class="text-2xl font-black text-on-background leading-snug">{{ $project->title }}</h3>
                                    <p class="text-xs text-on-surface leading-relaxed">
                                        {{ $project->description }}
                                    </p>
                                </div>
                                <div class="px-8 pb-8 pt-4 border-t border-primary/5 flex justify-between items-center text-xs text-on-surface">
                                    <span>{{ $project->year }}</span>
                                    <span class="flex items-center gap-1 font-bold text-{{ $themeClass }}">عرض التفاصيل <span class="material-symbols-outlined text-sm font-bold">arrow_left_alt</span></span>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <!-- Project Card 1 (Fallback) -->
                        <div class="mutmiz-card rounded-[2rem] overflow-hidden reveal-init flex flex-col justify-between">
                            <div class="relative overflow-hidden aspect-video bg-surface">
                                <img src="{{ asset('assets/Screenshot 2026-05-26 080329.png') }}" alt="برنامج الإحصاء الطبي للعيون" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                            </div>
                            <div class="p-8 space-y-4">
                                <span class="inline-block px-3.5 py-1.5 rounded-full bg-primary/10 text-primary text-xs font-bold glow-purple">أنظمة إحصائية طبية</span>
                                <h3 class="text-2xl font-black text-on-background leading-snug">برنامج الإحصاء الطبي للعيون</h3>
                                <p class="text-xs text-on-surface leading-relaxed">
                                    نظام إحصائي متكامل لمتابعة وتنظيم إحصاءات الحقن، الأطباء، المرضى، وجدولة وتنسيق مواعيد الزيارات بمركز السيدة زينب التخصصي للعيون بدقة عالية.
                                </p>
                            </div>
                            <div class="px-8 pb-8 pt-4 border-t border-primary/5 flex justify-between items-center text-xs text-on-surface">
                                <span>٢٠٢٥ م</span>
                                <span class="flex items-center gap-1 font-bold text-primary">المشروع الأول <span class="material-symbols-outlined text-sm font-bold">arrow_left_alt</span></span>
                            </div>
                        </div>

                        <!-- Project Card 2 (Fallback) -->
                        <div class="mutmiz-card rounded-[2rem] overflow-hidden reveal-init flex flex-col justify-between">
                            <div class="relative overflow-hidden aspect-video bg-surface">
                                <img src="{{ asset('assets/Screenshot 2026-05-26 080212.png') }}" alt="نظام إدارة مخازن وصرف العدسات الطبية" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                            </div>
                            <div class="p-8 space-y-4">
                                <span class="inline-block px-3.5 py-1.5 rounded-full bg-secondary/10 text-secondary text-xs font-bold glow-pink">إدارة مخازن وقواعد بيانات</span>
                                <h3 class="text-2xl font-black text-on-background leading-snug">نظام إدارة مخازن وصرف العدسات الطبية</h3>
                                <p class="text-xs text-on-surface leading-relaxed">
                                    نظام  محوسب للرقابة الذكية على مخزون المستلزمات الطبية وإصدار وتتبع العدسات المصروفة للمرضى بمركز العيون كربلاء.
                                </p>
                            </div>
                            <div class="px-8 pb-8 pt-4 border-t border-primary/5 flex justify-between items-center text-xs text-on-surface">
                                <span>٢٠٢٤ م</span>
                                <span class="flex items-center gap-1 font-bold text-secondary">المشروع الثاني <span class="material-symbols-outlined text-sm font-bold">arrow_left_alt</span></span>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </section>

        <!-- Newsletter & Contact Footer -->
        <section id="contact" class="py-32 bg-surface/50 border-t border-primary/10 text-right">
            <div class="max-w-4xl mx-auto px-6 text-center space-y-12 reveal-init">
                
                <div class="space-y-4">
                    <h2 class="text-4xl lg:text-5xl font-black text-on-background font-display tracking-tight">معلومات الاتصال المباشر</h2>
                    <p class="text-xs text-on-surface max-w-md mx-auto">لأي استشارات حول  أتمتة الأنظمة الإحصائية للمستشفيات، يسعدني تواصلكم.</p>
                </div>

                <!-- Info Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-2xl mx-auto text-right">
                    <div class="bg-white p-6 rounded-2xl border border-primary/10 shadow-sm flex items-center gap-4">
                        <span class="material-symbols-outlined text-primary bg-primary/10 p-3 rounded-xl">call</span>
                        <div>
                            <div class="text-[10px] text-on-surface">الهاتف</div>
                            <div class="text-sm font-bold text-on-background font-mono">07808942617</div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-2xl border border-primary/10 shadow-sm flex items-center gap-4">
                        <span class="material-symbols-outlined text-secondary bg-secondary/10 p-3 rounded-xl">mail</span>
                        <div class="overflow-hidden">
                            <div class="text-[10px] text-on-surface">البريد الإلكتروني</div>
                            <div class="text-xs font-bold text-on-background truncate">Samiraalyaseen20@gmail.com</div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-2xl border border-primary/10 shadow-sm flex items-center gap-4">
                        <span class="material-symbols-outlined text-primary bg-primary/10 p-3 rounded-xl">location_on</span>
                        <div>
                            <div class="text-[10px] text-on-surface">الموقع</div>
                            <div class="text-sm font-bold text-on-background">كربلاء، حي العباس</div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <!-- Footer Copyright -->
    <footer class="py-8 bg-white border-t border-primary/5 text-center text-xs text-on-surface/60">
        <div class="max-w-7xl mx-auto px-6 flex flex-col sm:flex-row justify-between items-center gap-4">
            <div>جميع الحقوق محفوظة للمهندسة سميرة علي ياسين &copy; ٢٠٢٦.</div>
            <div class="flex gap-6">
                <a href="#" class="hover:text-primary transition-colors">سياسة الخصوصية</a>
                <a href="#" class="hover:text-primary transition-colors">الشروط والأحكام</a>
            </div>
        </div>
    </footer>

</body>
</html>
