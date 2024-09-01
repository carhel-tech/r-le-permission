<?php

namespace Modules\Utilisateur\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Modules\Utilisateur\Database\Factories\UtilisateurFactory;

class Utilisateur extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     */
    protected $table = 'utilisateurs';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    // protected static function newFactory(): UtilisateurFactory
    // {
    //     //return UtilisateurFactory::new();
    // }
}
