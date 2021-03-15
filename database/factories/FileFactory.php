<?php

namespace Database\Factories;

use App\Models\File;
use App\Models\Submission;
use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = File::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'submission_id' => Submission::inRandomOrder()->first(),
            'type' => $this->faker->randomElement(['abstract', 'paper']),
            'url' => $this->faker->url,
        ];
    }
}
