<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student = [
            ['nis' => '1001', 'name' => 'Jose Marvin', 'gender' => 'Laki-laki', 'class' => '12 TKJ 3', 'major' => 'TKJ'],
            ['nis' => '1002', 'name' => 'Jane Doe', 'gender' => 'Perempuan', 'class' => '12 AKL 1', 'major' => 'AKL'],
            ['nis' => '1003', 'name' => 'John Smith', 'gender' => 'Laki-laki', 'class' => '12 BiD 2', 'major' => 'BiD'],

        ];
        StudentSeeder::upsert($student, ['nis'], ['name', 'gender', 'class', 'major']);

    }
}
