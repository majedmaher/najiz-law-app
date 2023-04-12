<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'title' => [
                'ar' => 'المطالبات المالية الدولية',
                'en' => 'International financial claims'
            ],
            'image' => 'assets/images/earth-globe-with-continents-maps.webp'
        ]);
        Service::create([
            'title' => [
                'ar' => 'قضايا الفوركس',
                'en' => 'Forex issues'
            ],
            'image' => 'assets/images/earth-globe-with-continents-maps.webp'
        ]);
        Service::create([
            'title' => [
                'ar' => 'تتبع الأصول واستردادها',
                'en' => 'Asset tracking and recovery'
            ],
            'image' => 'assets/images/earth-globe-with-continents-maps.webp'
        ]);
        Service::create([
            'title' => [
                'ar' => 'الاستشارات القانونية',
                'en' => 'Legal advice'
            ],
            'image' => 'assets/images/earth-globe-with-continents-maps.webp'
        ]);
        Service::create([
            'title' => [
                'ar' => 'تحصيل التعويضات',
                'en' => 'Collecting compensation'
            ],
            'image' => 'assets/images/earth-globe-with-continents-maps.webp'
        ]);
        Service::create([
            'title' => [
                'ar' => 'التحكيم الدولي',
                'en' => 'International Arbitration'
            ],
            'image' => 'assets/images/earth-globe-with-continents-maps.webp'
        ]);
    }
}
