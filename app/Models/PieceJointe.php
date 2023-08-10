<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PieceJointe extends Model
{
    use HasFactory;
    protected $fillable = ['libelle_pj' ,'lien'];
    protected $table = 'piece_jointes';

    public  function courrier_recu(){
        return $this->hasMany(CourrierRecu::class, 'id_piece');
    }

    public  function courrier_env(){
        return $this->hasMany(CourrierEnv::class, 'id_piece');
    }
}
