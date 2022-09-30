<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function User()
    {
        return $this->hasMany(User::class);
    }

    public function Province()
    {
        return $this->belongsTo(Province::class);
    }

    public function Districts()
    {
        return $this->hasMany(Districts::class);
    }
}
