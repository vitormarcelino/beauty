<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Scheduling extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at', 'date'];

    public $fillable = [
        'patient_id',
        'service_id',
        'date',
        'value',
        'paid',
        'notes',
    ];

    public function setDateAttribute($date) {
        if($date) {
            $this->attributes['date'] = Carbon::createFromFormat('d/m/Y H:i', $date)->format('Y-m-d H:i:s');
        }
    }

    public function getDateAttribute() {
        return Carbon::parse($this->attributes['date'])->format('d/m/Y H:i');
    }

    public function setValueAttribute($value) {
        if($value) {
            $this->attributes['value'] = number_format(str_replace(",",".",str_replace(".","", $value)), 2, '.', '');
        }
    }

    public function getValueAttribute() {
        return number_format($this->attributes['value'], 2, ',', '.');
    }

    public static function getGridData()
    {
        return self::whereDate('date', '>=', Carbon::now())->orderBy('date', 'ASC')->get();
    }

    public function patient() {
        return $this->belongsTo('App\Models\Patient')->first();
    }

    public function service() {
        return $this->belongsTo('App\Models\Service')->first();
    }

    public static function notPayed() {
        return number_format(self::where('paid', 0)->sum('value'), 2, ',', '.');
    }
}
