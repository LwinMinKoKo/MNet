<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            "staffName"=>fake()->firstName($gender = 'male'|'female'),
            "staffPosition"=>fake()->name(),
            "staffID"=>fake()->numberBetween($min = 1 , $max = 9000),
            "gender"=>fake()->title($gender = 'male'|'female'),
            "email"=>fake()->email,
            "address"=>fake()->address,
            "department"=>fake()->text,
            "phone"=>fake()->numberBetween($min = 1000000 , $max = 5000000),
            "supervisorName"=>fake()->name,
            "isActive"=>rand(1,5),
            "isAdmin"=>rand(1,5),
            "remark"=>fake()->name,
            
        ];
    }
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
