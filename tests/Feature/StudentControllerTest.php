<?php

use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('student creation stores the email address', function () {
    $this->post(route('students.store'), [
        'nis' => '9595',
        'name' => 'Jose Marvin',
        'email' => 'jose@example.test',
        'gender' => 'Laki-laki',
        'class' => '12 TKJ 3',
        'major' => 'TKJ',
    ])->assertRedirect(route('students.index'));

    expect(Student::where('nis', '9595')->value('email'))->toBe('jose@example.test');
});