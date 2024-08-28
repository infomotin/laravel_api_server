<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $casts = [
        'body' => 'array',
    ];
    //upper case method calling to title column in database
    public function getTitleUpperCaseAttribute(){
        return strtoupper($this->title);
    }
    public function setTitleAttribute($value){
        $this->attributes['title'] = strtolower($value);
    }
    // CREATE RELATION SHOULD BE HERE
    public function comments(){
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    public function users(){
        return $this->hasMany(User::class, 'post_user','post_id','user_id');
    }
}



