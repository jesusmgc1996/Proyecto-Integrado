<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    use HasFactory;

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }

    public function consultingRoom()
    {
        return $this->belongsTo(ConsultingRoom::class, 'consultingRoom_id');
    }
}
