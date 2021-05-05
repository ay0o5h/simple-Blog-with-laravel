<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


 class Post extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable=['title','slug','description','image_path','created_at','updated_at','user_id'];
    protected $hidden=['created_at','updated_at'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
              ' source'=>'title'
            ]
        ];
    }
}

