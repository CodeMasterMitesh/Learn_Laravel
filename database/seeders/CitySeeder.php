<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studentCities = [
            'mitesh@example.com' => 'Ahmedabad',
            'amit@example.com' => 'Gandhinagar',
            'neha@example.com' => 'Vadodara',
            'ravi@example.com' => 'Rajkot',
            'sneha@example.com' => 'Surat',
            'rohan@example.com' => 'Bhavnagar',
            'kajal@example.com' => 'Jamnagar',
            'vikram@example.com' => 'Junagadh',
            'pooja@example.com' => 'Mehsana',
            'nikhil@example.com' => 'Nadiad',
        ];

        foreach ($studentCities as $email => $cityName) {
            $student = Student::where('email', $email)->first();
            if ($student) {
                City::create([
                    'student_id' => $student->id,
                    'name' => $cityName,
                ]);
            }
        }
    }
}
