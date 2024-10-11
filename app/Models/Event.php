<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Tambahkan field yang boleh di-*mass assign*
    protected $fillable = [
        'title',
        'venue',
        'date',
        'start_time',
        'organizer_id',
        'event_category_id', 
        'description',
        'tags',
    ];
    
    public function organizer()
    {
        return $this->belongsTo(Organizer::class);
    }

    public function eventCategory()
    {
        return $this->belongsTo(EventCategory::class);
    }
}
