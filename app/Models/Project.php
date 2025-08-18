<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'user_id'];

    // Relasi ke Task (One to Many)
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    // Relasi ke User (Project Manager)
    public function manager()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

