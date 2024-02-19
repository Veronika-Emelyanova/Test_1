<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition()
    {


        $name = $this->faker->realText(rand(10, 12));
    $content = $this->faker->realText(rand(300, 310));
    return [
        'name' => $name,
        'content' => $content,
        'created_at' => $this->faker->dateTimeBetween('-200 days', '-50 days'),
        'updated_at' => $this->faker->dateTimeBetween('-40 days', '-1 days'),
    ];
    }
}
