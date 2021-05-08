<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trening extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'naziv',
        'brojClanova',
        'dan',
        'zavrsen',
        'user_id',
        'jacinaTreninga'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
