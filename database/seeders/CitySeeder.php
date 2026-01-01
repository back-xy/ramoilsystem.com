<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            'هەولێر',      // Erbil
            'سلێمانی',     // Sulaymaniyah
            'دهۆک',        // Duhok
            'هەڵەبجە',     // Halabja
            'کەرکووک',     // Kirkuk
            'زاخۆ',        // Zakho
            'کۆیە',        // Koya
            'ڕانیە',       // Rania
            'ئاکرێ',       // Akre
            'سۆران',       // Soran
            'شەقڵاوە',     // Shaqlawa
            'خانەقین',     // Khanaqin
            'چەمچەماڵ',    // Chamchamal
            'پێنجوێن',     // Penjwin
            'قەڵادزێ',     // Qaladze
            'کفری',        // Kifri
            'مەخموور',     // Makhmur
            'سنگەسەر',     // Sinjar
            'شێخان',       // Shekhan
            'عەمێدی',      // Amedi
        ];

        foreach ($cities as $city) {
            City::create(['name' => $city]);
        }
    }
}
