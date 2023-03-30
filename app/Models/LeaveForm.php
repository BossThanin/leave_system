<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveForm extends Model
{
    use HasFactory;

    protected $table = 'leave';

    protected $fillable = [
        'employee_id',
        'leavetype_id',
        'starts_date',
        'end_date',
        'comment',
        'image',
    ];
}

