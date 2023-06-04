<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
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
                'Listed in the Red Book',
                'In reserves',
                'Brought Animals',
                'Marine life',
                'Reptiles and snakes',
                'Amphibians',
                'Birds and eagles',
                'Mammals',
            ]
        ];
        $images = [
            'images' => [
                'https://loremflickr.com/390/850',
                'https://loremflickr.com/380/840',
                'https://loremflickr.com/385/845',
            ],
        ];
        return [
            'name' => fake()->name(),
            'images' => json_encode($images),
            'filter' => json_encode($filter),
        ];
    }
}
