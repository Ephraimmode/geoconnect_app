<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected $guarded = []; // to avoid mass assignment errors>>

    public function roles(){
        return $this->belongsToMany(Roles::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
