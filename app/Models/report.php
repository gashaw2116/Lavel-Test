<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    use HasFactory;
    protected $table= 'reports';
    protected $primarykey='id';
    protected $fillable=
    [
        'name'
    ];

    public function reports(){
        return $this->belongsToMany(employess::class);
    }
}
