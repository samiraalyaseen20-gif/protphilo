<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin user
        User::updateOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'سميرة علي',
                'password' => \Illuminate\Support\Facades\Hash::make('adminpassword123'),
            ]
        );

        // Default Projects
        \App\Models\Project::updateOrCreate(
            ['title' => 'برنامج الإحصاء الطبي للعيون'],
            [
                'category' => 'أنظمة إحصائية طبية',
                'description' => 'نظام إحصائي متكامل لمتابعة وتنظيم إحصاءات الحقن، الأطباء، المرضى، وجدولة وتنسيق مواعيد الزيارات بمركز السيدة زينب التخصصي للعيون بدقة عالية.',
                'year' => '٢٠٢٥ م',
                'image' => 'assets/Screenshot 2026-05-26 080329.png',
            ]
        );

        \App\Models\Project::updateOrCreate(
            ['title' => 'نظام إدارة مخازن وصرف العدسات الطبية'],
            [
                'category' => 'إدارة مخازن وقواعد بيانات',
                'description' => 'نظام محوسب للرقابة الذكية على مخزون المستلزمات الطبية وإصدار وتتبع العدسات المصروفة للمرضى بمركز العيون كربلاء.',
                'year' => '٢٠٢٤ م',
                'image' => 'assets/Screenshot 2026-05-26 080212.png',
            ]
        );

        // Default Resume Settings
        \App\Models\ResumeSetting::updateOrCreate(
            ['id' => 1],
            [
                'degree' => 'بكلوريوس هندسة أجهزة طبية',
                'university' => 'كلية الحسين الجامعة',
                'graduation_year' => '٢٠٢١ - ٢٠٢٢ م',
                'languages' => "اللغة العربية (اللغة الأم)\nاللغة الإنجليزية (مستوى متقدم)",
                'skills' => "تطوير وبرمجة الأنظمة (HTML, CSS, C#)\nإدارة قواعد البيانات الطبية بدقة عالية\nتوظيف تقنيات الذكاء الاصطناعي في الأرشفة\nإجادة كاملة لبرامج MS Office (Word, Excel, PPT)",
            ]
        );

        // Default Experiences
        $experiences = [
            [
                'year_range' => '٢٠٢٥ - حتى الآن',
                'title' => 'مسؤولة الاحصاء الطبي',
                'company' => 'مركز السيدة زينب (ع) التخصصي للعيون',
                'icon' => 'clinical_suite',
                'responsibilities' => "تصميم وتطوير أنظمة إحصائية لمتابعة أعداد مراجعي المرضى لكل طبيب.\nإعداد تقارير تحليلية دورية لقياس حجم العمل ومؤشرات أداء الأطباء.\nإنشاء نظام إحصائي للمختبر يسجل عدد المراجعين وأنواع التحاليل المنجزة.\nتطوير نظام لإدارة العمليات الجراحية، ونظام محوسب لإدارة المخزن وصرف العدسات الطبية.",
                'sort_order' => 1
            ],
            [
                'year_range' => '٢٠٢٤',
                'title' => 'مسؤولة حاسبة الحجوزات ومطورة أنظمة إدارية',
                'company' => 'مركز السيدة زينب (ع) التخصصي للعيون',
                'icon' => 'computer',
                'responsibilities' => "إدارة وتنظيم جدول مواعيد حقن العين لمرضى العيون واستكمال استمارات اللجان.\nتطوير نظام إلكتروني لإدارة الحجوزات والبيانات الطبية لتقليل الأخطاء الإدارية وأتمتتها.\nاستخراج تقارير إحصائية شهرية وسنوية شاملة لحالات الحقن والمراجعات.\nتمت الترقية للإشراف الكامل على وحدة الحقن وإدارة كادر العمل اليومي.",
                'sort_order' => 2
            ],
            [
                'year_range' => '٢٠٢٤',
                'title' => 'مهندسة اجهزة طبية',
                'company' => 'دائرة صحة كربلاء - قسم المشاريع والخدمات الهندسية',
                'icon' => 'construction',
                'responsibilities' => "إعداد وصياغة الكتب والمخاطبات الرسمية الموجهة للدوائر الطبية والمؤسسات ذات العلاقة.\nتنظيم كتب الاعتذار والموافقات الرسمية الخاصة بتجهيز الأجهزة والمعدات الطبية بكربلاء.\nمتابعة الموافقات الرسمية والمطابقة الفنية والتقنية للمواصفات القياسية.",
                'sort_order' => 3
            ],
            [
                'year_range' => '٢٠٢٢ - ٢٠٢٤',
                'title' => 'مصممة كرافيك',
                'company' => 'العتبة الحسينية المقدسة - قسم رعاية الطفولة (مركز الحوراء زينب)',
                'icon' => 'palette',
                'responsibilities' => "تطوير الهوية البصرية للبرامج والأنشطة الثقافية وتصميم منشورات وكتب الشهداء.\nإعداد وتجهيز المواد الدعائية والبصرية المطبوعة والرقمية للفعاليات والمهرجانات.",
                'sort_order' => 4
            ]
        ];

        foreach ($experiences as $exp) {
            \App\Models\Experience::updateOrCreate(
                ['title' => $exp['title'], 'company' => $exp['company']],
                $exp
            );
        }
    }
}
