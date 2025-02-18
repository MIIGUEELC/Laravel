<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'message'];

    // Relación: Un mensaje de contacto pertenece a un usuario (si aplica)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
