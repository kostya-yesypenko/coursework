<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $table = 'posts';
    protected $guarded=[];


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(tag::class, 'post_tags', 'post_id', 'tag_id');
    }

    public static function getLatestPost(){
        $post = Post::where ('id','>=',0)->orderBy('created_at','DESC')->take(1)->get()->first();
        return $post;
    }
}
