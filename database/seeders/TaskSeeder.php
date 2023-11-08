<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
 
        $tasks = [
            'Wedding Dress',
            'Wedding Dress Design',
            'Groom Suite',
            'Groom Suite Design',
            'Makeup',
            'Hair and Makeup',
        ];

        foreach ($tasks as $taskName) {
            Task::create(['name' => $taskName]);
        }
    }
}
