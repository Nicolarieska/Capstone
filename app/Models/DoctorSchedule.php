<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Support\Carbon;

class DoctorSchedule extends Pivot
{
    use HasFactory;

    protected $table = 'doctor_schedules';
    protected $guarded = ['id'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function getFormattedScheduleAttribute()
    {
        return Carbon::parse($this->schedule)->format('Y-m-d H:i:s');
    }

    public function getDayAttribute()
    {
        return Carbon::parse($this->schedule)->isoFormat('dddd');
    }

    public function getDateAttribute()
    {
        return Carbon::parse($this->schedule)->isoFormat('DD MMMM YYYY');
    }

    public function getTimeAttribute()
    {
        return Carbon::parse($this->schedule)->format('H:i');
    }

    public function userschedule()
    {
        return $this->hasOne(UserSchedule::class, 'doctorschedule_id');
    }
}
