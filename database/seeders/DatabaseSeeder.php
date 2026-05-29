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
    }
}
