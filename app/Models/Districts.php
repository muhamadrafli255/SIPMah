<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function User()
    {
        return $this->hasMany(User::class);
    }

    public function City()
    {
        return $this->belongsTo(City::class);
    }

    public function Village()
    {
        return $this->hasMany(Village::class);
    }
}
