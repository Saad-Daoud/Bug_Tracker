<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributions extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function errors()
    {
        return $this->belongsTo('App\Models\Errors');
    }

    protected $casts = [
        'votes' => 'array',
    ];
}
