<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors';
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'poli_id',
        'gender',
        'photo',
    ];

    public function poli()
    {
        return $this->belongsTo('App\Models\Poli');
    }
}
