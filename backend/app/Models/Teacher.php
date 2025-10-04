<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $primaryKey = 'teacher_id';
    public $timestamps = false;

    protected $fillable = [
        'user_profile_id',
        'category_faculty_id',
        'category_major_id',
        'category_position_id',
    ];

    public function profile()
    {
        return $this->belongsTo(UserProfile::class, 'user_profile_id');
    }

    public function faculty()
    {
        return $this->belongsTo(CategoryFaculty::class, 'category_faculty_id');
    }

    public function major()
    {
        return $this->belongsTo(CategoryMajor::class, 'category_major_id');
    }

    public function position()
    {
        return $this->belongsTo(CategoryPosition::class, 'category_position_id');
    }
}
