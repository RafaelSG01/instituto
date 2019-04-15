<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PublicationRequest;

use App\Repositories\PublicationRepository;
use App\Repositories\EventRepository;

class PublicationController extends Controller
{
  	
  	protected $publication, $event;

    public function __construct(PublicationRepository $publication, EventRepository $event)
    {
        $this->publication = $publication;
        $this->event = $event;
    }

    public function create($slug)
    {
        $event = $this->event->findBySlug($slug);
        
        return view('event.publication.create', compact('event'));
    }

    public function store(PublicationRequest $request)
    {

        $file = uploadIEGM($request->document, 'publications');

        $data = $request->toArray();
        $data['document'] = $file;
        
        $publication = $this->publication->create($data);

        return redirect()->route('event.manager', $publication->event->slug);
    }

    public function edit($id)
    {
        $publication = $this->publication->find($id);

        return view('event.publication.edit', compact('publication'));
    }

    public function update(Request $request)
    {
        $data = $request->toArray();
        $publication = $this->publication->find($data['publication_id']);

        if (is_null($request->document)) {

            $publication->update(['title' => $data['title']]);

            return redirect()->route('event.manager', $publication->event->slug);
        }

        $file = uploadIEGM($request->document, 'publications');
        $data['document'] = $file;

        $publication->update($data);
        return redirect()->route('event.manager', $publication->event->slug);
    }

    public function destroy($id)
    {
        $this->publication->destroy($id);

        return redirect()->back();
    }
}
