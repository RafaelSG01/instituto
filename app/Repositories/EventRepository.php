<?php 

namespace App\Repositories;

use App\Repositories\Support\AbstractRepository;

use App\Models\Event;

class EventRepository extends AbstractRepository
{
	
	protected $modelClassName = Event::class;

	public function create(array $request)
	{
		$request['slug'] = str_slug($request['title'], '-');

		return Event::create($request);
	}

	public function findBySlug($slug)
	{
		return Event::where('slug', $slug)->first();
	}

	public function toggleStatus($id)
	{
		$event = Event::find($id);

		$event->status = $event->status ? false : true;
		
		$event->save();
		
		return $event;
	}
	
}