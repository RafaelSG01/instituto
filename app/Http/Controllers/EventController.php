<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\EventRepository;

class EventController extends Controller
{
  
  protected $event;

  public function __construct(EventRepository $event) {
  	$this->event = $event;
  }
	
	public function list()
	{
		$events = $this->event->all();

		return view('event.list', compact('events'));
	}

	public function create()
	{
		return view('event.create');
	}

	public function edit($slug)
	{
		$event = $this->event->findBySlug($slug);

		return view('event.edit', compact('event'));
	}

	public function store(Request $request)
	{
		$event = $this->event->create($request->toArray());

		return redirect()->route('event.manager', $event->slug);
	}

	// REFATORAR
	public function update(Request $request)
	{
		$event = $this->event->findBySlug($request->slug);

		$slug_request = str_slug($request->title, '-');

		$slug = $event->slug == $slug_request ? $event->slug : $slug_request;

		$request['slug'] = $slug;

		$event->update($request->toArray());

		return redirect()->route('event.list');
	}

	public function manager($slug)
	{
		$event = $this->event->findBySlug($slug);

		return view('event.manager', compact('event'));
	}

	public function destroy($id)
  {
    $this->event->destroy($id);

    return redirect()->back();
  }

  public function status($id)
  {
  	$this->event->toggleStatus($id);

  	return redirect()->back();
  }

}
