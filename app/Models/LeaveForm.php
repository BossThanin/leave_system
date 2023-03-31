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
        'start_time',
        'end_date',
        'end_time',
        'comment',
        'image',
    ];
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function leavetype()
    {
        return $this->belongsTo(Leavetype::class);
    }
}

