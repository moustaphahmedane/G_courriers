<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['libelle_s'];
    protected $table = 'services';

    public  function courrier_recu(){
        return $this->hasMany(CourrierRecu::class, 'id_service');
    }

    public  function courrier_env(){
        return $this->hasMany(CourrierEnv::class, 'id_service');
    }
}
