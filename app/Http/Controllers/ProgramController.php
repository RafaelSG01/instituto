<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\ProgramRepository;
use App\Repositories\EventRepository;

class ProgramController extends Controller
{

    protected $program, $event;

    public function __construct(ProgramRepository $program, EventRepository $event)
    {
        $this->program = $program;
        $this->event = $event;
    }

    public function create($slug)
    {
        $event = $this->event->findBySlug($slug);

        return view('event.program.create', compact('event'));
    }

    public function store(Request $request)
    {
        $program = $this->program->create($request->toArray());

        return redirect()->route('event.manager', $program->event->slug);
    }

    public function edit($id)
    {
        $program = $this->program->find($id);

        return view('event.program.edit', compact('program'));
    }

    public function update(Request $request)
    {
        $program = $this->program->find($request->program_id);

        $program->update($request->toArray());

        return redirect()->route('event.manager', $program->event->slug);
    }

    public function destroy($id)
    {
        $this->program->destroy($id);

        return redirect()->back();
    }
}
