<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Education;
use App\Models\Student;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $educations = [
            'mitesh@example.com' => [
                'degree' => 'B.Com',
                'institute' => 'R.C. College',
                'year_of_passing' => 2020,
                'grade' => 'A',
            ],
            'amit@example.com' => [
                'degree' => 'M.Com',
                'institute' => 'Gujarat University',
                'year_of_passing' => 2022,
                'grade' => 'A+',
            ],
            'neha@example.com' => [
                'degree' => 'BBA',
                'institute' => 'St. Xavier\'s College',
                'year_of_passing' => 2021,
                'grade' => 'B+',
            ],
            'ravi@example.com' => [
                'degree' => 'B.Sc',
                'institute' => 'M.G. Science College',
                'year_of_passing' => 2019,
                'grade' => 'A',
            ],
            'sneha@example.com' => [
                'degree' => 'BA',
                'institute' => 'GLS College',
                'year_of_passing' => 2020,
                'grade' => 'A',
            ],
            'rohan@example.com' => [
                'degree' => 'BCA',
                'institute' => 'Nirma University',
                'year_of_passing' => 2021,
                'grade' => 'B',
            ],
            'kajal@example.com' => [
                'degree' => 'B.Com',
                'institute' => 'S.M. Patel Institute',
                'year_of_passing' => 2022,
                'grade' => 'A',
            ],
            'vikram@example.com' => [
                'degree' => 'MBA',
                'institute' => 'IIM Ahmedabad',
                'year_of_passing' => 2023,
                'grade' => 'A+',
            ],
            'pooja@example.com' => [
                'degree' => 'B.Ed',
                'institute' => 'IGNOU',
                'year_of_passing' => 2021,
                'grade' => 'A',
            ],
            'nikhil@example.com' => [
                'degree' => 'B.Tech',
                'institute' => 'DAIICT',
                'year_of_passing' => 2020,
                'grade' => 'A',
            ],
        ];

        foreach ($educations as $email => $eduData) {
            $student = Student::where('email', $email)->first();
            if ($student) {
                Education::create([
                    'student_id' => $student->id,
                    'degree' => $eduData['degree'],
                    'institute' => $eduData['institute'],
                    'year_of_passing' => $eduData['year_of_passing'],
                    'grade' => $eduData['grade'],
                ]);
            }
        }
    }
}
