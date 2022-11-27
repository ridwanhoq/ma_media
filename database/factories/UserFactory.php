<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
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
        
        // $table->string('name');
        // $table->date('date_of_birth');
        // $table->integer('gender');
        // $table->string('phone_number');
        // $table->string('email')->unique();
        // $table->string('photo')->default('user.jpg');
        // $table->integer('country_id');
        // $table->timestamp('email_verified_at')->nullable();
        // $table->string('password');

        return [
            'name'              => $this->faker->name(),
            'date_of_birth'     => $this->faker->date(),
            'gender'            => 1,
            'phone_number'      => '01711223344',
            'email'             => $this->faker->unique()->safeEmail(),
            'photo'             => 'matched_profiles/photo.jpg',
            'country_id'        => 1,
            'email_verified_at' => now(),
            'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
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
