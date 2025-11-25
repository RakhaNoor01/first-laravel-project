<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'job',
        'phone',
        'email',
        'address',
    ];

    // Jika ada relationship dengan student (many-to-many)
    // public function students()
    // {
    //     return $this->belongsToMany(Student::class);
    // }
}