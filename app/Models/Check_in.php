<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check_in extends Model
{
    use HasFactory;

    protected $table = "check_in";

    protected $fillable = [
        'employer_id',
        'emp_img',
        'reason',
    ];

    public function employee()
    {
        return $this->belongsTo('App\Models\Employee', 'employer_id', 'id');
    }
}
