<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\News::create([
            'title' => 'افتتاح قسم الأشعة الجديد',
            'content' => '🏥 افتتاح قسم الأشعة والتصوير الطبي الحديث في عيادة الشفاء – صنعاء 📅 التاريخ: 10 يوليو 2025 📍 الموقع: صنعاء تعلن عيادة الشفاء الطبية عن افتتاح قسم الأشعة والتصوير الطبي الحديث، ضمن جهودها المستمرة لتوسيع نطاق خدماتها وتحسين جودة الرعاية الصحية المقدمة للمرضى. 🔬 الأجهزة المتوفرة: يضم القسم أحدث أجهزة التصوير الطبي، ومنها: الأشعة السينية الرقمية (Digital X-Ray) الموجات فوق الصوتية (Ultrasound) أشعة الأسنان البانورامية ✅ مميزات القسم: تقارير دقيقة وسريعة خصوصية عالية للمرضى ارتباط مباشر مع الطبيب المعالج ضمن نظام إلكتروني موحد تجهيز وفق أعلى معايير السلامة والدقة إشراف مباشر من فريق مؤهل من فنيي الأشعة المتخصصين :تصريح الإدارة الطبية :قال الدكتور أحمد العزي، المدير الطبي للعيادة "نهدف من خلال هذا التوسع إلى تقديم خدمات تشخيصية متقدمة تساعد في الكشف المبكر والدقيق عن مختلف الحالات المرضية، بما يسهم في تحسين نتائج العلاج وتقليل مدة التعافي." 🕘 أوقات العمل: 📆 من السبت إلى الخميس 🕗 من الساعة 8 صباحًا حتى 9 مساءً',
            'summary' => 'تم تدشين قسم الأشعة الجديد بأحدث الأجهزة لتوفير خدمة دقيقة وسريعة للمراجعين.',
            'image' => 'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNkYPhfDwAChwGA60e6kgAAAABJRU5ErkJggg==',
            'published_at' => now(),
        ]);

        \App\Models\News::create([
            'title' => 'حملة تطعيم مجانية',
            'content' => 'نعلن عن حملة تطعيم مجانية للأطفال ضد الأمراض الموسمية.',
            'summary' => 'حملة تطعيم مجانية للأطفال.',
            'image' => 'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNkYPhfDwAChwGA60e6kgAAAABJRU5ErkJggg==',
            'published_at' => now()->subDays(1),
        ]);

        \App\Models\News::create([
            'title' => 'ورشة عمل عن صحة الفم',
            'content' => 'ورشة عمل مجانية عن أهمية صحة الفم والأسنان.',
            'summary' => 'ورشة عمل عن صحة الفم.',
            'image' => 'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNkYPhfDwAChwGA60e6kgAAAABJRU5ErkJggg==',
            'published_at' => now()->subDays(2),
        ]);
    }
}
