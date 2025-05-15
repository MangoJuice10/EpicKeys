<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Developer;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $developers = [
            'Rockstar Studios',

            'Naughty Dog',

            'Kojima Productions',

            'Deck Nine',

            'Paradox Development Studio',

            'Quantic Dream',

            'Bethesda Game Studios',
            'Bethesda Game Studios Austin',
            'Bethesda Game Studios Dallas',
            'Bethesda Game Studios Montreal',
            'Quantic Dream',

            'Arrowhead Game Studios',

            'NetherRealm Studios',
            'QLOC',
            'Obsidian Entertainment',

            'Insomniac Games',
            'Nixxes Software',
            'Dennaton Games',

            'Slavic Magic',

            'Hinterland Studio',

            'Facepunch Studios',

            'Warm Lamp Games',

            'Rocksteady Studios',
            'Iron Galaxy Studios',
            'Feral Interactive',
        ];

        $developers = array_unique($developers);
        foreach ($developers as $developerName) {
            Developer::create([
                'name' => $developerName,
            ]);
        }
    }
}
