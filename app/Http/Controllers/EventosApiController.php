<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ResponseController as ResponseController;
use Illuminate\Http\Request;
use App\Models\Evento;
use Illuminate\Support\Facades\Validator;

class EventosApiController extends ResponseController
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $events = Evento::all();
        return $this->sendResponse($events->toArray(), 'Events retrieved');
    }

    public function show($id): \Illuminate\Http\JsonResponse
    {
        $event = Evento::find($id);
        if (is_null($event)) {
            return $this->sendError('Book not found');
        }
        return $this->sendResponse($event->toArray(), 'Book retrieved');
    }

    public function update(Request $request): \Illuminate\Http\JsonResponse
    {
        $input = $request->all();
        $event = Evento::find($input['id']);

        $validator = Validator::make($input, [
            'title' => 'required',
            'description' => 'required',
            'startDate' => 'required',
            'endDate' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $event->title = $input['title'];
        $event->descripcion = $input['description'];
        $event->start = $input['startDate'];
        $event->end = $input['endDate'];
        $event->save();
        return $this->sendResponse($event->toArray(), 'Event updated');
    }

    public function destroy(Evento $event): \Illuminate\Http\JsonResponse
    {
        $event->delete();
        return $this->sendResponse($event->toArray(), 'Event removed');
    }
}
