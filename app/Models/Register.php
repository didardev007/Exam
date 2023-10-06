<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Register extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function Classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }

    public function Course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function Student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
