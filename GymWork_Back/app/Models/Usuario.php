<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Usuario extends Model{
    protected $table = 'usuariod';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['id', 'nombre_usuario', 'contrasena', 'email', 'nombre_completo','cc', 'edad', 'peso', 'estatura', 'instructor', 'sexo'];
    //
}