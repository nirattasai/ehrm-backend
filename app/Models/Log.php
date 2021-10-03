<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    protected $table = 'logs';

    protected $fillable = [
        'date',
        'login_time',
        'logout_time',
        'is_late',
        'is_leave',
        'is_absent',
        'total_hours',
        'user_id',
    ];
}
