<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\services::create([
            'title' => 'طب الأطفال',
            'description' => 'الفحوصات الروتينية والنمو',
            'details' => 'علاج الأمراض الموسمية وإلتهابات الأطفال، التطعيمات الأساسية',
            'icon' => 'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNkYPhfDwAChwGA60e6kgAAAABJRU5ErkJggg==',
        ]);

        \App\Models\services::create([
            'title' => 'طب العظام',
            'description' => 'علاج الانزلاقات والغضاريف',
            'details' => 'إصابات الملاعب والآلام المزمنة',
            'icon' => 'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNkYPhfDwAChwGA60e6kgAAAABJRU5ErkJggg==',
        ]);

        \App\Models\services::create([
            'title' => 'طب الأسنان',
            'description' => 'علاج الأسنان واللثة',
            'details' => 'زراعة الأسنان وتقويم الأسنان',
            'icon' => 'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNkYPhfDwAChwGA60e6kgAAAABJRU5ErkJggg==',
        ]);
    }
}
