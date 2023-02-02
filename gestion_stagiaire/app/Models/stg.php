<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stg extends Model
{
    use HasFactory;
    protected $fillable=['prenom','nom','moy'];
}
