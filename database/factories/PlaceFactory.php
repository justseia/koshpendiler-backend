<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $filter = [
            'filter' => [
                'Mountaining area',
                'Fjord area',
                'City',
                'Forest area',
                'Lake area',
                'Coastal area',
            ]
        ];
        return [
            'name' => 'The pristine nature of Kok-Zhailau',
            'image' => 'https://loremflickr.com/340/390',
            'location_short' => 'Eastern Kazakhstan',
            'body' => 'Kok-Zhailau is a tract on the territory of the Ile-Alatau National Park. Kok-Zhailau will appeal to lovers of hiking. Difficulty level: medium. To hike in the mountains, you need to arm yourself with alpenstocks. Going a little further, you can climb to the top called "Three Brothers" or "Kumbel" peak.',
            'duration' => '10 - 12 h',
            'distance' => '28 km',
            'level' => 'Expert',
            'cost' => 1000,
            'to_destination' => 'Depends on the rate of ascent. On average - 2.5 - 3 hours',
            'with_you' => 'Trekking shoes, insect repellant spray, hat, sunscreen and goggles, water, snack',
            'location' => '10 km from the city of Almaty. Height - 1740 m above sea level',
            'filter' => json_encode($filter),
        ];
    }
}
