<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::all();

        foreach ($users as $user) {
            $limit = random_int(10, 20);

            for ($i = 0; $i < $limit; $i++) {
                $task = Task::factory()->make();
                $task->user()->associate($user);
                $task->save();
            }
        }
    }
}
