<?php

namespace App\Models;

use App\Models\PostChild\Comment;
use App\Models\PostChild\Like;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Posts extends Model
{
    /** @use HasFactory<\Database\Factories\PostsFactory> */
    use HasFactory;
    protected $fillable = ["user_id","title",'tag','img_path'];
    public function user(){
        return $this->belongsTo(User::class);


    }
    public function likes():HasMany
    {
        return $this->hasMany(Like::class);
    }
    public function comments():HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
