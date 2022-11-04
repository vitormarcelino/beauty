<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Patient extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at', 'birth_date'];

    public $fillable = [
        'name',
        'cpf',
        'phone',
        'email',
        'birth_date',
        'address',
        'notes',
    ];

    public function setBirthDateAttribute($date) {
        if($date) {
            $this->attributes['birth_date'] = Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
        }
    }

    public function getBirthDateAttribute($date) {
        return Carbon::parse($date)->format('d/m/Y');
    }
}