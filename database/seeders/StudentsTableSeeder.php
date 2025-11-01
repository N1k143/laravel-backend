<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    public function run(): void
    {
        Student::create([
            'first_name' => 'Иван',
            'last_name' => 'Иванов',
            'email' => 'ivanov@example.com',
            'group' => 'ИС-21',
            'birth_date' => '2004-03-12',
        ]);

        Student::create([
            'first_name' => 'Мария',
            'last_name' => 'Петрова',
            'email' => 'petrova@example.com',
            'group' => 'ИС-22',
            'birth_date' => '2003-10-05',
        ]);
    }
}
