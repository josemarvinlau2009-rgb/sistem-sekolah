<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['nis', 'name', 'email', 'gender', 'class', 'major'])]
#[Table('students')]
class Student extends Model
{

}
