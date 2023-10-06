<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classroom extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    public function registers(): HasMany
    {
        return $this->hasMany(Register::class);
    }
}
