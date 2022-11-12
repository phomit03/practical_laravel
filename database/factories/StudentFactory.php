<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' =>"id".$this->faker->randomNumber(),
            'name'=>$this->faker->firstName,
            'age'=>rand(3, 100),
            'address'=>$this->faker->randomElement(['hanoi', 'danang', 'tphcm']),
            'phone'=>$this->faker->numerify('##########')
        ];
    }
}
