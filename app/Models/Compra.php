<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'paquete_id',
        'cantidad',
        'estado',
    ];

    // Relación con usuario
    public function user()
{
    return $this->belongsTo(User::class);
}

public function paquete()
{
    return $this->belongsTo(Paquete::class);
}
}
