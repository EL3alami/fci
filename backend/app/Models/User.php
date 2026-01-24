<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;
    protected $table = 'Users';
    protected $primaryKey = 'SSN';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'SSN',
        'Full_Name',
        'Email',
        'PasswordHash',
        'Role'
    ];

    public $timestamps = false;
}
