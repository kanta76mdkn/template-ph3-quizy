<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    public function Question()
    {
        return $this->belongsTo(Question::class);
    }
}
