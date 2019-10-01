<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
        protected $fillable = [
            'calle', 'colonia','delegacion','numero', 'user_id',
        ];
        protected $hidden = [
            'Nombre', 'remember_token',
        ];
        public function ubicacion()
        {
            return $this->belongsTo('App\Usuarios','user_id');     
        }
    }