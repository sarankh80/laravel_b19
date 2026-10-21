<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Student extends Model
{
    use SoftDeletes,HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'picture',
        'deleted_at'
    ];
}
