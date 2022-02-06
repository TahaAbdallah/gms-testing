<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'category_name',
        'category_description',
        'img1',
        'img2',
        'img3',
        'img4',
    ];

    public function service()
    {
        return $this->belongsTo('App\Models\Service', 'service_id');
    }
}
