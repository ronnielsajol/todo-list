<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('task')->insert([
            [
                'isChecked' => false,
                'tasks' => 'Task 1',
                'startDate' => now(),
                'dueDate' => now()->addDays(7),
                'priority' => 1,
            ],
            [
                'isChecked' => false,
                'tasks' => 'Task 2',
                'startDate' => now(),
                'dueDate' => now()->addDays(14),
                'priority' => 2,
            ],
            [
                'isChecked' => false,
                'tasks' => 'Task 3',
                'startDate' => now(),
                'dueDate' => now()->addDays(21),
                'priority' => 3,
            ],
        ]);
    }
}
