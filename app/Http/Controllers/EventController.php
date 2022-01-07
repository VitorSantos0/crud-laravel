<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Models\ModelEvent;
use App\Http\Requests\EventRequest;

class EventController extends Controller
{       
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = ModelEvent::paginate(5);
        return view('index', compact('event'));               
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        $cad = ModelEvent::create([
            'title'=> $request->title,
            'local'=> $request->local,
            'value'=> $request->value,
            'info'=> $request->info,
            'id_user'=> $request->id_user
        ]);

        if($cad):
            return redirect('events');
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = ModelEvent::find($id);
        return view('show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = ModelEvent::find($id);
        $users = User::all();
        return view('create', compact('event', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, $id)
    {
        $edit = ModelEvent::where(['id'=>$id])->update([
            'title'=> $request->title,
            'local'=> $request->local,
            'value'=> $request->value,
            'info'=> $request->info,
            'id_user'=> $request->id_user
        ]);

        if($edit):
            return redirect('events');
        endif;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = ModelEvent::destroy($id);
        return($del) ? "sim" : "não";        
    }
}
