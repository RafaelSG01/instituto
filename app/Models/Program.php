<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{

	protected $fillable = [
		'event_id',
    'title',
    'speaker',
    'about',
    'date',
    'hour'
	];
  
	public function event()
	{
		return $this->belongsTo(Event::class);
	}

}
