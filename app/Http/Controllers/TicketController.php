<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Ticket;
use Auth;
use Validator;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Fetch open Createts
        $openTickets = Ticket::all();
        return view('ticket.index', compact('openTickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticket.customer-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'subject' => 'required|max:255',
            'body'   => 'required',
            'file' => 'max:2048',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

        $ticketCode = time().rand(10,100);

        DB::beginTransaction();
        
        try {
            
            if($request->hasFile('file')) {
              
               $file = $request->file('file');
               $name = $ticketCode.$file->getClientOriginalExtension();
               $file->move(public_path().'/attachments', $name);
            } 

            $id = DB::table('tickets')->insertGetId(
                [
                    'code' => $ticketCode,
                    'subject' => $request->subject,
                    'body' => $request->body,
                    //'category_id'   => $request->category,
                    'status' => 'OPEN',
                    'initiator'   => Auth::user()->email,
                    'priority' => 'Normal',
                    'source' => 'Customer Portal',
                    'created_at' => date('Y-m-d h:i:s'),
                    'updated_at' => date('Y-m-d h:i:s'),
                    'createdbyuser_id' => Auth::user()->id,
                    'updatedbyuser_id' => Auth::user()->id,
                ]
            );

            DB::commit();
            return redirect()->back()->with('message', "Ticket: $ticketCode has been created!");
   
        } catch (\Exception $e) {
          DB::rollback();
          return response()->json(['error'=>array('Could not add client')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Show ticket details
        $ticket = Ticket::where(['id' => $id])->first();
        return view('ticket.show', compact('ticket'));
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
        //
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
    }


    /**
      *Return custoner's ticcket creation form
    */

    public function customerview(){
      return view('ticket.customer');
    }
}
