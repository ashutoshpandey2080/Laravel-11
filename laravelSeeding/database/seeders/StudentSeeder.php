<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student; 


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Student::create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'phone_number' => '1234567890',
        // ]);

        Student::factory()->count(10)->create();
    }
}
