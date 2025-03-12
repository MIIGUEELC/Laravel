<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Guid\Guid;


class Contact extends Model
{
    /** @use HasFactory<\Database\Factories\ContactFactory> */
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'photo',
        'join_date',
        'job_desc',
        'phone',
        'days',
        'status',
    ];
    
    protected $keyType = 'string'; 
    public $incrementing = false; 

    protected static function booted()
    {
        static::creating(function ($contact) {
            if (!$contact->id) {
                $contact->id = (string) Guid::uuid4(); 
            }
        });
    }
}
