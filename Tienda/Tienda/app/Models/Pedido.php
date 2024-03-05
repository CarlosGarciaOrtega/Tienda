<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = ['fecha', 'estado', 'iduser','pago','total'];
    protected $table = 'pedido';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\Models\User','iduser');
    }
}
