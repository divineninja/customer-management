<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            'Wedding',
            'Birthday',
            'Debut',
            'Party'
        ];

        foreach ($events as $eventName) {
            Event::create(['name' => $eventName]);
        }

    }
}
