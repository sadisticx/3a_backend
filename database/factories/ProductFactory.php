<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        $brands = ['Apple', 'Sony', 'Nike', 'Logitech', 'Samsung'];
        $adjectives = ['Wireless', 'Pro', 'Ultra', 'Eco-friendly', 'Portable'];
        $types = ['Monitor', 'Headphones', 'Bottle', 'Sneakers', 'Lamp'];

        return [
            'name' => fake()->randomElement($brands) . ' ' . 
                      fake()->randomElement($adjectives) . ' ' . 
                      fake()->randomElement($types),
            'price' => fake()->randomFloat(2, 10, 2000),
            'category' => fake()->randomElement(['Electronics', 'Fitness', 'Office', null]),
        ];
    }
}
