<?php


namespace App\Traits;


use App\Models\Gift;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasGift
{
    /**
     * @return MorphMany
     */
    public function gifts(): MorphMany
    {
        return $this->morphMany(Gift::class, 'model')->with(['gifts']);
    }
}