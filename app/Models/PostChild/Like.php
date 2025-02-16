<?php

namespace App\Models\PostChild;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Like extends Model
{
    use HasFactory;
    protected $fillable = ["user_id",'posts_id'];
    public function post(){
        return $this->belongsTo(Posts::class);
    }
    
}
