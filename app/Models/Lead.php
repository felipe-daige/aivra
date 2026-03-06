<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'name',
        'email',
        'whatsapp',
        'company',
        'cnpj',
        'role',
        'decision_power',
        'segment',
        'employees',
        'revenue',
        'bottlenecks',
        'process_status',
        'tech_vision',
        'past_attempts',
        'current_tools',
        'main_problem',
        'impact',
        'timing',
        'budget',
        'other_decision_makers',
        'expectation',
    ];
}
