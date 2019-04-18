<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticketlead extends Model
{

	public function Ticket() {
    	return $this->belongsTo('App\Ticket', 'ticket_id');
    }

    public function Createdby() {
    	return $this->belongsTo('App\User', 'createdbyuser_id');
    }

    public function Updatedby() {
    	return $this->belongsTo('App\User', 'updatedbyuser_id');
    }

}
