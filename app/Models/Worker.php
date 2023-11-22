<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'age',
        'description',
        'is_married',
        'position_id',
    ];

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }

    public function avatar(): MorphOne
    {
        return $this->morphOne(Avatar::class, 'avatarable');
    }
}
