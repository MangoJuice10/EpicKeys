<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            ['ru' => 'Весь мир', 'en' => 'Worldwide'],
            ['ru' => 'Европейский Союз', 'en' => 'European Union'],
            ['ru' => 'Содружество Независимых Государств', 'en' => 'Commonwealth of Independent States'],
            ['ru' => 'СНГ кроме России', 'en' => 'CIS excluding Russia'],
            ['ru' => 'Россия', 'en' => 'Russia'],
            ['ru' => 'Беларусь', 'en' => 'Belarus'],
            ['ru' => 'Казахстан', 'en' => 'Kazakhstan'],
            ['ru' => 'Украина', 'en' => 'Ukraine'],
            ['ru' => 'Турция', 'en' => 'Turkey'],
            ['ru' => 'США', 'en' => 'USA'],
            ['ru' => 'Великобритания', 'en' => 'United Kingdom'],
            ['ru' => 'Германия', 'en' => 'Germany'],
            ['ru' => 'Франция', 'en' => 'France'],
            ['ru' => 'Италия', 'en' => 'Italy'],
            ['ru' => 'Испания', 'en' => 'Spain'],
            ['ru' => 'Польша', 'en' => 'Poland'],
            ['ru' => 'Аргентина', 'en' => 'Argentina'],
            ['ru' => 'Бразилия', 'en' => 'Brazil'],
            ['ru' => 'Индия', 'en' => 'India'],
            ['ru' => 'Китай', 'en' => 'China'],
            ['ru' => 'Япония', 'en' => 'Japan'],
            ['ru' => 'Южная Корея', 'en' => 'South Korea'],
            ['ru' => 'Австралия', 'en' => 'Australia'],
            ['ru' => 'Новая Зеландия', 'en' => 'New Zealand'],
            ['ru' => 'Южная Африка', 'en' => 'South Africa'],
            ['ru' => 'Северная Америка', 'en' => 'North America'],
            ['ru' => 'Латинская Америка', 'en' => 'Latin America'],
            ['ru' => 'Азия', 'en' => 'Asia'],
            ['ru' => 'Ближний Восток', 'en' => 'Middle East'],
            ['ru' => 'Африка', 'en' => 'Africa'],
            ['ru' => 'Весь мир кроме Европейского Союза', 'en' => 'Worldwide excluding European Union'],
            ['ru' => 'Весь мир кроме США', 'en' => 'Worldwide excluding USA'],
            ['ru' => 'Весь мир кроме Японии', 'en' => 'Worldwide excluding Japan'],
            ['ru' => 'Весь мир кроме Китая', 'en' => 'Worldwide excluding China'],
            ['ru' => 'Весь мир кроме России', 'en' => 'Worldwide excluding Russia'],
            ['ru' => 'Европейский Союз кроме Германии', 'en' => 'European Union excluding Germany'],
            ['ru' => 'Европейский Союз кроме Франции', 'en' => 'European Union excluding France'],
            ['ru' => 'Европейская экономическая зона', 'en' => 'European Economic Area'],
            ['ru' => 'Балтийские страны', 'en' => 'Baltic States'],
            ['ru' => 'Скандинавия', 'en' => 'Scandinavia'],
            ['ru' => 'Восточная Европа', 'en' => 'Eastern Europe'],
            ['ru' => 'Западная Европа', 'en' => 'Western Europe'],
            ['ru' => 'Центральная Европа', 'en' => 'Central Europe'],
            ['ru' => 'Юго-Восточная Азия', 'en' => 'Southeast Asia'],
            ['ru' => 'Арабские страны', 'en' => 'Arab Countries'],
            ['ru' => 'Страны Персидского залива', 'en' => 'Gulf Countries'],
            ['ru' => 'Андские страны', 'en' => 'Andean Countries'],
            ['ru' => 'Карибский регион', 'en' => 'Caribbean Region'],
            ['ru' => 'Океания', 'en' => 'Oceania'],
            ['ru' => 'Страны бывшей Югославии', 'en' => 'Former Yugoslavian Countries'],
        ];

        foreach ($regions as $regionName) {
            Region::create([
                'name' => $regionName,
            ]);
        }
    }
}
