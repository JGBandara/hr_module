<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $table = 'hr_notification';
    protected $fillable = [
        'type_id',
        'message',
        'emp_id',
    ];

}
