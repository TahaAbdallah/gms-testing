<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check_out extends Model
{
    use HasFactory;

    protected $table = "check_out";

    protected $fillable = [
        'employer_id',
        'reason',
    ];

    public function employee()
    {
        return $this->belongsTo('App\Models\Employee', 'employer_id', 'id');
    }
}
