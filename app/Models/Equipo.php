<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $table = 'equipo';
    protected $fillable = ['nombre', 'serie', 'salida', 'fecha', 'venta', 'costo', 'usuario', 'email_verified_at', 'descripcion'];

    public $timestamps = true;


    //relacion muchos a muchos
    public function servicios()
    {
        return $this->belongsToMany('App\Models\Servicio');
    }

    //relacion uno a muhos
    public function servicio(){
        return $this->hasMany(Servicio::class);
    }
}
