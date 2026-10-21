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
        $userTeacherEmail = 'jose@ski.sch.id';
        $userStudentEmail = 'daniel@ski.sch.id';

        //User teacher
        User::updateOrCreate(
            ['email' => $userTeacherEmail],
            [
                'name' => 'Jose',
                'password' => bcrypt('password'),
                'role' => 'teacher',
            ]
        );

        //User student
        User::updateOrCreate(
            ['email' => $userStudentEmail],
            [
                'name' => 'Daniel',
                'password' => bcrypt('password'),
                'role' => 'student',
            ]
        );
    }
}