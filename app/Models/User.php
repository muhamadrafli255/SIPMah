<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Province()
    {
        return $this->belongsTo(Province::class);
    }

    public function City()
    {
        return $this->belongsTo(City::class);
    }

    public function Districts()
    {
        return $this->belongsTo(Districts::class);
    }

    public function Village()
    {
        return $this->belongsTo(Village::class);
    }

    public static function getMembers($request)
    {
        $members = User::select([
            'id',
            'nis',
            'email',
            'name',
            'status',
        ]);

        return $members;
    }
}
