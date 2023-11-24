<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title'
    ];

    public function boss(): hasOneThrough
    {
        return $this->hasOneThrough(Worker::class, Position::class)
            ->where('position_id', 3);
    }

    public function workers(): hasManyThrough
    {
        return $this->hasManyThrough(Worker::class, Position::class);
    }
}
