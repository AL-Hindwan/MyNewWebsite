<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\about_us::create([
            'content' => 'عيادة الشفاء الطبية هي مركز صحي حديث يهدف إلى توفير رعاية طبية متكاملة وفق أعلى المعايير، وبأيدي كادر طبي متميز. نلتزم بتقديم تجربة علاجية مريحة وآمنة، في بيئة ترحب بالجميع وتضع صحة المريض في المقام الأول. نعمل على تعزيز الثقة بين الطبيب والمراجع، ونسعى لبناء علاقة صحية مستمرة تقوم على الاحترام والاهتمام.',
            'image' => 'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNkYPhfDwAChwGA60e6kgAAAABJRU5ErkJggg==',
        ]);
    }
}
