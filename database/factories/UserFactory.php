<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'name'              => $this->faker->name(),
            'date_of_birth'     => $this->faker->date(),
            'gender'            => rand(1, 2),
            'phone_number'      => $this->faker->unique()->phoneNumber(),
            'email'             => $this->faker->unique()->safeEmail(),
            'photo'             => 'matched_profiles/photo.jpg',
            'country_id'        => User::$default_country_id,
            'email_verified_at' => now(),
            'password'          => bcrypt(123456),
            'remember_token'    => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
