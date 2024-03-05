<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;
    protected $table ='direccion';
    protected $fillable =[
        'direccion',
        'apartamento',
        'ciudad',
        'pais',
        'cp',
        'idusuario'
        ];
        
        
    public function user() {
        return $this->belongsTo(User::class,'idusuario');
    }
}
