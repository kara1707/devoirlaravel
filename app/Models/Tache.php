<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    protected $fillable=["nomTache","etat","user","color"];
    use HasFactory;
}
