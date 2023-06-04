<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'full_name' => 'Assel Temirkhan',
            'email' => 'assel@gmail.com',
            'phone' => '87005252484',
            'gender' => 'Male or Female',
            'birthday' => '2023-04-14 00:00:00',
            'password' => Hash::make('asdasdasd'),
            'image' => 'https://api.dicebear.com/6.x/thumbs/png?seed=Buster',
            'remember_token' => Str::random(10),
        ];
    }
}
