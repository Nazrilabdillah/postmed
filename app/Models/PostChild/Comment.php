<?php

namespace App\Models\PostChild;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\PostChild\CommentFactory> */
    use HasFactory;
    protected $fillable = ['user_id','posts_id','text'];
    public function post(){
        return $this->belongsTo(Posts::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
