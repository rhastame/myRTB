<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::query()->create([
            "name" => 'Booked'
        ]);
        Status::query()->create([
            "name" => 'On Progress'
        ]);
        Status::query()->create([
            "name" => 'Done'
        ]);
    }
}
