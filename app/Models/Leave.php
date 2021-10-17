<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $table = 'leaves';

    protected $fillable = [
        'date_start',
        'date_end',
        'type',
        'leave_dates',
        'cause',
        'user_id',
        'status',
    ];

    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
