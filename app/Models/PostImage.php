<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    use HasFactory;

    protected $table='postImages';
    protected $primarykey='id';
    protected $fillable=
    [
        'name',
        'url'
    ];

}
