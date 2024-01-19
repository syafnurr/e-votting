<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersVotting extends Model
{
    use HasFactory;

    protected $table = 'usersVotting';
    protected $fillable = [
        'name',
        'notelpon',
        'token',
        'progress',
    ];

    protected $primaryKey = 'id';
}
