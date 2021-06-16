<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idProyecto','nombre', 'docDir'
    ];


   
}
