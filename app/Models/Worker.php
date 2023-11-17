<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
    ];

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }
}
