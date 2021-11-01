<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title', 'description', 'date', 'status', 'result', 'created_at', 'updated_at'
    ];
}
