<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);

        $users = \App\Models\User::all();

        // buat 3 project dengan manager random
        $projects = \App\Models\Project::factory(3)->create()->each(function ($project) use ($users) {
            $project->update([
                'user_id' => $users->random()->id
            ]);
        });

        // buat 20 task dengan project & user random
        \App\Models\Task::factory(20)->create()->each(function ($task) use ($users, $projects) {
            $task->update([
                'project_id' => $projects->random()->id,
                'user_id' => $users->random()->id
            ]);
        });
    }

}
