<?php

namespace App\Models;

use App\Models\Place;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    /** @use HasFactory<\Database\Factories\CityFactory> */
    use HasFactory;

    /**
     * @return HasMany<Place>
     */
    public function places(): HasMany
    {
        return $this->hasMany(Place::class);
    }
}
