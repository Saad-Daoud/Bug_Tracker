<?php

namespace Database\Factories;

use App\Models\Errors;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
class ErrorsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Errors::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::all()->random()->id,
            'environment'=> $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            'type'=> $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'title'=> $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'description'=> $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            // 'status'=> $this->faker->boolean(),

            
        ];
    }
}
