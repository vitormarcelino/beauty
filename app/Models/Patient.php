<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = [
        'name',
        'cpf',
        'phone',
        'email',
        'birth_date',
        'address',
        'notes',
    ];
}