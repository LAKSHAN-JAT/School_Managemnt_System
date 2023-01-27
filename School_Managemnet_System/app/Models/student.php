<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'studentinfo';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address',  'gender', 'nic', 'mobile', 'photo'];
}
