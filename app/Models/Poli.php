<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    protected $table = 'polis';
    protected $fillable = [
        'name',
        'photo'
    ];

    public function doctor()
    {
        return $this->hasMany('App\Models\Doctor', 'poli_id');
    }
}
