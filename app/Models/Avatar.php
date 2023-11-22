<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Avatar extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'avatarable_id',
        'avatarable_type',
    ];

    public function avatarable(): MorphTo
    {
        return $this->morphTo();
    }
}
