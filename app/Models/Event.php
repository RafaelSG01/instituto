<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  
	protected $fillable = [
		'title',
		'slug',
		'description',
		'place',
		'initial_date',
		'end_date',
		'status',
		'slides',
	];

	public function programs()
	{
		return $this->hasMany(Program::class);
	}

	public function publications()
	{
		return $this->hasMany(Publication::class);
	}

}
