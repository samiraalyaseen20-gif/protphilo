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

                <!-- Violet bottom wave panel -->
                <div class="hero-bottom-block p-10 md:p-12 shadow-2xl reveal-init">
                    <div class="grid md:grid-cols-3 gap-8 items-center text-right">
                        
                        <!-- Column 1: Custom Workflow -->
                        <div class="hero-bottom-block-inner space-y-3 pl-6">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-white text-3xl font-bold bg-white/10 p-2 rounded-xl">checklist</span>
                                <h3 class="text-lg font-bold">تطوير الأنظمة الإدارية</h3>
                            </div>
                            <p class="text-xs text-white/70 leading-relaxed">تصميم وبرمجة أنظمة متكاملة ومحوسبة لإدارة العيادات الطبية وحجوزات المرضى باستخدام لغات البرمجة (C#, HTML, CSS) وتقنيات الذكاء الاصطناعي.</p>
                        </div>

                        <!-- Column 2: Multi-team projects -->
                        <div class="hero-bottom-block-inner space-y-3 pl-6">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-white text-3xl font-bold bg-white/10 p-2 rounded-xl">analytics</span>
                                <h3 class="text-lg font-bold">أرشفة وإحصاء طبي</h3>
                            </div>
                            <p class="text-xs text-white/70 leading-relaxed">إعداد تقارير إحصائية دورية ومؤشرات قياس الأداء للأطباء وعمليات المختبر الجراحية لتوفير قاعدة بيانات آمنة لدعم اتخاذ القرار.</p>
                        </div>

                        <!-- Column 3: Stats downloads -->
                        <div class="flex flex-col items-center md:items-start space-y-3 pr-6">
                            <div class="avatar-stack">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=100" alt="avatar">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=100" alt="avatar">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=100" alt="avatar">
                            </div>
                            <div class="text-sm font-bold text-white text-center md:text-right">تنظيم حجوزات وإحصاء لأكثر من <br><span class="text-secondary font-black">٥٠ ألف مريض بكربلاء 🏆</span></div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- Stats & Checklist features Section -->
        <section class="py-32 relative bg-surface/50 text-right">
            <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
                
                <!-- Right column: Checklist & stats visualization -->
                <div class="grid grid-cols-2 gap-6 relative reveal-init">
                    <!-- Widget 1: Checklist -->
                    <div class="mutmiz-card p-6 rounded-3xl space-y-4">
                        <div class="flex justify-between items-center border-b border-primary/5 pb-2">
                            <span class="text-xs font-black">قائمة المتابعة</span>
                            <span class="text-[9px] text-primary font-bold">+ إضافة</span>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded border border-primary/20 flex items-center justify-center"><span class="w-1.5 h-1.5 rounded-sm bg-primary"></span></span>
                                <span class="text-[10px] text-on-surface">أتمتة نظام حقن العين للمرضى بالكامل</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded border border-primary/20 flex items-center justify-center"><span class="w-1.5 h-1.5 rounded-sm bg-primary"></span></span>
                                <span class="text-[10px] text-on-surface">تطوير برنامج إدارة المخزن وصرف العدسات</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded border border-primary/20 flex items-center justify-center"><span class="w-1.5 h-1.5 rounded-sm bg-primary"></span></span>
                                <span class="text-[10px] text-on-surface">تحديث برنامج إدارة المختبر وتوثيق البيانات</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded border border-primary/20 flex items-center justify-center"><span class="w-1.5 h-1.5 rounded-sm bg-primary"></span></span>
                                <span class="text-[10px] text-on-surface">متابعة برنامج إدارة حجوزات المرضى</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded border border-primary/20 flex items-center justify-center"><span class="w-1.5 h-1.5 rounded-sm bg-primary"></span></span>
                                <span class="text-[10px] text-on-surface">استخراج التقارير الإحصائية وأرشفة البيانات</span>
                            </div>
                        </div>
                    </div>

                    <!-- Widget 2: Bar Chart -->
                    <div class="mutmiz-card p-6 rounded-3xl flex flex-col justify-between">
                        <span class="text-xs font-black">حجم العمل الأسبوعي</span>
                        <div class="flex items-end justify-between h-24 pt-4">
                            <div class="w-2.5 bg-primary/20 h-12 rounded-full overflow-hidden"><div class="bg-primary w-full h-[60%] rounded-full"></div></div>
                            <div class="w-2.5 bg-primary/20 h-16 rounded-full overflow-hidden"><div class="bg-secondary w-full h-[80%] rounded-full"></div></div>
                            <div class="w-2.5 bg-primary/20 h-8 rounded-full overflow-hidden"><div class="bg-primary w-full h-[40%] rounded-full"></div></div>
                            <div class="w-2.5 bg-primary/20 h-20 rounded-full overflow-hidden"><div class="bg-secondary w-full h-[95%] rounded-full"></div></div>
                            <div class="w-2.5 bg-primary/20 h-14 rounded-full overflow-hidden"><div class="bg-primary w-full h-[70%] rounded-full"></div></div>
                        </div>
                    </div>

                    <!-- Widget 3: Overlay avatar stack bottom -->
                    <div class="col-span-2 mutmiz-card p-4 rounded-2xl flex items-center justify-between">
                        <div class="avatar-stack">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=100" alt="avatar">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=100" alt="avatar">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=100" alt="avatar">
                        </div>
                        <span class="text-xs font-black text-primary">تنظيم ملفات المرضى إلكترونياً</span>
                    </div>
                </div>

                <!-- Left column: Numerical Stats & Feature List -->
                <div class="space-y-12 reveal-init">
                    
                    <!-- Stats count row -->
                    <div class="grid grid-cols-2 gap-8 border-b border-primary/10 pb-8">
                        <div>
                            <div class="text-5xl font-black text-primary mb-1">٥٠ ألف+</div>
                            <div class="text-xs text-on-surface">مرضى مسجلين بالنظام</div>
                        </div>
                        <div>
                            <div class="text-5xl font-black text-[#ff4d80] mb-1">١,٢٠٠+</div>
                            <div class="text-xs text-on-surface">إجمالي العمليات الجراحية المؤرشفة</div>
                        </div>
                    </div>

                    <!-- Feature details -->
                    <div class="space-y-8">
                        
                        <!-- Feature 1 -->
                        <div class="flex gap-4">
                            <span class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center text-primary text-xs font-bold mt-1">✔</span>
                            <div>
                                <h3 class="text-lg font-bold text-on-background mb-1">تنظيم حجوزات وحدة حقن العين</h3>
                                <p class="text-xs text-on-surface leading-relaxed">إدارة الحجوزات، مواعيد حقن العين لمرضى العيون، واستكمال استمارات اللجنة الطبية بمركز السيدة زينب التخصصي للعيون.</p>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="flex gap-4">
                            <span class="w-6 h-6 rounded-full bg-secondary/10 flex items-center justify-center text-secondary text-xs font-bold mt-1">✔</span>
                            <div>
                                <h3 class="text-lg font-bold text-on-background mb-1">إدارة مخازن وصرف العدسات الطبية</h3>
                                <p class="text-xs text-on-surface leading-relaxed">إنشاء نظام محوسب للرقابة على المخزون وإصدار وصرف العدسات الطبية للمرضى بدقة عالية وسرعة فائقة.</p>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="flex gap-4">
                            <span class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center text-primary text-xs font-bold mt-1">✔</span>
                            <div>
                                <h3 class="text-lg font-bold text-on-background mb-1">إعداد مؤشرات أداء الكادر الطبي</h3>
                                <p class="text-xs text-on-surface leading-relaxed">تطوير نظام إحصائي متكامل لتسجيل نوع العمليات، والقطاع، وتفاصيل الأداء الجراحي الخاص بكل طبيب بالمستشفى.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- Feature List with details section -->
        <section class="py-32 relative text-right">
            <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
                
                <!-- Left column: list of features -->
                <div class="space-y-12 reveal-init">
                    <h2 class="text-4xl lg:text-5xl font-black text-on-background font-display leading-tight">
                        مجموعة حلول ذكية <span class="text-primary">شاملة</span> <br>
                        لأتمتة وإحصاء العمليات والعيادات
                    </h2>
                    
                    <div class="space-y-8">
                        <div class="flex gap-4 items-start">
                            <span class="material-symbols-outlined text-primary bg-primary/10 p-2.5 rounded-2xl">sync</span>
                            <div>
                                <h3 class="text-lg font-bold">أنظمة إحصائية متطورة للمختبر</h3>
                                <p class="text-xs text-on-surface">تصميم وتطوير نظام إحصائي خاص بالمختبرات الطبية، يسجل أعداد المراجعين وأنواع التحاليل المنجزة لدعم الإدارة.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start">
                            <span class="material-symbols-outlined text-secondary bg-secondary/10 p-2.5 rounded-2xl">attach_file</span>
                            <div>
                                <h3 class="text-lg font-bold">تنظيم المخاطبات والكتب الرسمية</h3>
                                <p class="text-xs text-on-surface">إعداد وصياغة الكتب الرسمية والموافقات والاعتذارات الخاصة بتجهيز الأجهزة الطبية والمطابقة للأنظمة المعتمدة بدائرة الصحة.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right column: Re-arranged Grid layout for Task Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 items-stretch reveal-init">
                    
                    <!-- Card 1: Create Task -->
                    <div class="glass-panel glowing-card p-6 rounded-2xl shadow-xl border border-primary/10 flex flex-col justify-between">
                        <div class="flex justify-between items-center text-[10px] text-on-surface mb-2">
                            <span class="font-bold">تقرير إحصائي</span>
                            <span class="text-primary">مركز العيون</span>
                        </div>
                        <div class="text-xs font-black mb-1">التقرير السنوي لعام ٢٠٢٥</div>
                        <div class="text-[9px] text-on-surface">أتمتة كاملة للبيانات</div>
                    </div>

                    <!-- Card 2: Project Overview -->
                    <div class="glass-panel glowing-card p-6 rounded-2xl shadow-xl border border-primary/10 bg-white">
                        <div class="text-xs font-black text-on-background mb-2">أرشفة العمليات الجراحية</div>
                        <p class="text-[10px] text-on-surface leading-relaxed">نظام لتسجيل نوع العملية الجراحية، القطاع، عدد العمليات لكل طبيب، وتفاصيل أداء الجراحين لدعم اتخاذ القرار.</p>
                    </div>

                    <!-- Card 3: Total Working Hours -->
                    <div class="sm:col-span-2 glass-panel glowing-card px-6 py-4 rounded-2xl shadow-md border border-primary/10 flex items-center justify-between">
                        <div class="text-xs font-black text-primary">ساعات أتمتة الأنظمة الطبية</div>
                        <div class="text-sm font-bold text-on-background">64:52:00 <span class="text-[9px] text-[#ff4d80]">● أداء مستقر</span></div>
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
                                <li>إدارة وتنفيذ التصاميم الرسمية للكتب والإصدارات الخاصة بالعتبة المقدسة.</li>
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
        </section>

        <!-- Testimonial Section with Ratings -->
        <section id="testimonials" class="py-32 bg-surface/30 text-right">
            <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
                
                <!-- Right column: ratings and profile widgets -->
                <div class="flex flex-col items-center gap-6 reveal-init">
                    
                    <!-- Executive card -->
                    <div class="mutmiz-card p-6 rounded-3xl flex items-center gap-4 w-72">
                        <div class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center font-bold text-primary text-xl">مركز</div>
                        <div>
                            <div class="flex items-center gap-1 bg-[#f1f0ff] px-2 py-0.5 rounded-full border border-primary/10 text-[9px] font-bold text-primary w-fit mb-1">
                                <span class="material-symbols-outlined text-[9px] font-black">star_rate</span> أداء ممتاز
                            </div>
                            <h4 class="font-bold text-xs text-on-background">مركز السيدة زينب (ع) للعيون</h4>
                            <p class="text-[9px] text-on-surface">كربلاء المقدسة</p>
                        </div>
                    </div>

                    <!-- Work stack card -->
                    <div class="mutmiz-card p-5 rounded-2xl w-72 space-y-2">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-secondary flex items-center justify-center"><span class="w-1.5 h-1.5 rounded-full bg-white"></span></span>
                            <span class="text-[10px] text-on-surface">أرشفة أعداد المراجعين للمركز</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-primary flex items-center justify-center"><span class="w-1.5 h-1.5 rounded-full bg-white"></span></span>
                            <span class="text-[10px] text-on-surface">تطوير نظام حجوزات وحدة حقن العين</span>
                        </div>
                    </div>
                </div>

                <!-- Left column: Quotation -->
                <div class="space-y-8 reveal-init">
                    <span class="material-symbols-outlined text-primary text-6xl opacity-30 select-none">format_quote</span>
                    
                    <p class="text-xl font-medium text-on-background leading-relaxed italic">
                        "قدمت المهندسة سميرة علي ياسين عملاً متميزاً في أتمتة حجوزات وحدة حقن العين والعمليات الجراحية وإعداد التقارير الإحصائية الطبية للمركز، مما ساعدنا على تحسين رعاية المرضى وتسهيل الأداء الإداري بكفاءة عالية."
                    </p>
                    
                    <div>
                        <h4 class="font-black text-on-background">إدارة مركز السيدة زينب التخصصي للعيون</h4>
                        <p class="text-xs text-on-surface">كربلاء المقدسة</p>
                    </div>

                    <div class="flex items-center gap-2 border-t border-primary/10 pt-6">
                        <span class="material-symbols-outlined text-green-500 font-black">star_rate</span>
                        <span class="font-black text-sm text-primary">تقييم المركز الطبي</span>
                        <div class="flex gap-0.5 text-green-500">★★★★★</div>
                    </div>
                </div>

            </div>
        </section>

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
                    
                    <!-- Project Card 1 -->
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

                    <!-- Project Card 2 -->
                    <div class="mutmiz-card rounded-[2rem] overflow-hidden reveal-init flex flex-col justify-between">
                        <div class="relative overflow-hidden aspect-video bg-surface">
                            <img src="{{ asset('assets/Screenshot 2026-05-26 080212.png') }}" alt="نظام إدارة مخازن وصرف العدسات الطبية" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                        </div>
                        <div class="p-8 space-y-4">
                            <span class="inline-block px-3.5 py-1.5 rounded-full bg-secondary/10 text-secondary text-xs font-bold glow-pink">إدارة مخازن وقواعد بيانات</span>
                            <h3 class="text-2xl font-black text-on-background leading-snug">نظام إدارة مخازن وصرف العدسات الطبية</h3>
                            <p class="text-xs text-on-surface leading-relaxed">
                                نظام برمجائي محوسب للرقابة الذكية على مخزون المستلزمات الطبية وإصدار وتتبع العدسات المصروفة للمرضى بمركز العيون كربلاء.
                            </p>
                        </div>
                        <div class="px-8 pb-8 pt-4 border-t border-primary/5 flex justify-between items-center text-xs text-on-surface">
                            <span>٢٠٢٤ م</span>
                            <span class="flex items-center gap-1 font-bold text-secondary">المشروع الثاني <span class="material-symbols-outlined text-sm font-bold">arrow_left_alt</span></span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Newsletter & Contact Footer -->
        <section id="contact" class="py-32 bg-surface/50 border-t border-primary/10 text-right">
            <div class="max-w-4xl mx-auto px-6 text-center space-y-12 reveal-init">
                
                <div class="space-y-4">
                    <h2 class="text-4xl lg:text-5xl font-black text-on-background font-display tracking-tight">معلومات الاتصال المباشر</h2>
                    <p class="text-xs text-on-surface max-w-md mx-auto">لأي استشارات حول إدارة وتجهيز الأجهزة الطبية أو أتمتة الأنظمة الإحصائية للمستشفيات، يسعدني تواصلكم.</p>
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
