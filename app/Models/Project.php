<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'service_id',
        'project_name',
        'project_description',
        'img',
    ];

    public function service()
    {
        return $this->belongsTo('App\Models\Service', 'service_id');
    }

    public function client()
    {
        return $this->belongsTo('App\Models\Client', 'client_id');
    }
}
