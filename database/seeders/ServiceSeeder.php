<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $iconBasePath = '/images/services/';
        $services = [
            ['name' => 'Steam', 'path_to_icon' => 'steam.png'],
            ['name' => 'EA App', 'path_to_icon' => 'ea_app.png'],
            ['name' => 'Epic Games', 'path_to_icon' => 'epic_games.png'],
            ['name' => 'GOG', 'path_to_icon' => 'gog.png'],
            ['name' => 'PlayStation', 'path_to_icon' => 'playstation.png'],
            ['name' => 'Xbox', 'path_to_icon' => 'xbox.png'],
            ['name' => 'Ubisoft', 'path_to_icon' => 'ubisoft.png'],
            ['name' => 'Rockstar', 'path_to_icon' => 'rockstar.png'],
            ['name' => 'MS Store', 'path_to_icon' => 'microsoft_store.png'],
        ];

        foreach ($services as $serviceData) {
            Service::create([
                'name' => $serviceData['name'],
                'path_to_icon' => '/images/services/' . $serviceData['path_to_icon'],
            ]);
        }
    }
}
