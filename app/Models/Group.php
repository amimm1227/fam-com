<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['group_name', 'group_password']; // 一括代入を許可する属性を指定

    // 他のモデルの関連やメソッドなど...

    public function users()
    {
        return $this->hasMany(User::class); // グループに所属するユーザーのリレーションシップ
    }
    
    public function posts()
    {
        return $this->hasManyThrough(Post::class, User::class);
    }
}
