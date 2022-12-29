<?php

namespace App;

use TCG\Voyager\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;



class Cuota extends Model
{
    protected $dates= ['fecha'];

    public function getFechaAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function User() {
        return $this->belongsTo(User::class);
    }
    
}
