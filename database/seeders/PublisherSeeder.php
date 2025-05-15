<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publishers = [
            'Rockstar Games',

            'Sony Interactive Entertainment',

            'Sony Interactive Entertainment',
            '505 Games',
            'Square Enix',

            'Paradox Interactive',

            'Sony Interactive Entertainment',
            'Quantic Dream',
            'Bethesda Softworks',

            'Sony Computer Entertainment',
            'Quantic Dream',
            'Sony Interactive Entertainment',

            'Warner Bros. Interactive Entertainment',

            'Bethesda Softworks',

            'Sony Interactive Entertainment',

            'Devolver Digital',

            'Hooded Horse',

            'Hinterland Studio',

            'Facepunch Studios',

            'Alawar Premium',

            'Warner Bros. Interactive Entertainment',
            'Feral Interactive',
        ];

        $publishers = array_unique($publishers);
        foreach ($publishers as $publisherName) {
            Publisher::create([
                'name' => $publisherName,
            ]);
        }
    }
}
