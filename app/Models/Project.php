<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'event_id',
        'task_id',
        'event_date',
        'venue',
        'galleries',
        'shoulder',
        'upper_bust',
        'bust',
        'rib',
        'hip1',
        'hip2',
        'figure1',
        'figure2',
        'chest_front',
        'chest_back',
        'shoulder_to_back',
        'bust_point',
        'arms',
        'circulation_of_shoulder',
        'length_of_sleeves',
        'length_of_skirt',
        'armpit_to_floor',
        'length_of_pants',
        'crotch',
        'leg',
        'knee',
        'wrist',
        'neck',
        'head',
    ];

    protected $casts = [
        'galleries' => 'array',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }


    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }


    public function task()
    {
        return $this->belongsTo(Task::class);
    }


    public function event()
    {
        return $this->belongsTo(Event::class);
    }


}
