<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'emp_id';
    public $timestamps = false;
    use HasFactory;
}
