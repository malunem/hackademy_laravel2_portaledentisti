<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkup extends Model
{   
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'phonenumber',
        'email',
        'cap',
        'patient',
        'text'
    ];
}
