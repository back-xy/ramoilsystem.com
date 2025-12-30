<?php

namespace Database\Factories;

use App\Models\City;
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
        $socialApps = ['whatsapp', 'telegram', 'viber'];
        $selectedApps = fake()->randomElements($socialApps, fake()->numberBetween(0, 3));

        return [
            'place_name' => fake()->company(),
            'owner_name' => fake()->name(),
            'profession' => fake()->randomElement(['Restaurant', 'Retail', 'Services', 'Manufacturing', 'Technology', null]),
            'primary_phone' => fake()->phoneNumber(),
            'secondary_phone' => fake()->optional(0.6)->phoneNumber(),
            'social_apps' => $selectedApps,
            'is_customer' => fake()->boolean(30),
            'activity_percentage' => fake()->numberBetween(0, 100),
            'city_id' => fn() => City::query()->inRandomOrder()->value('id') ?? City::factory(),
            'address' => fake()->optional(0.8)->address(),
            'gps' => fake()->optional(0.7)->latitude() . ',' . fake()->longitude(),
            'image' => fake()->optional(0.5)->imageUrl(640, 480, 'business'),
        ];
    }
}
