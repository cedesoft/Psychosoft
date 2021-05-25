<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use Illuminate\Support\Facades\DB;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agenda.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataEvent = request()->except(['_token', '_method']);
        DB::table('eventos')->insert([
            'id' => $dataEvent['id'],
            'title' => $dataEvent['titulo'],
            'descripcion' => $dataEvent['descripcion'],
            'color' => $dataEvent['color'],
            'textColor' => $dataEvent['textColor'],
            'start' => $dataEvent['inicio'],
            'end' => $dataEvent['fin'],
            'eventIdGoogle' => $dataEvent['idEventGoogle']
        ]);
        print_r($dataEvent);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //TODO: cambiar consulta para que solo el primer usuario pueda
        $data['eventos'] = Evento::all();
        return response()->json($data['eventos']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataEvent = request()->except(['_token', '_method']);
        $resposeE = DB::table('eventos')
            ->where('id', $dataEvent['id'])
            ->update([
                'title' => $dataEvent['titulo'],
                'descripcion' => $dataEvent['descripcion'],
                'color' => $dataEvent['color'],
                'textColor' => $dataEvent['textColor'],
                'start' => $dataEvent['inicio'],
                'end' => $dataEvent['fin']
            ]);

        return response()->json($resposeE);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventos = Evento::findOrFail($id);
        Evento::destroy($id);
        return response()->json($id);
    }
}
