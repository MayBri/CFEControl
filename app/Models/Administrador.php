<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrador extends Authenticatable
{
    use Notifiable;

    protected $table = 'administrador';
    protected $fillable = ['nombre', 'email', 'rpe', 'password'];
    protected $hidden = ['password', 'api_token'];
    public $primarykey = 'usuario';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    public function getAuthPassword()
    {
        return $this->attributes['password'];
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
