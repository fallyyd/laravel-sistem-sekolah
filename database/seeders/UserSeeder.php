<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userTeacherEmail = 'yones@ski.sch.id';
        $userStudentEmail = 'oliver@ski.sch.id';

        // User Teacher
        User::updateOrCreate(
            ['email' => $userTeacherEmail],
            [
                'name' => 'Yones',
                'password' => bcrypt('password'),
                'role' => 'teacher',
            ]
        );

        // User Student
        User::updateOrCreate(
            ['email' => $userStudentEmail],
            [
                'name' => 'Oliver',
                'password' => bcrypt('password'),
                'role' => 'student',
            ]
        );
    }
}