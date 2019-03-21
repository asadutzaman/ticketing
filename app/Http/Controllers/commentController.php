<?php

namespace App\Http\Controllers;


use App\ticket;
use App\query;
use App\uproduct;
use Illuminate\Http\Request;

class commentController extends Controller
{
    public function update(Request $request, $id)
    {
        $comment   =   $_POST['comment'];
        $request->validate([
            'comment'        =>''
        ]);
        $ticket = ticket::find($id);
        if(!empty($comment)){
            $ticket->update($request->all());   
            return redirect()->route('ticket')
            ->with('success','Ticket Comment successfully.');
        }
        
    }
}
