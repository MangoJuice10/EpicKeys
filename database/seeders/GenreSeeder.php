<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            [
                'name' => ['ru' => 'Экшен', 'en' => 'Action'],
                'description' => [
                    'ru' => 'Игры, основанные на быстрых физических действиях и реакциях игрока.',
                    'en' => 'Games based on fast physical actions and player reactions.'
                ]
            ],
            [
                'name' => ['ru' => 'Шутеры', 'en' => 'Shooters'],
                'description' => [
                    'ru' => 'Игры, где основной механикой является стрельба, часто от первого или третьего лица.',
                    'en' => 'Games where the main mechanic is shooting, often in first or third person.'
                ]
            ],
            [
                'name' => ['ru' => 'Инди', 'en' => 'Indie'],
                'description' => [
                    'ru' => 'Игры, разработанные независимыми студиями, часто с уникальным стилем и геймплеем.',
                    'en' => 'Games developed by independent studios, often with a unique style and gameplay.'
                ]
            ],
            [
                'name' => ['ru' => 'Приключения', 'en' => 'Adventure'],
                'description' => [
                    'ru' => 'Игры с акцентом на исследование, решение головоломок и развитие сюжета.',
                    'en' => 'Games with an emphasis on exploration, puzzle solving, and plot development.'
                ]
            ],
            [
                'name' => ['ru' => 'Фантастика', 'en' => 'Sci-Fi'],
                'description' => [
                    'ru' => 'Игры, действие которых происходит в научно-фантастических мирах с передовыми технологиями.',
                    'en' => 'Games set in science fiction worlds with advanced technologies.'
                ]
            ],
            [
                'name' => ['ru' => 'Фэнтези', 'en' => 'Fantasy'],
                'description' => [
                    'ru' => 'Игры, основанные на мифологии, магии и вымышленных мирах с волшебными существами.',
                    'en' => 'Games based on mythology, magic, and fictional worlds with magical creatures.'
                ]
            ],
            [
                'name' => ['ru' => 'Стратегии', 'en' => 'Strategy'],
                'description' => [
                    'ru' => 'Игры, требующие планирования, тактического мышления и управления ресурсами.',
                    'en' => 'Games that require planning, tactical thinking, and resource management.'
                ]
            ],
            [
                'name' => ['ru' => 'Головоломки', 'en' => 'Puzzle'],
                'description' => [
                    'ru' => 'Игры, сосредоточенные на решении логических задач и загадок.',
                    'en' => 'Games focused on solving logical tasks and riddles.'
                ]
            ],
            [
                'name' => ['ru' => 'MMO', 'en' => 'MMO'],
                'description' => [
                    'ru' => 'Массовые многопользовательские онлайн-игры, объединяющие большое количество игроков в одном мире.',
                    'en' => 'Massively multiplayer online games that bring together a large number of players in one world.'
                ]
            ],
            [
                'name' => ['ru' => 'MMORPG', 'en' => 'MMORPG'],
                'description' => [
                    'ru' => 'Массовые многопользовательские онлайн-ролевые игры с развитием персонажа и взаимодействием игроков.',
                    'en' => 'Massively multiplayer online role-playing games with character development and player interaction.'
                ]
            ],
            [
                'name' => ['ru' => 'Детективы', 'en' => 'Detective'],
                'description' => [
                    'ru' => 'Игры, где игроку предстоит расследовать преступления, собирать улики и раскрывать тайны.',
                    'en' => 'Games where the player has to investigate crimes, collect evidence, and uncover secrets.'
                ]
            ],
            [
                'name' => ['ru' => 'Ролевые игры', 'en' => 'RPG'],
                'description' => [
                    'ru' => 'Игры с развитием персонажа, выполнением квестов и погружением в игровой мир.',
                    'en' => 'Games with character development, quest completion, and immersion in the game world.'
                ]
            ],
            [
                'name' => ['ru' => 'Аниме', 'en' => 'Anime'],
                'description' => [
                    'ru' => 'Игры, выполненные в стилистике японской анимации.',
                    'en' => 'Games made in the style of Japanese animation.'
                ]
            ],
            [
                'name' => ['ru' => 'Хоррор', 'en' => 'Horror'],
                'description' => [
                    'ru' => 'Игры, направленные на создание атмосферы страха и напряжения.',
                    'en' => 'Games aimed at creating an atmosphere of fear and tension.'
                ]
            ],
            [
                'name' => ['ru' => 'Симуляторы', 'en' => 'Simulators'],
                'description' => [
                    'ru' => 'Игры, имитирующие реальные или вымышленные процессы и действия.',
                    'en' => 'Games that simulate real or fictional processes and actions.'
                ]
            ],
            [
                'name' => ['ru' => 'Выживание', 'en' => 'Survival'],
                'description' => [
                    'ru' => 'Игры, где основная цель - остаться в живых в суровых условиях, собирая ресурсы и избегая опасностей.',
                    'en' => 'Games where the main goal is to stay alive in harsh conditions by gathering resources and avoiding dangers.'
                ]
            ],
            [
                'name' => ['ru' => 'Открытый мир', 'en' => 'Open World'],
                'description' => [
                    'ru' => 'Игры с большим, свободно исследуемым игровым миром.',
                    'en' => 'Games with a large, freely explorable game world.'
                ]
            ],
            [
                'name' => ['ru' => 'Казуальные игры', 'en' => 'Casual Games'],
                'description' => [
                    'ru' => 'Простые в освоении игры, предназначенные для широкой аудитории.',
                    'en' => 'Easy-to-learn games designed for a wide audience.'
                ]
            ],
            [
                'name' => ['ru' => 'Гонки', 'en' => 'Racing'],
                'description' => [
                    'ru' => 'Игры, посвященные соревнованиям на различных транспортных средствах.',
                    'en' => 'Games dedicated to competitions on various vehicles.'
                ]
            ],
            [
                'name' => ['ru' => 'Карточные игры', 'en' => 'Card Games'],
                'description' => [
                    'ru' => 'Игры, основанные на использовании игровых карт.',
                    'en' => 'Games based on the use of playing cards.'
                ]
            ],
            [
                'name' => ['ru' => 'Спортивные игры', 'en' => 'Sports Games'],
                'description' => [
                    'ru' => 'Игры, имитирующие различные виды спорта.',
                    'en' => 'Games that simulate various sports.'
                ]
            ],
        ];

        foreach ($genres as $genreData) {
            Genre::create([
                'name' => $genreData['name'],
                'description' => $genreData['description'],
            ]);
        }
    }
}
