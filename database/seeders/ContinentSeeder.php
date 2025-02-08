<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $continents = [
            [
                'name' => 'Africa',
                'code' => 'AF',
                'slug' => 'africa',
                'area' => 30370000,
                'latitude' => 7.1881,
                'longitude' => 21.0936,
            ],
            [
                'name' => 'Antarctica',
                'code' => 'AN',
                'slug' => 'antarctica',
                'area' => 14000000,
                'latitude' => -75.250973,
                'longitude' => 123.393364,
            ],
            [
                'name' => 'Asia',
                'code' => 'AS',
                'slug' => 'asia',
                'area' => 44579000,
                'latitude' => 34.0479,
                'longitude' => 100.6197,
            ],
            [
                'name' => 'Europe',
                'code' => 'EU',
                'slug' => 'europe',
                'area' => 10180000,
                'latitude' => 54.5260,
                'longitude' => 15.2551,
            ],
            [
                'name' => 'North America',
                'code' => 'NA',
                'slug' => 'north-america',
                'area' => 24709000,
                'latitude' => 54.5260,
                'longitude' => -105.2551,
            ],
            [
                'name' => 'Oceania',
                'code' => 'OC',
                'slug' => 'oceania',
                'area' => 8560000,
                'latitude' => -25.2744,
                'longitude' => 133.7751,
            ],
            [
                'name' => 'South America',
                'code' => 'SA',
                'slug' => 'south-america',
                'area' => 17840000,
                'latitude' => -8.7832,
                'longitude' => -55.4915,
            ],
        ];

        foreach ($continents as $continent) {
            \App\Models\Continent::create($continent);
        }
    }
}
