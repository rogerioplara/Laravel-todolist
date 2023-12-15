<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::all()->random();

        // Para popular as tasks somente com usuários que tem sua categoria, é feito esse while
        // que permite que sejam criados novos usuários, caso a task esteja com user_id vazio
        while (count($user->categories) == 0) {
            $user = User::all()->random();
        }

        return [
            'title' => fake()->text(30),
            'description' => fake()->text(100),
            'due_date' => fake()->dateTime(),
            'user_id' => $user,
            'category_id' => $user->categories->random(),
        ];
    }
}
