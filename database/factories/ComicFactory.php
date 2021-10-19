<?php

namespace Database\Factories;

use App\Models\Comic;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'cover_image' => $this->faker->imageUrl($width = 600, $height = 800),
            'thumbnail' => $this->faker->imageUrl($width = 300, $height = 500),
            'user_id' => 0,
            'translation_team_id' => 0,
            'author_id' => 0,
        ];
    }
}
