<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Make an HTTP request to the API to get the user data
        $response = Http::post('http://34.101.154.14:8175/hackathon/user/auth/create', [
            "ktpId" => $this->faker->numerify('############'),
            "username" => "exceeds",
            "phoneNumber" => $this->faker->phoneNumber,
            "loginPassword" => '12345678',
            "birthDate" => $this->faker->date('dmY'),
            "gender" => $this->faker->randomElement([0, 1]), // Assuming gender 1 represents male and 2 represents female
            "email" => $this->faker->unique()->safeEmail,
        ]);

        // Check if the API request was successful
        if ($response->successful()) {
            $responseData = $response->json();
            print($responseData);

            // Return the received user data from the API
            return [
                "ktpId" => $responseData['ktpId'],
                "username" => $responseData['username'],
                "phoneNumber" => $responseData['phoneNumber'],
                "password" => bcrypt('12345678'), // Assuming you want to use a fixed password for all seeded users
                "birthDate" => $responseData['birthDate'],
                "gender" => $responseData['gender'],
                "email" => $responseData['email'],
            ];
        } else {
            // Handle API request error
            throw new \Exception('Failed to seed user data from API.');
        }
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
