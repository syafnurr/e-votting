<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $fillable = [
        'users_id', 'title', 'tgl_pemilihan', 'jam_dimulai', 'jam_selesai', 'tgl_pengumuman', 'jam_pengumuman'
    ];

    protected $primaryKey = 'id';
}
