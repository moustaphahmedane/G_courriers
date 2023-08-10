<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCourrier extends Model
{
    use HasFactory;

    protected $fillable = ['libelle_t'];
    protected $table = 'type_courriers';

    public  function courrier_env(){
        return $this->belongsTo(CourrierEnv::class, 'id_courrE');
    }
    public  function courrier_recu(){
        return $this->belongsTo(CourrierRecu::class, 'id_courrR');
    }
}
