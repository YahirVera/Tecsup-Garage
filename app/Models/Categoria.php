<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categoria';
    public $timestamps = false;

    // Hacer relacion de uno a muchos Productos
    public function productos()
    {
        return $this->hasMany(Producto::class,'id_producto','id_producto');
    }
    
}
