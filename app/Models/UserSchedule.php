<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class UserSchedule extends Model
{
    use HasFactory;

    protected $table = 'user_schedules';
    protected $guarded = ['id'];

    public function doctorschedule()
    {
        return $this->belongsTo(DoctorSchedule::class, 'doctorschedule_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
