<?php

namespace App\Models;

use App\Traits\HasGift;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    protected $fillable = ['name', 'model_id', 'model_type'];

    use HasFactory, HasGift;
}
