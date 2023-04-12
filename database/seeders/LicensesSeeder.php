<?php

namespace Database\Seeders;

use App\Models\Licenses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LicensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 4; $i++) {
            Licenses::create([
                'title' => [
                    'ar' => 'منشأة قانونية معتمدة',
                    'en' => 'Certified legal entity'
                ],
                'image' => 'assets/images/logo-1.jpeg'
            ]);
        }
    }
}
