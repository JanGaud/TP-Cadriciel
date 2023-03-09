<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelName extends Model
{
    protected $table = 'etudiant';
    protected $fillable = ['nom', 'adresse', 'adresse', 'telephone', 'email', 'ville_id', 'anniversary'];
}
