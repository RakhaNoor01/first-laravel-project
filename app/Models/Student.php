<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date_of_birth',
        'classroom_id',
        'email',
        'address',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    // Relationship
    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }
}