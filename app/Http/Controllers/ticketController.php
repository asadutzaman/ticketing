<?php

namespace App\Http\Controllers;


use App\ticket;
use App\query;
use App\uproduct;
use Illuminate\Http\Request;

class ticketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
     public function form()      // route function
    {
        return view('products.form');
    }
    function index()
    {
    }
    public function ticket(){
        //return view('table');
        $tickets = ticket::latest()->paginate(5);
  
        return view('tickets.ticket',compact('tickets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function query(){
        //return view('table');
        $querys = query::latest()->paginate(5);
  
        return view('query.query',compact('querys'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function uproduct(){
        //return view('table');
        $uproducts = uproduct::latest()->paginate(5);
  
        return view('uproduct.product',compact('uproducts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $complain_sub   =   $_POST['complain_sub'];
        $query_sub      =   $_POST['query_sub'];
        $product_sub   =   $_POST['product_sub'];
        //$status         =   1;

        $request->validate([
            'calltype'      =>'',
            'department'    =>'',
            'phone'         =>'',
            'c_name'        =>'',
            'c_email'       =>'',
            'c_address'     =>'',
            'complain_sub'  =>'',
            'complain_details'  =>'',
            'query_sub'     =>'',
            'query_details' =>'',
            'product_name'  =>'',
            'product_sub'   =>'',
            'product_details'   =>'',
            'assign'        =>'',
            'comment'       =>'',
            'status'        =>''
        ]);

        if(!empty($complain_sub)){
            ticket::create($request->all());   
            return redirect()->route('form')
            ->with('success','Ticket created successfully.');
        }
        if(!empty($query_sub)){
            query::create($request->all());
            return redirect()->route('form')
            ->with('success','Query created successfully.');
        }
        if(!empty($product_sub)){
            uproduct::create($request->all());    
            return redirect()->route('form')
            ->with('success','Product issue created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ticket $ticket)
    {
        return view('tickets.show',compact('ticket'));
    }
    public function qshow(query $query)
    {
        return view('query.show',compact('query'));
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
        $assign =   $_POST['assign'];
        $status =   $_POST['status'];
        $request->validate([
            'assign'    => '',
            'status'    =>''
        ]);
        $ticket = ticket::find($id);
        
        if(!empty($assign) && empty($status)){
            $ticket->update(['assign' =>request('assign')]);   
            return redirect()->route('ticket')
            ->with('success','Ticket assign Updated successfully.');
        }
        if(!empty($status) && empty($assign)){
            $ticket->update(['status' =>request('status')]);   
            return redirect()->route('ticket')
            ->with('success','Ticket status Updated successfully.');
        }
        if(!empty($status) && !empty($assign)){
            $ticket->update($request->all());   
            return redirect()->route('ticket')
            ->with('success','Ticket all Updated successfully.');
        }
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
}
