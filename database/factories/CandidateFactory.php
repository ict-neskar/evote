<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidate>
 */
class CandidateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'slug' => 'alex',
            'image' => $this->faker->image(),
            'name' => $this->faker->name(),
            'deskripsi' => $this->faker->text(),
            'visi' => $this->faker->text(),
            'misi' => $this->faker->text(),
            'program' => $this->faker->text(),
            'video' => 'https://www.youtube.com/embed/-HvvSH0x0cU',
            'votes' => 0,
            'class_id' => $this->faker->numberBetween(1 , 9),
        ];
    }
}
