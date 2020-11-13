<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user){
            $user->profile()->create();
        });
    }

    public function publications(){
        return $this->hasMany(Publication::class)->orderBy('year','DESC');
    }

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function academicQualifications(){
        return $this->hasMany(AcademicQualification::class)->orderBy('year','DESC');
    }

    public function profQualifications(){
        return $this->hasMany(ProfQualification::class)->orderBy('year','DESC');
    }

    public function awards(){
        return $this->hasMany(Award::class)->orderBy('year','DESC');
    }

    public function researches(){
        return $this->hasMany(Research::class)->orderBy('endYear','DESC');
    }
}
