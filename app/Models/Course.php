<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'name',
        'tag',
        'description',
        'duration',
        'price',
        'course_image',
    ];

    public function users(){

        return $this->belongTo(User::class);
    
    }

    public function getPostImageAttribute($value) {

        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
        return $value;
        }
        return asset('storage/' . $value);

    }

}



