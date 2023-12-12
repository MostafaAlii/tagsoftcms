<?php
namespace Database\Factories;
use Illuminate\Support\Str;
use App\Enums\User\UserStatus;
use Illuminate\Database\Eloquent\Factories\Factory;
class UserFactory extends Factory {
    public function definition(): array {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => bcrypt('123123'), // password
            'remember_token' => Str::random(10),
            'status' => fake()->randomElement([UserStatus::ACTIVE, UserStatus::IN_ACTIVE, UserStatus::BLOCKED])
        ];
    }

    public function unverified(): static {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}