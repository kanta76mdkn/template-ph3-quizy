<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
    public function bigQuestion()
    {
        return $this->belongsTo(bigQuestion::class);
    }
}


// Laravelモデル作成
//  →リレーションhasmany
//  →コントローラーでデータを取ってくる
//  →データ取ってくる時のキーワード（in a road）Laravel eager roadで調べる
//  →getしたいい感じのデータになってくる
//  →foreach
//  →表示させる