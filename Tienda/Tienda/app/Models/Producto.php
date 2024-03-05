<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Producto extends Model
{
    use HasFactory;
     protected $table = 'producto';

    protected $fillable = [
        'nombre',
        'marca',
        'precio',
        'compatibilidad',
        'categoria',
        'subcategoria',
        'imagen',
        'descripcion'
    ];
    
    
    public function usuarios()
    {
        return $this->belongsToMany(Users::class, 'carritocompra', 'idproducto', 'idusuario')->withPivot('cantidad');
    }
    
    
    public function usuariosWishlist()
    {
        return $this->belongsToMany(Users::class, 'wishlist', 'idproducto', 'idusuario')->withPivot('cantidad');
    }
}
