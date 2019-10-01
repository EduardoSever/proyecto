<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model

{
  protected $fillable = [
    'Nombre','ApellidoPaterno','ApellidoMaterno','Edad'
];
# Definir relacion one to one #
public function ubicacions()
{
    return $this->hasMany('App\Ubicacions');
 }
}