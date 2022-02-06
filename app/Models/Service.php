<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name',
        'description',
    ];

    public function category()
    {
        return $this->hasMany('App\Models\Category', 'service_id');
    }

    public function project()
    {
        return $this->hasMany('App\Models\Project');
    }
}
