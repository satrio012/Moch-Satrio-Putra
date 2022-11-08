<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable = [
        'user_id',
        'url',
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
