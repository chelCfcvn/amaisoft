<?php

namespace Database\Factories;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Staff::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'age' => random_int(1,100),
            'gender' => 'male',
            'position_id' => '1',
            'department_id' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
