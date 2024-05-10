<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\SoftMedic\Patients\Patient;
use App\SoftMedic\Settings\Roles\Rol;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    //protected $with = ['patient'];
    protected $appends = ['id'];
    protected $primaryKey = 'idUser';

    protected $fillable = [
        'name',
        'email',
        'idRol',
        'status',
        'username',
        'password',
        'password_raw',
        'last_login'
    ];

    public function getIdAttribute()
    {
        return $this->idUser;
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function patient(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Patient::class,'idUsuario');
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class,'idRol','id');
    }
}
