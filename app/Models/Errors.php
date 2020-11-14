<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Errors extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function contributions()
    {
        return $this->hasMany('App\Models\Contributions');
    }

    protected $casts = [
        'votes' => 'array',
    ];
}
