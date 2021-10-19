<?php

namespace Database\Factories;

use App\Models\TranslationTeam;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TranslationTeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TranslationTeam::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'owner_id' => 1,
        ];
    }
}
