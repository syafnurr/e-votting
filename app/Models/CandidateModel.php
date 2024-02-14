<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateModel extends Model
{
    use HasFactory;

    protected $table = 'candidate';
    protected $fillable = [
        'event_id', 'name', 'department', 'image'
    ];

    public function event()
    {
        return $this->belongsTo(EventModel::class, 'event_id');
    }

    protected $primaryKey = 'id';
}
