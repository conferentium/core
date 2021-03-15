<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\Submission;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'submission_id' => Submission::inRandomOrder()->first(),
            //'reviewer_id'
            'verified_at' => now(), //incomplete
        ];
    }
}
