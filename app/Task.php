<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Http\Controllers\User;

class Task extends Model
{
     protected $fillable = [
         'content',
         'status',
         'user_id',];

    /**
     * この投稿を所有するユーザ。（ Userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
