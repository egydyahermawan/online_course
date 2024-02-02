<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use Sluggable;
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'learning_path_id', 'teacher_id', 'title', 'description',
        'slug', 'thumbnail', 'price', 'status',
        'created_at', 'updated_at'
    ];

    public function learningPath()
    {
        return $this->belongsTo('App\Models\LearningPath', 'learning_path_id');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Models\User', 'teacher_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
