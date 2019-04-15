<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
  
	protected $fillable = [
		'event_id',
		'title',
		'document'
	];

	public function event()
	{
		return $this->belongsTo(Event::class);
	}
	
}
