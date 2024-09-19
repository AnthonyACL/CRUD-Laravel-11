<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
     
    #Solo estos pueden ser asignados en masa(Pueden repetirse mucho no como un email)
    protected $fillable = ['name', 'age'];
}
