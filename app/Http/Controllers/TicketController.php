<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('ticket.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $ticket= new Ticket();
        $ticket->name = $data['name'];
        $ticket->user_id =Auth::user()->id;
        $ticket->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $ticket->created_at =Carbon::now('Asia/Ho_Chi_Minh');
        $ticket->save();
        return $this->show(Auth::user()->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $ticket = Ticket::where('user_id', $id)->orderBy('updated_at','desc')->get();

        return view('ticket.ticket',compact('ticket','id'));
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
        $ticket = Ticket::find($id);
        return view('ticket.form',compact('ticket'));
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
        //
        $data = $request->all();

        $ticket  = Ticket::find($id);
        $ticket->name =$data['name'];
        $ticket->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $ticket->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Ticket::find($id)->delete();
        return redirect()->back();
    }
}
