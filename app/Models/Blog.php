<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['author_id', 'title', 'content', 'slug', 'thumbnail', 'created_at', 'updated_at'];

    public function author()
    {
        return $this->belongsTo('App\Models\User', 'author_id');
    }
}
