<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class JobApplication extends Model
{
    protected $fillable = [
        'user_id',
        'company_name',
        'job_title',
        'location',
        'salary',
        'applied_date',
        'status',
        'notes',
        'photo',
        'resume',
    ];

    protected $casts = [
        'applied_date' => 'date',
        'salary' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}