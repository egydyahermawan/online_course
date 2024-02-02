<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningPath extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['title', 'description', 'slug', 'image', 'created_at', 'updated_at'];
}
