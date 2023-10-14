<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'iso'
    ];

    // Accessors
    protected function isoLowercased(): Attribute
    {
        return Attribute::make(fn (mixed $value, array $attributes) => strtolower($attributes['iso']));
    }

    // Scopes
    public function scopeOfSpace($query, $spaceId)
    {
        return $query->where('space_id', $spaceId);
    }
}
