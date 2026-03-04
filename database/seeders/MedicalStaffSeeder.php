<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicalStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\medical_staff::create([
            'name' => 'د. عادل مطهر',
            'specialty' => 'أخصائي العظام والمفاصل',
            'bio' => 'علاج الانزلاقات والغضاريف، إصابات الملاعب والآلام المزمنة',
            'image' => 'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNkYPhfDwAChwGA60e6kgAAAABJRU5ErkJggg==',
        ]);

        \App\Models\medical_staff::create([
            'name' => 'د. فاطمة أحمد',
            'specialty' => 'أخصائية الأطفال',
            'bio' => 'فحوصات النمو والتطعيمات، علاج الأمراض الموسمية',
            'image' => 'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNkYPhfDwAChwGA60e6kgAAAABJRU5ErkJggg==',
        ]);

        \App\Models\medical_staff::create([
            'name' => 'د. محمد علي',
            'specialty' => 'أخصائي الأسنان',
            'bio' => 'زراعة الأسنان وتقويم الأسنان، علاج اللثة',
            'image' => 'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNkYPhfDwAChwGA60e6kgAAAABJRU5ErkJggg==',
        ]);
    }
}
