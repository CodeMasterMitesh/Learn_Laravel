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
        Student::insert([
            [
                'first_name' => 'Mitesh',
                'last_name' => 'Patel',
                'email' => 'mitesh@example.com',
                'mobile' => '9876543210',
                'age' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Amit',
                'last_name' => 'Shah',
                'email' => 'amit@example.com',
                'mobile' => '9876500000',
                'age' => 24,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Neha',
                'last_name' => 'Rana',
                'email' => 'neha@example.com',
                'mobile' => '9876512345',
                'age' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Ravi',
                'last_name' => 'Mehta',
                'email' => 'ravi@example.com',
                'mobile' => '9876598765',
                'age' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Sneha',
                'last_name' => 'Kumar',
                'email' => 'sneha@example.com',
                'mobile' => '9876523456',
                'age' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Rohan',
                'last_name' => 'Joshi',
                'email' => 'rohan@example.com',
                'mobile' => '9876534567',
                'age' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Kajal',
                'last_name' => 'Thakur',
                'email' => 'kajal@example.com',
                'mobile' => '9876545678',
                'age' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Vikram',
                'last_name' => 'Singh',
                'email' => 'vikram@example.com',
                'mobile' => '9876556789',
                'age' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Pooja',
                'last_name' => 'Verma',
                'email' => 'pooja@example.com',
                'mobile' => '9876567890',
                'age' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Nikhil',
                'last_name' => 'Jain',
                'email' => 'nikhil@example.com',
                'mobile' => '9876578901',
                'age' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
