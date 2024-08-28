<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = \App\Models\Post::class;
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'body' => [],
        ];
    }

    public function untitled()
    {
        return $this->state(function (array $attributes) {
            return [
                'title' => 'untitle',
            ];
        });
    }
}
