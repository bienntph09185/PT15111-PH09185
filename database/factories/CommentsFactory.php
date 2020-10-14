<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Comments;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CommentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'content' => $this->faker->text(20),
            'post_id' => $this->faker->numberBetween(1, 10),
            'student_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
